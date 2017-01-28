<?php

/**
 * Fouried function to register Testimonial post type.
 *
 * @package fouried
 * @since   Fouried 1.0
 */

if ( ! function_exists( 'fouried_register_product_category' ) ) {
    function fouried_register_product_category() {
        $labels = array(
            'name'                       => esc_html_x( 'Product Category', 'Taxonomy General Name', 'fouried' ),
            'singular_name'              => esc_html_x( 'Product Category', 'Taxonomy Singular Name', 'fouried' ),
            'menu_name'                  => esc_html__( 'Product Category', 'fouried' ),
            'all_items'                  => esc_html__( 'All Category', 'fouried' ),
            'parent_item'                => esc_html__( 'Parent Category', 'fouried' ),
            'parent_item_colon'          => esc_html__( 'Parent Category:', 'fouried' ),
            'new_item_name'              => esc_html__( 'New Category Name', 'fouried' ),
            'add_new_item'               => esc_html__( 'Add New Category', 'fouried' ),
            'edit_item'                  => esc_html__( 'Edit Category', 'fouried' ),
            'update_item'                => esc_html__( 'Update Category', 'fouried' ),
            'separate_items_with_commas' => esc_html__( 'Separate Category with commas', 'fouried' ),
            'search_items'               => esc_html__( 'Search Category', 'fouried' ),
            'add_or_remove_items'        => esc_html__( 'Add or remove category', 'fouried' ),
            'choose_from_most_used'      => esc_html__( 'Choose from the most used category', 'fouried' ),
            'not_found'                  => esc_html__( 'Category Not Found', 'fouried' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => false,
            'show_tagcloud'              => false,
            'update_count_callback'      => '_update_post_term_count',
            'query_var'                  => false,
            'rewrite'                    => array( 'slug' => 'productcategory' ),
        );
        register_taxonomy( 'productcategory', 'productgallery', $args );
    }
    add_action( 'init', 'fouried_register_product_category', 0 );
}