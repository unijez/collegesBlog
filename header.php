<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage collegeBlog
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
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

<body>

<div class="overlay"></div>


<header class="site-header">

	
	<div class="site-module site-module-inner level-elements">
	

        <div class="site-header__logo level-left">
		  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="<?php bloginfo( 'name' ); ?>">
	          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/uol_landscape.svg" alt="<?php bloginfo( 'name' ); ?> University Of Lincoln Logo">
		  </a>
        </div> <!--site-header__logo-->
		
        <div class="site-header__branding level-left">
            <h1>Lincoln International <br> Business School</h1>
        </div> <!--site-header__branding-->
		
        <div class="site-header__search level-right">

					<?php get_search_form() ?>

          
		  
        </div> <!-- site-header__search -->

		
		<button type="button" class="nav-button">
		
		          	<i class="fal fa-bars"></i>
		          	<i class="fal fa-times"></i>
		
		          </button>
		

        <nav class="global-nav retract">
					<div class="collapse">
							<?php
							$defaults = array(
								'theme_location'  => 'main',
								'menu'            => '',
								'container'       => 'div',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '%3$s',
								'depth'           => 0,
								'walker'          => ''
							);

							wp_nav_menu( $defaults );
							?>
					</div> <!-- collapse -->

					<div class="links collapse">
						<a href="">
							<i class="fab fa-instagram fa-2x"></i>
						</a>
						<a href="">
							<i class="fab fa-twitter fa-2x"></i>
						</a>
						<a href="">
							<i class="fab fa-facebook-f fa-2x"></i>
						</a>
					</div> <!-- links collapse -->


        </nav> <!-- global-nav retract -->

	</div> <!--site-module-inner-->

</header>



<div id="content" class="site-content">
