<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hello
 */

 get_header(); ?>

 	<div id="primary" class="content-area">

 		<main id="main" class="site-main">

 			<?php if ( have_posts() ) : ?>

 					<?php while ( have_posts() ) : the_post(); ?>

						<div class="single-container">

							<?php the_content();?>

						</div>

 					<?php endwhile; ?>

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
