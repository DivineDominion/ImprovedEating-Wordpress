<?php
/*
Template Name: All Posts (index) 
*/

get_header(); ?>

    <div id="content" class="hfeed">

    	<?php get_template_part( 'loop-meta' ); // Loads the loop-meta.php template. ?>

		<?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array( 'post_type' => 'post', 'posts_per_page' => 10, 'paged' => $paged );
        $wp_query = new WP_Query($args); 
        
        get_template_part( 'loop' ); // Loads the loop.php template. ?>

    	<?php get_template_part( 'loop-nav' ); // Loads the loop-nav.php template. ?>

    </div><!-- #content -->

<?php get_footer(); ?>
