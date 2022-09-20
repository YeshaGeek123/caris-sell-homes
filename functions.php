<?php
/**
 * caris-sell-homes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package caris-sell-homes
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function caris_sell_homes_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on caris-sell-homes, use a find and replace
		* to change 'caris-sell-homes' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'caris-sell-homes', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'caris-sell-homes' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'caris_sell_homes_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'caris_sell_homes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function caris_sell_homes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'caris_sell_homes_content_width', 640 );
}
add_action( 'after_setup_theme', 'caris_sell_homes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function caris_sell_homes_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'caris-sell-homes' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'caris-sell-homes' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'caris_sell_homes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function caris_sell_homes_scripts() {

	wp_enqueue_style('caris-sell-homes-bootstrap-min', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '20151215');
	wp_enqueue_style('caris-sell-homes-animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '20151215');
	wp_enqueue_style('caris-sell-homes-swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '20151215');
	//wp_enqueue_style('caris-sell-homes-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '20151215');
	//wp_enqueue_style('caris-sell-homes-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', array(), '20151215');
	wp_enqueue_style('caris-sell-homes-fancybox-min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), '20151215');
	wp_enqueue_style('caris-sell-homes-simplebar-css', get_template_directory_uri() . '/assets/css/simplebar.css', array(), '20151215');
	//wp_enqueue_style('caris-sell-homes-sticky', get_template_directory_uri() . '/assets/css/sticky.css', array(), '20151215');

	wp_enqueue_style( 'caris-sell-homes-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_script('jquery');
	wp_style_add_data( 'caris-sell-homes-style', 'rtl', 'replace' );

	wp_enqueue_script('caris-sell-homes-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20151215', true);
	wp_enqueue_script('caris-sell-homes-simplebar-js', get_template_directory_uri() . '/assets/js/simplebar.js', array(), '20151215', true);
	wp_enqueue_script('caris-sell-homes-swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '20151215', true);
	wp_enqueue_script('caris-sell-homes-fancybox-min', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), '20151215', true);
	wp_enqueue_script('caris-sell-homes-wow-min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '20151215', true);
	wp_enqueue_script('caris-sell-homes-font-awesome-min', get_template_directory_uri() . '/assets/js/font-awesome.min.js', array(), '20151215', true);
	wp_enqueue_script('caris-sell-homes-custom', get_template_directory_uri() . '/assets/js/custom.js', array(), rand(1000, 10000), true);
	wp_localize_script('caris-sell-homes-custom', 'custom_call', ['ajaxurl' => admin_url('admin-ajax.php')]);

	wp_enqueue_script( 'caris-sell-homes-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'caris_sell_homes_scripts' );

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


function custom_properties_post() {
	$labels = array(
		'name' => _x( 'Properties', 'post type general name' ),
		'singular_name' => _x( 'Property', 'post type singular name' ),
		'add_new' => _x( 'Add New', 'property' ),
		'add_new_item' => __( 'Add New Properties' ),
		'edit_item' => __( 'Edit Property' ),
		'new_item' => __( 'New Property' ),
		'all_items' => __( 'All Properties' ),
		'view_item' => __( 'View Property' ),
		'search_items' => __( 'Search Properties' ),
		'not_found' => __( 'No property found' ),
		'not_found_in_trash' => __( 'No property found in the Trash' ),
		'parent_item_colon' => '',
		'menu_name' => 'Properties'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Holds properties and property specific data',
		'public' => true,
		'menu_position' => 5,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive' => true,
		'menu_icon' => 'dashicons-editor-quote',
	);
	register_post_type( 'properties', $args );
}
add_action( 'init', 'custom_properties_post' );

function custom_reviews_post() {
	$labels = array(
		'name' => _x( 'Reviews', 'post type general name' ),
		'singular_name' => _x( 'Review', 'post type singular name' ),
		'add_new' => _x( 'Add New', 'review' ),
		'add_new_item' => __( 'Add New Reviews' ),
		'edit_item' => __( 'Edit Review' ),
		'new_item' => __( 'New Review' ),
		'all_items' => __( 'All Reviews' ),
		'view_item' => __( 'View Review' ),
		'search_items' => __( 'Search Reviews' ),
		'not_found' => __( 'No review found' ),
		'not_found_in_trash' => __( 'No property found in the Trash' ),
		'parent_item_colon' => '',
		'menu_name' => 'Reviews'
	);
	$args = array(
		'labels' => $labels,
		'description' => 'Holds reviews and review specific data',
		'public' => true,
		'menu_position' => 5,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive' => true,
		'menu_icon' => 'dashicons-editor-quote',
	);
	register_post_type( 'reviews', $args );
}
add_action( 'init', 'custom_reviews_post' );

// Filter the output of logo to fix Googles Error about itemprop logo
add_filter( 'get_custom_logo', 'change_html_custom_logo' );
function change_html_custom_logo() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
	$site_name = get_bloginfo( 'name' );
    $html = sprintf( '<a href="%1$s" class="custom-logo-link" rel="home" title="'.$site_name.'">%2$s</a>',
            esc_url( home_url( '/' ) ),
            wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                'class'    => 'custom-logo',
            ) )
        );
    return $html;   
}

