<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hybryda2017
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'hybryda2017' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'hybryda2017' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'hybryda2017' ), 'hybryda2017', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Scripts -->
			<script src="<?php echo(bloginfo(template_directory).'/js/bootsrap.js'); ?>"></script>
			<script src="<?php echo(bloginfo(template_directory).'/js/jquery.min.js'); ?>"></script>

</body>
</html>
