# Kör hela resten av bygget (S1 → S5) i en Sonnet-session

Du är en Sonnet-session i repot besikt.html (besiktningsmannen.se). Foundation (T0/T1) är mergad.
Kör faserna **i ordning**, var och en med egen branch, egen PR mot `main`, merge när CI är grön:

1. `prompts/sonnet-1-tjanster.md`
2. `prompts/sonnet-2-priser.md`
3. `prompts/sonnet-3-guider.md`
4. `prompts/sonnet-4-sidor.md`
5. `prompts/sonnet-5-link-pass.md`

Innan varje fas: `git checkout main && git pull`, kolla `plan.md` §9 — en fas med loggrad är klar,
hoppa över den (prompten är omstartbar: fortsätt från första ouppfyllda exit-kriteriet).
Använd subagenter (Sonnet, aldrig Fable) för parallell text i S1 och S3. Stanna inte mellan
faserna för att fråga — frågor går till `docs/decisions-needed.md`. När S5 är mergad: skriv en
kort slutrapport (PR-länkar, vad Anton måste göra enligt `docs/DEPLOY.md`) och avsluta.
