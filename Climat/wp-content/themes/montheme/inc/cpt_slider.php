<?php

add_action( 'init', 'ajout_custom_type_slider' );
function ajout_custom_type_slider()
{
$post_type = "slider";
$labels = array(
        'name'               => 'Slider',
        'singular_name'      => 'slider',
        'all_items'          => __("All sliders"),
        'add_new'            => __("Add slider"),
        'add_new_item'       => __("Add slider"),
        'edit_item'          => __("Edit slider"),
        'new_item'           => __("New slider"),
        'view_item'          => __("Read slider"),
        'search_items'       => __("Search slider"),
        'not_found'          => __("No result"),
        'not_found_in_trash' => __("No result"),
        'parent_item_colon'  => __("slider parent"),
        'menu_name'          => 'Slider',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-media-text',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );
    register_post_type($post_type, $args );
}
