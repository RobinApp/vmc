<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vmc_gotland
 */

require_once('includes.php');

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="vmc-standard-post">

				<?php
					while ( have_posts() ) : the_post();

						$thumb_url = get_the_post_thumbnail_url(get_the_id(),'full');
						$background = "style=\"background-image: url('$thumb_url');\"";

				?>
					<article class="vmc-standard-post__content">
						<div class="vmc-standard-post__img" <?php echo $background; ?>></div>
						<div class="vmc-standard-post__txt">
							<h2><?php the_title(); ?></h2>
							<p><?php the_content(); ?></p>
						</div>
					</article> 
				<?php
					endwhile; // End of the loop.
				?>
			</div><!-- .vmc-standard-post -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
