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

if( !function_exists( 'fouried_custom_display_post' ) ) {
	function fouried_custom_display_post() {
		$the_query = new WP_Query( 'posts_per_page=5' );
		while ($the_query -> have_posts()) : $the_query -> the_post();
?>
			<div class="col-md-3">
				<a href="<?php esc_url( get_permalink() ); ?>" rel="bookmark">
					<h5><?php the_title(); ?></h5>
				</a>
				
				<p class="preview-date text-uppercase"><?php fouried_posted_on(); ?></p>
			</div><!-- /.col-md-3 -->
			<div class="col-md-9">
<?php
					the_excerpt(__('(more…)'));
?>
			</div><!-- /.col-md-9 -->
			<div class="clearfix"></div>
<?php
		endwhile;
		wp_reset_postdata();
	}
	add_shortcode ( 'fouried-custom-display-post', 'fouried_custom_display_post' );
}

/* Inclue all custom post types and taxonomies */
foreach ( glob( dirname( __FILE__ ) . '/custom-post-type/*.php' ) as $file ) {
    require_once $file;
}

?>