<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * Template Name: Posts Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage collegeBlog
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

			<div class="row site-module-inner">
				<?php $query = new WP_Query('cat=190&post_per_page=3'); ?>
				<?php while ( $query->have_posts() ) : $query->the_post(); ?>

				<div class="item">
						<?php get_template_part( 'template-parts/post', 'listing' ); ?>

				</div> <!-- item -->

				<?php
				endwhile;
				wp_reset_postdata();
				?>
			</div> <!-- row -->
			<!-- single-container -->

			<!-- Comments -->


			<!--Display Related Posts-->
			<?php get_template_part( 'template-parts/releated', 'posts' ); ?>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>
