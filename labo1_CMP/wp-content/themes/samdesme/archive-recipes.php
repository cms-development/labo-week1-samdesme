<?php
/**
* Template Name: Recipes
 */


get_header(); ?>

    <section id="primary" class="content-area col-sm-12 col-md-12 col-lg-8">
        <main id="main" class="site-main" role="main">

            <?php

    $args = array(
        'post_type'=> 'recipes'
      );
      $the_query = new WP_Query( $args );
      if($the_query->have_posts() ) : 

                if (  ! is_front_page() ) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>

                <?php
                endif;

                while ( $the_query->have_posts() ) : $the_query->the_post(); 

                    get_template_part( 'partials/content', get_post_format() );
                ?>
                
                   <?php endwhile;
                   
                   the_posts_navigation();
                   ?>

            <?php else :
                get_template_part( 'partials/content', 'none' );
                ?>

            <?php endif; ?>
                    

             

        </main>
    </section>

<?php
get_footer();