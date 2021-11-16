<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
     $parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
    
    wp_enqueue_script( 'bootstrap-script', get_stylesheet_directory_uri()  . '/assets/bootstrap/js/bootstrap.min.js');
    
    wp_enqueue_script( 'child-scripts', get_stylesheet_directory_uri()  . '/site-child.js', array(  'jquery'));



    wp_enqueue_style( 'bootstrap-style', get_stylesheet_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css'); 


}



/* Custom Post Type Start */



function create_posttype() {

register_post_type( 'project',
// CPT Options

array(
  'labels' => array(
   'name' => __( 'Projects' ),
   'singular_name' => __( 'Project' )
  ),
  'public' => true,
    'show_ui' => true,
  'has_archive' => true,
  'rewrite' => array('slug' => 'project'),
    'show_in_rest' => true,
   'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt') 
 )
);  
    
    register_post_type( 'jury',
// CPT Options

array(
  'labels' => array(
   'name' => __( 'Jury' ),
   'singular_name' => __( 'Jury member' )
  ),
  'public' => true,
    'show_ui' => true,
  'has_archive' => true,
  'rewrite' => array('slug' => 'jury'),
    'show_in_rest' => true,
   'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt') 
 )
);    
    
    
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


?>
