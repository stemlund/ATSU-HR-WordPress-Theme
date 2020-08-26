<?php

/*Require login to view the website*/
function atsu_hr_login_required() {
	/* If users is not logged in and they aren't on the login page (page id of 7) */
	if ( !is_user_logged_in() ) {
		/* Then redirect to the login page but set a redirect for after logging in to the URL they landed on*/
		echo '<div style="width: 100vw; height: 100vh; display: flex; justify-content: center; align-items: center;"><a href="http://hr.atsu.edu/?option=saml_user_login&mepr-unauth-page=' . get_the_ID() . '&redirect_to=' . $_SERVER["REQUEST_URI"] . '"><img style="padding: 0 2rem;" src="http://hr.atsu.edu/wp-content/themes/atsu-hr/img/hr-login-button.svg"></a></div>';
		exit;
	}
}
add_action( 'template_redirect', 'atsu_hr_login_required' );

/*Remove admin bar for general ATSU users visiting the website*/

add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}


function wpb_mce_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

/*
* Callback function to filter the MCE settings
*/
 
function my_mce_before_init_insert_formats( $init_array ) {  
 
	// Define the style_formats array
	 
		$style_formats = array(  
	/*
	* Each array child is a format with it's own settings
	* Notice that each array has title, block, classes, and wrapper arguments
	* Title is the label which will be visible in Formats menu
	* Block defines what element to wrap selection in
	* Change 'block' to 'selector' to apply class to existing element you are highlighting (ul, a, etc)
	* Classes allows you to define CSS classes
	* Wrapper whether or not to add a new block-level element around any selected elements
	*/
			array(  
				'title' => 'Grid of Buttons',  
				'selector' => 'ul',  
				'classes' => 'button-grid',
				'wrapper' => false,
				 
			),  
		);  
		// Insert the array, JSON ENCODED, into 'style_formats'
		$init_array['style_formats'] = json_encode( $style_formats );  
		 
		return $init_array;  
	   
	} 
	// Attach callback to 'tiny_mce_before_init' 
	add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 

/**
 * atsu-hr functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package atsu-hr
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.1' );
}
if ( ! function_exists( 'atsu_hr_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function atsu_hr_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on atsu-hr, use a find and replace
		 * to change 'atsu-hr' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'atsu-hr', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'atsu-hr' ),
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
				'atsu_hr_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'atsu_hr_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function atsu_hr_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'atsu_hr_content_width', 640 );
}
add_action( 'after_setup_theme', 'atsu_hr_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
// function atsu_hr_widgets_init() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Sidebar', 'atsu-hr' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => esc_html__( 'Add widgets here.', 'atsu-hr' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
// }
// add_action( 'widgets_init', 'atsu_hr_widgets_init' );


/* Better way to add multiple widgets areas */
function widget_registration($name, $id, $description, $beforeWidget, $afterWidget, $beforeTitle, $afterTitle) {
    register_sidebar( array(
        'name' => $name,
        'id' => $id,
        'description' => $description,
        'before_widget' => $beforeWidget,
        'after_widget' => $afterWidget,
        'before_title' => $beforeTitle,
        'after_title' => $afterTitle,
    ));
}
 
function multiple_widget_init(){
    widget_registration('Sidebar', 'sidebar-1', 'Widgets appearing on all pages go here.', '<section id="%1$s" class="widget %2$s">', '</section>', '<h2 class="widget-title">', '</h2>');
	widget_registration('About HR Sidebar', 'about-hr-sidebar', 'About HR widgets here.', '<section id="%1$s" class="widget %2$s">', '</section>', '<h2 class="widget-title">', '</h2>');
	widget_registration('Policies Sidebar', 'policies-sidebar', 'Policies widgets here.', '<section id="%1$s" class="widget %2$s">', '</section>', '<h2 class="widget-title">', '</h2>');
	widget_registration('Benefits Sidebar', 'benefits-sidebar', 'Benefits widgets here.', '<section id="%1$s" class="widget %2$s">', '</section>', '<h2 class="widget-title">', '</h2>');
	widget_registration('FMLA Sidebar', 'fmla-sidebar', 'FMLA widgets here.', '<section id="%1$s" class="widget %2$s">', '</section>', '<h2 class="widget-title">', '</h2>');
	widget_registration('Forms Sidebar', 'forms-sidebar', 'Forms widgets here.', '<section id="%1$s" class="widget %2$s">', '</section>', '<h2 class="widget-title">', '</h2>');
	widget_registration('Payroll Sidebar', 'payroll-sidebar', 'Payroll widgets here.', '<section id="%1$s" class="widget %2$s">', '</section>', '<h2 class="widget-title">', '</h2>');
	widget_registration('Policies & Handbooks Sidebar', 'policies-handbooks-sidebar', 'Policies & Handbooks widgets here.', '<section id="%1$s" class="widget %2$s">', '</section>', '<h2 class="widget-title">', '</h2>');
	widget_registration('Professional Development Sidebar', 'professional-development-sidebar', 'Professional Development widgets here.', '<section id="%1$s" class="widget %2$s">', '</section>', '<h2 class="widget-title">', '</h2>');
	widget_registration('Supervisors Sidebar', 'supervisors-sidebar', 'Supervisors widgets here.', '<section id="%1$s" class="widget %2$s">', '</section>', '<h2 class="widget-title">', '</h2>');
	widget_registration('UltiPro Sidebar', 'ultipro-sidebar', 'UltiPro widgets here.', '<section id="%1$s" class="widget %2$s">', '</section>', '<h2 class="widget-title">', '</h2>');
}
 
add_action('widgets_init', 'multiple_widget_init');

/**
 * Enqueue scripts and styles.
 */
function atsu_hr_scripts() {
	wp_enqueue_style( 'atsu-hr-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'atsu-hr-style', 'rtl', 'replace' );

	wp_enqueue_style( 'adobe-fonts', '//use.typekit.net/jde4nea.css');
	wp_enqueue_style( 'google-material-icons', '//fonts.googleapis.com/icon?family=Material+Icons');

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, true);

	if ( is_page_template( 'page-home.php' ) ) {
		wp_enqueue_script( 'cycle', get_template_directory_uri() . '/js/cycle/cycle.js', array('jquery'), null, true );
		wp_enqueue_script( 'cycle-swipe', get_template_directory_uri() . '/js/cycle/cycle-mobile-swipe.js', array('jquery'), null, true);
	}

	wp_deregister_script('masonry'); 
	if ( is_page_template( 'page-content-blocks.php' ) ) {
		wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry/masonry.js', array('jquery'), null, true );
		wp_enqueue_script( 'masonry-settings', get_template_directory_uri() . '/js/masonry/masonry-settings.js', array('jquery'), null, true);
	}


	wp_enqueue_script( 'jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', array('jquery'), null, true );

	wp_enqueue_script( 'fit-vids', get_template_directory_uri() . '/js/jquery.fitvids.js', array('jquery'), null, true );

	wp_enqueue_script( 'atsu-hr-script', get_template_directory_uri() . '/js/scripts.js', array(), _S_VERSION, true  );

	wp_enqueue_script( 'atsu-hr-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'atsu-hr-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'atsu_hr_scripts' );

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

