<?php

/**
 * Fouried function to register Product Gallery post type.
 *
 * @package fouried
 * @since   fouried 1.0
 */

if ( ! function_exists( 'fouried_register_product_post' ) ) {
    function fouried_register_product_post() {
        $labels = array(
            'name' => _x('Product Gallery', 'Post Type General Name', 'fouried'),
            'singular_name' => _x('Product Gallery', 'Post Type Singular Name', 'fouried'),
            'menu_name' => __('Product', 'fouried'),
            'parent_item_colon' => __('Parent Product:', 'fouried'),
            'all_items' => __('All Products', 'fouried'),
            'view_item' => __('View Product', 'fouried'),
            'add_new_item' => __('Add New Product', 'fouried'),
            'add_new' => __('Add New', 'fouried'),
            'edit_item' => __('Edit Product', 'fouried'),
            'update_item' => __('Update Product', 'fouried'),
            'search_items' => __('Search Product', 'fouried'),
            'not_found' => __('Not found', 'fouried'),
            'not_found_in_trash' => __('Not found in Trash', 'fouried'),
        );
        $args = array(
            'label' => __('Product', 'fouried'),
            'description' => __('Product description', 'fouried'),
            'labels' => $labels,
            'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
            'hierarchical' => false,
            'public' => true,
            'menu_position' => 5,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'publicly_queryable' => true,
            'capability_type' => 'post',
            'menu_icon' => 'dashicons-format-gallery',
            'rewrite' => 'true',
        );
        register_post_type('product', $args);
    }
    add_action('init', 'fouried_register_product_post', 0);
}