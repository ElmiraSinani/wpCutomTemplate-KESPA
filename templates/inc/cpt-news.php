<?php

// function: post_type BEGIN
function news_post_type(){
    
    $labels = array(
                    'name' => __( 'News'), 
                    'singular_name' => __('News'),
                    'rewrite' => array(
                        'slug' => __( 'news' ) 
                    ),
                    'add_new' => _x('Add Item', 'news'), 
                    'edit_item' => __('Edit News Post Item'),
                    'new_item' => __('New News Post Item'), 
                    'view_item' => __('View News Post'),
                    'search_items' => __('Search News'), 
                    'not_found' =>  __('No News Items Found'),
                    'not_found_in_trash' => __('No News Items Found In Trash'),
                    'parent_item_colon' => ''
                );
    $args = array(
                    'labels' => $labels,
                    'public' => true,
                    'publicly_queryable' => true,
                    'show_ui' => true,
                    'query_var' => true,
                    'rewrite' => true,
                    'has_archive' => true,
                    'capability_type' => 'post',
                    'hierarchical' => false,
                    'menu_position' => 32,
                    'supports' => array(
                            'title',
                            'editor',
                            'thumbnail',
                            'custom-fields'
                    )
             );
    
    register_post_type(__( 'news' ), $args);        
} 

// function: fetured_posts_filter BEGIN
function news_categories()
{
    register_taxonomy(
            __( "news_categories" ),
            array(__( "news" )),
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
                            'slug' => 'news_category',
                            'hierarchical' => true
                    )
            )
    );
} 


add_action( 'init', 'news_post_type' );
add_action( 'init', 'news_categories', 0 );