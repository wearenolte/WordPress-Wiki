<?php
/**
 * moxie_wiki functions and definitions
 *
 * @package moxie_wiki
 */

if ( ! function_exists( 'moxie_wiki_setup' ) ) :
	/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
	function moxie_wiki_setup()
	{

		/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
		if ( ! isset( $content_width ) ) {
			$content_width = 640; /* pixels */
		}

		/*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on moxie_wiki, use a find and replace
        * to change 'some-like-it-neat' to the name of your theme in all the template files
        */
		load_theme_textdomain( 'some-like-it-neat', get_template_directory() . '/library/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
        */
		add_theme_support( 'post-thumbnails' );

		/*
        * Enable title tag support for all posts.
        *
        * @link http://codex.wordpress.org/Title_Tag
        */
		add_theme_support( 'title-tag' );

		/*
        * Add Editor Style for adequate styling in text editor.
        *
        * @link http://codex.wordpress.org/Function_Reference/add_editor_style
        */
		add_editor_style( '/assets/css/editor-style.css' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menu( 'primary-navigation', __( 'Primary Menu', 'some-like-it-neat' ) );

        add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'status', 'gallery', 'chat', 'audio' ) );

		// Enable Support for Jetpack Infinite Scroll
		if ( 'yes' === get_theme_mod( 'some-like-it-neat_infinite_scroll_support' ) ) {
			$scroll_type = get_theme_mod( 'some-like-it-neat_infinite_scroll_type' );
			add_theme_support( 'infinite-scroll', array(
				'type'				=> $scroll_type,
				'footer_widgets'	=> false,
				'container'			=> 'content',
				'wrapper'			=> true,
				'render'			=> false,
				'posts_per_page' 	=> false,
				'render'			=> 'moxie_wiki_infinite_scroll_render',
			) );

			function moxie_wiki_infinite_scroll_render() {
				if ( have_posts() ) : while ( have_posts() ) : the_post();
						get_template_part( 'page-templates/partials/content', get_post_format() );
				endwhile;
				endif;
			}
		}

		// Setup the WordPress core custom background feature.
		add_theme_support(
			'custom-background', apply_filters(
				'moxie_wiki_custom_background_args', array(
				'default-color' => 'ffffff',
				'default-image' => '',
				)
			)
		);

		/**
	 * Including Theme Hook Alliance (https://github.com/zamoose/themehookalliance).
	 */
		include 'library/vendors/theme-hook-alliance/tha-theme-hooks.php' ;

		/**
	 * WP Customizer
	 */
		include get_template_directory() . '/library/vendors/customizer/customizer.php';

		/**
	 * Custom template tags for this theme.
	 */
		include get_template_directory() . '/library/vendors/template-tags.php';

		/**
	 * Custom functions that act independently of the theme templates.
	 */
		include get_template_directory() . '/library/vendors/extras.php';

		/**
	 * Load Jetpack compatibility file.
	 */
		include get_template_directory() . '/library/vendors/jetpack.php';

		/**
	 * Including TGM Plugin Activation
	 */
		include_once get_template_directory() . '/library/vendors/tgm-plugin-activation/class-tgm-plugin-activation.php' ;

	}
endif; // moxie_wiki_setup
add_action( 'after_setup_theme', 'moxie_wiki_setup' );

/**
 * Enqueue scripts and styles.
 */
if ( ! function_exists( 'moxie_wiki_scripts' ) ) :
	function moxie_wiki_scripts()
	{

		if ( SCRIPT_DEBUG || WP_DEBUG ) :
			// Concatonated Scripts
			wp_enqueue_script( 'development-js', get_template_directory_uri() . '/assets/js/production.js', array( 'jquery' ), '1.0.0', false );

			// Main Style
			wp_enqueue_style( 'moxie_wiki-style',  get_template_directory_uri() . '/assets/css/style.css' );
	 else :
			// Concatonated Scripts
			wp_enqueue_script( 'production-js', get_template_directory_uri() . '/assets/js/production-min.js', array( 'jquery' ), '1.0.0', false );

			// Main Style
			wp_enqueue_style( 'moxie_wiki-style',  get_template_directory_uri() . '/assets/css/style-min.css' );

	 endif;

		// Dashicons
		wp_enqueue_style( 'dashicons' );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'moxie_wiki_scripts' );
