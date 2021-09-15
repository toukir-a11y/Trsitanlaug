<?php
require_once 'wp_bootstrap_navwalker.php';

// nessesary bootstrapping 

function tristan_laughton_theme_support() {

    load_default_textdomain("tristan-laughton");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    register_nav_menus(
         array(
        
        'menu' => esc_html(__('Primary Menu', 'tristanlaug')), 
		'footer_menu'=>  esc_html(__('Primary Menu', 'tristanlaug')), 
    ),
    );       

}

add_action ("after_setup_theme", "tristan_laughton_theme_support");

function tristan_assets(){

wp_enqueue_style ("plugin.css",get_theme_file_uri("css/plugins.css"));
wp_enqueue_style ("stylesheet","//use.typekit.net/pwi7ael.css");
wp_enqueue_style ("preconnect","//fonts.gstatic.com");
wp_enqueue_style ("fonts","//fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap");
wp_enqueue_style("tristanlaug",get_stylesheet_uri());
   
wp_enqueue_script("min.js",get_theme_file_uri("js/jquery.min.js"),array("jquery"),"0.0.1",true);
wp_enqueue_script("plugin.js",get_theme_file_uri("js/plugins.js"),array("jquery"),"0.0.1",true);
wp_enqueue_script("scripts.js",get_theme_file_uri("js/scripts.js"),array("jquery"),"0.0.1",true);

}
 add_action ("wp_enqueue_scripts","tristan_assets");



 // for custom post

 function film_custom_post() {

// Post Type: films.
	 

	$labels = [
		"name" => __( "Films", "tristan-laughton" ),
		"singular_name" => __( "film", "tristan-laughton" ),
	];

	$args = [
		"label" => __( "films", "phylosophy" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "films", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "films", $args );
}

add_action( 'init', 'film_custom_post' );


// add option page 

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'option',
		'menu_title'	=> 'option',
		'menu_slug' 	=> 'option',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'position' => 2
	));
	
}

// register widgets 

function fotter_widgets() {
    register_sidebar( array(
        'name'          => __( 'footer Sidebar', 'tristan-laughton' ),
        'id'            => 'sidebar-1',
		'description'   => __('footer sidebar',"tristan-laughton"),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

	}
	add_action ("widgets_init", "fotter_widgets");

?>


 


