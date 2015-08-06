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
	function moxie_wiki_setup() {

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
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						get_template_part( 'page-templates/partials/content', get_post_format() );
					endwhile;
				endif;
			}
		}

		/**
		 * Including Theme Hook Alliance (https://github.com/zamoose/themehookalliance).
		 */
		include 'library/vendors/theme-hook-alliance/tha-theme-hooks.php' ;

		/**
		 * Define a constant to storage the name of the custom post type that
		 * handles the links, can be changed to any value and it will update the
		 * usage everywhere.
		 */
		if( ! defined('LINKS_POST_TYPE') ) {
			define( 'LINKS_POST_TYPE', 'links' );
		}
		if( ! defined('LINKS_TAXONOMY') ) {
			define( 'LINKS_TAXONOMY', 'links-category' );
		}

		include 'post-types/class-link.php';
		include 'taxonomy/class-links-category.php';
		include 'taxonomy/helper.php';

		$links = array(
			'post_type' => new moxie\Link(),
			'taxonomy' => new moxie\Category(),
		);

		// Include link meta boxes
		include 'meta-fields/link-fields.php' ;


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
endif;
add_action( 'after_setup_theme', 'moxie_wiki_setup' );

/**
 * Enqueue scripts and styles.
 */
if ( ! function_exists( 'moxie_wiki_scripts' ) ) :
	function moxie_wiki_scripts() {

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

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'moxie_wiki_scripts' );
endif;

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function moxie_wiki_widgets_init() {
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
					'screen_reader_text' => __( 'Page navigation', 'some-like-it-neat' ),
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
	function moxie_wiki_add_breadcrumbs() {
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
						'category' => array( 'uncategorized' ),
					),
					'post_types' => array(
						'gizmo' => array(
							'last_show'          => false,
							'taxonomy_preferred' => 'category',
						),
						'whatzit' => array(
							'separator' => '&raquo;',
						),
					),
				)
			);
			}
		}
	}
add_action( 'tha_content_top', 'moxie_wiki_add_breadcrumbs' );
endif;

function themeslug_theme_customizer( $wp_customize ) {
	//Add Field for logo
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


	//Add Field for Social Links

	$wp_customize->add_section( 'themeslug_social_section' , array(
		'title'       => __( 'Social Links', 'themeslug' ),
		'priority'    => 30,
		'description' => 'Show or Hide Social Links',
	) );

	//Twitter Link
	$wp_customize->add_setting( 'themeslug_social_twitter' );

	$wp_customize->add_control( 'themeslug_social_twitter', array(
		'section'	=> 'themeslug_social_section',
		'label'		=> 'Twitter',
		'type'		=> 'text',
	) );


	//Facebook Link
	$wp_customize->add_setting( 'themeslug_social_facebook' );

	$wp_customize->add_control( 'themeslug_social_facebook', array(
		'section'	=> 'themeslug_social_section',
		'label'		=> 'Facebook',
		'type'		=> 'text',

	) );
}
add_action( 'customize_register', 'themeslug_theme_customizer' );

/**
 * Determine if the Glue plugin exists or not
 *
 * @return bool
 */
if ( ! function_exists( 'glue_view_exist' ) ) {
	function glue_view_exist(){
		return class_exists('\glue\View');
	}
}

if( ! function_exists( 'get_attached_categories' ) ) {
	function get_attached_categories( $link_id ){
		$terms = get_the_terms($links->the_post->ID, LINKS_TAXONOMY);
		$terms = is_array( $terms ) ? $terms : array();
		$results = array();
		foreach( $terms as $term ){
			$results[] = array(
				'name' => $term->name,
				'id' => $term->id,
				'link' =>  get_term_link( $term ),
			);
		}
		return $results;
	}
}
