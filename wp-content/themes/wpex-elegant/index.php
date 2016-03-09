<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package     Elegant WordPress theme
 * @subpackage  Templates
 * @author      Alexander Clarke
 * @link        http://www.wpexplorer.com
 * @since       1.0.0
 */

get_header(); ?>

	<div id="primary" class="content-area clr">

		<!-- <main id="content" class="site-content left-content clr" role="main"> -->


		<?php 

        $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 9 );
        $loop = new WP_Query( $args );
        ?>
        <div id="homepage-slider" overflow:hidden;">
	  		<ul class="slides">
	  			<?php  while ( $loop->have_posts() ) : $loop->the_post();
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
				?>
		        <li>
		        	<div class="slide" style="background-image:url(<?php echo $url ?>); background-size:cover; background-position:center; width:100%;">
		        		<div class='label'>
		        			<a href="<?php echo get_the_permalink() ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">See this project ></a>
		        		</div>
		        	</div>
		        </li>
				<?php endwhile; // end of the loop. ?>
			</ul>
		</div>
		</main><!-- #content -->

		<?php //get_sidebar(); ?>

	</div><!-- #primary -->

<?php get_footer(); ?>