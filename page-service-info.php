<?php
/**
* Template Name: Verkstadstjänster
*
* Workshop Info Page
*
* @package vmc_gotland
**/

require_once('includes.php');

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php standardPost('service'); ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();