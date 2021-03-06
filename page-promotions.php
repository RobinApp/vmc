<?php
/**
* Template Name: Promotions
*
* The promotions page for VMC Gotland
*
* @package vmc_gotland
**/

require_once('includes.php');

get_header(); ?>

   <div id="primary" class="content-area">
       <main id="main" class="site-main">
            <div class="vmc-promotion-banner">
                <?php promotionPage(); ?>
            </div><!-- .vmc-promotion-banner -->
            <div class="vmc-promotion-posts">
                <?//php promotionPosts('promotion'); ?>
            </div><!-- .vmc-promotion-posts -->
       </main><!-- #main -->
   </div><!-- #primary -->

<?php
get_footer();