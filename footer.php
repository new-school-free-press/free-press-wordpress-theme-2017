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
		
            
             <div class="footer-container">
                
                <div class="column1">
                 <h3>Arts&ampCulture </h3> <hr>
                <ul>
					<li> Fashion </li>
                    <li> Music </li>
                    <li> Video </li>
                </ul>
                </div>
    
            
            <div class="column2">
                    <h3>News</h3> <hr>
                <ul>
					<li> University </li>
                    <li> Politics </li>
                    <li> New York </li>
                </ul>
            </div>
            
            
         <div class="column3">
                    <h3>TNS</h3> <hr>
                <ul>
					<li> Eugene Lang </li>
                    <li> Parsons </li>
                    <li> Mannes </li>
                    <li> Jazz </li>
                    <li> Drama </li>
                    
                </ul>
          </div>
        
            <div class="column4">
                    <h3>Opinion</h3> <hr>
                <ul>
					<li> Editorials </li>
                    <li> Opinions </li>
                    <li> Submit </li>
                    <li> Contact </li>
                    <li> Masthead </li>
                    
                </ul>
          </div>

    
            
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'new-school-free-press' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'new-school-free-press' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'new-school-free-press' ), 'new-school-free-press', '<a href="http://underscores.me/">Underscores.me</a>' );
                 
                 
			?>
		</div><!-- .site-footer -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
