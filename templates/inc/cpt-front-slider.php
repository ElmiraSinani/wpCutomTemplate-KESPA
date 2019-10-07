<?php

// function: post_type BEGIN
function home_slider_post_type(){
    
    $labels = array(
                    'name' => __( 'Home Slider'), 
                    'singular_name' => __('Home Slider'),
                    'rewrite' => array(
                        'slug' => __( 'home_slider' ) 
                    ),
                    'add_new' => _x('Add Item', 'home_slider'), 
                    'edit_item' => __('Edit Slide Post Item'),
                    'new_item' => __('New Slide Post Item'), 
                    'view_item' => __('View Slide Post'),
                    'search_items' => __('Search Home Sliders'), 
                    'not_found' =>  __('No Home Sliders Items Found'),
                    'not_found_in_trash' => __('No Home Sliders Items Found In Trash'),
                    'parent_item_colon' => ''
                );
    $args = array(
                    'labels' => $labels,
                    'public' => true,
                    'publicly_queryable' => true,
                    'show_ui' => true,
                    'query_var' => true,
                    'rewrite' => true,
                    'capability_type' => 'post',
                    'hierarchical' => false,
                    'menu_position' => 27,
                    'supports' => array(
                            'title',
                            'editor',
                            'thumbnail'
                    )
             );
    
    register_post_type(__( 'home_slider' ), $args);        
} 

// function: fetured_posts_filter BEGIN
function home_slider_categories()
{
    register_taxonomy(
            __( "home_slider_categories" ),
            array(__( "home_slider" )),
            array(
                    "hierarchical" => true,
                    "label" => __( "Categories" ),
                    "singular_label" => __( "Category" ),
                    "show_ui" => true,
                    "show_in_menu" => true,
                    "show_in_quick_edit" => true,
                    "public" => true,
                    "show_admin_column" => true,
                
                    "rewrite" => array(
                            'slug' => 'home_slider_category',
                            'hierarchical' => true
                    )
            )
    );
} 


add_action( 'init', 'home_slider_post_type' );
