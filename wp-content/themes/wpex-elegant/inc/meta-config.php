<?php
/**
 * Configures meta options via cmb_meta_boxes filter
 *
 * @package     Elegant WordPress theme
 * @subpackage  Includes
 * @author      Alexander Clarke
 * @link        http://www.wpexplorer.com
 * @since       2.0.0
 */

/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function wpex_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'wpex_';


	// Slides
	$meta_boxes[] = array(
		'id'			=> 'wpex-slides-meta',
		'title'			=> __( 'Slide Settings', 'wpex' ),
		'pages'			=> array( 'slides' ),
		'context'		=> 'normal',
		'priority'		=> 'high',
		'show_names'	=> true,
		'fields'		=> array(
			array(
				'name'	=> __( 'URL', 'wpex' ),
				'desc'	=>  __( 'Enter a custom URL to link this slide to. Don\'t forget the http// at the front!', 'wpex' ),
				'id'	=> $prefix . 'slide_url',
				'type'	=> 'text',
				'std'	=> ''
			),
			array(
				'name'	=> __( 'Hide Title', 'wpex' ),
				'desc'	=>  '',
				'id'	=> $prefix . 'slide_hide_title',
				'type'	=> 'checkbox',
				'std'	=> ''
			),
			array(
				'name'	=> __( 'Slide Caption', 'wpex' ),
				'desc'	=>  '',
				'id'	=> $prefix . 'slide_caption',
				'type'	=> 'text',
				'std'	=> ''
			),
		),
	);

	// Features
	$meta_boxes[] = array(
		'id'			=> 'wpex-features-meta',
		'title'			=> __( 'Feature Settings', 'wpex' ),
		'pages'			=> array( 'features' ),
		'context'		=> 'normal',
		'priority'		=> 'high',
		'show_names'	=> true,
		'fields'		=> array(
			array(
				'name'	=> __( 'URL', 'wpex' ),
				'desc'	=>  __( 'Enter a custom URL to link this feature to. Don\'t forget the http// at the front! This link will be added to the featured image and title.', 'wpex' ),
				'id'	=> $prefix . 'feature_url',
				'type'	=> 'text',
				'std'	=> ''
			),
			array(
				'name'	=> __( 'Icon Font Class', 'wpex' ),
				'desc'	=>  __( 'Enter the icon font classname (without the fa- part) to display an icon instead of a featured image.', 'wpex' ) .' <a href="http://fontawesome.io/icons/" target="_blank">'. __( 'Learn More.', 'wpex' ) .'&rarr;</a>',
				'id' 	=> $prefix . 'icon_font',
				'type'	=> 'text',
				'std'	=> ''
			),
		),
	);


	// Posts
	$meta_boxes[] = array(
		'id'         => 'wpex-post-meta',
		'title'      => __( 'Post Settings', 'wpex' ),
		'pages'      => array( 'post' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name'	 => __( 'Video URL', 'wpex' ),
				'desc' 	=>  __( 'Enter in a video URL that is compatible with WordPress\'s built-in oEmbed feature.', 'wpex' ) .' <a href="http://codex.wordpress.org/Embeds" target="_blank">'. __( 'Learn More', 'wpex' ),
				'id' 	=> $prefix . 'post_video',
				'type' 	=> 'text',
				'std'	=> ''
			),
		),
	);


	// Portfolio
	$meta_boxes[] = array(
		'id'			=> 'wpex-portfolio-meta',
		'title'			=> __( 'Post Settings', 'wpex' ),
		'pages'			=> array( 'portfolio' ),
		'context'		=> 'normal',
		'priority'		=> 'high',
		'show_names'	=> true,
		'fields'		=> array(
			array(
				'name'	=> __( 'Video URL', 'wpex' ),
				'desc'	=>  __( 'Enter in a video URL that is compatible with WordPress\'s built-in oEmbed feature.', 'wpex' ) .' <a href="http://codex.wordpress.org/Embeds" target="_blank">'. __( 'Learn More', 'wpex' ),
				'id'	=> $prefix . 'post_video',
				'type'	=> 'text',
				'std'	=> ''
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'wpex_metaboxes' );