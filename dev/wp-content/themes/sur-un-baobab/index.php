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
            <h2 class="latest-articles__title">Mes articles</h2>

            <div class="latest-articles__container">
                  
            <?php
                  $posts = new WP_Query( ['posts_per_page' => 3] );
                  if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
            ?>
                        
                  <article class="article">
                        <h3 class="article__title"><?php the_title();?></h3>
                        <p class="article__date">Publié le <time datetime="<?php the_time('c');?>"><?php the_time('l j F');?></time></p>
                        <p class="article__excerpt"><?php the_custom_excerpt(20);?></p>
                        <a href="<?php the_permalink();?>" class="article__more">Lire la suite</a>
                  </article>

            <?php endwhile; endif; ?>

            </div>
      </section>

<?php

get_footer();