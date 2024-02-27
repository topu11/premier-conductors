<?php
/**
 * premier-contractors functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package premier-contractors
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

 $theme_version = current_time('timestamp');
 define('PREMIER_CONTRACTORS_THEME_DIR', get_template_directory());
 define('PREMIER_CONTRACTORS_THEME_URL', get_template_directory_uri());
 define('PREMIER_CONTRACTORS_THEME_ASSETS_URI', get_template_directory_uri() . '/assets/');
 define('PREMIER_CONTRACTORS_THEME_INC_DIR', get_template_directory() . '/inc/');
 define('PREMIER_CONTRACTORS_THEME_LIB_DIR', get_template_directory() . '/libs/');
 define('PREMIER_CONTRACTORS_THEME_VERSION', $theme_version);
 define('PREMIER_CONTRACTORS_DOLER_SYMBOL', "$");

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function PREMIER_CONTRACTORS_THEME_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on premier-contractors, use a find and replace
		* to change 'premier-contractors' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'premier-contractors', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'premier-contractors' ),
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
			'PREMIER_CONTRACTORS_THEME_custom_background_args',
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
add_action( 'after_setup_theme', 'PREMIER_CONTRACTORS_THEME_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function PREMIER_CONTRACTORS_THEME_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'PREMIER_CONTRACTORS_THEME_content_width', 640 );
}
add_action( 'after_setup_theme', 'PREMIER_CONTRACTORS_THEME_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function PREMIER_CONTRACTORS_THEME_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'premier-contractors' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'premier-contractors' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'PREMIER_CONTRACTORS_THEME_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function premiar_conductors_theme_scripts() {
	wp_register_style('premier_contractor_style', get_stylesheet_uri(), array(), PREMIER_CONTRACTORS_THEME_VERSION);
	
	
	
	wp_register_style('premier_contractor_font_awesome_file','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', PREMIER_CONTRACTORS_THEME_VERSION);
	
	wp_register_style('premier_contractor_bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css', PREMIER_CONTRACTORS_THEME_VERSION);
	
	wp_register_style('premier_contractor_slick','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', PREMIER_CONTRACTORS_THEME_VERSION);
	
	wp_register_style('premier_contractor_slick_v2','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', PREMIER_CONTRACTORS_THEME_VERSION);
    
	wp_register_style('premier_contractor_home_style_css_file',PREMIER_CONTRACTORS_THEME_ASSETS_URI . 'styles/home-style.css', array('premier_contractor_slick'),PREMIER_CONTRACTORS_THEME_VERSION);
    
	wp_register_style('premier_contractor_style_css_file',PREMIER_CONTRACTORS_THEME_ASSETS_URI . 'styles/style.css', array('premier_contractor_slick'),PREMIER_CONTRACTORS_THEME_VERSION);
	
	wp_enqueue_style('premier_contractor_style');
  
	
	wp_enqueue_style('premier_contractor_font_awesome_file');
    wp_enqueue_style('premier_contractor_bootstrap');
    wp_enqueue_style('premier_contractor_slick');
	wp_enqueue_style('premier_contractor_slick_v2');

    wp_enqueue_style('premier_contractor_home_style_css_file');
	wp_enqueue_style('premier_contractor_style_css_file');

	/** JS */
	wp_register_script('premier_contractor_style_counterup_min_js', PREMIER_CONTRACTORS_THEME_ASSETS_URI . 'js/counterup.min.js', array('jquery'), PREMIER_CONTRACTORS_THEME_VERSION, true);

	
	
    
	wp_register_script('premier_contractor_style_counterup_min_js', '', array('jquery'), PREMIER_CONTRACTORS_THEME_VERSION, true);
	
    wp_register_script('premier_contractor_waypoints_js', 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array('jquery'), PREMIER_CONTRACTORS_THEME_VERSION, true);
	
	wp_register_script('premier_contractor_style_slick_min_js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), PREMIER_CONTRACTORS_THEME_VERSION, true);
	
    wp_register_script('premier_contractor_style_bs_bundle_min_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js', array('jquery'), PREMIER_CONTRACTORS_THEME_VERSION, true);
	 wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.js', array('jquery'), _S_VERSION, true);
    wp_register_script('premier_contractor_style_index_js', PREMIER_CONTRACTORS_THEME_ASSETS_URI . 'js/index.js', array('jquery'), PREMIER_CONTRACTORS_THEME_VERSION, true);

    

	wp_enqueue_script('premier_contractor_style_counterup_min_js');
	wp_enqueue_script('premier_contractor_waypoints_js');
    wp_enqueue_script('premier_contractor_style_slick_min_js');
	wp_enqueue_script('premier_contractor_style_bs_bundle_min_js');
	wp_enqueue_script('premier_contractor_style_index_js');

	wp_localize_script('premier_contractor_style_index_js', 'action_url_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('ajax-nonce'),
        'site_url'=>site_url()
    ));
}
add_action( 'wp_enqueue_scripts', 'premiar_conductors_theme_scripts' );


