# Projet - Sur Un Baobab

Le projet consiste à faire évoluer [le site internet](http://www.surunbaobab.com) du collectif *Sur un Baobab* vers une version plus adaptée et répondant davantage aux besoins réels du collectif.

*Sur un Baobab* est un collectif indépendant créé en 2015 qui propose des ateliers itinérants de cinéma d'animation prenant place dans la sensibilisation et le soutien d'une cause. Le collectif est actif à Madagascar où il a déjà dirigé des ateliers pour enfants et adolescents défavorisés sur les thèmes du tourisme responsable et de la grossesse précoce.

L'objectif principal de ses ateliers est d'apporter l'apprentissage d'un nouveau moyen d'expression artistique tout en mettant en avant la culture locale. Pour cela, le collectif amène les participants à réaliser de manière collective un court-métrage d'animation de quelques minutes à partir d'un thème, d'un conte, ou encore d'une histoire choisie ou écrite ensemble. Chacun participe activement aux différentes étapes de conception d'un petite dessin animé telles que la création et l'animation des personnages et des décors, mais aussi l'enregistrement des différents dialogues et bruitages. Par ses projets, le collectif tente donc de défendre des causes qui lui sont chères, comme le développement local, le respect de l'environnement, ou encore le partage libre des connaissances. Ces valeurs sont centrales dans la démarche de *Sur un Baobab*, sa philosophie est à mettre en évidence à travers son site internet. 

## Cahier des charges

### Objectifs

1. **Présenter le collectif et ses projets** : accès rapide et efficace à la présentation du collectif ainsi qu'aux informations concernant les ateliers et courts-métrages associés.
2. **Améliorer l'accessibilité et l'utilisabilité du site** : en plus des directives ergonomiques habituelles, il faut tenir à l'esprit que le public est entre autres composé d'utilisateurs n'ayant aucune ou très peu d'expérience avec l'informatique. Les outils utilisés pour accéder au site peuvent être très médiocres (vieilles machines, navigateurs dépassés, connexions lentes dans des cybercafés, écrans aux réglages déconcertants, etc.) ou justement très perfectionnés (dans le cas de professionnels de l'image). De plus, certains enfants et même adultes ne  maîtrisent pas la lecture (et ne devraient par conséquent pouvoir se baser qu'uniquement sur des éléments graphiques).
3. **Site optimisé pour mobiles** : il va s'en dire que le nouveau site devra être *responsive*. N'oublions pas que les différentes fonctionnalités citées ci-après devront par conséquent aussi être prévues pour une utilisation tactile.
4. **Valoriser les contenus du site** : refléter l'image professionnelle du travail du collectif et mettre en avant les créations des participants aux ateliers. Il doit également permettre la promotion d'évènements et d'actualités (projections, expositions, etc.).
5. **Encourager et motiver le soutien des nouveaux projets** : accès rapide et efficace aux informations pratiques de contact (e-mail, téléphone, *Facebook*, *Whatsapp*). Donner envie de *faire un don financier* pour soutenir le projet ou de commander des tirages de photos (via un partenaire externe).
6. **Encourager et faciliter la diffusion des films lors d'évènements** : accès efficace à un espace où un organisateur peut faire appel au matériel nécessaire à la diffusion des courts-métrages (festivals, projections, évènements, etc.). Attention, ces fichiers ne seraient pas disponibles au téléchargement, il s'agit donc bien d'une prise de contact dont l'unique objectif est d'accéder à ce matériel (films HD, sous-titres, documents et images).
7. **Apporter des informations pédagogiques** : accès à quelques tutoriels (*Comment créer un mini-studio maison "Crée ton mini-studio"* ou encore *La réalisation d'un storyboard "Dessine ton histoire"*).

### Public

Comme tout site internet, il est extrêmement difficile de définir un public cible "type". Chaque individu peut réagir différemment devant une interface web. Le public cité ci-dessous n'est donc qu'une cible théorique des principales personnes susceptibles de s'intéresser au site.

- Les partenaires du collectif (particuliers ou associations)
- Les participants aux ateliers (à partir de 6 ans) et leurs proches
- Les programmeurs de festivals de courts-métrages
- La presse

### Stratégie et Design

Actuellement, le collectif utilise un thème Wordpress fort générique. Il faut donc revoir ce design sur base d'un plan de route stratégique, qui répondra bien entendu aux objectifs cités ci-dessus. Avant de créer un design visuel, il faut donc préparer une arborescence efficace (sitemap) sur base de la [proposition se trouvant dans le repository du projet](sitemap.md), des tunnels de conversion (pour motiver l'utilisateur à *passer à l'action*) et des wireframes pour l'ensemble du site.

Il doit être possible de naviguer dans le site via d'autres moyens que le menu principal. Il vaut donc mieux prévoir des menus contextuels, des *calls to action*, etc.

Au niveau de la conception graphique, les thèmes suivants sont à privilégier :

- l'animation
- l'enfance
- l'atelier créatif (bricolages, peinture, dessin, etc.)
- le voyage
- la simplicité

Pour le dernier point, il s'agit d'ailleurs plus d'un conseil pour rester efficace : *Less is more*.

### Contenu

- Le site doit être consultable en **plusieurs langues** (français, anglais, espagnol).
- Du côté de la présentation des projets (ateliers), l'utilisateur doit pouvoir accéder de façon intuitive aux **dossiers de presse** (PDF à télécharger) en plus des **vidéos** (streaming) et **descriptions du projet**.
- Pour la partie pédagogique, il faut donc prévoir suffisamment d'espace pour le contenu textuel, y compris quelques exemples pour illustrer les explications. Il doit aussi être possible de télécharger, à des endroits précis, les outils nécessaires pour la réalisation d'une étape (par exemple: télécharger un *story-board* vierge).
- Toutes les pages doivent être composées de façon à favoriser un référencement naturel le plus efficace possible. Pour ce faire, un fil d'Arianne, du code/choix sémantiques intelligents sont requis.

Afin de retrouver toutes les informations concernant le contenu à prévoir pour ce projet, consultez [le tableau des pages et contenus](content.md).

### Fonctionnalités

- L'utilisateur doit être capable d'effectuer une recherche à partir de n'importe quelle page
- Pour les pages proposant des galeries photos, l'utilisateur doit pouvoir agrandir les photos sans perdre le fil dans sa navigation sur le site.
- Les vidéos doivent être intégrées dans le site en streaming.
- Les articles et évènements doivent être partageables sur les réseaux sociaux et par mail.
- Il doit être possible d'effectuer un don pour soutenir le collectif sans passer par des services qui sèmeront le doute sur la sécurité ou la sincérité de la plateforme.
- Les administrateurs du site devront être capables de rédiger/modifier les contenus de toutes les pages et de tous les articles via l'interface d'administration.

## Consignes

### Planning

Nous allons aborder toutes les étapes pour réaliser un projet comme celui-ci tout au long des six cours à venir. Étant donné qu'il y a un vrai projet derrière, avec de vrais clients, il serait préférable de réaliser ce projet avec assiduité et de prendre vous-même les initiatives requises pour mener ce projet à un niveau supérieur. J'essayerai de me rendre le plus accessible possible pour vous donner le plus de feedback que possible et ce quand vous le souhaiteriez (en fin de cours, durant une pause, par mail, ...). Cependant, étant donné la quantité de matière à voir durant ces 6 séances, ce n'est pas moi qui viendrai vers vous à tous les coups. Soyez prévoyants et allez de l'avant, n'attendez pas la fin de ces 6 séances pour commencer à vous poser des questions.

Il va de soi qu'il sera difficile de terminer tout le projet avant la fin de ce cours. C'est pourquoi il vous sera demandé de rendre le site terminé pour l'**examen de design web** en fin d'année.

### Plan d'attaque

Le projet va subir plusieurs étapes avant d'atteindre sa forme finale. Lorsque vous allez rendre le projet, il vous sera demandé d'y annexer un dossier reprenant toute votre logique, recherches et plans élaborés tout au long de toutes ces étapes :

1. **Définition** : Pour qui ? Que mettre en avant ? Quel ton ? Comment s'y prendre ? ... En gros: planifier.
2. **Stratégie** : De quelle(s) manière(s) puis-je faire passer le message du client, sa stratégie marketing ou sa manière de communiquer dans une interface web ? Est-ce que tous ses objectifs ont la même importance ? Quelle action veut-on que l'utilisateur entreprenne et comment puis-je augmenter l'efficacité de cette action ? Comment réaliser un design émotionnel pour ce public, cette thématique et le délais donné ?
3. **S'inspirer** : À ce stade, beaucoup d'idées ont déjà traversées votre esprit. Il est temps de trouver des références. Comment s'est démarquée la concurrence, où sont les points faibles sur les sites similaires, liés, partenaires, et surtout sur l'ancien ?
4. **Structurer** : Créer un plan du site, créer des schémas de navigation, définir une logique pour les URIs, hierarchiser le contenu. 
5. **Wireframes** : sur base de toutes les informations récoltées et les structures définies, il faut schématiser le produit final. Il n'est pas question de s'attarder sur des questions de goûts et de couleurs. On crée une maquette en noir et en blanc, sans textes ni images. Vous êtes un(e) architecte du web, il faut prévoir, définir les zones, créer le concept de base du site. Si possible, cette étape comprend aussi une réflexion sur l'adaptation mobile du site (s'il n'était pas déjà prévu à la base, dans une optique *mobile-first*).
6. **Design** : Maintenant qu'on a toute la structure, on peut commencer à la peindre. C'est maintenant que vous allez définir tout le visuel du site. C'est la partie que le client comprend le mieux, qu'il peut juger lui-même. Autant dire que, dans un monde idéal, c'est ici que vous allez jouer toute l'efficacité du développement du site. Une coquille dans le design, et vous risquez d'en baver lors des étapes suivantes, surtout si le client n'a pas donné son feu accord sur l'ensemble du visuel.
7. **Front-end development** : en français, lorsqu'on parle de l'*intégration* d'un site web, on parle aussi de *découpe*. Surtout dans le cas d'un développement front-end en vue d'être utilisé dans un CMS. Lorsqu'on est habitué à cette étape, on la mélange souvent directement avec l'étape suivante pour un gain de temps. Mais cette pratique n'est recommandée qu'uniquement lorsqu'on connaît le CMS ou le framework final en question. Ici, pour une première fois, je vous demanderai (pour votre bien) de commencer par une découpe pure, c'est-à-dire de créer le site web en HTML, CSS, JavaScript et avec la version responsive. Il s'agit donc préparer toute la partie visuelle du site et la rendre utilisable, mais sans se soucier du CMS, des base de données, etc.
8. **Back-end development** : On y est presque. Le site peut désormais être transformé en un thème utilisable par le CMS en question. Dans le cadre de ce projet, et vu qu'on le verra ensemble lors du cours, il vous sera demandé d'utiliser **[WordPress](https://wordpress.org/)**. Une fois cette étape finie, le site devrait être fini: administrable par une interface en ligne, maintenable via une base de données, prêt à être livré au client.
9. **Check-up & conclusions** : Trop souvent oublié, il faut absolument clôturer un projet d'une telle ampleur par un check-up complet. Pour ce faire, n'hésitez pas à faire appel à des testeurs (et de préférence des personnes correspondant aux différents publics ciblés). Notez tout. Chaque détail compte, et jouera en votre faveur (ou non) lorsque le client voudra vous recommander (ou non) auprès de ses éventuelles connaissances. Enfin, n'oubliez pas de rédiger une conclusion sur votre expérience sur ce projet. Êtes-vous arrivé au résultat que vous espériez lors des premières étapes ? Quels points auriez-vous attaqué différemment, maintenant que vous avez un peu plus de recul ? Quels aspects pourraient encore être améliorés ?

### Objectif du projet

Ce projet pourra bien entendu figurer dans votre portfolio, et rien que pour ce point le résultat devra refléter ce dont vous êtes capables et que vous êtes capables de vous dépasser pour progresser.

Plus loin, tous les projets finis seront analysés et jugés par le collectif lui-même. Nous (vos professeurs de web) formerons avec l'équipe de *Sur un Baobab* un petit jury qui devra élire les 3 projets qui remporteront la tête du classement. Le lauréat aura l'honneur d'être publié en ligne comme étant l'unique site officiel du collectif. Et ça, ce n'est pas négligeable pour votre publicité professionnelle personnelle.