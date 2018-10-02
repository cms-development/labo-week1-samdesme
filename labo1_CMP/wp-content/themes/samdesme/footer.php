<?php
/**
 * Created by PhpStorm.
 * User: samdesmedt
 * Date: 02/10/2018
 * Time: 17:00
 */
?>

			</div>
		</div>
	</div>
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="site-info">
                 <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>

            </div>
		</div>
	</footer>

</div>

<?php wp_footer(); ?>
</body>
</html>