function admin_enqueue_scripts_load()
{


	wp_register_style('bootstrap-admin', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css', array(), PREMIER_CONTRACTORS_THEME_VERSION);


	

	//wp_register_style('conductors-admin', PREMIER_CONTRACTORS_THEME_ASSETS_URI . 'css/conductors-admin.css', array('bootstrap-admin'), PREMIER_CONTRACTORS_THEME_VERSION);



	wp_enqueue_style('bootstrap-admin');

	//wp_enqueue_style('conductors-admin');

	//enqueue js


	$ajax_nonce = wp_create_nonce("energym_ajax_nonce");

	wp_register_script('bootstrap-admin', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js', array(), PREMIER_CONTRACTORS_THEME_VERSION, true);

	wp_register_script('sweet-alert-admin', 'https://cdn.jsdelivr.net/npm/sweetalert2@11', array(), PREMIER_CONTRACTORS_THEME_VERSION, true);

	wp_register_script('conductors-admin', PREMIER_CONTRACTORS_THEME_ASSETS_URI . 'js/conductors-admin.js', array('jquery', 'bootstrap-admin','sweet-alert-admin'), PREMIER_CONTRACTORS_THEME_VERSION, true);

	wp_localize_script('energym-admin', 'action_url_ajax', array(
		'ajax_url' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('ajax-nonce')
	));

	
	wp_enqueue_script('bootstrap-admin');
	wp_enqueue_script('conductors-admin');
	wp_enqueue_script('sweet-alert-admin');

	wp_enqueue_media();

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('admin_enqueue_scripts', 'admin_enqueue_scripts_load');




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


require get_template_directory() . '/inc/custom-post-create.php';
require get_template_directory() . '/inc/custom-gallery-properties-for-sell-cpt.php';
//require get_template_directory() . '/inc/custom-gallery-feature-products-cpt.php';
require get_template_directory() . '/inc/add_loderer.php';
require get_template_directory() . '/inc/settings-api.php';
require get_template_directory() . '/inc/ajax-script.php';
require get_template_directory() . '/inc/nav-menu.php';

require get_template_directory() . '/inc/custom-meta-repeat-properties-for-sell-cpt.php';

function getPostIDbyTermID($term_Id)
{
	global $wpdb;
	
   $termrelationship=$wpdb->prefix.'term_relationships';
   $posttable=$wpdb->prefix.'posts';
	$featured_products_IDs = $wpdb->get_results("SELECT wp_posts.ID from $posttable as wp_posts LEFT JOIN $termrelationship as wp_term_relationships  ON (wp_posts.ID = wp_term_relationships.object_id) WHERE (wp_term_relationships.term_taxonomy_id IN ($term_Id)) AND wp_posts.post_type = 'featured_products' AND wp_posts.post_status = 'publish' GROUP BY wp_posts.ID ORDER BY wp_posts.menu_order, wp_posts.post_date desc;");

	return $featured_products_IDs;
}

// Add gallery slider

//add_action('init', 'gallery_custom_init');

function gallery_custom_init()
{
    



    register_post_type(
        'homepage-gallery',
        array(
            'labels' => array(
                'name' => __('Gallery'),
                'singular_name' => __('Gallery')
            ),
            'public' => true,
            "show_in_nav_menus" => true,
            'has_archive' => false,
            'supports' => array('title', 'excerpt', 'editor', 'thumbnail', 'custom-fields')
        )
    );
     $labels = array(
        'name'              => _x('Gallery', 'taxonomy general name'),
        'singular_name'     => _x('Gallery Category', 'taxonomy singular name'),
        'search_items'      => __('Search Homepage Gallery'),
        'all_items'         => __('All Homepage Gallery'),
        'parent_item'       => __('Parent Homepage Gallery Category'),
        'parent_item_colon' => __('Parent Homepage Gallery Category:'),
        'edit_item'         => __('Edit Homepage Gallery Category'),
        'update_item'       => __('Update Homepage Gallery Category'),
        'add_new_item'      => __('Add New Homepage Gallery Category'),
        'new_item_name'     => __('New Homepage Gallery Category'),
        'menu_name'         => __('Homepage Gallery Category'),
        'rewrite' => array(
            'slug' => 'homepagegallery_category',
            'with_front' => false
        )
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
    );
    register_taxonomy('homepagegallery_category', array('homepage-gallery'), $args);

    // added by ridwan
}
//Code ends here

// Add Gallery


// Add metabox for custom post type


