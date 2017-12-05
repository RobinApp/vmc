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

    <?php sliderHome('volvo-slide-start'); ?>
    </div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="vmc-standard-post">

				<?php standardPost('startsida'); ?>
			</div><!-- .vmc-standard-post -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();