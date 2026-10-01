/**
 * Interaktionstest för priskalkylatorn på /priser/kalkylator/: inga konsolfel,
 * ett intervall visas (aldrig ett exakt pris), tillval ändrar resultatet och
 * "Använd resultatet" fyller offertformuläret.
 *
 *   cd tests && npm ci
 *   php -S 127.0.0.1:8080 ../router.php   # från repots rot
 *   node priskalkylator.mjs --base http://127.0.0.1:8080
 */
import { chromium } from "playwright";

const args = process.argv.slice(2);
const i = args.indexOf("--base");
const base = i === -1 ? "http://127.0.0.1:8080" : args[i + 1];

const errors = [];
const assert = (cond, msg) => {
  if (!cond) {
    errors.push(msg);
  }
};

const browser = await chromium.launch(process.env.CHROMIUM_PATH ? { executablePath: process.env.CHROMIUM_PATH } : {});
const page = await browser.newPage();
page.on("console", (m) => m.type() === "error" && errors.push("console: " + m.text()));
page.on("pageerror", (e) => errors.push("pageerror: " + e.message));

await page.goto(base + "/priser/kalkylator/");
const root = page.locator('[data-tool="priskalkylator"]');
const value = root.locator("[data-result-value]");

assert(await root.locator("[data-result]").isHidden(), "resultatet ska vara dolt före beräkning");

// Överlåtelsebesiktning, upp till 100 m²: intervall från grundpriset
await root.locator('select[name="service"]').selectOption("overlatelsebesiktning");
await root.locator('select[name="size"]').selectOption("0");
await root.locator('[data-calc-form] button[type="submit"]').click();
const first = (await value.textContent()).trim();
assert(/\d[\d ]* kr – \d[\d ]* kr/.test(first), "intervall förväntades, fick: " + first);

// Tillval höjer intervallet
await root.locator('select[name="moisture"]').selectOption("1");
const second = (await value.textContent()).trim();
assert(second !== first, "tillval ska ändra resultatet");

// Över 300 m² = enligt offert
await root.locator('select[name="size"]').selectOption({ label: "Över 300 m²" });
assert((await value.textContent()).includes("Enligt offert"), "över 300 m² ska ge 'Enligt offert'");
await root.locator('select[name="size"]').selectOption("0");

// Tjänst utan boyta döljer boytefältet
await root.locator('select[name="service"]').selectOption("badrumsbesiktning");
assert(await root.locator("[data-size-field]").isHidden(), "boyta ska döljas för badrumsbesiktning");

// Använd resultatet i offertförfrågan
await root.locator("[data-use-result]").click();
const toolResult = await page.locator('input[name="tool_result"]').inputValue();
const message = await page.locator('textarea[name="message"]').inputValue();
assert(toolResult.includes("Badrumsbesiktning"), "tool_result ska innehålla tjänsten: " + toolResult);
assert(message.includes("priskalkylatorn"), "meddelandet ska fyllas i");
assert(await page.locator('input[name="need"][value="badrum"]').isChecked(), "ärendeknappen 'badrum' ska vara vald");

// Utan JS-fel på prissidan
await page.goto(base + "/priser/");
assert((await page.locator("table.compare-table tbody tr").count()) === 8, "prislistan ska ha 8 rader");

await browser.close();

if (errors.length > 0) {
  console.error("FAIL\n" + errors.map((e) => "  " + e).join("\n"));
  process.exit(1);
}
console.log("ok  priskalkylatorn");
