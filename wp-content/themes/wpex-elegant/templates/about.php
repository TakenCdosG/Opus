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

        <div id="content" class="site-content clr" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php


                // Get gallery image ids
                $logos = get_post_meta($post->ID,'logos');

                 ?>

                <div class="">
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                    <div class="about-page image_single single portfolio format-standard hentry portfolio-entry span_1_of_2 col clr" style="background-image:url(<?php echo $url ?>); background-size:cover; background-position:center;">

                    </div><!-- portfolio -->
                    <div class="about-content content_single single portfolio format-standard hentry portfolio-entry span_1_of_2 col clr">
                        <div class="fake-menu-fill"></div>
                        <div class="content_single_inner top">
                            <h2><?php the_title();?></h2>
                            <span class="divider"></span>
                            <?php the_content();?>
                            <div class="logos" style="width: 100%;">
                                <?php
                                    foreach ( $logos as $logo ) :
                                        $img_url = wp_get_attachment_url( $logo );
                                        $img_alt = get_post_meta( $logo, '_wp_attachment_image_alt', true );
                                        $img_html   = wp_get_attachment_image( $logo, 'wpex-portfolio-post' );?>
                                        <div class="logo">
                                            <?php echo $img_html; ?>
                                        </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                    </div>

                </div><!-- .post-wrap -->

            <?php endwhile; ?>

        </div><!-- #content -->

    </div><!-- #primary -->

<?php get_footer(); ?>