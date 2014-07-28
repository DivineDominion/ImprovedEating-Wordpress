<?php
/*
Template Name: All Posts (index) 
*/

get_header(); ?>

    <div id="content" class="hfeed">
        <div class="container">
            <?php get_sidebar( 'newsletter' ); ?>
            
            <?php get_template_part( 'loop-meta' ); ?>

            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged );
            $wp_query = new WP_Query($args); 
        
            get_template_part( 'loop' ); ?>

            <?php get_template_part( 'loop-nav' ); ?>
        </div>
    </div><!-- #content -->

<?php get_footer(); ?>
