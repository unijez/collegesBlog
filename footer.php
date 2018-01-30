<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
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


</div> <!--site-content-->


<footer class="site-footer">

  <div class="footer-top">

    <div class="col">
      <?php dynamic_sidebar( 'footer-1' ); ?>
    </div><!-- col-1 -->
    <div class="col">
      <?php dynamic_sidebar( 'footer-2' ); ?>
    </div><!-- col-2 -->
    <div class="col">
      <?php dynamic_sidebar( 'footer-3' ); ?>
    </div><!-- col-3 -->
    <div class="col">
      <?php dynamic_sidebar( 'footer-4' ); ?>
    </div> <!-- col-4 -->

  </div>  <!-- footer-top -->

  <div class="footer-bottom">

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="<?php bloginfo( 'name' ); ?>">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/uol_landscape.svg" alt="<?php bloginfo( 'name' ); ?> University Of Lincoln Logo">
    </a>

    <p>	&#169; <b>University of Lincoln.</b> All rights reserved</p>

  </div>



</footer> <!-- site-footer-->


<?php wp_footer(); ?>

</body>
</html>
