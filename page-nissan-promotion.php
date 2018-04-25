<?php
/**
* Template Name: Nissan Promotion
*
* Nissan Promotion Page
*
* @package vmc_gotland
**/

require_once('includes.php');

get_header(); ?>

   <div id="primary" class="content-area">
       <main id="main" class="site-main">
           <div class="vmc-promotion-posts">
               <?php promotionPosts('nissan-promotion', 'Nissan'); ?>
           </div><!-- .vmc-promotion-posts -->
       </main><!-- #main -->
   </div><!-- #primary -->

<?php
get_footer();