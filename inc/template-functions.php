<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package WordPress
 * @subpackage collegeBlog
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function collegeBlog_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'collegeBlog_body_classes' );
/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function collegeBlog_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'collegeBlog_pingback_header' );
/**
 * Remove Inline Styles From Figures
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function remove_img_caption_style($attr, $content = null) {
		// New-style shortcode with the caption inside the shortcode with the link and image tags.
		if ( ! isset( $attr['caption'] ) ) {
			if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
				$content = $matches[1];
				$attr['caption'] = trim( $matches[2] );
			}
		}
		// Allow plugins/themes to override the default caption template.
		$output = apply_filters('img_caption_shortcode', '', $attr, $content);
		if ( $output != '' )
			return $output;
		extract(shortcode_atts(array(
			'id'	  => '',
			'align'	  => 'alignnone',
			'width'	  => '',
			'caption' => ''
		), $attr));
		if ( 1 > (int) $width || empty($caption) )
			return $content;
		if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
		return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . '">'
		. do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></figure>';
}
add_shortcode('wp_caption', 'remove_img_caption_style');
add_shortcode('caption', 'remove_img_caption_style');
/**
 * Rebuilt funcion for comments display.
 */
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard">

						<?php echo get_avatar($comment,$default='<path_to_url>' ); ?>

						<ul>
							<li>
								<?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
							</li>
							<li>
								<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s'), get_comment_date('F j, Y')) ?></a><?php edit_comment_link() ?>
									<span class="comments-bullet">&#8226;</span>
									<div class="reply">
						         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
						      </div>
								</div>
							</li>
						</ul>

		  </div> <!--comment-author-->
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>

	     <div class="comment__content">

	      <?php comment_text() ?>

	     </div> <!--comment__content-->

     </div>
<?php
        }
/**
* Nav menu function.
*/

register_nav_menu( 'main', 'Main Menu' );

/**
* Search function.
*/

function collegeBlog_search_form( $form ) {
	$form =
	'<form role="search" method="get" id="searchform" class="site-header__search--form" action="' . esc_url( home_url( '/' ) ). '" >
		<div class="search-container">
			<label class="screen-reader-text" for="s">' . __( 'Search for:', 'collegeBlog' ) . '</label>
			<input type="text" placeholder="' . esc_attr__( 'Search', 'collegeBlog' ) . '" value="' . get_search_query() . '" name="s" id="s" class="blog-search" />
			<button type="submit" id="searchsubmit">
				<i class="far fa-search"></i>
			</button>
		</div>
	</form>';

	return $form;
}
add_filter( 'get_search_form', 'collegeBlog_search_form', 100 );
// DISABLE WORDPRESS COMMENTS JS
function itsg_disable_comment_js(){
    wp_deregister_script( 'comment-reply' );
}
add_action( 'init', 'itsg_disable_comment_js' );
// Slider Image Function: adds a replacement image when no thumbnail is found
function slider_image() {
	global $post;
	$image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'hero-header', false);
	if ($image_url[0] == false) {
			echo "<div class="header-image"></div>";
	} else {
			echo $image_url[0];
	}
}
// Default Image Function: adds default image when no preset thumbnail is found
function default_image($thumbnail) {

	if ( has_post_thumbnail() ) {
		the_post_thumbnail($thumbnail);
	} else {
		?><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" /><?php
	}
}
