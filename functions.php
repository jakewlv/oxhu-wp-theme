<?php
/**
 * oxhu functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package oxhu
 */

if ( ! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function oxhu_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on oxhu, use a find and replace
        * to change 'oxhu' to the name of your theme in all the template files.
        */
    load_theme_textdomain('oxhu', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');


    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
        'main-menu' => esc_html__('Main Menu', 'oxhu'),
         'member-menu' => esc_html__('Member Menu', 'oxhu'),
    ));

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('oxhu_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    )));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));
}

add_action('after_setup_theme', 'oxhu_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function oxhu_content_width()
{
    $GLOBALS['content_width'] = apply_filters('oxhu_content_width', 640);
}

add_action('after_setup_theme', 'oxhu_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function oxhu_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'oxhu'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'oxhu'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}

add_action('widgets_init', 'oxhu_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function oxhu_scripts()

{
	wp_enqueue_script('oxhu-js', get_template_directory_uri() . '/build/js/app.js', array(),
		_S_VERSION, true);
    wp_enqueue_style('oxhu-style', get_template_directory_uri() . '/build/css/app.css', array(),
        _S_VERSION);
    wp_style_add_data('oxhu-style', 'rtl', 'replace');

    //	wp_enqueue_script( 'oxhu-navigation', get_template_directory_uri() . '/src/js/navigation.js', array(), _S_VERSION, true );

//    wp_enqueue_script('oxhu-splide', get_template_directory_uri() . '/src/js/splide.min.js',
//        array(), _S_VERSION, true);


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'oxhu_scripts', 100);

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
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/woocommerce.php';
}

add_filter('nav_menu_css_class', 'oxhu_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'oxhu_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'oxhu_css_attributes_filter', 100, 1);
function oxhu_css_attributes_filter($var)
{
    return is_array($var) ? array_intersect($var,
        array('main-menu__list-item', 'current-menu-item')) : '';
}


/**
 * Add class to menu link.
 *
 * @param $atts
 * @param $item
 * @param $args
 *
 * @return mixed
 */
function add_menu_link_class($atts, $item, $args)
{
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }

    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

/**
 * Add class to menu list item.
 *
 * @param $classes
 * @param $item
 * @param $args
 *
 * @return mixed
 */
function add_menu_list_item_class($classes, $item, $args)
{
    if (property_exists($args, 'list_item_class')) {
        $classes[] = $args->list_item_class;
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

/**
 * Clean up WordPress Header.
 *
 * @return string
 */
function oxhu_remove_version()
{
    return '';
}

add_filter('the_generator', 'oxhu_remove_version');

remove_action('wp_head',
    'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'wp_generator'); // remove WordPress version

remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); // remove shortlink

remove_action('wp_head', 'print_emoji_detection_script', 7);  // remove emojis
remove_action('wp_print_styles', 'print_emoji_styles');   // remove emojis

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head'); // remove the / and previous post links

remove_action('wp_head', 'feed_links', 2); // remove rss feed links
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links

remove_action('wp_head', 'rest_output_link_wp_head', 10); // remove the REST API link
remove_action('wp_head', 'wp_oembed_add_discovery_links'); // remove oEmbed discovery links
remove_action('template_redirect', 'rest_output_link_header', 11,
    0); // remove the REST API link from HTTP Headers

remove_action('wp_head',
    'wp_oembed_add_host_js'); // remove oEmbed-specific javascript from front-end / back-end

remove_action('rest_api_init', 'wp_oembed_register_route'); // remove the oEmbed REST API route
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10); // don't filter oEmbed results

function oxhu_cleanup_query_string($src)
{
    $parts = explode('?', $src);

    return $parts[0];
}

add_filter('script_loader_src', 'oxhu_cleanup_query_string', 15, 1);
add_filter('style_loader_src', 'oxhu_cleanup_query_string', 15, 1);


function oxhu_header_id_filter()
{
    if (is_front_page()) {
        return 'header--front';
    } else {
        return '';
    }
}

add_filter('input_class', 'oxhu_header_id_filter');


function oxhu_page_padding($classes)
{
    if ( ! is_front_page()) {
        $classes[] = 'pad-top';
    }

    return $classes;
}

add_filter('body_class', 'oxhu_page_padding');


///**
// * Disable standard editor and Gutenberg for the homepage
// * keeping the status (enabled/disabled) for others who uses the same filter (i.e. ACF)
// */
//add_filter( 'use_block_editor_for_post', 'oxhu_hide_editor', 10, 2 );
//function oxhu_hide_editor( $use_block_editor, $post_type ) {
//	if ( (int) get_option( 'page_on_front' ) == get_the_ID() ) { // on frontpage
//		remove_post_type_support( 'page', 'editor' ); // disable standard editor
//
//		return false; // and disable gutenberg
//	}
//
//	return $use_block_editor; // keep gutenberg status for other pages/posts
//}

add_filter('use_block_editor_for_post_type', 'oxhu_disable_block_editor');
function oxhu_disable_block_editor($use_block_editor) {
	return false;
}

//function oxhu_make_responsive_image_sizes($sizes, $size) {
//
//	$width = $size[0];
//
//	if ( $width > 600 ) {
//		return '(min-width: 768px) 322px, (min-width: 576px) 255px, calc( (100vw - 30px) / 2)';
//	} else {
//		return $sizes;
//	}
//
//}
//
//add_filter('wp_calculate_image_sizes', 'oxhu_make_responsive_image_sizes', 10 , 2);