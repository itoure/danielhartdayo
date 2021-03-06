<?php
/**
 * Single Product Up-Sells
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce, $woocommerce_loop, $post_count;

$upsells = $product->get_upsells();

if ( sizeof( $upsells ) == 0 ){
	return;
} 
?>

	<div class="upsells products margin-t40">
 
 		<div class="rt_heading_wrapper style-3">
			<h6 class="rt_heading style-3"><?php _e( 'You may also like&hellip;', 'woocommerce' ) ?></h6>
		</div> 

		<?php
		$meta_query = $woocommerce->query->get_meta_query();

		$args = array(
			'post_type'           => 'product',
			'ignore_sticky_posts' => 1,
			'no_found_rows'       => 1,
			'posts_per_page'      => $posts_per_page,
			'orderby'             => $orderby,
			'post__in'            => $upsells,
			'post__not_in'        => array( $product->id ),
			'meta_query'          => $meta_query
		);

		$products = new WP_Query( $args );
		$post_count = $products->post_count;

		$woocommerce_loop['columns'] = get_theme_mod(RT_THEMESLUG."_woo_related_product_layout") ? get_theme_mod(RT_THEMESLUG."_woo_related_product_layout") : 3;
		$item_width = rt_column_count($woocommerce_loop['columns']);

		if ( $products->have_posts() ){ 
			
			$output = array();

			//the loop
			while ( $products->have_posts() ) : $products->the_post();

				ob_start();

				woocommerce_get_template_part( 'content', 'product-carousel' );

				$output[] .=  ob_get_contents();
				ob_end_clean();
						 
		 	endwhile;  

			
			//carousel atts
			$atts = array(  
				"id"  => "woocommerce-upsells-carousel", 
				"item_width"  => intval($item_width), 
				"class" => "wc-product-carousel woocommerce",
				"nav" => "true",
				"dots" => "false",
			);

			//reset post data for the new query
			wp_reset_postdata(); 	

			//create carousel 
			echo rt_create_carousel( $output, $atts );
		}

		?>

	</div>