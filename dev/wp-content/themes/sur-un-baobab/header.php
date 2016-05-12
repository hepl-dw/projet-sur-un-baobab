<!DOCTYPE html>
<html lang="fr">
<head>
      <?php
      //    TODO : 
      //    - Utiliser les titres dynamiques générés par WordPress 
      //    - Ajouter des meta-tags supplémentaires & gérer leur contenu dynamiquement 
      //    - Ajouter les links vers les versions traduites de cette page (pour le référencement, par exemple : <link rel="alternate" href="/en/" hreflang="en" />)
      ?>
      <meta charset="UTF-8">
      <title><?php _e('Mon super site','b');?></title>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style.css';?>">
</head>
<body <?php body_class();?>>

      <header class="mon-header">
            <!-- NOTE : Ici, le h1 de la page n'est franchement pas idéal. Il devrait contenir une indication claire sur le contenu présenté sur la page. -->
            <h1><?php bloginfo('name');?></h1>

            <nav class="ma-nav">
                  <h2 class="sro"><?php _e('Navigation principale','b');?></h2>

            <?php foreach (b_get_menu_items('main-nav') as $navItem): ?>
                  <a href="<?php echo $navItem->url;?>" class="ma-nav__link ma-nav__link--<?php echo $navItem->icon;?>"><?php echo $navItem->label;?></a>
            <?php endforeach; ?>

            </nav>

            <nav class="languages">
                  <h2 class="sro"><?php _e('Choisissez votre langue','b');?></h2>

            <?php foreach(b_get_languages() as $langItem):?>
                  <a href="<?php echo $langItem->url;?>" hreflang="<?php echo $langItem->code;?>" class="languages__item languages__item--<?php echo $langItem->code;?>">
                        <?php // NOTE : Ici, pour changer un peu, on ne va pas afficher la langue en entier, juste son abbréviation ?>
                        <abbr lang="<?php echo $langItem->code;?>" title="<?php echo $langItem->label;?>"><?php echo $langItem->code;?></abbr>
                  </a>
            <?php endforeach;?>

            </nav>

      </header>

      <main class="ma-page">