<?php
/**
* Template Name: Nissan
*
* Only content about Nissan
*
* @package vmc_gotland
**/

require_once('includes.php');

get_header(); ?>

   <div id="slider-home" class="vmc-slider">

   <?php standardSlider('nissan'); ?>
   </div>

   <div id="primary" class="content-area">
       <main id="main" class="site-main">
           <div class="vmc-standard-post">

               <?php standardPost('nissan'); ?>
           </div><!-- .vmc-standard-post -->
       </main><!-- #main -->
   </div><!-- #primary -->

<?php
get_footer();