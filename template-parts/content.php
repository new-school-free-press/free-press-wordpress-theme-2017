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
<div class="article-content">
	<header class="entry-header">
		<?php
		if ( is_singular() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
        } else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        }
  
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
            <div class="post-categories">
                <?php the_category( ' ' ); ?>
            </div>    
            <div class="entry-meta-date">
                <?php the_date('m.d.Y'); ?>
            </div>
            <div class="entry-meta-byline">
                <?php if ( function_exists( 'coauthors_posts_links' ) ) {
                    coauthors_posts_links();
                } else {
                    the_author_posts_link();
                } ?>
            </div> 
            <div class="entry-meta-dek">
                <?php the_excerpt(); ?>
            </div>    
        </div><!-- .entry-meta -->
        <?php
        endif; ?>
   
<!-- MAIN PAGE PHP -->
                      <?php 
        if (has_post_thumbnail()) {
            if ( is_singular() ) :
                the_post_thumbnail( 'full' );
            else:
                the_post_thumbnail( 'medium' );
            endif;
        }
            ?>
        
<!--MAIN PAGE END-->
           
	</header><!-- .entry-header -->
    
    <?php
            if ( in_category('news') ) {
            // news category template ?> 
            <div class="news-story-wrapper">
    <?php
            }
                
	if (is_singular()){
    ?>
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
	</div>
                <!-- .entry-content -->
    <?php
    }
    if (is_singular()){
     if ( in_category('news') ) {
            // news category template ?>
            <div class="news-sidebar">sidebar</div>
            </div><!-- / .news-story-wrapper -->
        <?php
                
                                }  
                    }
        ?>              
                
    </div><!--/ news-storry-wrapper-->
    </div> <!--/ article-content-->
</article><!-- #post-<?php the_ID(); ?> -->
