<?php
/*
Template Name: All Posts (index) 
*/

get_header(); ?>

    <div id="content" class="hfeed all-posts">
        <div class="container">
            <?php get_sidebar( 'newsletter' ); ?>
            
            <?php get_template_part( 'loop-meta' ); ?>

            <?php
            if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
            elseif ( get_query_var('page') ) { $paged = get_query_var('page'); }
            else { $paged = 1; }
            
            $args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged );
            $wp_query = new WP_Query($args); 
        
            get_template_part( 'loop' ); ?>

            <?php get_template_part( 'loop-nav' ); ?>
        </div>
    </div><!-- #content -->

<?php get_footer(); ?>
