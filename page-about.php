<?php
/**
* Template Name: About
*
* The about page for VMC Gotland
*
* @package vmc_gotland
**/

require_once('includes.php');

get_header(); ?>

   <div id="primary" class="content-area">
       <main id="main" class="site-main">
           <div class="vmc-standard-post">
               <?php standardPost('about'); ?>
           </div><!-- .vmc-standard-post -->
       </main><!-- #main -->
   </div><!-- #primary -->

<?php
get_footer();