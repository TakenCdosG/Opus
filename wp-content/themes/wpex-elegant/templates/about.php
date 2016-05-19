<?php
    /**
     * Template Name: About Page
     *
     * @package     Elegant WordPress theme
     * @subpackage  Templates
     * @author      Alexander Clarke
     * @link        http://www.wpexplorer.com
     * @since       1.0.0
     */

    get_header(); ?>

    <div id="primary" class="content-area clr bg-color">

        <div id="content" class="site-content" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php


                // Get gallery image ids
                $attachments = wpex_get_gallery_ids();

                 ?>

                <div class="">
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <div class="about-page image_single single portfolio format-standard hentry portfolio-entry span_1_of_2 col clr" style="background-image:url(<?php echo $url ?>); background-size:cover; background-position:center;">

                    </div><!-- portfolio -->
                    <div class="about-content content_single single portfolio format-standard hentry portfolio-entry span_1_of_2 col clr">
                        <div class="fake-menu-fill"></div>
                        <div class="content_single_inner_about">
                            <h2><?php the_title();?></h2>
                            <span class="divider"></span>
                            <?php the_content();?>
                        </div>
                    </div>

                </div><!-- .post-wrap -->

            <?php endwhile; ?>

        </div><!-- #content -->

    </div><!-- #primary -->

<?php get_footer(); ?>