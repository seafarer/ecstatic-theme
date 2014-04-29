<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ecstatic
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer block" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'ecstatic' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'ecstatic' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'ecstatic' ), 'ecstatic', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
  </div><!-- .inner-page -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
