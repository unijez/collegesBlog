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
            <a href="#" class="active"><span>Home</span></a>

							<?php
							$defaults = array(
								'theme_location'  => 'home',
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

            <a href="#"><span>Research</span></a>

							<?php
							$defaults = array(
								'theme_location'  => 'research',
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

            <a href="#"><span>Teaching &amp; learning</span></a>

							<?php
							$defaults = array(
								'theme_location'  => 'teachingLearing',
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

            <a href="#"><span>News</span></a>

							<?php
							$defaults = array(
								'theme_location'  => 'news',
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

            <a href="#"><span>Events</span></a>

							<?php
							$defaults = array(
								'theme_location'  => 'events',
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

            <a href="#"><span>Video archive</span></a>

							<?php
							$defaults = array(
								'theme_location'  => 'videoArchive',
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

            <a href="#"><span>School blogs</span></a>

							<?php
							$defaults = array(
								'theme_location'  => 'schoolBlogs',
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

            <a href="#"><span  class="last">Links</span></a>

							<?php
							$defaults = array(
								'theme_location'  => 'links',
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

        </nav>



      </header>

</main>

<?php get_template_part( 'template-parts/slider' ); ?>





	<div id="content" class="site-content">
