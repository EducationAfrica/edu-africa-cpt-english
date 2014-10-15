<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Education Africa - Network Custom Post Types
 * Plugin URI:
 * Description:       Registers the custom post types for this site.
 * Version:           1.0.7
 * Author:            Singlebrook
 * Author URI:        http://singlebrook.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 */

add_action( 'init', 'github_plugin_updater_test_init' );
function github_plugin_updater_test_init() {

  include_once('includes/updater.php');

  define( 'WP_GITHUB_FORCE_UPDATE', true );

  if ( is_admin() ) { // note the use of is_admin() to double check that this is happening in the admin

    $config = array(
      'slug' => plugin_basename( __FILE__ ),
      'proper_folder_name' => 'edu-africa-cpt-english-master',
      'api_url' => 'https://api.github.com/repos/singlebrook/edu-africa-cpt-english',
      'raw_url' => 'https://raw.github.com/singlebrook/edu-africa-cpt-english/master',
      'github_url' => 'https://github.com/singlebrook/edu-africa-cpt-english',
      'zip_url' => 'https://github.com/singlebrook/edu-africa-cpt-english/archive/master.zip',
      'sslverify' => true,
      'requires' => '4.0',
      'tested' => '4.0',
      'readme' => 'README.md',
      'access_token' => '',
    );

    new WP_GitHub_Updater( $config );

  }
}

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-activator.php';

/**
 * The code that runs during plugin deactivation.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name-deactivator.php';

/** This action is documented in includes/class-plugin-name-activator.php */
register_activation_hook( __FILE__, array( 'Plugin_Name_Activator', 'activate' ) );

/** This action is documented in includes/class-plugin-name-deactivator.php */
register_deactivation_hook( __FILE__, array( 'Plugin_Name_Deactivator', 'deactivate' ) );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin-name.php';

/**
 * @since    1.0.0
 */

//////////////////////////////////
// Home Slide
//////////////////////////////////
add_action('init', 'ea_home_slide_init');
function ea_home_slide_init() {
  $singular = "Home Slide";
  $plural = "Home Slide";
  $post_type_name = "home_slide";

  $labels = array(
    'name' => $singular,
    'singular_name' => $singular,
    'menu_name' => $singular,
    'add_new' => 'Add ' . $singular . '',
    'add_new_item' => 'Add New ' . $singular . '',
    'edit' => 'Edit',
    'edit_item' => 'Edit ' . $singular . '',
    'new_item' => 'New ' . $singular . '',
    'view' => 'View ' . $singular . '',
    'view_item' => 'View ' . $singular . '',
    'search_items' => 'Add ' . $plural . '',
    'not_found' => 'No ' . $plural . ' Found',
    'not_found_in_trash' => 'No ' . $plural . ' Found in Trash',
    'parent' => 'Parent ' . $singular . '',
  );

  $args = array( 'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor' )
  );

  register_post_type( $post_type_name , $args );
  flush_rewrite_rules();
}

//////////////////////////////////
// Event
//////////////////////////////////
add_action('init', 'ea_events_init');
function ea_events_init() {
  $singular = "Events";
  $plural = "Events";
  $post_type_name = "event";

  $labels = array(
    'name' => $singular,
    'singular_name' => $singular,
    'menu_name' => $singular,
    'add_new' => 'Add ' . $singular . '',
    'add_new_item' => 'Add New ' . $singular . '',
    'edit' => 'Edit',
    'edit_item' => 'Edit ' . $singular . '',
    'new_item' => 'New ' . $singular . '',
    'view' => 'View ' . $singular . '',
    'view_item' => 'View ' . $singular . '',
    'search_items' => 'Add ' . $plural . '',
    'not_found' => 'No ' . $plural . ' Found',
    'not_found_in_trash' => 'No ' . $plural . ' Found in Trash',
    'parent' => 'Parent ' . $singular . '',
  );

  $args = array( 'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'has_archive' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor' )
  );

  register_post_type( $post_type_name , $args );
  flush_rewrite_rules();
}

//////////////////////////////////
// Make a Face
//////////////////////////////////
add_action('init', 'ea_make_a_face_init');
function ea_make_a_face_init() {
  $singular = "Make a Face";
  $plural = "Make a Face";
  $post_type_name = "face";

  $labels = array(
    'name' => $singular,
    'singular_name' => $singular,
    'menu_name' => $singular,
    'add_new' => 'Add ' . $singular . '',
    'add_new_item' => 'Add New ' . $singular . '',
    'edit' => 'Edit',
    'edit_item' => 'Edit ' . $singular . '',
    'new_item' => 'New ' . $singular . '',
    'view' => 'View ' . $singular . '',
    'view_item' => 'View ' . $singular . '',
    'search_items' => 'Add ' . $plural . '',
    'not_found' => 'No ' . $plural . ' Found',
    'not_found_in_trash' => 'No ' . $plural . ' Found in Trash',
    'parent' => 'Parent ' . $singular . '',
  );

  $args = array( 'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor' )
  );

  register_post_type( $post_type_name , $args );
  flush_rewrite_rules();
}

//////////////////////////////////
// Projects
//////////////////////////////////
add_action('init', 'ea_project_init');
function ea_project_init() {
  $singular = "Projects";
  $plural = "Projects";
  $post_type_name = "project";

  $labels = array(
    'name' => $singular,
    'singular_name' => $singular,
    'menu_name' => $plural,
    'add_new' => 'Add ' . $singular . '',
    'add_new_item' => 'Add New ' . $singular . '',
    'edit' => 'Edit',
    'edit_item' => 'Edit ' . $singular . '',
    'new_item' => 'New ' . $singular . '',
    'view' => 'View ' . $singular . '',
    'view_item' => 'View ' . $singular . '',
    'search_items' => 'Add ' . $plural . '',
    'not_found' => 'No ' . $plural . ' Found',
    'not_found_in_trash' => 'No ' . $plural . ' Found in Trash',
    'parent' => 'Parent ' . $singular . '',
  );

  $args = array( 'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'has_archive' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor' )
  );

  register_post_type( $post_type_name , $args );
  flush_rewrite_rules();
}

//////////////////////////////////
// Timeline
//////////////////////////////////
add_action('init', 'ea_timeline_init');
function ea_timeline_init() {
  $singular = "Timeline";
  $plural = "Timeline";
  $post_type_name = "timeline";

  $labels = array(
    'name' => $singular,
    'singular_name' => $singular,
    'menu_name' => $singular,
    'add_new' => 'Add ' . $singular . '',
    'add_new_item' => 'Add New ' . $singular . '',
    'edit' => 'Edit',
    'edit_item' => 'Edit ' . $singular . '',
    'new_item' => 'New ' . $singular . '',
    'view' => 'View ' . $singular . '',
    'view_item' => 'View ' . $singular . '',
    'search_items' => 'Add ' . $plural . '',
    'not_found' => 'No ' . $plural . ' Found',
    'not_found_in_trash' => 'No ' . $plural . ' Found in Trash',
    'parent' => 'Parent ' . $singular . '',
  );

  $args = array( 'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor' )
  );

  register_post_type( $post_type_name , $args );
  flush_rewrite_rules();
}

