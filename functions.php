<?php
/**
 * Phoenix functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Phoenix
 */

if ( ! function_exists( 'phoenix_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function phoenix_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Phoenix, use a find and replace
		 * to change 'phoenix' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'phoenix', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Main Menu', 'phoenix' ),
			'menu-mobile' => 'Menú móvil',
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
		add_theme_support( 'custom-background', apply_filters( 'phoenix_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		//Theme support for responsive embeds
		add_theme_support( 'responsive-embeds' );

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

		/*Colores personalizados pekesims*/
		add_theme_support( 'editor-color-palette', array(
		    array(
		        'name' => 'Magenta pekesims',
		        'slug' => 'magenta-pekesims',
		        'color' => '#e6007d',
		    ),
		    array(
		        'name' => 'Azul pekesims',
		        'slug' => 'azul-pekesims',
		        'color' => '#00aeef',
		    ),
		    array(
		        'name' => 'Verde pekesims',
		        'slug' => 'verde-pekesims',
		        'color' => '#23d15d',
		    ),
		    array(
		        'name' => 'Magenta oscuro pekesims',
		        'slug' => 'magenta-osc-pekesims',
		        'color' => '#91004f',
		    ),
		    array(
		        'name' => 'Azul oscuro pekesims',
		        'slug' => 'azul-osc-pekesims',
		        'color' => '#0189bc',
		    ),
		    array(
		        'name' => 'Verde oscuro pekesims',
		        'slug' => 'verde-osc-pekesims',
		        'color' => '#15a445',
		    ),
		    array(
		        'name' => 'Rojo',
		        'slug' => 'rojo',
		        'color' => '#df1616',
		    ),
		    array(
		        'name' => 'Negro',
		        'slug' => 'negro',
		        'color' => '#000000',
		    ),
		    array(
		        'name' => 'Blanco',
		        'slug' => 'blanco',
		        'color' => '#ffffff',
		    ),
		) );
	}
endif;
add_action( 'after_setup_theme', 'phoenix_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function phoenix_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'phoenix_content_width', 640 );
}
add_action( 'after_setup_theme', 'phoenix_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function phoenix_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'phoenix' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Añade widgets aquí.', 'phoenix' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'phoenix_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function phoenix_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.css');
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css', '', '2.3.1');
	wp_enqueue_style( 'line-icons', get_template_directory_uri() . '/css/simple-line-icons.css');

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '', '', true);
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', '', '2.3.1', true);



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'phoenix_scripts' );

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

function wpb_add_google_fonts() {
	wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap', array(), null );
}

add_action('wp_enqueue_scripts', 'wpb_add_google_fonts');

add_theme_support( 'custom-logo' );

register_nav_menus( array(  
  'secondary' => __('Footer', 'phoenix') /* La segunda parte te permite establecer un nombre personalizado en el back-end, en lugar de secondary */
) );

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

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

// ACF Display Custom Fields
add_filter('acf/settings/remove_wp_meta_box', '__return_false');

function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Register Sidebars
function custom_sidebars() {

	$args = array(
		'id'            => 'sidebar-footer',
		'name'          => __( 'Widget del pie', 'phoenix' ),
		'description' => 'Zona reservada para mostrar un anuncio de Google AdSense',
		'before_widget' => '',
		'after_widget' => '',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'home-adsense',
		'name'          => __( 'Anuncio homepage', 'phoenix' ),
		'description' => 'Zona reservada para mostrar un anuncio de Google AdSense',
		'before_widget' => '',
		'after_widget' => '',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'custom_sidebars' );

add_image_size('featured-image', 720, 400, true);
