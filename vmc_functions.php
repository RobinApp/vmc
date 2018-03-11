<?php 

$val; // Parameters needed by functions, could be a tag, category etc.
$val2; // If extra parameter is needed.
$standardSlider = 'vmc_gotland_slider'; // CPT Slider
$standardPosts = 'post'; // Standard Posts
$employeePosts = 'vmc_gotland_employee'; // CPT Employee
$policyPosts = 'vmc_gotland_policy'; // CPT Policy
$promotionPosts = 'vmc_gotland_promo'; // CPT Promotion


// To get custom fields.
function customFields($val) {
    if ( get_field($val) ) {
        the_field($val);
    }
}

// ****************************************************************************************************
// ***************************************** Standard Slider ******************************************
// ****************************************************************************************************

// The function must be called for within a container element with the class name "vmc-slider"

function standardSlider($val) {

    global $standardSlider;
    global $promotionPosts;
    
    // Query to only get posts from CPT vmc_gotland_slider with a specific tag
    $query = new WP_Query( array(
        'post_type' => 
            array(
                $standardSlider,
                $promotionPosts,
            ),
        'tax_query' => array(
            'relation' => 'OR',
            array(
                'taxonomy'  => 'vmc_gotland_cat_slider',
                'field'     => 'slug',
                'terms'     =>  $val,
            ),
            array(
                'taxonomy'  => 'vmc_gotland_cat_promo',
                'field'     => 'slug',
                'terms'     =>  $val,
            ),
        ),
        'order'     =>'DESC',
        'posts_per_page' => -1,
    ));

    ?>
    <div class="vmc-slider__container swiper-container">
        <section class="vmc-slider__wrapper swiper-wrapper">
            <?php 

            // For displaying "Slider" posts
            if ( $query->have_posts() ) {

                while ( $query->have_posts() ) {

                    $query->the_post();

                    $thumb_url = get_the_post_thumbnail_url(get_the_id(),'full');
                    $background = "style=\"background-image: url('$thumb_url');\"";

                    ?>
                    <article class="vmc-slider__content swiper-slide">
                        <div class="vmc-slider__img" <?php echo $background; ?>></div>
                        <div class="vmc-slider__txt vmc-slider__txt-<?php customFields('slider_text_position'); ?>">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_excerpt(); ?></p>
                            <?php if( get_field('link_title') ): ?>
                                <div class="vmc-slider__link-container">
                                    <a href="<?php the_permalink() ?>" class="button__standard button__standard--white-border"><?php the_field('link_title'); ?></a>
                                </div>
                            <?php endif; ?>
                            <?php if( get_field('link_title_custom') ): ?>
                                <div class="vmc-slider__link-container">
                                    <a href="<?php the_field('link_custom'); ?>" class="button__standard button__standard--white-border"><?php the_field('link_title_custom'); ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </article><!-- .vmc-slider__content -->
                    <?php         
                }
            }
            ?>
        </section><!-- .vmc-slider__wrapper -->
        <div class="swiper-pagination vmc-slider__pagination"></div>
        <div class="swiper-button-prev vmc-slider__button swiper-button-white"></div>
        <div class="swiper-button-next vmc-slider__button swiper-button-white"></div>
    </div><!-- .vmc-slider__container -->
    <?php 
}

// ****************************************************************************************************
// ****************************************** Standard Posts ******************************************
// ****************************************************************************************************

// The function must be called for within a container element with the class name "vmc-standard-post"

function standardPost($val) {
    
    global $standardPosts;
    
    // Query to only get standard posts with a specific category
    $query = new WP_Query( array( 'post_type' => $standardPosts, 'category_name' => $val, 'posts_per_page' => -1 ) );

    ?>
    <div class="vmc-standard-post__container">
        <section class="vmc-standard-post__wrapper">
        <?php 

        // For displaying posts
        if ( $query->have_posts() ) {

            while ( $query->have_posts() ) {

                $query->the_post();

                $thumb_url = get_the_post_thumbnail_url(get_the_id(),'full');
                $background = "style=\"background-image: url('$thumb_url');\"";

                ?>
                <article class="vmc-standard-post__content">
                    <div class="vmc-standard-post__img" <?php echo $background; ?>></div>
                    <div class="vmc-standard-post__txt">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                </article><!-- .vmc-standard-post__content -->
                <?php         
            }
        }
        ?>
        </section><!-- .vmc-standard-post__wrapper -->
    </div><!-- .vmc-standard-post__container -->
    <?php 
}

