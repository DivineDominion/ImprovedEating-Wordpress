			<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template. ?>

		</div><!-- #main -->

		<?php get_sidebar( 'subsidiary' ); // Loads the sidebar-subsidiary.php template. ?>

		<?php get_template_part( 'menu', 'subsidiary' ); // Loads the menu-subsidiary.php template. ?>

		<footer id="footer">

			<div class="wrap">

				<div class="footer-content">
                    <small class="license">
                        <?php echo apply_atomic_shortcode( 'footer_content', '<p class="copyright">' . __( 'Except where otherwise noted, content on this site is licensed under a <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" title="Creative Commons &mdash; Attribution-NonCommercial-ShareAlike 3.0 Unported
                          &mdash; CC BY-NC-SA 3.0">Creative Commons Attribution-NonCommercial-ShareAlike License</a>.', 'seamless' ) . '</p>' . '<p class="credit">' . __( 'Powered by [wp-link] and [theme-link].', 'seamless' ) . '</p>' ); ?>
                  </small>
				</div><!-- .footer-content -->

			</div>

		</footer><!-- #footer -->

	</div><!-- #container -->

	<?php wp_footer(); // wp_footer ?>

</body>
</html>