endif; // Enqueue Scripts and Styles

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function moxie_wiki_widgets_init()
{
	register_sidebar(
		array(
		'name'          => __( 'Sidebar', 'some-like-it-neat' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'moxie_wiki_widgets_init' );

/**
 * Add Singular Post Template Navigation
 */
if ( ! function_exists( 'moxie_wiki_post_navigation' ) ) :
	function moxie_wiki_post_navigation() {
		if ( function_exists( 'get_the_post_navigation' ) && is_singular() ) {
			echo get_the_post_navigation(
				array(
				'prev_text'    => __( '&larr; %title', 'some-like-it-neat' ),
				'next_text'    => __( '%title &rarr;', 'some-like-it-neat' ),
				'screen_reader_text' => __( 'Page navigation', 'some-like-it-neat' )
				)
			);
		} else {
			wp_link_pages(
				array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'some-like-it-neat' ),
				'after'  => '</div>',
				)
			);
		}
	}
endif;
add_action( 'tha_entry_after', 'moxie_wiki_post_navigation' );

/**
 * Custom Hooks and Filters
 */
if ( ! function_exists( 'moxie_wiki_add_breadcrumbs' ) ) :
	function moxie_wiki_add_breadcrumbs()
	{
		if ( ! is_front_page() ) {
			if ( function_exists( 'HAG_Breadcrumbs' ) ) { HAG_Breadcrumbs(
				array(
				'prefix'     => __( 'You are here: ', 'some-like-it-neat' ),
				'last_link'  => true,
				'separator'  => '|',
				'excluded_taxonomies' => array(
				'post_format'
				),
				'taxonomy_excluded_terms' => array(
				'category' => array( 'uncategorized' )
				),
				'post_types' => array(
				'gizmo' => array(
				'last_show'          => false,
				'taxonomy_preferred' => 'category',
				),
				'whatzit' => array(
				'separator' => '&raquo;',
				)
				)
				)
			);
			}
		}
	}
	add_action( 'tha_content_top', 'moxie_wiki_add_breadcrumbs' );
endif;

// include( 'custom-post-types/link.php' );
// $links = new Link();

// include( 'meta-fields/link-fields.php' );

function custom_post_link(){
	if ( ! class_exists( 'Super_Custom_Post_Type' ) )
		return;
	$custom_posts = new Super_Custom_Post_Type( 'link' );
	# Test Icon. Should be a square grid.
	$custom_posts->set_icon( 'link' );
	# Taxonomy test, should be like tags
	#$tax_tags = new Super_Custom_Taxonomy( 'tax-tag' );
	# Taxonomy test, should be like categories
	$tax_cats = new Super_Custom_Taxonomy( 'tax-cat', 'category', 'Categories', 'category' );
	# Connect both of the above taxonomies with the post type
	connect_types_and_taxes( $custom_posts, $tax_cats );
	# Add a meta box with every field type
	$custom_posts->add_meta_box( array(
		'id'      => 'details-link',
		'context' => 'normal',
		'fields'  => array(
			'url-link'        => array(),
			'description-link'       => array( 'type' => 'textarea' ),
		)
	) );
}
add_action( 'after_setup_theme', 'custom_post_link' );
#Remove Wysiwyg and Excerpt
add_action('init', 'init_remove_support',100);
function init_remove_support(){
    $post_type = 'link';
    remove_post_type_support( $post_type, 'editor');
    remove_post_type_support( $post_type, 'excerpt');
}



//Add svg support
add_filter('upload_mimes', 'my_upload_mimes');

function my_upload_mimes($mimes = array()) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

function fix_svg() {
   echo '<style type="text/css">
         .attachment-266x266, .thumbnail img {
              width: 100% !important;
              height: auto !important;
         }
         </style>';
}
add_action('admin_head', 'fix_svg');


//Add Field for logo
function themeslug_theme_customizer( $wp_customize ) {
    // Fun code will go here
    $wp_customize->add_section( 'themeslug_logo_section' , array(
        'title'       => __( 'Logo', 'themeslug' ),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );

    $wp_customize->add_setting( 'themeslug_logo' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
        'label'    => __( 'Logo', 'themeslug' ),
        'section'  => 'themeslug_logo_section',
        'settings' => 'themeslug_logo',
    ) ) );
}
add_action( 'customize_register', 'themeslug_theme_customizer' );

