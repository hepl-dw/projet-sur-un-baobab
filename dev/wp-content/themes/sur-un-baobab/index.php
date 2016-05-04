<?php

/*
      Template Name: Homepage
*/

get_header();

?>

      <section class="intro">

      <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

            <h2 class="intro__title"><?php the_title();?></h2>
            <p class="intro__slogan"><?php bloginfo('description');?></p>
            <div class="intro__text">
                  <?php the_content();?>
            </div>

            <aside class="about">
                  <h3 class="about__title"><?php the_field('about_title');?></h3>
                  <div class="about__text">
                        <?php the_field('about_content');?>
                  </div>
            </aside>

      <?php endwhile; endif; ?>

      </section>

      <section class="latest-articles">
            <h2 class="latest-articles__title"><?php _e('Mes articles','b');?></h2>

            <div class="latest-articles__container">
                  
            <?php
                  $posts = new WP_Query( ['posts_per_page' => 3] );
                  if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
            ?>
                        
                  <article class="article">
                        <h3 class="article__title"><?php the_title();?></h3>
                        <p class="article__date"><?php 
                              $sTime = '<time datetime="' . get_the_time('c') . '">' . get_the_time('l j F') . '</time>';
                              echo str_replace('%s', $sTime, __('Publié le %s.','b'));
                        ?></p>
                        <p class="article__excerpt"><?php the_custom_excerpt(90);?></p>
                        <a href="<?php the_permalink();?>" class="article__more"><?php the_link('Voir l\'article %s');?></a>
                  </article>

            <?php endwhile; endif; ?>

            </div>
      </section>

      <section class="latest-projects">
            <h2 class="latest-projects__title"><?php _e('Mes dernières réalisations','b');?></h2>
            <div class="latest-projects__container">
            
            <?php
                  $posts = new WP_Query( ['posts_per_page' => 2, 'post_type' => 'project'] );
                  if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
            ?>
                        
                  <article class="project">
                        <h3 class="project__title"><?php the_title();?></h3>
                        <figure class="project__fig">
                              <img src="<?php the_post_thumbnail_url('medium');?>" alt="<?php echo str_replace('%s', get_the_title(), __('Affiche du court-métrage %s','b'));?>" class="project__thumb">
                        </figure>
                        <dl class="project__details">
                              <dt class="project__label"><?php _e('Pays de réalisation&nbsp;:');?></dt>
                              <dd class="project__value"><?php the_field('country');?></dd>
                              <dt class="project__label"><?php _e('Durée&nbsp;:');?></dt>
                              <dd class="project__value"><?php the_field('time');?></dd>
                        </dl>
                        <a href="<?php the_permalink();?>" class="project__link"><?php the_link('Voir le projet %s');?></a>
                  </article>

            <?php endwhile; endif; ?>

            </div>
      </section>

<?php

get_footer();