<?php

// Display which template is being used in footer

function meks_which_template_is_loaded() {
	if ( is_super_admin() ) {
		global $template;
		print_r( $template );
	}
}

add_action( 'wp_footer', 'meks_which_template_is_loaded' );



function hadley_menus() {
    $locations = array(
        'primary' => 'Primary',
        'footer' => 'Footer'
    );

    register_nav_menus($locations);
}

add_action('init', 'hadley_menus');



function hadley_register_styles() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('hadley-styles', get_template_directory_uri() . '/style.css', array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'hadley_register_styles');



// Portfolio & Services custom post types function
function hadley_create_posttype() {
 
    register_post_type( 'portfolio',
    // CPT Options
        array(
            'labels' => array(
                'name'                => _x( 'Portfolio', 'Post Type General Name', 'hadley' ),
                'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'hadley' ),
                'menu_name'           => __( 'Portfolio', 'hadley' ),
                'parent_item_colon'   => __( 'Parent Project', 'hadley' ),
                'all_items'           => __( 'All Projects', 'hadley' ),
                'view_item'           => __( 'View Project', 'hadley' ),
                'add_new_item'        => __( 'Add New Project', 'hadley' ),
                'add_new'             => __( 'Add New', 'hadley' ),
                'edit_item'           => __( 'Edit Project', 'hadley' ),
                'update_item'         => __( 'Update Project', 'hadley' ),
                'search_items'        => __( 'Search Project', 'hadley' ),
                'not_found'           => __( 'Not Found', 'hadley' ),
                'not_found_in_trash'  => __( 'Not found in Trash', 'hadley' ),
            ),
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'author', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-camera',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'rewrite' => array('slug' => 'work'),
            'capability_type'     => 'post',
            'show_in_rest' => true,
            
 
        )
    );
}

add_action( 'init', 'hadley_create_posttype' );


// Portfolio Categories 
function create_portfolio_hierarchical_taxonomy() {
 
    $labels = array(
      'name' => _x( 'Categories', 'taxonomy general name' ),
      'singular_name' => _x( 'Category', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Categories' ),
      'all_items' => __( 'All Categories' ),
      'parent_item' => __( 'Parent Category' ),
      'parent_item_colon' => __( 'Parent Category:' ),
      'edit_item' => __( 'Edit Category' ), 
      'update_item' => __( 'Update Category' ),
      'add_new_item' => __( 'Add New Category' ),
      'new_item_name' => __( 'New Category Name' ),
      'menu_name' => __( 'Categories' ),
    );    
   
    register_taxonomy('Categories',array('portfolio'), array(
      'hierarchical' => true,
      'labels' => $labels,
      'show_ui' => true,
      'show_in_rest' => true,
      'show_admin_column' => true,
      'query_var' => true,
      'rewrite' => array( 'slug' => 'portfolio-category' ),
    ));
   
  }
  
  add_action( 'init', 'create_portfolio_hierarchical_taxonomy', 0 );


?>