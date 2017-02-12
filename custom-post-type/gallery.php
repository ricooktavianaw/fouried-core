<?php 

function apc_register_galleries_cpt() {

	$labels = array(
		'name'					=> esc_html__( 'Galleries',						'fouried' ),
		'singular_name'			=> esc_html__( 'Gallery',						'fouried' ),
		'add_new'				=> esc_html__( 'Add New',						'fouried' ),
		'add_new_item'			=> esc_html__( 'Add New Gallery',				'fouried' ),
		'edit_item'				=> esc_html__( 'Edit Gallery',					'fouried' ),
		'new_item'				=> esc_html__( 'New Gallery',					'fouried' ),
		'view_item'				=> esc_html__( 'View Gallery',					'fouried' ),
		'search_items'			=> esc_html__( 'Search Galleries',				'fouried' ),
		'not_found'				=> esc_html__( 'No Galleries found',			'fouried' ),
		'not_found_in_trash'	=> esc_html__( 'No Galleries found in Trash',	'fouried' ),
		'parent_item_colon'		=> esc_html__( 'Parent Gallery:',				'fouried' ),
		'menu_name'				=> esc_html__( 'Galleries',						'fouried' ),
	);

	$args = array(
		'labels'				=> $labels,
		'hierarchical'			=> true,
		'supports'				=> array( 'title', 'excerpt', 'thumbnail', 'revisions' ),
		'public'				=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'menu_position'			=> 30,
		'menu_icon'				=> 'dashicons-screenoptions',
		'show_in_nav_menus'		=> true,
		'publicly_queryable'	=> true,
		'exclude_from_search'	=> true,
		'has_archive'			=> false,
		'query_var'				=> true,
		'can_export'			=> true,
		'rewrite'				=> true,
		'capability_type'		=> 'post'
	);
	register_post_type( 'gallery', $args );
}
add_action( 'init', 'apc_register_galleries_cpt', 999 );

?>