<?php
/**
* Template Name: Renault Promotion
*
* Renault Promotion Page
*
* @package vmc_gotland
**/

require_once('includes.php');

get_header(); ?>

   <div id="primary" class="content-area">
       <main id="main" class="site-main">
           <div class="vmc-promotion-posts">
               <?php promotionPosts('renault-promotion', 'Renault'); ?>
           </div><!-- .vmc-promotion-posts -->
       </main><!-- #main -->
   </div><!-- #primary -->

<?php
get_footer();