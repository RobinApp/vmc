<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vmc_gotland
 */

require_once('includes.php');

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-footer__wrapper">

			<div class="site-footer__navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'main_navigation', 'menu_id' => 'menu-footer' ) ); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'car_manufacturers', 'menu_id' => 'menu-footer-cars' ) ); ?>
			</div>
			
			<div class="site-footer__media">
				<a href="https://www.facebook.com/vmcgotland/" target="_blank" title="Facebook">
					<i class="fa fa-facebook-square" aria-hidden="true"></i>	
				</a>
				<a href="#" target="_blank" title="Instagram">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
				<a href="#" target="_blank" title="Twitter">
					<i class="fa fa-twitter" aria-hidden="true"></i>
				</a>
				<a href="#" target="_blank" title="YouTube">
					<i class="fa fa-youtube" aria-hidden="true"></i>				
				</a>
			</div>
			
			<div class="site-footer__copyright">
				<p>Copyright &copy; <?php echo date('Y'); ?> AB Visby Motorcentral</P>
			</div>

			<div class="site-footer__logo">
				<?php
					if ( $attachments = get_children( array(
						'post_type' => 'attachment',
						'post_mime_type'=>'image',
						'numberposts' => 1,
						'post_status' => null
					)));
					foreach ($attachments as $attachment) {
					?> <img src="<?php echo wp_get_attachment_url( $attachment->ID, '' , true, false, '/vmc-logo-white.svg' ); ?>" alt="VMC Gotland Logo White"> <?php
					}
				?>
			</div>

			<div class="site-footer__scroll" button>
					<a class="scroll-top-btn button" button>Till toppen på sidan</a>
			</div>

		</div><!-- .site-footer__wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
