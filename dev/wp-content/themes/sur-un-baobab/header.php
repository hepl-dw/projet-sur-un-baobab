<!DOCTYPE html>
<html lang="fr">
<head>
      <?php
      //    TODO : 
      //    - Utiliser les titres dynamiques générés par WordPress 
      //    - Ajouter des meta-tags supplémentaires & gérer leur contenu dynamiquement 
      ?>
      <meta charset="UTF-8">
      <title><?php _e('Mon super site','b');?></title>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/style.css';?>">
</head>
<body <?php body_class();?>>

      <header class="mon-header">
            <?php 
                  // NOTE : Ici, le h1 de la page n'est franchement pas idéal. Il devrait contenir une indication claire sur le contenu présenté sur la page.
            ?>
            <h1><?php bloginfo('name');?></h1>
      </header>

      <main class="ma-page">