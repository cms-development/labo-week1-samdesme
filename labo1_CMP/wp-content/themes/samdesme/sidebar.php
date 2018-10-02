<?php
/**
 * Created by PhpStorm.
 * User: samdesmedt
 * Date: 02/10/2018
 * Time: 17:00
 */
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-sm-12 col-lg-4" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
