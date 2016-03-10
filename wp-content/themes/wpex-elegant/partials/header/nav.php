<?php
/**
 * Header Search
 *
 * @package     Elegant WordPress theme
 * @subpackage  Partials
 * @author      Alexander Clarke
 * @link        http://www.wpexplorer.com
 * @since       1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
} ?>

			<div id="sidr-close"><a href="#sidr-close" class="toggle-sidr-close"></a></div>
			<div id="site-navigation-wrap">
				<div class="menu-bars"><a href="#sidr-main" id="navigation-toggle"><?php echo __( '', 'wpex' ); ?></a></div>
				<nav id="site-navigation" class="left navigation main-navigation clr" role="navigation">
					<?php
					// Display main menu
					wp_nav_menu( array(
						'theme_location' => 'main_menu',
						'sort_column'    => 'menu_order',
						'menu_class'     => 'dropdown-menu sf-menu main_menu',
						'fallback_cb'    => false,
						'walker'         => new WPEX_Dropdown_Walker_Nav_Menu()
					) ); 
					?>
					</nav>
			</div>
			
				<div class="years_logo"><img src="<?php echo get_bloginfo('template_directory');?>/images/25th.png"/></div>
			
			<div id="site-navigation-wrap">
					<nav id="site-navigation" class="site-navigation2 right navigation main-navigation clr" role="navigation">
					<?php
					// Display second menu
					wp_nav_menu( array(
						'theme_location' => 'second_menu',
						'sort_column'    => 'menu_order',
						'menu_class'     => 'dropdown-menu sf-menu second_menu',
						'fallback_cb'    => false,
						'walker'         => new WPEX_Dropdown_Walker_Nav_Menu()
					) );


					?>
				</nav><!-- #site-navigation -->
			</div><!-- #site-navigation-wrap -->
		
    </div><!-- #logo -->

</div><!-- .site-branding -->