<?php
/**
* Template Name: Renault
*
* Only content about Renault
*
* @package vmc_gotland
**/

require_once('includes.php');

get_header(); ?>

   <div id="slider-home" class="vmc-slider">

   <?php standardSlider('renault'); ?>
   </div>

   <div id="primary" class="content-area">
       <main id="main" class="site-main">
           <div class="vmc-standard-post">

               <?php standardPost('renault'); ?>
           </div><!-- .vmc-standard-post -->
       </main><!-- #main -->
   </div><!-- #primary -->

<?php
get_footer();