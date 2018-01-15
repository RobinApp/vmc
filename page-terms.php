<?php
/**
* Template Name: Terms
*
* Terms Page
*
* @package vmc_gotland
**/

require_once('includes.php');

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="vmc-policy-posts">
            <?php policyPosts('terms'); ?>
        </div><!-- .vmc-policy-posts -->
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();