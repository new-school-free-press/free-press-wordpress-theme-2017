<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package New_School_Free_Press
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
	   <meta charset="<?php bloginfo( 'charset' ); ?>">
	   <meta name="viewport" content="width=device-width, initial-scale=1">
	   <link rel="profile" href="http://gmpg.org/xfn/11">

	   <?php wp_head(); ?>
    </head>

        <body <?php body_class(); ?>>
    
    
            <div id="page" class="site">
	

	           <header id="site-header">

                    <?php
                    the_custom_logo();
                    if ( is_front_page() && is_home() ) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php
                    endif;

                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>

                    <?php
                    endif; ?>
            <!-- .site-branding -->
                   <div class="meta-header">
                        <img id="header-logo" src="/images/nsfplogofinal.svg" style="">
                   </div>
                        <nav id="entry-nav">
				            <a href="" class="nav-anchor-art">Culture</a>
                            <a href="" class="nav-anchor-news">News</a>
                            <a href="" class="nav-anchor-campus">Campus</a>
                            <a href="" class="nav-anchor-video">Video</a>
                            <a href="" class="nav-anchor-opinion">Opinion</a>
                            <a href="" class="nav-anchor-submit">Submit</a>
                        </nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
