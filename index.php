<?php get_header(); // Loads the header.php template. ?>

    <div id="content" class="hfeed">
        
        <div class="container">
            <?php get_template_part( 'loop-meta' ); ?>
            <?php get_template_part( 'loop' ); ?>
            <?php get_template_part( 'loop-nav' ); ?>
        </div>
    </div><!-- #content -->

<?php get_footer(); // Loads the footer.php template. ?>