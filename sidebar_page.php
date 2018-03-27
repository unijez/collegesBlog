<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * Template Name: Page with Sidebar
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
      <?php if ( has_post_thumbnail() ): ?>
        <?php
					$display_header = true;
          $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
          // $mobile_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'image-reg-name' );
        ?>
          <div class="heading-image" <?php if(header_post_image() == true) { echo 'style="background-image: url('.header_post_image().')"'; }?>>
            <div class="heading-image_opacity">
              <h4 class="brighter">
                <?php $categories = get_the_category();
							  if ( ! empty( $categories ) ) {
								   echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
							  }?>
              </h4>
              <h1><?php the_title();?></h1>
            </div>
          </div> <!-- heading-image -->

        <?php endif; ?>
			 		<div class="single-container-extended">
					<aside class="first-aside">
						<?php have_posts();
									the_post();
									get_template_part( 'template-parts/content', 'page' );
		 				?>
					</aside>
					<aside class="second-aside">
						<?php if( is_active_sidebar('sidebar-1') ) { dynamic_sidebar('sidebar-1'); } else { echo "Seems like there's nothing here, add some widgets to fill it out"; }?>
					</aside>
					</div>
			<!-- single-container -->

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
?>
