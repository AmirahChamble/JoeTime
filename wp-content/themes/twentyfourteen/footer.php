<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"0><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'Amirah' ); ?></a>
			</div><!-- .site-info -->
			<?php 
				$claimer ="<p>Property of Amirah for Educational/learning purposes</p> ";
				$contact = "<p>Contact us at 'fake.email@notARealEmail.com'</p>";
				
				printf($claimer);
				printf($contact);
			?>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>