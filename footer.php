<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package New_School_Free_Press
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
            
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'new-school-free-press' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'new-school-free-press' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'new-school-free-press' ), 'new-school-free-press', '<a href="http://underscores.me/">Underscores.me</a>' );
                 
                 
			?>
<div id="footersignup">



<input type="email" name="contact[EMAIL]" id="emailinput" placeholder>
        </div>
		<!-- .site-footer -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
