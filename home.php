<?php
/**
 * The home page for our theme
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vmc_gotland
 */

require_once('includes.php');

get_header(); ?>

    <div id="slider-home" class="vmc-slider">

    <?php standardSlider('home-page'); ?>
    </div>

	<div id="primary" class="content-area content-area-home">
		<main id="main" class="site-main site-main-home">
			<div class="vmc-standard-post">

				<?php standardPost('home-page'); ?>
			</div><!-- .vmc-standard-post -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();