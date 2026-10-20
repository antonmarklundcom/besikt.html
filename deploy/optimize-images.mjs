#!/usr/bin/env node
/**
 * Converts the raw PNGs in deploy/imagery-src/ into the AVIF/WebP files the
 * site actually ships.
 *
 * Manual pre-step: generated images usually have to be downloaded by hand (an
 * agent sandbox can generate them but often cannot fetch the result URLs), so
 * save them into deploy/imagery-src/ under the filenames MANIFEST expects. Keep
 * that list and the site's image slots in step; the raw PNGs are git-ignored.
 *
 *     cd deploy && npm i sharp && node optimize-images.mjs
 *
 * Idempotent: re-running only touches files whose source changed.
 */
import { createRequire } from "node:module";
const require = createRequire(import.meta.url);
const sharp = require(process.env.SHARP_MODULE || "sharp");
import { existsSync } from "node:fs";
import { mkdir } from "node:fs/promises";
import { dirname, resolve } from "node:path";
import { fileURLToPath } from "node:url";

const here = dirname(fileURLToPath(import.meta.url));
const root = resolve(here, "..");
const srcDir = resolve(process.argv[2] || resolve(root, "deploy/imagery-src"));

// slot, source filename, destination (relative to assets/img/), pixel widths.
// One entry per image slot the site has. Example shape — replace with this
// site's own slots (a service icon per service, the two homepage figures):
const MANIFEST = [
  ...["villa", "attic", "bathroom", "moisture", "final", "construction", "brf", "maintenance", "apartment", "roof", "project", "control", "measurement", "home"]
    .map(slot => ({ slot, src: `${slot}.png`, out: `services/${slot}`, widths: [480, 960] })),
  // The homepage hero (design "Vit", 2026-10-20) is shown half-width on desktop,
  // so it gets a larger variant for high-density screens.
  { slot: "inspector", src: "inspector.png", out: "services/inspector", widths: [480, 960, 1440], position: "top" },
];

// The OG image stays a plain flattened PNG at a fixed size (Open Graph
// consumers don't reliably support AVIF/WebP), so it is handled separately.
const OG = { src: "og-default.png", out: "og-default.png", width: 1200, height: 630 };

async function convertOne({ slot, src, out, widths, position = "centre" }) {
  const srcPath = resolve(srcDir, src);
  if (!existsSync(srcPath)) {
    console.warn(`skip ${slot}: ${src} not found in deploy/imagery-src/`);
    return;
  }
  const destDir = resolve(root, "assets/img", dirname(out));
  await mkdir(destDir, { recursive: true });
  const base = resolve(root, "assets/img", out);

  const image = sharp(srcPath);
  for (const width of widths) {
    await image.clone().resize({ width, height: width * 9 / 16, fit: "cover", position }).avif({ quality: 50 }).toFile(`${base}-${width}.avif`);
    await image.clone().resize({ width, height: width * 9 / 16, fit: "cover", position }).webp({ quality: 76 }).toFile(`${base}-${width}.webp`);
  }
  console.log(`wrote ${out} AVIF/WebP (${widths.join(" / ")}px)`);
}

async function convertOg() {
  const srcPath = resolve(srcDir, OG.src);
  if (!existsSync(srcPath)) {
    console.warn(`skip og-default: ${OG.src} not found in deploy/imagery-src/`);
    return;
  }
  const destPath = resolve(root, "assets/img", OG.out);
  await sharp(srcPath)
    .resize({ width: OG.width, height: OG.height, fit: "cover" })
    .flatten({ background: "#0F2233" })
    .png({ compressionLevel: 9 })
    .toFile(destPath);
  console.log(`wrote ${OG.out} (${OG.width}x${OG.height})`);
}

for (const entry of MANIFEST) {
  await convertOne(entry);
}
await convertOg();
