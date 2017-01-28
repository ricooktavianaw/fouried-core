<?php

/**
 * Fouried function to register Testimonial post type.
 *
 * @package fouried
 * @since   fouried 1.0
 */

if ( ! function_exists( 'fouried_register_testimonial_post' ) ) {
    function fouried_register_testimonial_post() {
        $labels = array(
            'name'                => esc_html_x( 'Testimonials', 'Post Type General Name', 'fouried' ),
            'singular_name'       => esc_html_x( 'Testimonial', 'Post Type Singular Name', 'fouried' ),
            'menu_name'           => esc_html__( 'Testimonials', 'fouried' ),
            'parent_item_colon'   => esc_html__( 'Parent Testimonial:', 'fouried' ),
            'all_items'           => esc_html__( 'All Testimonials', 'fouried' ),
            'view_item'           => esc_html__( 'View Testimonial', 'fouried' ),
            'add_new_item'        => esc_html__( 'Add New Testimonial', 'fouried' ),
            'add_new'             => esc_html__( 'Add Testimonial', 'fouried' ),
            'edit_item'           => esc_html__( 'Edit Testimonial', 'fouried' ),
            'update_item'         => esc_html__( 'Update Testimonial', 'fouried' ),
            'search_items'        => esc_html__( 'Search Testimonial', 'fouried' ),
            'not_found'           => esc_html__( 'Testimonial Not found', 'fouried' ),
            'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'fouried' ),
        );
        $args = array(
            'label'               => esc_html__( 'testimonial', 'fouried' ),
            'description'         => esc_html__( 'Testimonial from Others', 'fouried' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'thumbnail' ),
            'taxonomies'          => array(),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => false,
            'show_in_admin_bar'   => true,
            'menu_position'       => 22,
            'menu_icon'           => 'dashicons-testimonial',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
        );
        register_post_type( 'testimonial', $args );
    }
    add_action( 'init', 'fouried_register_testimonial_post', 0 );
}