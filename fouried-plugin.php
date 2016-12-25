<?php 
/**
 * Plugin Name: Fouried Core
 * Plugin URI: http://themeforest.net/user/Slashdown
 * Description: Important plug-in in order to make the Fouried work
 * Version: 1.0.0
 * Author: Rico Oktavian Adhi Wibowo
 * Author URI: Author's website
 * License: GNU General Public License, version 1
 */

// Custom Post Type
add_action('init', 'productgallery', 0);
function productgallery() {
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
        'has_archive' => true,
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
    register_post_type('productgallery', $args);
}

?>