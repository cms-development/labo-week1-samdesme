<?php
/**
 * Created by PhpStorm.
 * User: samdesmedt
 * Date: 02/10/2018
 * Time: 17:00
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 col-lg-8">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'samdesme' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'samdesme' ); ?></p>

					<?php
						get_search_form();
					?>

				</div>
			</section>

		</main>
	</section>

<?php
get_sidebar();
get_footer();
