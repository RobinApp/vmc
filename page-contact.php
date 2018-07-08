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
                <a class="button__standard button__standard--black-border opening-hour-button">Öppettider</a>
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

            <?php employeePosts('bilforsaljning', 'Bilförsäljning', 'background-sales') ?>
            
            <?php employeePosts('verkstad-personlig-servicetekniker', 'Verkstad – Personlig Servicetekniker', 'background-pst') ?>
            
            <?php employeePosts('verkstad-interntekniker', 'Verkstad – Interntekniker', 'background-service') ?>
            
            <?php employeePosts('reservdelar', 'Reservdelar', 'background-spare-parts') ?>

            <?php employeePosts('rekond', 'Rekond', 'background-car-care') ?>

            <?php employeePosts('ekonomi-administration', 'Ekonomi &amp; Kundsupport', 'background-administration') ?>

            <?php employeePosts('verkstadsadministration', 'Verkstadsadministration', 'background-service-administration') ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();