<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

	<?php if ( is_singular( get_post_type() ) ) { ?>

		<header class="entry-header">
			<h1 class="entry-title"><?php single_post_title(); ?></h1>
			<?php echo apply_atomic_shortcode( 'entry_byline', '<div class="entry-byline">' . __( 'von [entry-author], [entry-published][entry-terms before=". Abgelegt in " taxonomy="category"] [entry-comments-link before=" | "] [entry-edit-link before=" | "]', 'seamless' ) . '</div>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'seamless' ) . '</span>', 'after' => '</p>' ) ); ?>
		</div><!-- .entry-content -->

	<?php } else { ?>

		<header class="entry-header">
			<?php the_title( '<h2 class="entry-title"><a href="' . get_permalink() . '">', '</a></h2>' ); ?>
			<?php echo apply_atomic_shortcode( 'entry_byline', '<div class="entry-byline">' . __( 'von [entry-author], [entry-published][entry-terms before=". Abgelegt in " taxonomy="category"]', 'seamless' ) . '</div>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-summary">
			<?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image(); ?>
			<?php the_excerpt(); ?>
			<?php wp_link_pages( array( 'before' => '<p class="page-links">' . '<span class="before">' . __( 'Pages:', 'seamless' ) . '</span>', 'after' => '</p>' ) ); ?>
		</div><!-- .entry-summary -->

	<?php } ?>
    
	<footer class="entry-footer">
		<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[entry-comments-link] [entry-edit-link before=" | "] [entry-terms before=" | Tags: "] ', 'seamless' ) . '</div>' ); ?>
	</footer><!-- .entry-footer -->
    

</article><!-- .hentry -->