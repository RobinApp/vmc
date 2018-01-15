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

    <div class="vmc-contact-banner">

        <?php contactBanner('contact'); ?>

        <div class="vmc-contact-banner__map-container">

            <div class="vmc-contact-banner__contact-container">
                <div class="vmc-contact-banner__phone">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <?php  dynamic_sidebar('sidebar-1'); ?> <!-- Phone number sidebar -->
                </div>
                <div class="vmc-contact-banner__email">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <?php  dynamic_sidebar('sidebar-2'); ?> <!-- Email address sidebar -->
                </div>
                <div class="vmc-contact-banner__address">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <?php  dynamic_sidebar('sidebar-3'); ?> <!-- Address sidebar -->
                </div>
                <a class="button opening-hour-button">Öppettider</a>
            </div> <!-- .vmc-contact-banner__contact-container -->

            <?php  dynamic_sidebar('sidebar-4'); ?> <!-- Map sidebar -->

        </div> <!-- .vmc-contact-banner__map-container -->

        <?php  dynamic_sidebar('sidebar-5'); ?> <!-- Contact form sidebar -->
        <!-- The vmc-opening-hours id is also used for the JS scroll function, don't change it! -->
        <div id="vmc-opening-hours" class="vmc-contact-banner__opening-hours-container">
            <h2 class="vmc-contact-banner__opening-hours-heading">Öppettider</h2>
            <?php  dynamic_sidebar('sidebar-6'); ?> <!-- Opening hours sidebar -->
        </div>

    </div>

    <div id="primary" class="content-area">
        <main id="main" class="site-main vmc-contact">       

            <?php employeePosts('kundservice', 'Kundservice') ?>

            <?php employeePosts('bil-transportbilsforsaljning', 'Bil- &amp; Transportbilsförsäljning') ?>
            
            <?php employeePosts('verkstad-personlig-servicetekniker', 'Verkstad – Personlig Servicetekniker') ?>
            
            <?php employeePosts('verkstad-interntekniker', 'Verkstad – Interntekniker') ?>
            
            <?php employeePosts('reservdelar', 'Reservdelar') ?>

            <?php employeePosts('rekond', 'Rekond') ?>

            <?php employeePosts('ekonomi-administartion', 'Ekonomi &amp; Administartion') ?>

            <?php employeePosts('verkstadsadministration', 'Verkstadsadministration') ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();