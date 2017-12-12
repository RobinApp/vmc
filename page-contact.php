<?php
/**
* Template Name: Contact
*
* The contact page for VMC Gotland
*
* @package vmc_gotland
**/

require_once('includes.php');

get_header(); ?>

    </div>

    <div id="primary" class="content-area">
        <main id="main" class="site-main vmc-contact">       

            <?php dynamic_sidebar('sidebar-1'); ?>

            <?php employeePosts('kundservice', 'Kundservice') ?>

            <?php employeePosts('bil-transportbilsforsaljning', 'Bil- &amp; Transportbilsförsäljning') ?>

            <?php employeePosts('reservdelar', 'Reservdelar') ?>
            
            <?php employeePosts('verkstad-personlig-servicetekniker', 'Verkstad – Personlig Servicetekniker') ?>
            
            <?php employeePosts('verkstad-interntekniker', 'Verkstad – Interntekniker') ?>

            <?php employeePosts('ekonomi-administartion', 'Ekonomi &amp; Administartion') ?>

            <?php employeePosts('verkstadsadministration', 'Verkstadsadministration') ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();