<?php
require_once 'wp_bootstrap_navwalker.php';

function tristan_laughton_theme_support() {

    load_default_textdomain("tristan-laughton");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    register_nav_menus(
         array(
        
        'menu' => esc_html(__('Primary Menu', 'tristanlaug')),   
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
   
wp_enqueue_script("min.js",get_theme_file_uri("js/jquery.min.js"),array("jquery"),null,true);
wp_enqueue_script("min.js",get_theme_file_uri("js/plugins.js"),array("jquery"),null,true);
wp_enqueue_script("min.js",get_theme_file_uri("js/scripts.js"),array("jquery"),null,true);

}
 add_action ("wp_enqueue_scripts","tristan_assets");



 // for custom post

 function cptui_register_my_cpts_films() {

	/**
	 * Post Type: films.
	 */

	$labels = [
		"name" => __( "films", "phylosophy" ),
		"singular_name" => __( "film", "phylosophy" ),
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

add_action( 'init', 'cptui_register_my_cpts_films' );


?>


 


