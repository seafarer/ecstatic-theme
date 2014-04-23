<?php
/**
 * bmi functions and definitions
 *
 * @package bmi
 */

if ( ! function_exists( 'bmi_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function bmi_setup() {

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
      'primary' => __( 'Primary Menu', 'bmi' ),
    ) );

    // Enable support for Post Formats.
    add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

    // Setup the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'bmi_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    ) ) );

    // Enable support for HTML5 markup.
    add_theme_support( 'html5', array(
      'comment-list',
      'search-form',
      'comment-form',
      'gallery',
    ) );
  }
endif; // bmi_setup
add_action( 'after_setup_theme', 'bmi_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function bmi_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'bmi' ),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h1 class="widget-title">',
    'after_title'   => '</h1>',
  ) );
}
add_action( 'widgets_init', 'bmi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bmi_scripts() {
  //wp_enqueue_style( 'bmi-style', get_template_directory_uri() . '/css/bmi.css' );

  if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
  function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js", false, null);
    wp_enqueue_script('jquery');
  }

  wp_enqueue_script( 'bmi-modernizr', get_template_directory_uri() . '/js/vendor/modernizr.custom.js', array(),'', false );
  wp_enqueue_script( 'bmi-navigation', get_template_directory_uri() . '/js/inc/navigation.js', array(), '20120206', true );
  wp_enqueue_script( 'bmi-skip-link-focus-fix', get_template_directory_uri() . '/js/inc/skip-link-focus-fix.js', array(), '20130115', true );
  wp_enqueue_script( 'bmi-fastclick', get_template_directory_uri() . '/js/vendor/fastclick.js', array(), '1.0.1', true );
  wp_enqueue_script( 'bmi-app', get_template_directory_uri() . '/js/bmi.js', array(), '1.0', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'bmi_scripts' );

// Remove clutter from head
remove_action( 'wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
