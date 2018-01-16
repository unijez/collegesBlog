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








	<nav class="global-nav retract" id="pushIt">
        <button type ="button" class="closeBtn" id="menuClose">&times;</button>
        <a href="#" class="active"><span>Home</span></a>
        <a href="#"><span>Research</span></a>
        <a href="#"><span>Teaching &amp; learning</span></a>
        <a href="#"><span>News</span></a>
        <a href="#"><span>Events</span></a>
        <a href="#"><span>Video archive</span></a>
        <a href="#"><span>School blogs</span></a>
        <a href="#"><span  class="last">Links</span></a>
    </nav>

    <main id="getPushed">
      <div class="overlay dNone" id="overlay">
      </div>
      <header>
        <div class="left">
          <img src="" alt="University Of Lincoln Logo">
        </div>
        <div class="central">
            <h4>Lincoln International <br> Business School</h4>
        </div>
        <div class="right">
          <input type="text" name="search" placeholder="Search" id="search">
          <button type ="button" id="menuOpen"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/burgericon.png" alt="Burger Icon"></button>
        </div>
      </header>

    </main>







	<div id="content" class="site-content">
