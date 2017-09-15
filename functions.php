<?php
/**
 * assignment1 functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package assignment1
 * 
 * Based on "Underscores" http://underscores.me
 */

if ( ! function_exists( 'assignment1_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function assignment1_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on assignment1, use a find and replace
	 * to change 'assignment1' to the name of your theme in all the template files.
	 */

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
		'primary' => esc_html__( 'Primary Menu', 'assignment1' ),
	) );

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
}
endif; // assignment1_setup
add_action( 'after_setup_theme', 'assignment1_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function assignment1_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'assignment1_content_width', 640 );
}
add_action( 'after_setup_theme', 'assignment1_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function assignment1_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'assignment1' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'assignment1_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function assignment1_scripts() {
	wp_enqueue_style( 'assignment1-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'assignment1_scripts' );

/**
* My shortcode 
*/

function most_basic_hello_world($attr, $content) {
    $name = sanitize_text_field($attr['name']);
    $content = sanitize_text_field($content);
//    if(is_user_logged_in()) {
//        $user = get_currentuserinfo();
//        $name = $user->display_name;
//    }
    return "<h1 class='greeting'>Hello $name! $content</h1>";
}

add_shortcode('helloworld', 'most_basic_hello_world');

function my_theme_add_svg($attr, $content) {
    return '
<svg width="247px" height="202px" viewBox="0 0 247 202" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="background: #FFFFFF;">
    <!-- Generator: Sketch 46.2 (44496) - http://www.bohemiancoding.com/sketch -->
    <title>Artboard</title>
    <desc>Created with Sketch.</desc>
    <defs>
        <rect id="path-1" x="168" y="138" width="69" height="54"></rect>
        <rect id="path-2" x="89" y="138" width="69" height="54"></rect>
        <rect id="path-3" x="10" y="138" width="69" height="54"></rect>
        <rect id="path-4" x="168" y="74" width="69" height="54"></rect>
        <rect id="path-5" x="89" y="74" width="69" height="54"></rect>
        <rect id="path-6" x="10" y="74" width="69" height="54"></rect>
        <rect id="path-7" x="168" y="10" width="69" height="54"></rect>
        <rect id="path-8" x="89" y="10" width="69" height="54"></rect>
        <rect id="path-9" x="10" y="10" width="69" height="54"></rect>
    </defs>
    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Artboard">
            <g id="r9">
                <use fill="#D8D8D8" fill-rule="evenodd" xlink:href="#path-1"></use>
                <rect stroke="#979797" stroke-width="1" x="168.5" y="138.5" width="68" height="53"></rect>
            </g>
            <g id="r8">
                <use fill="#D8D8D8" fill-rule="evenodd" xlink:href="#path-2"></use>
                <rect stroke="#979797" stroke-width="1" x="89.5" y="138.5" width="68" height="53"></rect>
            </g>
            <g id="r7">
                <use fill="#D8D8D8" fill-rule="evenodd" xlink:href="#path-3"></use>
                <rect stroke="#979797" stroke-width="1" x="10.5" y="138.5" width="68" height="53"></rect>
            </g>
            <g id="r6">
                <use fill="#D8D8D8" fill-rule="evenodd" xlink:href="#path-4"></use>
                <rect stroke="#979797" stroke-width="1" x="168.5" y="74.5" width="68" height="53"></rect>
            </g>
            <g id="r5">
                <use fill="#D8D8D8" fill-rule="evenodd" xlink:href="#path-5"></use>
                <rect stroke="#979797" stroke-width="1" x="89.5" y="74.5" width="68" height="53"></rect>
            </g>
            <g id="r4">
                <use fill="#D8D8D8" fill-rule="evenodd" xlink:href="#path-6"></use>
                <rect stroke="#979797" stroke-width="1" x="10.5" y="74.5" width="68" height="53"></rect>
            </g>
            <g id="r3">
                <use fill="#D8D8D8" fill-rule="evenodd" xlink:href="#path-7"></use>
                <rect stroke="#979797" stroke-width="1" x="168.5" y="10.5" width="68" height="53"></rect>
            </g>
            <g id="r2">
                <use fill="#D8D8D8" fill-rule="evenodd" xlink:href="#path-8"></use>
                <rect stroke="#979797" stroke-width="1" x="89.5" y="10.5" width="68" height="53"></rect>
            </g>
            <g id="r1">
                <use fill="#D8D8D8" fill-rule="evenodd" xlink:href="#path-9"></use>
                <rect stroke="#979797" stroke-width="1" x="10.5" y="10.5" width="68" height="53"></rect>
            </g>
        </g>
    </g>
</svg>';
}

add_shortcode('add_svg', 'my_theme_add_svg');


function mytheme_load_scripts() {
    $taken = [];
    $key = 'booth';
    global $wp_query, $post;
 
    $loopTaken = new WP_Query( array(
        'posts_per_page'  => -1,
        'post_status'    => 'publish',
        'category_name'  => 'svg'
        )
    );
 
    while( $loopTaken->have_posts() ) {
        $loopTaken->the_post();
        $taken[] = wp_strip_all_tags( get_post_meta( $post->ID, $key, true ) );
    }
 
    wp_enqueue_script('floormap-script', get_stylesheet_directory_uri() . '/js/floormap.js', array('jquery'), "0.59", true);
 
    wp_localize_script('floormap-script', 'floormap_vars', array(
        'takenBooths' => $taken
        )
    );
}
add_action('wp_enqueue_scripts', 'mytheme_load_scripts');
