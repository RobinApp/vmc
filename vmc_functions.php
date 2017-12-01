<?php 
$sliderHome = 'vmc_gotland_slider';

function sliderHome() {

    global $sliderHome;
    
    // Query to get only get posts from CPT Om oss
    $query = new WP_Query( array( 'post_type' => $sliderHome ) );

    ?>
    <section class="vmc-slider__wrapper">
    <?php 

    // For displaying "Om oss" posts
    if ( $query->have_posts() ) {

        while ( $query->have_posts() ) {

            $query->the_post();

            $thumb_url = get_the_post_thumbnail_url(get_the_id(),'large');
            $background = "style=\"background-image: url('$thumb_url');\"";

            ?>
            <article class="vmc-slider__content">
                <div class="vmc-slider__img" <?php echo $background; ?>></div>
                <div class="vmc-slider__txt">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </div>
        </article> 
            <?php         
        }
    }
    ?>
    </section><!-- .vmc-slider__wrapper -->
    <?php 
}