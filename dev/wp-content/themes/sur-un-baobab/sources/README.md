# Note pour ce dossier `sources`

Ce dossier, impérativement publié sur votre repository, devra contenir tous les fichiers sources qui serviront, une fois compilés via votre workflow Gulp/Grunt, à constituer l'ensemble de vos fichiers d'assets optimisés et prêts à l'emploi.

Idéalement, ce dossier devrait contenir plusieurs sous-dossiers :

- `sass` (ou stylus, ou scss, ou ...)
- js (ou coffee, ...)
- img

Optionnellement, il peut être envisageable d'ajouter un dossier `fonts` contenant vos webfonts. Cependant, il vaut mieux ne pas les modifier via un process Gulp/Grunt (sauf si vous savez exactement ce que vous faites), sous peine d'obtenir des problèmes d'afichage dans certains navigateurs.