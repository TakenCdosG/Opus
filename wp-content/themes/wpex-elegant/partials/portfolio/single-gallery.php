<?php
/**
 * Portfolio single gallery
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

// Get gallery image ids
$attachments = wpex_get_gallery_ids();

// Return if there aren't any images
if ( ! $attachments ) {
	return;
} ?>

<div class="">
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div class="image_single single portfolio format-standard hentry portfolio-entry span_1_of_2 col clr" style="background-image:url(<?php echo $url ?>); background-size:cover; background-position:center;">
		<ul class="single_thumbnails ">
			<div class="carouf">
				<div class="list_carousel">
					<ul id="carousel">
						<?php
						// Loop through each attachment ID
						foreach ( $attachments as $attachment ) :
							$img_url	= wp_get_attachment_url( $attachment );
							$img_alt	= get_post_meta( $attachment, '_wp_attachment_image_alt', true );
							$img_html	= wp_get_attachment_image( $attachment, 'wpex-portfolio-post' ); ?>
							<li style="width:100px;">
								<?php
								// Display image with lightbox
								if (  'on' == wpex_gallery_is_lightbox_enabled() ) : ?>
									<a href="<?php echo $img_url; ?>" title="<?php echo $img_alt; ?>" class="wpex-lightbox">
										<?php echo $img_html; ?>
									</a>
								<?php
								// Lightbox is disabled, only show image
								else : ?>
									<?php echo $img_html; ?>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</ul><!-- thumbnails -->
	</div><!-- portfolio -->
	<div class="content_single single portfolio format-standard hentry portfolio-entry span_1_of_2 col clr" style="">
		<div class="content_single_inner">
			<h2><?php the_title();?></h2>
			<span class="divider"></span>
			 <?php the_content();?>
		</div>
	</div>

</div><!-- .post-wrap -->