<?php
/**
 * Displays releated posts if needed.
 * @package WordPress
 * @subpackage uolCollege
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

?>

<?php if( function_exists('acf_add_local_field_group') )	:?>

					<?php 
						
						$ids = get_field('related_posts_query', false, false);
						
						
						$args = array(
						
								'post_type'      	=> array('post','page'),
								'posts_per_page'	=> 3,
								'post__in'			=> $ids,
								'post__not_in' => get_option( 'sticky_posts' ),
								'post_status'		=> 'any',
								'orderby'        	=> 'post__in',
						);
						
						
						$releated_posts = new WP_Query( $args );
						
						if ( $releated_posts->have_posts() ) : 
						
						
					?>
				
						<?php if( $ids ): //If some related posted ?>
									
									
						<div class="related-container">
						
						    				<h3 class="related-posts">YOU MIGHT ALSO LIKE</h3>
						    				<hr></hr>
						
						    				<div class="row">			
									
									
												<?php while ( $releated_posts->have_posts() ) : $releated_posts->the_post() ?>	
													
													
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
																	</div> <!-- item-text -->
																</div> <!-- post -->
													</div> 
											
												<?php endwhile ?>
											
											</div> <!-- row -->
						
						</div> <!-- container -->	


						<?php endif; ?>		
					
		<?php endif; wp_reset_query(); ?>
		

<?php endif; ?>		