<?php

add_action( 'init', 'ajout_custom_type_conclusion' );
function ajout_custom_type_conclusion()
{
$post_type = "conclusion";
$labels = array(
        'name'               => 'Conclusion',
        'singular_name'      => 'conclusion',
        'all_items'          => __("All conclusions"),
        'add_new'            => __("Add conclusion"),
        'add_new_item'       => __("Add conclusion"),
        'edit_item'          => __("Edit conclusion"),
        'new_item'           => __("New conclusion"),
        'view_item'          => __("Read conclusion"),
        'search_items'       => __("Search conclusion"),
        'not_found'          => __("No result"),
        'not_found_in_trash' => __("No result"),
        'parent_item_colon'  => __("conclusion parent"),
        'menu_name'          => 'Conclusion',
    );
    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'revisions'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-welcome-widgets-menus',
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
