<?php
/**
* Template Name: Full Width
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'partials/content', 'page' );

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile;
			?>

		</main>

        <main id="main" class="site-main" role="main">

            <ul>
                <?php

                if ( is_front_page() ) {
                    echo '<h2>Recente posts</h2>';
                    // This is the blog posts index
                    $args = array( 'numberposts' => '2' );
                    $recent_posts = wp_get_recent_posts( $args );
                    foreach( $recent_posts as $recent ){
                        echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                    }
                    wp_reset_query();
                }
                ?>
            </ul>
        </main>
        <main id="main" class="site-main" role="main">
            <ul>
                <?php
                if (is_front_page()) {
                    echo '<h2>Weetjes</h2>';

                    $query_options = array(
                        'category_name' => 'weetjes',
                        'posts_per_page' => 5,
                    );
                    $the_query = new WP_Query($query_options);
                    while ($the_query->have_posts()) : $the_query->the_post();


                        ?>
                        <li><a href="<?php the_permalink(); ?>"
                               title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>

                    <?php
                    endwhile;
                    wp_reset_postdata();
                }
                ?>
            </ul>
        </main>

	</section>

<?php
get_footer();
