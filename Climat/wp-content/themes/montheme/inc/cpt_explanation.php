<?php

add_action( 'init', 'ajout_custom_type_explanation' );
function ajout_custom_type_explanation()
{
$post_type = "explanation";
$labels = array(
        'name'               => 'Explanation',
        'singular_name'      => 'explanation',
        'all_items'          => __("All explanations"),
        'add_new'            => __("Add explanation"),
        'add_new_item'       => __("Add explanation"),
        'edit_item'          => __("Edit explanation"),
        'new_item'           => __("New explanation"),
        'view_item'          => __("Read explanation"),
        'search_items'       => __("Search explanation"),
        'not_found'          => __("No result"),
        'not_found_in_trash' => __("No result"),
        'parent_item_colon'  => __("explanation parent"),
        'menu_name'          => 'Explanation',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-aside',
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
