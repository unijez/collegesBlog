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

				<h3 class="page-title__inner">RESEARCH</h3>
				<hr></hr>

				<div class="row site-module-inner">
					<?php $query = new WP_Query('cat='.get_cat_ID('Research').' & post_per_page=3'); $counter = 1; ?>

					<?php while ( $query->have_posts() && !( $counter > 3)  ) : $query->the_post(); ?>

					<div class="item">
							<?php get_template_part( 'template-parts/post', 'listing' ); ?>

					</div> <!-- item -->

					<?php
					$counter++;
					endwhile;
					wp_reset_postdata();
					?>

				</div> <!-- row -->

				<h3 class="page-title__inner">TEACHING AND LEARNING</h3>
				<hr></hr>

				<div class="row site-module-inner">
					<?php $query = new WP_Query('cat='.get_cat_ID('Teaching and Learning').'&post_per_page=3'); $counter = 1; ?>
					<?php while ( $query->have_posts() && !( $counter > 3)  ) : $query->the_post(); ?>

					<div class="item">

							<?php get_template_part( 'template-parts/post', 'listing' ); ?>

					</div> <!-- item -->

					<?php
					$counter++;
					endwhile;
					wp_reset_postdata();
					?>

				</div> <!-- row -->

				<h3 class="page-title__inner">NEWS</h3>
				<hr></hr>

				<div class="row site-module-inner">
					<?php $query = new WP_Query('cat='.get_cat_ID('News').'&post_per_page=3'); $counter = 1; ?>
					<?php while ( $query->have_posts() && !( $counter > 3 ) ) : $query->the_post(); ?>
					<div class="item">

							<?php get_template_part( 'template-parts/post', 'listing' ); ?>

					</div> <!-- item -->

					<?php
					$counter++;
					endwhile;
					wp_reset_postdata();
					?>

				</div> <!-- row -->

				<h3 class="page-title__inner">EVENTS</h3>
				<hr></hr>

				<div class="row site-module-inner">
					<?php $query = new WP_Query('cat='.get_cat_ID('Events').'&post_per_page=3'); $counter = 1;?>

					<?php while ( $query->have_posts() && !( $counter > 3)  ) : $query->the_post(); ?>

					<div class="item">
							<?php get_template_part( 'template-parts/post', 'listing' ); ?>

					</div> <!-- item -->

					<?php
					$counter++;
					endwhile;
					wp_reset_postdata();
					?>

				</div> <!-- row -->

			</div> <!-- container -->

			<?php endif;  wp_reset_query(); ?>

		</main><!-- #main -->

	</div><!-- #primary -->

	<?php

get_footer();
