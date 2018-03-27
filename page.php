<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage collegesBlog
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- Main text and image content -->
			 <div class="single-container">

				 <?php
 			 		have_posts();
  				the_post();

 					get_template_part( 'template-parts/content', 'page' );
 				?>

			</div> <!-- single-container -->

			<!-- Comments -->
					<?php if ( comments_open() || get_comments_number() ) : ?>

						<div class="comments-container">
							<div class="single-container">

						<?php  comments_template(); ?>

					</div> <!-- comments-container -->
						
				<?php  endif; ?>
			
				
			<!--Display Related Posts-->
			<?php get_template_part( 'template-parts/releated', 'posts' ); ?>
			
			
			
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
