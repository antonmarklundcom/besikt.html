import { cpSync, existsSync, mkdirSync, readdirSync, readFileSync, writeFileSync } from 'node:fs';
import { resolve, join, dirname } from 'node:path';
import { fileURLToPath } from 'node:url';
import { createHash } from 'node:crypto';
import { execFileSync } from 'node:child_process';

const root=resolve(dirname(fileURLToPath(import.meta.url)),'..');
const out=resolve(process.argv[2] || 'E:/ai work/Artifacts/besikt.html/2026-10-10/releases');
if(!existsSync(dirname(out)))throw Error('Connect E: and create the dated artifact directory before building.');
const stamp=new Date().toISOString().replace(/[:.]/g,'-');
const name='besiktningsmannen-'+stamp;
const stage=join(out,name);const archive=join(out,name+'.zip');
mkdirSync(out,{recursive:true});mkdirSync(stage,{recursive:false});
const shipped=['index.php','404.php','enviar.php','sitemap.php','robots.php','router.php','.htaccess','config.example.php','assets','content','lib','partials','templates'];
for(const f of shipped)cpSync(join(root,f),join(stage,f),{recursive:true,errorOnExist:true,force:false});
const forbidden=['.git','.claude','node_modules','docs','prompts','tests','deploy','logs','dist','content','lib','partials','templates','assets'];
const hasRoute=dir=>readdirSync(dir,{withFileTypes:true}).some(e=>e.isFile()&&e.name==='index.php'||e.isDirectory()&&!forbidden.includes(e.name)&&hasRoute(join(dir,e.name)));
for(const entry of readdirSync(root,{withFileTypes:true}))if(entry.isDirectory()&&!forbidden.includes(entry.name)&&hasRoute(join(root,entry.name)))cpSync(join(root,entry.name),join(stage,entry.name),{recursive:true,errorOnExist:true,force:false});
execFileSync(process.execPath,[join(root,'deploy/minify-css.mjs')],{cwd:root,stdio:'inherit',windowsHide:true});
cpSync(join(root,'assets/css/site.min.css'),join(stage,'assets/css/site.css'));
// The extra readable/minified copy is harmless; source and package remain deterministic.
mkdirSync(join(stage,'logs'));writeFileSync(join(stage,'logs/.htaccess'),'Require all denied\n');
writeFileSync(join(stage,'logs/.gitkeep'),'');
mkdirSync(join(stage,'deploy'));cpSync(join(root,'deploy/lead-delivery.php'),join(stage,'deploy/lead-delivery.php'));
if(readdirSync(join(stage,'deploy')).join(',')!=='lead-delivery.php')throw Error('Unexpected deployed operator tool');
for(const f of ['config.php','docs','tests','.git'])if(existsSync(join(stage,f)))throw Error('Forbidden release file: '+f);
const hash=b=>createHash('sha256').update(b).digest('hex');
const files=[];
function walk(dir,prefix=''){for(const e of readdirSync(dir,{withFileTypes:true})){const f=join(dir,e.name),rel=prefix+e.name;if(e.isDirectory())walk(f,rel+'/');else{const b=readFileSync(f);files.push({path:rel,bytes:b.length,sha256:hash(b)});}}}
walk(stage);files.sort((a,b)=>a.path.localeCompare(b.path));
execFileSync('C:/Windows/System32/tar.exe',['-a','-cf',archive,'-C',stage,'.'],{stdio:'inherit',windowsHide:true});
const revision=execFileSync('git',['rev-parse','HEAD'],{cwd:root,encoding:'utf8',windowsHide:true}).trim();
const manifest={created:new Date().toISOString(),revision,stage,archive,archiveSha256:hash(readFileSync(archive)),files};
writeFileSync(archive+'.manifest.json',JSON.stringify(manifest,null,2));
console.log(JSON.stringify({stage,archive,fileCount:files.length,bytes:readFileSync(archive).length}));
