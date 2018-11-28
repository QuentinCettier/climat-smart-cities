<?php

add_action( 'init', 'ajout_custom_type_statement' );
function ajout_custom_type_statement()
{
$post_type = "statement";
$labels = array(
        'name'               => 'Statements',
        'singular_name'      => 'statement',
        'all_items'          => __("All statements"),
        'add_new'            => __("Add statement"),
        'add_new_item'       => __("Add statement"),
        'edit_item'          => __("Edit statement"),
        'new_item'           => __("New statement"),
        'view_item'          => __("Read statement"),
        'search_items'       => __("Search statement"),
        'not_found'          => __("No result"),
        'not_found_in_trash' => __("No result"),
        'parent_item_colon'  => __("statement parent"),
        'menu_name'          => 'Statement',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-quote',
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
