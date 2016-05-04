<?php

/*
 * Define post_types & taxonomies
 */

add_theme_support( 'post-thumbnails' );

register_post_type( 'project', [
            'label' => __('Court-métrages','b'),
            'labels' => [
                        'singular_name' => __('Court-métrage','b'),
                        'add_new' => __('Ajouter un nouveau projet','b')
                  ],
            'description' => __('La liste de tous les projets (court-métrages, ateliers, ...) affichés sur le site.','b'),
            'public' => true,
            'menu_position' => 5,
            'menu_icon' => 'dashicons-editor-video',
            'supports' => ['title','editor','thumbnail'],
            'has_archive' => true
      ] );

register_taxonomy( 'project-type', 'project', [
            'label' => __('Types de projets','b'),
            'labels' => [
                  'singular_name' => __('Type de projet','b')
            ],
            'public' => true,
            'description' => __('Le procédé utilisé pour créer ce projet','b'),
            'hierarchical' => true
      ] );


/*
 * Generates a custom excerpt, used on the homepage
 */

function get_the_custom_excerpt($length = 150)
{
      $excerpt = get_the_content();
      $excerpt = strip_shortcodes( $excerpt );
      $excerpt = strip_tags( $excerpt );
      // Pourrait être amélioré de façon significative.
      // Par exemple :
      // - ne pas couper en plein milieu d'un mot
      // - ajouter un point de suspension quand on a dû couper dans le texte
      // - etc.
      return substr($excerpt, 0, $length);
}

function the_custom_excerpt($length = 150)
{
      echo get_the_custom_excerpt($length);
}

/*
 * Generates a link label containing the post_title (from the loop)
 */

function get_the_link($string, $replace = '%s')
{
      // Mode opératoire :
      // - On remplace la string "%s" (ou celle fournie par $replace) par le titre du post courant dans the_loop, entouré d'un span.
      // - Ne pas oublier d'ajouter une classe sur ce span (dans ce cas, une classe "sro" pour "Screen Readers Only"
      // - Via le CSS, on cible cette classe afin de lui attribuer les styles nécessaires pour la cacher.
      // Le but étant de créer un lien unique, tout en respectant un design demandant une répétition de liens qui, à priori, seraient identiques (par exemple : "Lire la suite", "Voir plus", ...).
      // Cette amélioration va impacter l'accessibilité de votre site, mais donc aussi son référencement.
      return str_replace($replace, '<span class="sro">' . get_the_title() . '</span>', __($string,'b'));
}

function the_link($string, $replace = '%s')
{
      echo get_the_link($string, $replace);
}