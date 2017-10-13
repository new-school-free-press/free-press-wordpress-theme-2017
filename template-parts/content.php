<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package New_School_Free_Press
 */

?>
<script src="https://use.typekit.net/owo1sih.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
        
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
            
                <?php if ( function_exists( 'coauthors_posts_links' ) ) {
            coauthors_posts_links();
        } else {
            the_author_posts_link();
        } ?>

		</div><!-- .entry-meta -->

		<?php
		endif; ?>
            <div class="post-img">
            <?php 
        if (has_post_thumbnail()) {
            the_post_thumbnail( 'full' );
            }
            ?>
            </div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'new-school-free-press' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'new-school-free-press' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php new_school_free_press_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
