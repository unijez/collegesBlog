<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

	<?php get_template_part( 'template-parts/slider' ); ?>
	<div id="primary" class="content-area">

			<?php if ( have_posts() ) : ?>

			<div class="main-container">

				<h3 class="page-title__inner">LATEST POSTS</h3>
				<hr></hr>

				<div class="row site-module-inner">

					<?php while ( have_posts() ) : the_post(); ?>

					<div class="item">
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<a href="<?php the_permalink();?>">
								<?php default_image('post-intro-image'); ?>
							</a>
							<div class="item-text">
								<h5>
									<?php $categories = get_the_category();
									if ( ! empty( $categories ) ) {
    								echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
									}?>
								</h5>
								<a href="<?php the_permalink();?>">
									<h2><?php the_title();?></h2>
								</a>
								<p><?php the_excerpt();?></p>
							</div> <!-- item-text -->
						</div> <!-- post -->
					</div> <!-- item -->

					<?php endwhile; ?>

				</div> <!-- row -->

			</div> <!-- container -->

			<?php the_posts_pagination( array(
				'mid_size' => 2,
				'prev_text' => __( 'Back', 'textdomain' ),
				'next_text' => __( 'Onward', 'textdomain' ),
			) ); ?>

			<?php endif;  wp_reset_query(); ?>

		</main><!-- #main -->

	</div><!-- #primary -->

	<?php

get_footer();
