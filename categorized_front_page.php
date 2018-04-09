<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * Template Name: Categorized Front Page
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

 	<?php get_template_part( 'template-parts/slider' ); ?>
 	<div id="primary" class="content-area">
 			<?php if ( have_posts() ) : ?>
			<?php $categoryIDs = get_field('front_page_categories');
			?>
 			<div class="main-container">
				<?php if($categoryIDs[0] != null): ?>
 				<h3 class="page-title__inner"><?php echo get_cat_name($categoryIDs[0]); ?></h3>
 				<hr></hr>

 				<div class="row site-module-inner">
 					<?php $query = new WP_Query('cat='.$categoryIDs[0].' & post_per_page=3'); $counter = 1; ?>

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
				<?php endif; ?>
				<?php if($categoryIDs[1] != null): ?>
 				<h3 class="page-title__inner"><?php echo get_cat_name($categoryIDs[1]); ?></h3>
 				<hr></hr>

 				<div class="row site-module-inner">
 					<?php $query = new WP_Query('cat='.$categoryIDs[1].'&post_per_page=3'); $counter = 1; ?>
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
				<?php endif; ?>
				<?php if($categoryIDs[2] != null): ?>
 				<h3 class="page-title__inner"><?php echo get_cat_name($categoryIDs[2]); ?></h3>
 				<hr></hr>

 				<div class="row site-module-inner">
 					<?php $query = new WP_Query('cat='.$categoryIDs[2].'&post_per_page=3'); $counter = 1; ?>
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
				<?php endif; ?>
				<?php if($categoryIDs[3] != null): ?>
 				<h3 class="page-title__inner"><?php echo get_cat_name($categoryIDs[3]); ?></h3>
 				<hr></hr>

 				<div class="row site-module-inner">
 					<?php $query = new WP_Query('cat='.$categoryIDs[3].'&post_per_page=3'); $counter = 1;?>

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
				<?php endif; ?>
 			</div> <!-- container -->

 			<?php endif;  wp_reset_query(); ?>

 		</main><!-- #main -->

 	</div><!-- #primary -->

 	<?php

 get_footer();
