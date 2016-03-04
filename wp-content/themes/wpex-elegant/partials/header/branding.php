<?php
/**
 * Header branding: Logo & Site Description
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
}

// Vars
$logo_img           = get_theme_mod('wpex_logo');
$blog_name          = get_bloginfo( 'name' );
$blog_description   = get_bloginfo( 'description' );
$home_url           = home_url(); ?>

<div class="site-branding clr">

    <div id="logo" class="clr">

        

            <div class="logo-bg">
                <a href="<?php echo $home_url; ?>" title="<?php echo $blog_name; ?>" rel="home">
                    <img src="<?php echo $logo_img; ?>" alt="<?php echo $blog_name; ?>" height="" width="" />
                </a>
            </div>



