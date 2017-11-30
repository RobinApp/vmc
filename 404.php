<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package vmc_gotland
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="error-404__header">
					<h1 class="error-404__title"><?php esc_html_e( 'Kunde tyvärr inte hitta sidan du efterfrågade!', 'vmc_gotland' ); ?></h1>
				</header><!-- .error-404__header -->

				<div class="error-404__content">
					<p><?php esc_html_e( 'Använd menyn för att för att hitta rätt sida eller kontakta vår kundtjänst om du inte hittar det du söker!', 'vmc_gotland' ); ?></p>
					<p><?php esc_html_e( 'Om du klickade på en länk på våran hemsida, vänligen kontakta oss och meddela felet.', 'vmc_gotland' ); ?></p>
					<p><?php esc_html_e( 'Klickade du dig hit från en annan webbplats, vänligen kontakta webbansvarig där.', 'vmc_gotland' ); ?></p>
					<?php
						// get_search_form();
						// the_widget( 'WP_Widget_Recent_Posts' );
					?>
				</div><!-- .error-404__content -->
				<div class="error-404__404">
					<p>404</p>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
