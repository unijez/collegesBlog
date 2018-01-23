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

 <header>



        <div class="left">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/uol_landscape.svg" alt="University Of Lincoln Logo">
        </div>
        <div class="central">
            <h1>Lincoln International <br> Business School</h1>
        </div>
        <div class="right">
          <input type="text" name="search" placeholder="Search" id="search">
		
		  
          <button type="button" class="nav-button">

          	<i class="fal fa-bars"></i>
          	<i class="fal fa-times"></i>

          </button>
        </div>


        <nav class="global-nav retract">

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

							<div class="links">
								
								<a href="">
									<i class="fab fa-instagram fa-2x"></i>
								</a>
								<a href="">
									<i class="fab fa-twitter fa-2x"></i>
								</a>
								<a href="">
									<i class="fab fa-facebook-f fa-2x"></i>
								</a>

							</div> <!-- links -->



        </nav> <!-- global-nav retract -->



      </header>

</main>




	<div id="content" class="site-content">
