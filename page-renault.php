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
            <div class="vmc-brand-banner">
                <?php brandPageMenu('renault', 'sidebar-21', 'sidebar-17'); ?>
            </div><!-- .vmc-brand-banner -->
       </main><!-- #main -->
   </div><!-- #primary -->

<?php
get_footer();