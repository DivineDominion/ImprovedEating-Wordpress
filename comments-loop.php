<?php if ( have_comments() ) { ?>

	<h2 id="comments-number"><?php comments_number( '', __( 'Eine Reaktion', 'seamless' ), __( '% Reaktionen', 'seamless' ) ); ?></h2>

	<?php get_template_part( 'comments-loop-nav' ); // Loads the comment-loop-nav.php template. ?>

	<ol class="comment-list">
		<?php wp_list_comments( improvedtheming_comments_args() ); ?>
	</ol>

    <h3>Links von anderen Websites</h3>
    
    <ol class="trackback-list">
        <?php wp_list_comments( improvedtheming_trackbacks_args() ); ?>
    </ol>
    
<?php } // End check for comments. ?>

<?php get_template_part( 'comments-loop-error' ); // Loads the comments-loop-error.php template. ?>