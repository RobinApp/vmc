<?php
/**
* Template Name: Dacia
*
* Only content about Dacia
*
* @package vmc_gotland
**/

require_once('includes.php');

get_header(); ?>

   <div id="slider-home" class="vmc-slider">

   <?php standardSlider('dacia'); ?>
   </div>

   <div id="primary" class="content-area">
       <main id="main" class="site-main">
            <div class="vmc-brand-banner">
                <?php brandPageMenu('dacia', 'sidebar-23', 'sidebar-19'); ?>
            </div><!-- .vmc-brand-banner -->
       </main><!-- #main -->
   </div><!-- #primary -->

<?php
get_footer();