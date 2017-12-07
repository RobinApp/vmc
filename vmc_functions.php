<?php 

$tag; // Tag slug, add the desierd tag where you call on the function
$standardSlider = 'vmc_gotland_slider'; // CPT Slider
$standardPosts = 'post'; // Standard Posts

function standardSlider($tag) {

    global $standardSlider;
    
    // Query to only get posts from CPT vmc_gotland_slider with a spcific tag
    // $query = new WP_Query( array( 'post_type' => $standardSlider, 'slide-tag' => $tag ) );
    $query = new WP_Query( array(
        'tax_query' => array(
            array(
                'taxonomy'  => 'vmc_gotland_tag_slider',
                'field'     => 'slug',
                'terms'     =>  $tag,
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

function standardPost($tag) {

    // The function must be called for within a container element with the class name "vmc-standard-post"
    
    global $standardPosts;
    
    // Query to only get standard posts with a specific tag
    $query = new WP_Query( array( 'post_type' => $standardPosts, 'tag' => $tag ) );

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