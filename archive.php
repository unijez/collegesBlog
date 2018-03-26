<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
* @package WordPress
* @subpackage uolCollege
* @author     Jez Thompson <jthompson@lincoln.ac.uk>
* @since 1.0
* @version 1.0
 */

 get_header(); ?>

 	<div id="primary" class="content-area">

 		<main id="main" class="site-main">

 			<?php if ( have_posts() ) : ?>

 			<div class="main-container">

 				<h3 class="page-title__inner"><?php the_archive_title();?></h3>
 				<hr></hr>

 				<div class="row site-module-inner">

 					<?php while ( have_posts() ) : the_post(); ?>

 					<div class="item">
 						
 						<?php get_template_part( 'template-parts/post', 'listing' ); ?>
 						
 					</div> <!-- item -->

 					<?php endwhile; ?>

 				</div> <!-- row -->

 			</div> <!-- container -->

 			<?php the_posts_pagination( array(
 				'mid_size' => 2,
 				'prev_text' => __( 'Back', 'uolCollege' ),
 				'next_text' => __( 'Onward', 'uolCollege' ),
 			) ); ?>

 			<?php endif;  wp_reset_query(); ?>

 		</main><!-- #main -->

 	</div><!-- #primary -->

 	<?php

 get_footer();
