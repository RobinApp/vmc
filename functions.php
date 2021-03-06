<?php
/**
 * vmc_gotland functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vmc_gotland
 */

if ( ! function_exists( 'vmc_gotland_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */

	function vmc_gotland_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on vmc_gotland, use a find and replace
		 * to change 'vmc_gotland' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'vmc_gotland', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main_navigation' => esc_html__( 'Main-navigation' ),
			'car_manufacturers' => esc_html__( 'Car-manufacturers'),
		) );

		// Custom Post Types
		add_theme_support( 'post-thumbnails', array( 'post', 'vmc_gotland_slider' ) );
		add_theme_support( 'post-thumbnails', array( 'post', 'vmc_gotland_employees' ) );
		add_theme_support( 'post-thumbnails', array( 'post', 'vmc_gotland_policy' ) );
		add_theme_support( 'post-thumbnails', array( 'post', 'vmc_gotland_promo' ) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'vmc_gotland_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		
	}
endif;
add_action( 'after_setup_theme', 'vmc_gotland_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vmc_gotland_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vmc_gotland_content_width', 640 );
}
add_action( 'after_setup_theme', 'vmc_gotland_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vmc_gotland_widgets_init() {
	// Sidebar for phone number
	register_sidebar( array(
		'name'          => esc_html__( 'Phone Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s phone-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title phone-widget__heading">',
		'after_title'   => '</h2>',
	) );
	// Sidebar for email address
	register_sidebar( array(
		'name'          => esc_html__( 'Email Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s email-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title email-widget__heading">',
		'after_title'   => '</h2>',
	) );
	// Sidebar for address
	register_sidebar( array(
		'name'          => esc_html__( 'Address Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s address-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title address-widget__heading">',
		'after_title'   => '</h2>',
	) );
	// Sidebar for map
	register_sidebar( array(
		'name'          => esc_html__( 'Map Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s map-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title map-widget__heading">',
		'after_title'   => '</h2>',
	) );
	// Sidebar for contact form
	register_sidebar( array(
		'name'          => esc_html__( 'Contact Form Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-5',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s vmc-contact-banner__form">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	// Sidebar for opening hours
	register_sidebar( array(
		'name'          => esc_html__( 'Opening Hours Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-6',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s open-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="open-widget__heading">',
		'after_title'   => '</h3>',
	) );
	// Sidebar for info menu in footer, for cookies, terms, privacy policy and social medias.
	register_sidebar( array(
		'name'          => esc_html__( 'Info Menu Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-7',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s site-footer__info-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="info-widget__heading">',
		'after_title'   => '</h3>',
	) );
	// Service Menu Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Service Menu Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-11',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s service-menu-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="service-menu-widget__heading">',
		'after_title'   => '</h3>',
	) );
	// Service Text Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Service Text Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-12',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s service-text-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h1 class="service-text-widget__heading">',
		'after_title'   => '</h1>',
	) );
	// Logo Footer Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Logo Footer Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-13',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<div id="%1$s" class="site-footer__logo">',
		'after_widget'  => '</div>',
	) );
	// Promotions Menu Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Promotions Menu Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-14',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<div id="%1$s" class="promotion-menu">',
		'after_widget'  => '</div>',
	) );
	// Promotions Text Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Promotions Text Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-15',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<div id="%1$s" class="promotion-text">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="promotion-text__heading">',
		'after_title'   => '</h1>',
	) );
	// Volvo Menu Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Volvo Menu Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-16',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<div id="%1$s" class="brand-menu">',
		'after_widget'  => '</div>',
	) );
	// Renault Menu Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Renault Menu Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-17',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<div id="%1$s" class="brand-menu">',
		'after_widget'  => '</div>',
	) );
	// Nissan Menu Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Nissan Menu Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-18',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<div id="%1$s" class="brand-menu">',
		'after_widget'  => '</div>',
	) );
	// Dacia Menu Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Dacia Menu Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-19',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<div id="%1$s" class="brand-menu">',
		'after_widget'  => '</div>',
	) );
	// Volvo Text Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Volvo Text Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-20',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<div id="%1$s" class="brand-text">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="brand-text__heading">',
		'after_title'   => '</h1>',
	) );
	// Renault Text Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Renault Text Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-21',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<div id="%1$s" class="brand-text">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="brand-text__heading">',
		'after_title'   => '</h1>',
	) );
	// Nissan Text Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Nissan Text Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-22',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<div id="%1$s" class="brand-text">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="brand-text__heading">',
		'after_title'   => '</h1>',
	) );
	// Dacia Text Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Dacia Text Sidebar', 'vmc_gotland' ),
		'id'            => 'sidebar-23',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<div id="%1$s" class="brand-text">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="brand-text__heading">',
		'after_title'   => '</h1>',
	) );
	// Happening Now Text 1 Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Happening Now Text Sidebar 1', 'vmc_gotland' ),
		'id'            => 'sidebar-24',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s happening-now-text-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="happening-now-text__heading">',
		'after_title'   => '</h1>',
	) );
	// Happening Now Text 2 Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Happening Now Text Sidebar 2', 'vmc_gotland' ),
		'id'            => 'sidebar-25',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s happening-now-text-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="happening-now-text__heading">',
		'after_title'   => '</h1>',
	) );
	// Happening Now Text 3 Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Happening Now Text Sidebar 3', 'vmc_gotland' ),
		'id'            => 'sidebar-26',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s happening-now-text-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="happening-now-text__heading">',
		'after_title'   => '</h1>',
	) );
	// Happening Now Menu 1 Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Happening Now Menu Sidebar 1', 'vmc_gotland' ),
		'id'            => 'sidebar-27',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s happening-now-menu-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="happening-now-menu__heading">',
		'after_title'   => '</h3>',
	) );
	// Happening Now Menu 2 Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Happening Now Menu Sidebar 2', 'vmc_gotland' ),
		'id'            => 'sidebar-28',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s happening-now-menu-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="happening-now-menu__heading">',
		'after_title'   => '</h3>',
	) );
	// Happening Now Menu 3 Sidebar.
	register_sidebar( array(
		'name'          => esc_html__( 'Happening Now Menu Sidebar 3', 'vmc_gotland' ),
		'id'            => 'sidebar-29',
		'description'   => esc_html__( 'Add widgets here.', 'vmc_gotland' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s happening-now-menu-widget">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="happening-now-menu__heading">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'vmc_gotland_widgets_init' );

// Enable shortcodes in text widgets
add_filter('widget_text','do_shortcode');

/**
 * Enqueue scripts and styles.
 */
function vmc_gotland_scripts() {

	// Styles

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Roboto:400,500,700', false );

	wp_enqueue_style( 'vmc_gotland-style', get_template_directory_uri() . '/dist/css/style.css', null, '1.0', 'all' );

	// Scripts

	wp_enqueue_script( 'vmc_gotland-js', get_template_directory_uri() . '/dist/js/bundle.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vmc_gotland_scripts' );

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Get Media Images

function get_images_from_media_library() {

    $args = array(
        'post_type' => 'attachment',
        'post_mime_type' =>'image',
        'post_status' => 'inherit',
        'posts_per_page' => -1,
        'orderby' => 'rand'
	);
	
    $query_images = new WP_Query( $args );
	$images = array();
	
    foreach ( $query_images->posts as $image) {
        $images[]= $image->guid;
	}
	
	return $images;
	
}

function display_images_from_media_library() {

	$imgs = get_images_from_media_library();
	$html = '<div id="media-gallery">';

	foreach($imgs as $img) {
		$html .= '<img src="' . $img . '" alt="" />';
	}

	$html .= '</div>';

	return $html;
}

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

