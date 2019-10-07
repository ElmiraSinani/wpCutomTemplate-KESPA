<?php

// function: post_type BEGIN
function our_team_post_type(){
    
    $labels = array(
                    'name' => __( 'Our Team'), 
                    'singular_name' => __('Our Team'),
                    'rewrite' => array(
                        'slug' => __( 'news' ) 
                    ),
                    'add_new' => _x('Add Item', 'news'), 
                    'edit_item' => __('Edit Our Team Post Item'),
                    'new_item' => __('New Our Team Post Item'), 
                    'view_item' => __('View Our Team Post'),
                    'search_items' => __('Search Our Team'), 
                    'not_found' =>  __('No Our Team Items Found'),
                    'not_found_in_trash' => __('No Our Team Items Found In Trash'),
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
    
    register_post_type(__( 'our-team' ), $args);        
} 


add_action( 'init', 'our_team_post_type' );
