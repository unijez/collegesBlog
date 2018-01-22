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

  <div class="footer-top">
    <?php/*
      if (
        is_active_sidebar( 'footer-1'  )
        is_active_sidebar( 'footer-1' ) &&
        is_active_sidebar( 'footer-1'  ) &&
        is_active_sidebar( 'footer-1' ) &&
        ) :
     */?>
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
  <?/* endif;*/?>
  <div class="footer-bottom">

  </div>



<?php wp_footer(); ?>

</body>
</html>
