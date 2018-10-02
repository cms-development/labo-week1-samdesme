<?php
/**

 * Created by PhpStorm.
 * User: samdesmedt
 * Date: 02/10/2018
 * Time: 17:01
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
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
	</section>





<?php
get_sidebar();
get_footer();
