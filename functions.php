<?php

function main_style() {

  $scss_path = get_parent_theme_file_path('/styles/stylesheet.scss'); 
  $css_path = get_parent_theme_file_path('/styles/stylesheet.css'); 
  $scss_ini = get_parent_theme_file_path('/scssphp/scss.inc.php' );

  //check scss 
  if(file_exists($scss_path) && count(file($scss_path)) > 1 && (fileatime($scss_path) > fileatime($css_path))  && file_exists($scss_ini) ){
    include $scss_ini;
    // check class
    if (class_exists('ScssPhp\ScssPhp\Compiler')) {
        $compiler = new \ScssPhp\ScssPhp\Compiler();
        $compiler->setImportPaths(TEMPLATEPATH .'/styles/');
        $result = $compiler->compileString('@import "stylesheet.scss";');
        file_put_contents($css_path  , $result->getCss());
    }
  }
 //upload stylesheet
  wp_enqueue_style('main_style', get_theme_file_uri() . '/styles/stylesheet.css' );
  //icons
 // wp_enqueue_style('bootstrap-icons', get_theme_file_uri() . '/styles/fonts/bootstrap-icons/font/bootstrap-icons.min.css' );
  wp_enqueue_style('fontawesome', get_theme_file_uri() . '/styles/fonts/fontawesome/css/fontawesome.min.css') ;

  //js  bootatsrap components don't work - way?
 # wp_enqueue_script('bootstrap-5',get_theme_file_uri() . '/styles/js/bootstrap.min.js');
 
}
  
  add_action('wp_enqueue_scripts', 'main_style');

  add_filter('wp_mail_from_name','yoursite_wp_mail_from_name');
	function yoursite_wp_mail_from_name($name) {
	  return 'www.guz-partners';
	}

/***** companies ***********/

    /**
     * Register a custom post type called "company".
     *
     * @see get_post_type_labels() for label keys.
     */
    function wpdocs_codex_company_init() {
      $labels = array(
          'name' => _x( 'Companies', 'Post type general name', 'textdomain' ),
          'singular_name' => _x( 'Company', 'Post type singular name', 'textdomain' ),
          'menu_name' => _x( 'Companies', 'Admin Menu text', 'textdomain' ),
          'name_admin_bar' => _x( 'Company', 'Add New on Toolbar', 'textdomain' ),
          'add_new' => __( 'Add New', 'textdomain' ),
          'add_new_item' => __( 'Add New Company', 'textdomain' ),
          'new_item' => __( 'New Company', 'textdomain' ),
          'edit_item' => __( 'Edit Company', 'textdomain' ),
          'view_item' => __( 'View Company', 'textdomain' ),
          'all_items' => __( 'All Companies', 'textdomain' ),
          'search_items' => __( 'Search Companies', 'textdomain' ),
          'parent_item_colon' => __( 'Parent Companies:', 'textdomain' ),
          'not_found' => __( 'No Companies found.', 'textdomain' ),
          'not_found_in_trash' => __( 'No Companies found in Trash.', 'textdomain' ),
          'featured_image' => _x( 'Company Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
          'set_featured_image' => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
          'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
          'use_featured_image' => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
          'archives' => _x( 'Company archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
          'insert_into_item' => _x( 'Insert into Company', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
          'uploaded_to_this_item' => _x( 'Uploaded to this Company', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
          'filter_items_list' => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
          'items_list_navigation' => _x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
          'items_list' => _x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
      );

      $args = array(
          'labels' => $labels,
          'public' => true,
          'publicly_queryable' => true,
          'show_ui' => true,
          'show_in_menu' => true,
          'query_var' => true,
          'rewrite' => array( 'slug' => 'company' ),
          'capability_type' => 'post',
          'has_archive' => true,
          'hierarchical' => false,
          'menu_position' => null,
          'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
          'taxonomies'          => array( 'category' ),
      );

      register_post_type( 'company', $args );
  }
  flush_rewrite_rules();
  add_action( 'init', 'wpdocs_codex_company_init' );



