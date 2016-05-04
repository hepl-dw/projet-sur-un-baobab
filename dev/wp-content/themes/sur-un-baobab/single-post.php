<?php

/*
      Template Name: Single Article
*/

get_header();

?>

      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

            <section class="article">
                  <h2 class="article__title"><?php the_title();?></h2>
                  <div class="article__content">
                        <?php the_content();?>
                  </div>
            </section>

      <?php endwhile; endif; ?>

<?php

get_footer();