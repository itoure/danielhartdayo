<?php
/* 
* rt-theme product categories
*/

$term = get_queried_object();
$description = isset($term->description) ? $term->description : ""; 

get_header();
?>

		<?php if($description):?>
			<div class="tax-description"> 
				<?php  echo apply_filters('the_content',($description));?> 
			</div> 
		<?php endif;?>


		<?php 
			if ( have_posts() ){
				do_action( "rt_product_post_loop", $wp_query);
			}else{				
				get_template_part( 'content', 'none' );
			}
		?>


<?php get_footer(); ?>