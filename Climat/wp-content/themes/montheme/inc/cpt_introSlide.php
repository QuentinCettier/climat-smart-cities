<?php

add_action( 'init', 'ajout_custom_type_introduction' );
function ajout_custom_type_introduction()
{
$post_type = "introduction";
$labels = array(
        'name'               => 'Introduction',
        'singular_name'      => 'introduction',
        'all_items'          => __("All introductions"),
        'add_new'            => __("Add introduction"),
        'add_new_item'       => __("Add introduction"),
        'edit_item'          => __("Edit introduction"),
        'new_item'           => __("New introduction"),
        'view_item'          => __("Read introduction"),
        'search_items'       => __("Search introduction"),
        'not_found'          => __("No result"),
        'not_found_in_trash' => __("No result"),
        'parent_item_colon'  => __("introduction parent"),
        'menu_name'          => 'Introduction',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-welcome-write-blog',
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
