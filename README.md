## Fetching only api|app from remote to deploy

```
git clone --filter=blob:none --no-checkout https://github.com/sntlln93/padel-tournaments.git
git sparse-checkout init --cone
```

Then run one of the following
```
git sparse-checkout set api/
git sparse-checkout set app/
```
