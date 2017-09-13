<?php
/**
 * New Garden functions and definitions
 *
 
 *
 * @package New_Garden
 */

if ( ! function_exists( 'new_garden_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function new_garden_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on New Garden, use a find and replace
		 * to change 'new-garden' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'new-garden', get_template_directory() . '/languages' );

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
			set_post_thumbnail_size(600,200);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			
			'Top-menu' =>  'верхнее меню',
			'aside-top' => 'боковое меню',
      'aside-bottom' => 'боковое меню снизу'

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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'new_garden_custom_background_args', array(
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
add_action( 'after_setup_theme', 'new_garden_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function new_garden_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'new_garden_content_width', 640 );
}
add_action( 'after_setup_theme', 'new_garden_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function new_garden_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar-soc', 'new-garden' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'new-garden' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
register_sidebar( array(
		'name'          => esc_html__( 'card-needles', 'new-garden' ),
		'id'            => 'card-needles-1',
		'description'   => esc_html__( 'Add widgets here.', 'new-garden' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="thumbnail-wrapper">',
		'after_title'   => '</div>',
	) );
register_sidebar( array(
		'name'          => esc_html__( 'card', 'new-garden' ),
		'id'            => 'card-1',
		'description'   => esc_html__( 'Add widgets here.', 'new-garden' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="thumbnail-wrapper">',
		'after_title'   => '</div>',
	) );
register_sidebar( array(
		'name'          => esc_html__( 'Fruit_trees', 'new-garden' ),
		'id'            => 'card-2',
		'description'   => esc_html__( 'Add widgets here.', 'new-garden' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="thumbnail-wrapper">',
		'after_title'   => '</div>',
	) );
register_sidebar( array(
		'name'          => esc_html__( 'form', 'new-garden' ),
		'id'            => 'search',
		'description'   => esc_html__( 'Add widgets here.', 'new-garden' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="d3">',
		'after_title'   => '</div>',
	) );

add_action( 'widgets_init', 'new_garden_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function new_garden_scripts() {

wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/libs/bootstrap/css/bootstrap.css');
wp_enqueue_style( 'animate', get_template_directory_uri() .'/libs/animate/animate.css');
wp_enqueue_style( 'font-awesome', get_template_directory_uri() .'/libs/font-awesome/css/font-awesome.min.css');
wp_enqueue_style( 'Open+Sans', 'https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans|Roboto');

	wp_enqueue_style( 'fonts', get_stylesheet_uri() .'/css/fonts.css');
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'mediacss', get_template_directory_uri() . '/css/media.css', array(), '0.1' );

wp_enqueue_script( 'modernizrjs', get_template_directory_uri() . '/libs/modernizr/modernizr.js', array(), '0.1' );


// <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
// wp_enqueue_script( 'jquery', get_template_directory_uri() . '/libs/jquery/jquery-1.11.2.min.js', array(), '0.1', true );

wp_enqueue_script( 'jquery', array(), '0.1', true);

wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.js', array(), '0.1', true );
wp_enqueue_script( 'animate', get_template_directory_uri() . '/libs/animate/animate-css.js' , array(), '0.1', true );
wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/libs/waypoints/waypoints.min.js' , array(), '0.1', true );
wp_enqueue_script( 'plugins-scroll', get_template_directory_uri() . '/libs/plugins-scroll/plugins-scroll.js' , array(), '0.1', true );
wp_enqueue_script( 'jquery.com', 'https://code.jquery.com/jquery-1.11.2.min.js' );
wp_enqueue_script( 'common', get_template_directory_uri() . '/js/common.js' , array(), '0.1', true );


	wp_enqueue_script( 'new-garden-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'new_garden_scripts' );

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
