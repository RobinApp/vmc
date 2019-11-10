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
            <div class="vmc-brand-banner">
                <?php brandPageMenu('nissan', 'sidebar-22', 'sidebar-18'); ?>
            </div><!-- .vmc-brand-banner -->
       </main><!-- #main -->
   </div><!-- #primary -->

<?php
get_footer();