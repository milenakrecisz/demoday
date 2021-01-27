<?php


// webpack scripts
if (defined('WEBPACK_SERVER')) {
    add_action('wp_enqueue_scripts', function () {
        wp_register_script('main-js', WEBPACK_SERVER . 'bundle.min.js', '', null);
        wp_enqueue_script('main-js');

        wp_register_style('main-css', WEBPACK_SERVER . 'bundle.min.css');
        wp_enqueue_style('main-css');
    });
}

register_nav_menus(
  array(
    'header-menu' => esc_html__( 'Header Menu', 'packhelp' ),
    'footer-menu' => esc_html__( 'Footer Menu', 'packhelp' ),
    'blog-menu' => esc_html__( 'Blog Menu', 'packhelp' ),
  )
);

// Our custom post type function
function create_posttype() {

    register_post_type( 'products',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Products' ),
                'singular_name' => __( 'Product' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'products'),
            'show_in_rest' => true,

        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
/*
*
* Creating a function to create our CPT
*/

function custom_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'products', 'Post Type General Name', 'packhelp' ),
        'singular_name'       => _x( 'product', 'Post Type Singular Name', 'packhelp' ),
        'menu_name'           => __( 'products', 'packhelp' ),
        'parent_item_colon'   => __( 'Parent product', 'packhelp' ),
        'all_items'           => __( 'All products', 'packhelp' ),
        'view_item'           => __( 'View product', 'packhelp' ),
        'add_new_item'        => __( 'Add New product', 'packhelp' ),
        'add_new'             => __( 'Add New', 'packhelp' ),
        'edit_item'           => __( 'Edit product', 'packhelp' ),
        'update_item'         => __( 'Update product', 'packhelp' ),
        'search_items'        => __( 'Search product', 'packhelp' ),
        'not_found'           => __( 'Not Found', 'packhelp' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'packhelp' ),
        'featured_image'      => __( 'Featured Image', 'packhelp' ),
        'set_featured_image'    => __( 'Set featured image', 'packhelp' ),
        'remove_featured_image' => __( 'Remove featured image', 'packhelp' ),
        'use_featured_image'    => __( 'Use as featured image', 'packhelp' ),


    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'products', 'packhelp' ),
        'description'         => __( 'product news and reviews', 'packhelp' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'          => array( 'genres', 'category' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type( 'products', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );
add_theme_support( 'post-thumbnails', array( 'post', 'products' ) ); // Posts and Movies
