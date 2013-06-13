<li id="comment-<?php comment_ID(); ?>" class="<?php hybrid_comment_class(); ?>">

	<?php echo apply_atomic_shortcode( 'comment_meta', '<div class="comment-meta">[comment-author] [comment-published] [comment-permalink before="| "] [comment-edit-link before="| "]</div>' ); ?>

	<div class="pingback-text">
		<blockquote><?php comment_text(); ?></blockquote>
	</div><!-- .comment-content -->

<?php /* No closing </li> is needed.  WordPress will know where to add it. */ ?>

