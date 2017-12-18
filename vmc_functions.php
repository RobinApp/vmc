<?php 

$val; // Parameters needed by functions, could be a tag, category etc (should be a string).
$val2; // If extra parameter is needed (should be a string).
$standardSlider = 'vmc_gotland_slider'; // CPT Slider
$standardPosts = 'post'; // Standard Posts
$employeePosts = 'vmc_gotland_employee'; // CPT Employee

function standardSlider($val) {

    global $standardSlider;
    
    // Query to only get posts from CPT vmc_gotland_slider with a specific tag
    // $query = new WP_Query( array( 'post_type' => $standardSlider, 'slide-tag' => $val ) );
    $query = new WP_Query( array(
        'tax_query' => array(
            array(
                'taxonomy'  => 'vmc_gotland_tag_slider',
                'field'     => 'slug',
                'terms'     =>  $val,
            ),
        ),
        'post_type' => $standardSlider,
        'order'     =>'ASC',
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
                        <div class="vmc-slider__txt">
                            <h1><?php the_title(); ?></h1>
                            <p><?php the_content(); ?></p>
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

function standardPost($val) {

    // The function must be called for within a container element with the class name "vmc-standard-post"
    
    global $standardPosts;
    
    // Query to only get standard posts with a specific tag
    $query = new WP_Query( array( 'post_type' => $standardPosts, 'tag' => $val ) );

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

// To get custom fields in the employeePosts function.
function customFields($val) {
    if ( get_field($val) ) {
        the_field($val);
    }
}

function employeePosts($val, $val2) {

    // The function must be called for within a container element with the class name "vmc-standard-post"

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
        'order'     =>'ASC',
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

function contactBanner($val) {
    
        global $standardSlider;
        
        // Query to only get posts from CPT vmc_gotland_slider with a specific tag
        // $query = new WP_Query( array( 'post_type' => $standardSlider, 'slide-tag' => $val ) );
        $query = new WP_Query( array(
            'tax_query' => array(
                array(
                    'taxonomy'  => 'vmc_gotland_tag_slider',
                    'field'     => 'slug',
                    'terms'     =>  $val,
                ),
            ),
            'post_type' => $standardSlider,
            'order'     =>'ASC',
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
                            <div class="vmc-contact-banner__txt">
                                <h1><?php // the_title(); ?></h1>
                                <p><?php // the_content(); ?></p>
                            </div>
                        </article><!-- .vmc-contact-banner__content -->
                        <?php         
                    }
                }
                ?>
            </section><!-- .vmc-contact-banner__wrapper -->
        </div><!-- .vmc-contact-banner__container -->
        <?php 
    }