// ****************************************************************************************************
// ******************************************* Policy Posts *******************************************
// ****************************************************************************************************

// Used on the info page for cookies, terms, privacy policies and social media.
// The function must be called for within a container element with the class name "vmc-policy-posts"

function policyPosts($val) {
    
    global $policyPosts;
    
        // Query to only get employee posts with a specific category
        $query = new WP_Query( array(
            'tax_query' => array(
                array(
                    'taxonomy'  => 'vmc_gotland_cat_policy',
                    'field'     => 'slug',
                    'terms'     =>  $val,
                ),
            ),
            'post_type' => $policyPosts,
            'order'     =>'DESC',
            'posts_per_page' => -1,
        ));
        ?>
    <div class="vmc-policy-posts__container">
        <section class="vmc-policy-posts__wrapper">
        <?php 

        // For displaying posts
        if ( $query->have_posts() ) {

            while ( $query->have_posts() ) {

                $query->the_post();

                $thumb_url = get_the_post_thumbnail_url(get_the_id(),'full');
                $background = "style=\"background-image: url('$thumb_url');\"";

                ?>
                <article class="vmc-policy-posts__content">
                    <div class="vmc-policy-posts__txt">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                </article><!-- .vmc-policy-posts__content -->
                <?php         
            }
        }
        ?>
        </section><!-- .vmc-policy-posts__wrapper -->
    </div><!-- .vmc-policy-posts__container -->
    <?php 
}

// ****************************************************************************************************
// ****************************************** Employee Posts ******************************************
// ****************************************************************************************************

// The function must be called for within a container element with the class name "vmc-contact"

function employeePosts($val, $val2) {

    global $employeePosts;

    // Query to only get employee posts with a specific category
    $query = new WP_Query( array(
        'tax_query' => array(
            array(
                'taxonomy'  => 'vmc_gotland_cat_employee',
                'field'     => 'slug',
                'terms'     =>  $val,
            ),
        ),
        'post_type' => $employeePosts,
        'order'     =>'DESC',
        'posts_per_page' => -1,
    ));
    ?>
    <div class="vmc-contact__wrapper">
        <section class="vmc-contact__employee-container">
            <h2 class="vmc-contact__employee-headings"> <?php echo($val2); ?> </h2>
            <?php 

            // For displaying "Employee" posts
            if ( $query->have_posts() ) {

                while ( $query->have_posts() ) {

                    $query->the_post();

                    $thumb_url = get_the_post_thumbnail_url(get_the_id(),'full');
                    $background = "style=\"background-image: url('$thumb_url');\"";

                    ?>
                    <article class="vmc-contact__employee-content">
                        <div class="vmc-contact__employee-img" <?php echo $background; ?>></div>
                        <div class="vmc-contact__employee-txt">
                            <h3><?php the_title(); ?></h3>
                            <p> <?php customFields('job_title'); ?> </p>
                            <p> <?php customFields('phone_number'); ?> </p>
                            <p> <?php customFields('email'); ?> </p>
                        </div>
                    </article><!-- .vmc-slider__content -->
                    <?php         
                }
            }
            ?>
        </section><!-- .vmc-employee__container -->
    </div><!-- .vmc-employee__wrapper -->
    <?php 
}

// ****************************************************************************************************
// ****************************************** Contact Banner ******************************************
// ****************************************************************************************************

// The function must be called for within a container element with the class name "vmc-contact-banner"

function contactBanner($val) {
    
    global $standardSlider;
    
    // Query to only get posts from CPT vmc_gotland_slider with a specific category
    $query = new WP_Query( array(
        'tax_query' => array(
            array(
                'taxonomy'  => 'vmc_gotland_cat_slider',
                'field'     => 'slug',
                'terms'     =>  $val,
            ),
        ),
        'post_type' => $standardSlider,
        'order'     =>'DESC',
        'posts_per_page' => -1,
    ));

    ?>
    <div class="vmc-contact-banner__container">
        <section class="vmc-contact-banner__wrapper">
            <?php 

            // For displaying "Slider" posts
            if ( $query->have_posts() ) {

                while ( $query->have_posts() ) {

                    $query->the_post();

                    $thumb_url = get_the_post_thumbnail_url(get_the_id(),'full');
                    $background = "style=\"background-image: url('$thumb_url');\"";

                    ?>
                    <article class="vmc-contact-banner__content">
                        <div class="vmc-contact-banner__img" <?php echo $background; ?>></div>
                    </article><!-- .vmc-contact-banner__content -->
                    <?php         
                }
            }
            ?>
        </section><!-- .vmc-contact-banner__wrapper -->
    </div><!-- .vmc-contact-banner__container -->
    <?php 
}

