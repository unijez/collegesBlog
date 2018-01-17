<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

 			<?php if ( have_posts() ) : ?>

 				<?php while ( have_posts() ) : the_post(); ?>

          <?php if ( has_post_thumbnail() ): // If has thumbnail image do the rest...?>

            <?php
              $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
              // $mobile_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'image-reg-name' );
            ?>

            <!-- <img class="class-name" src="<?php echo $large_image_url[0]; ?>" width="<?php echo $large_image_url[1]; ?>" height="<?php echo $large_image_url[2]; ?>" alt="<?php echo $large_image_url['_wp_attachment_image_alt']['0']; ?>"> -->

              <div class="heading-image" style="background-image: url('<?php echo $large_image_url[0]; ?>')">
                <div class="heading-image_opacity">
                  <h4><?php the_category(','); ?></h4>
                  <h1><?php the_title();?></h1>
				  <h5>Reading time <span class="eta"></span></h5>
                </div>
              </div> <!-- heading-image -->

            <?php else :?>

              <div class="heading-image">
                <h4><?php the_category(','); ?></h4>
                <h1><?php the_title();?></h1>
                <h5>Reading time <span class="eta"></span></h5>
              </div> <!-- heading-image -->

            <?php endif; ?>

            <!-- Main text and image content -->
			       <div class="single-container">

							<div class="author">
								<?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?>
								<h4> <b>By</b> <?php the_author(); ?></h4>
								<h4><?php the_time('F j, Y'); ?></h4>
							</div> <!-- author -->




							<article class="blog-article">
						<div class="eta"></div>

									<div class="word-count"></div>
							<?php the_content();?>


							</article>

            </div> <!-- single-container -->


            <!-- Comments -->

                <?php if ( comments_open() || get_comments_number() ) : ?>

                  <div class="comments-container">
                    <div class="single-container">

                  <?php  comments_template(); ?>

                </div> <!-- single-container -->
                </div> <!-- comments-container -->

              <?php  endif; ?>




 					<?php endwhile; ?>


          <!-- Related posts -->
          <div class="related-container">

    				<h3 class="related-posts">YOU MIGHT ALSO LIKE</h3>
    				<hr></hr>

    				<div class="row">

    					<?php while ( have_posts() ) : the_post(); ?>

    					<div class="item">
    						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    							<a href="<?php the_permalink();?>">
    								<?php the_post_thumbnail('post-intro-image'); ?>
    							</a>
    							<div class="item-text">
    								<h5><?php the_category(','); ?></h5>
    								<a href="<?php the_permalink();?>">
    									<h2><?php the_title();?></h2>
    								</a>
    							</div> <!-- item-text -->
    						</div> <!-- post -->
    					</div> <!-- item -->

              <div class="item">
    						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    							<a href="<?php the_permalink();?>">
    								<?php the_post_thumbnail('post-intro-image'); ?>
    							</a>
    							<div class="item-text">
    								<h5><?php the_category(','); ?></h5>
    								<a href="<?php the_permalink();?>">
    									<h2><?php the_title();?></h2>
    								</a>
    							</div> <!-- item-text -->
    						</div> <!-- post -->
    					</div> <!-- item -->

              <div class="item">
    						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    							<a href="<?php the_permalink();?>">
    								<?php the_post_thumbnail('post-intro-image'); ?>
    							</a>
    							<div class="item-text">
    								<h5><?php the_category(','); ?></h5>
    								<a href="<?php the_permalink();?>">
    									<h2><?php the_title();?></h2>
    								</a>
    							</div> <!-- item-text -->
    						</div> <!-- post -->
    					</div> <!-- item -->


    					<?php endwhile; ?>

    				</div> <!-- row -->

    			</div> <!-- container -->

    		</main><!-- #main -->

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
