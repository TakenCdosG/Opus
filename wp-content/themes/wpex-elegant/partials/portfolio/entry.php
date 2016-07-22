<?php
/**
 * The default template for displaying portfolio entries
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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>

		<div class="portfolio-entry-media">
				
			<?php
			// Display post thumbnail
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			?>
            <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
				<div class= "portfolio_item" style="background-image:url(<?php echo $url ?>); background-size:cover; background-position:center; width:100%;">
					<div class='portfolio_hover'>
						<div class="portfolio_hover_content">
							<h2><?php the_title();?></h2>
							<span>View this Project ></span>
						</div>
					</div>
				</div>
            </a>
		</div><!-- .portfolio-entry-media -->

	<?php endif; ?>

	<div class="portfolio-entry-details clr">


		<div class="portfolio-entry-categories clr">
			<?php echo get_the_term_list( get_the_ID(), 'portfolio_category', '', ', ', '' ); ?> 
		</div><!-- .portfolio-entry-categories -->

	</div><!-- .portfolio-entry-details -->

</article><!-- .portfolio-entry -->