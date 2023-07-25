<?php

// after setup theme function
function wptheme_setup(){

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo' );
    add_theme_support( "custom-header" );

    add_image_size( 'postcard', 550, 365, true );
    add_image_size( 'post-thumbnail', 1280, 450, true );

    // register menus
    register_nav_menus( [
        'header_menu'   => __( 'Header Menu', 'wptheme' ),
        'footer_menu'   => __( 'Footer Menu', 'wptheme' )
    ] );

}
add_action( 'after_setup_theme', 'wptheme_setup' );


// include assets
function wptheme_assets(){

    // css files
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', false, time() );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', false, time() );
    wp_enqueue_style( 'wptheme', get_stylesheet_uri() );

    
    // js files
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js' );

}
add_action( 'wp_enqueue_scripts', 'wptheme_assets' );


// register sidebar / widgets
function wptheme_sidebars(){

    register_sidebar( array(
        'name'      => 'Footer Widget one',
        'id'        => 'footer_widget1',
        'before_widget' => '<div class="footer-widget-item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>'
    ) );

    register_sidebar( array(
        'name'      => 'Footer Widget two',
        'id'        => 'footer_widget2',
        'before_widget' => '<div class="footer-widget-item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title mb-3">',
        'after_title'   => '</h4>'
    ) );

    register_sidebar( array(
        'name'      => 'Footer Widget three',
        'id'        => 'footer_widget3',
        'before_widget' => '<div class="footer-widget-item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>'
    ) );

    register_sidebar( array(
        'name'      => 'Footer Widget four',
        'id'        => 'footer_widget4',
        'before_widget' => '<div class="footer-widget-item">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title mb-3">',
        'after_title'   => '</h4>'
    ) );

    register_sidebar( array(
        'name'      => 'Blog sidebar',
        'id'        => 'blog_sidebar',
        'before_widget' => '<div class="blog-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="sidebar-title mb-3">',
        'after_title'   => '</h4>'
    ) );

}
add_action( 'widgets_init', 'wptheme_sidebars' );


function current_category_posts(){
    $count = "";
    if( is_category() ){
        global $wp_query;

        $current_cat = get_query_var( 'cat' );
        $cats = get_categories();
        foreach( $cats as $cat ){
            if( $current_cat == $cat->term_id ){
                $count = $cat->count;
            }
        }
    }
    return $count;
}



// register custom posts
function wptheme_custom_posts(){

    register_post_type( 'property', array(
        'labels'        => array(
            'name'      => esc_html__( 'Property', 'wptheme' ),
            'singular_name' => 'Property',
            'all_items' => 'All properties',
            'add_new'   => 'Add new property'
        ),
        'show_ui'       => true,
        'menu_icon'     => 'dashicons-admin-home',
        'menu_position' => 20,
        'supports'      => array( 'title', 'editor', 'thumbnail' ),
        'publicly_queryable' => true
    ) );

    register_taxonomy( 'property-type', 'property', array(
        'label'         => 'Property type',
        'show_ui'       => true,
        'hierarchical'  => true
    ) );

}
add_action( 'init', 'wptheme_custom_posts' );
















// post Location column
function location_post_column( $columns ){

    $location = [
        'location'     => esc_html__( 'Location', 'wptheme' )
    ];

    $columns = array_merge( $columns, $location );
    
    return $columns;

}
add_action( 'manage_posts_columns', 'location_post_column' );

function display_location_column( $column, $id ){

    if( 'location' === $column ){
        the_field( 'location' );
    }

}
add_action( 'manage_posts_custom_column', 'display_location_column', 5, 2 );

// post Featured column
function post_column_featured( $columns ){
    $featured_col = [
        'featured_col' => esc_html__( 'Featured', 'wptheme' )
    ];
    $columns = array_merge( $columns, $featured_col );
    return $columns;
}
add_action( 'manage_posts_columns', 'post_column_featured' );

function display_featured_post_column( $column, $id ){
    if( 'featured_col' === $column ){
        $featurd_value = get_field( 'make_featured' );
        if( ! empty($featurd_value[0]) && 'featured' === $featurd_value[0] ){
            echo '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 15 15"><path fill="#0ac830" fill-rule="evenodd" d="M0 7.5a7.5 7.5 0 1 1 15 0a7.5 7.5 0 0 1-15 0Zm7.072 3.21l4.318-5.398l-.78-.624l-3.682 4.601L4.32 7.116l-.64.768l3.392 2.827Z" clip-rule="evenodd"/></svg>';
        }
    }
}
add_action( 'manage_posts_custom_column', 'display_featured_post_column', 5, 2 );


require __DIR__ . '/inc/popular-post.php';
require __DIR__ . '/elementor/elementor.php';
