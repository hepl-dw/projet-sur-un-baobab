<?php

get_header();

?>
      
      <section class="archive">
            <h2 class="archive__title"><?php _e('Tous les articles','b');?></h2>
            <div class="archive__container">

            <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                  
                  <article class="item">
                        <h3 class="item__title"><?php the_title();?></h3>
                        <div class="item__excerpt">
                              <?php the_custom_excerpt();?>
                        </div>
                        <a href="<?php the_permalink();?>" class="item__link">
                              <?php the_link('Voir l\'article %s'); ?>
                        </a>
                  </article>

            <?php endwhile; endif; ?>
            
            </div>
      </section>

<?php

get_footer();