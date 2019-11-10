<?php
/**
* Template Name: Volvo
*
* Only content about Volvo
*
* @package vmc_gotland
**/

require_once('includes.php');

get_header(); ?>

   <div id="slider-home" class="vmc-slider">

   <?php standardSlider('volvo'); ?>
   </div>

   <div id="primary" class="content-area">
       <main id="main" class="site-main">
            <div class="vmc-brand-banner">
                <?php brandPageMenu('volvo', 'sidebar-20', 'sidebar-16'); ?>
            </div><!-- .vmc-brand-banner -->
       </main><!-- #main -->
   </div><!-- #primary -->

<?php
get_footer();