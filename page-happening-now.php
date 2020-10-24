<?php
/**
* Template Name: Happening Now
*
* Happening Now
*
* @package vmc_gotland
**/

require_once('includes.php');

get_header(); ?>

   <div id="primary" class="content-area">
       <main id="main" class="site-main">
           <div class="happening-now-content-container">
                <p class="happening-now-content-container__text"><?php the_content(); ?></p>
           </div>
            <div class="vmc-happening-now-banner">
                <?php happeningNowPage(); ?>
            </div><!-- .vmc-promotion-banner -->
            <div class="vmc-standard-post">
                <?php promotionPostsNoElse('happening-now'); ?>
            </div><!-- .vmc-standard-post -->
       </main><!-- #main -->
   </div><!-- #primary -->

<?php
get_footer();