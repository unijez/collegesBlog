<?php
/**
 * collegesBlog functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage collegesBlog
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

if ( ! function_exists( 'collegesBlog_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function collegesBlog_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on collegesBlog, use a find and replace
		 * to change 'collegesBlog' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'collegesBlog', get_template_directory() . '/languages' );

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

		/* image resizing */
		add_image_size( 'post-intro-image', 450, 300, true );
		add_image_size( 'hero-header', 1915, 630, array( 'left', 'top' )  ); // Hard Crop Mode

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
		add_theme_support( 'custom-background', apply_filters( 'collegesBlog_custom_background_args', array(
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
add_action( 'after_setup_theme', 'collegesBlog_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function collegesBlog_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'collegesBlog_content_width', 640 );
}
add_action( 'after_setup_theme', 'collegesBlog_content_width', 0 );

/*
*
*	FUCNTIONS ADDED BY TOM
*
*/

 /* text excerpt config for length and ending */
 function wpdocs_custom_excerpt_length( $length ) {
     return 30;
 }

 function wpdocs_excerpt_more( $more ) {
    return '...';
}

/* removes 'Category' from archive title */

add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});

/*
*
*	FUCNTIONS ADDED BY TOM / END
*
*/

add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
 add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function collegesBlog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'collegesBlog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'collegesBlog' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'collegesBlog_widgets_init' );
register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'collegesBlog' ),
        'id' => 'footer-1',
        'description' => __( 'The first footer widget area', 'collegesBlog' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
	register_sidebar( array(
	        'name' => __( 'Second Footer Widget Area', 'collegesBlog' ),
	        'id' => 'footer-2',
	        'description' => __( 'The first footer widget area', 'collegesBlog' ),
	        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3 class="widget-title">',
	        'after_title' => '</h3>',
	    ) );
	register_sidebar( array(
	        'name' => __( 'Third Footer Widget Area', 'collegesBlog' ),
	        'id' => 'footer-3',
	        'description' => __( 'The first footer widget area', 'collegesBlog' ),
	        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h3 class="widget-title">',
	        'after_title' => '</h3>',
	    ) );


add_action( 'widgets_init', 'collegesBlog_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function collegesBlog_scripts() {


	wp_enqueue_style( 'collegesBlog-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 'slick.min.js', get_template_directory_uri() . '/js/slick/slick.min.js', null, null,  true );

	wp_enqueue_script( 'readingTime', get_template_directory_uri() . '/js/readingTime.min.js', null, null,  true );

	wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/js/fontawesome-all.min.js', '5.0.1', null,  true );

	wp_enqueue_script( 'site-scripts', get_template_directory_uri() . '/js/site-wide-min.js', array('jquery'), null, true );

}

add_action( 'wp_enqueue_scripts', 'collegesBlog_scripts' );

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
 * Implement ACF.
 */
require get_template_directory() . '/inc/functions-acf.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




	/*
	 * ACF P tag from image stripping
	 */
	 function filter_ptags_on_images($content) {
		 	$content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
			return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
	 }
	 add_filter('acf_the_content', 'filter_ptags_on_images');
	 add_filter('the_content', 'filter_ptags_on_images');