// ****************************************************************************************************
// ***************************************** Poromtion Posts ******************************************
// ****************************************************************************************************

// The function must be called for within a container element with the class name "vmc-promotion-posts"

function promotionPosts($val) {
    
    global $promotionPosts;
    
        // Query to only get promotion posts with a specific category
        $query = new WP_Query( array(
            'tax_query' => array(
                array(
                    'taxonomy'  => 'vmc_gotland_cat_promo',
                    'field'     => 'slug',
                    'terms'     =>  $val,
                ),
            ),
            'post_type' => $promotionPosts,
            'order'     =>'DESC',
            'posts_per_page' => -1,
        ));
        ?>
    <div class="vmc-promotion-posts__container">
        <section class="vmc-promotion-posts__wrapper">
        <?php 

        // For displaying posts
        if ( $query->have_posts() ) {

            while ( $query->have_posts() ) {

                $query->the_post();

                $thumb_url = get_the_post_thumbnail_url(get_the_id(),'full');
                $background = "style=\"background-image: url('$thumb_url');\"";

                ?>
                <article class="vmc-promotion-posts__content">
                    <div class="vmc-promotion-posts__img" <?php echo $background; ?>></div>
                    <div class="vmc-promotion-posts__txt">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink() ?>" class="button__standard button__standard--black-border" title="Länk till <?php the_title_attribute(); ?>"><?php customFields('link_title_promotion'); ?></a>
                        <p class="promotion-validity"><?php customFields('promotion_start_end'); ?></p>
                    </div>
                </article><!-- .vmc-promotion-posts__content -->
                <?php         
            }
        }
        ?>
        </section><!-- .vmc-promotion-posts__wrapper -->
    </div><!-- .vmc-promotion-posts__container -->
    <?php 
}

// ****************************************************************************************************
// **************************************** Tacdis Ecom Page ******************************************
// ****************************************************************************************************

function tacdisEcomPage() {
    if(have_posts()) :
        while(have_posts()) : the_post();

            $thumb_url = get_the_post_thumbnail_url(get_the_id(),'full');
            $background = "style=\"background-image: url('$thumb_url');\""; 
            ?>
            <div class="vmc-service-banner__container">
                <section class="vmc-service-banner__wrapper">
                    <article class="vmc-service-banner__content">
                        <div class="vmc-service-banner__img" <?php echo $background; ?> >
                            <div class="service-page-wrapper tacdis-ecom-wrapper">
                                <div class="tacdis-ecom-booking-container">
                                    <?php  the_content(); ?>
                                </div><!-- .tacdis-ecom-booking-container -->
                            </div><!-- .service-page-wrapper -->  
                        </div><!-- .vmc-service-banner__img -->                       
                    </article><!-- .vmc-service-banner__content -->
                </section><!-- .vmc-service-banner__wrapper -->
            </div><!-- .vmc-service-banner__container -->
            <?php 

        endwhile; //resetting the page loop
    endif;
    wp_reset_query(); //resetting the page query

}

// ****************************************************************************************************
// ****************************************** Service Page ********************************************
// ****************************************************************************************************

function servicePage() {
    if(have_posts()) :
        while(have_posts()) : the_post();

            $thumb_url = get_the_post_thumbnail_url(get_the_id(),'full');
            $background = "style=\"background-image: url('$thumb_url');\""; 
            ?>
            <div class="vmc-service-banner__container">
                <section class="vmc-service-banner__wrapper">
                    <article class="vmc-service-banner__content">
                        <div class="vmc-service-banner__img" <?php echo $background; ?> >
                            <div class="service-page-wrapper">
                                <section></section>
                                <?php  dynamic_sidebar('sidebar-12'); ?> <!-- Service Text Widget --> 
                                <?php  dynamic_sidebar('sidebar-11'); ?> <!-- Service Menu Widget --> 
                            </div><!-- .service-page-wrapper -->
                        </div><!-- .vmc-service-banner__img -->                    
                    </article><!-- .vmc-service-banner__content -->
                </section><!-- .vmc-service-banner__wrapper -->
            </div><!-- .vmc-service-banner__container -->
            <?php 

        endwhile; //resetting the page loop
    endif;
    wp_reset_query(); //resetting the page query

}