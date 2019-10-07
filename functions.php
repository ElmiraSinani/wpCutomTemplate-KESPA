<?php
	
include("templates/inc/cpt-front-slider.php");
include("templates/inc/cpt-news.php");
include("templates/inc/cpt-our-team.php");


// Add RSS links to <head> section
automatic_feed_links();
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');
// Clean up the <head>
function removeHeadLinks() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
}
if ( function_exists("add_theme_support") ) { 
    add_theme_support("post-thumbnails"); 
    
    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'smallnews', 255, 150, true );
    //add_image_size( 'medcatS', 200, 87, true );
    //add_image_size( 'bigcat', 300, 200, true );
    //add_image_size( 'smallcats', 50, 50, true );
} 
//Register kecpa Menues
function register_kecpa_menus() {
     register_nav_menus(
         array(
             'header-menu' => __('Header Menu','kecpa'),
             'footer-menu' => __('Footer Menu','kecpa'),
         )
     );
 }
 add_action('init', 'register_kecpa_menus');
	
/**
 * Enqueue scripts and styles.
 *
 * @since NCCA v. 1.0
 */
function main_scripts() {
    
    //load scripts
//    if (!is_admin()) {
//        wp_deregister_script('jquery');
//        wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '', false);
//    }
    //bootstrap script and styles
//    wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css', array(), '3.2' );
//    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/libs/font-awesome/css/font-awesome.min.css', array(), '3.2' );
//    wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array(), '', true );

//
//    wp_enqueue_script( 'custom-scripts', get_template_directory_uri() . '/js/custom-scripts.js', array(), '', true );
//
//    wp_enqueue_style( 'lightbox-styles', get_template_directory_uri() . '/js/lightbox/css/lightbox.min.css', array(), '3.2' );
//    wp_enqueue_script( 'lightbox-scripts', get_template_directory_uri() . '/js/lightbox/js/lightbox-plus-jquery.min.js', array(), '', true );

    wp_enqueue_script( 'bx-slider', get_template_directory_uri() . '/assets/js/jquery-bxslider/jquery.bxslider.min.js', array(), '', true );

    
}
add_action( 'wp_enqueue_scripts', 'main_scripts' );
	
function showBeforeMore($fullText){
    if(@strpos($fullText, '<!--more-->')){
        $morePos = strpos($fullText, '<!--more-->');
        print substr($fullText,0,$morePos);
        print "<span class=\"read-more\"><a href=\"". get_permalink() . "\" class=\"read-more-link\">Read More</a></span>";
    } else {
        print $fullText;
    }
}

function readMore($fullText){
    if(@strpos($fullText, '<!--more-->')){
        $morePos  = strpos($fullText, '<!--more-->');
        $fullText = preg_replace('/<!--(.|\s)*?-->/', '', $fullText);
        print substr($fullText,0,$morePos);
        print "<div class=\"read-more-content hide\">". substr($fullText,$morePos,-1) . "</div>";
        print "<a class=\"ui lined small button read-more\">Read More</a>";
    } else {
        print $fullText;
    }
}

add_action( 'admin_init', 'hide_editor' ); 
function hide_editor() {
    if (isset($_GET['post'])) {
        $post_id = $_GET['post'];
        $template = get_post_meta($post_id, '_wp_page_template', true);       
        if($template == 'templates/explore-page-template.php'){ // edit the template name
            remove_post_type_support('page', 'editor');
        }
    }
}
    
    


?>