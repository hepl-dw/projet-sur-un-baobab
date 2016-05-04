<?php

/*
      Template Name: Single Project
*/

get_header();

?>

      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

            <section class="project">
                  <h2 class="project__title"><?php the_title();?></h2>
                  <p class="project__type"><?php 
                        // la fonction get_the_term_list() renvoie une chaine de caractères formatée (= avec du code HTML).
                        // elle n'est donc généralement pas la meilleure des solutions.
                        echo get_the_term_list( get_the_ID(), 'project-type', __('Type(s) de projet&nbsp;: ','b'), ', ', '.' );
                  ?></p>
                  <div class="project__content">
                        <?php the_content();?>
                  </div>
                  <aside class="project__info">
                        <h3 class="project__subtitle"><?php _e('Fiche du projet','b');?></h3>
                        <figure class="project__fig">
                              <img src="<?php the_post_thumbnail_url('large');?>" alt="<?php echo str_replace('%s', get_the_title(), __('Affiche du court-métrage %s','b'));?>" class="project__thumb">
                        </figure>
                        <dl class="project__details">
                              <dt class="project__label"><?php _e('Pays de réalisation&nbsp;:');?></dt>
                              <dd class="project__value"><?php the_field('country');?></dd>
                              <dt class="project__label"><?php _e('Durée&nbsp;:');?></dt>
                              <dd class="project__value"><?php the_field('time');?></dd>
                        </dl>
                  </aside>
            </section>

      <?php endwhile; endif; ?>

<?php

get_footer();