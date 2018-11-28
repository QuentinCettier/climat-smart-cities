<?php

add_action( 'init', 'ajout_custom_type_video' );
function ajout_custom_type_video()
{
$post_type = "video";
$labels = array(
        'name'               => 'Video',
        'singular_name'      => 'video',
        'all_items'          => __("All videos"),
        'add_new'            => __("Add video"),
        'add_new_item'       => __("Add video"),
        'edit_item'          => __("Edit video"),
        'new_item'           => __("New video"),
        'view_item'          => __("Read video"),
        'search_items'       => __("Search video"),
        'not_found'          => __("No result"),
        'not_found_in_trash' => __("No result"),
        'parent_item_colon'  => __("video parent"),
        'menu_name'          => 'Video',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-video-alt',
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
