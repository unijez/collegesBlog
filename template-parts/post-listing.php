<?php
/**
 * Displays post listing grouping
 * @package WordPress
 * @subpackage unilinc
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

?>

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
		

		<h2 class="post-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
	
		<time class="date-published" datetime="<?php the_time('d/m/Y') ?>"><?php the_time('jS F Y') ?></time>
		
		<?php the_excerpt();?>
	</div> <!-- item-text -->
</div> <!-- post -->