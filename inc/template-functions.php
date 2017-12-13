<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package hello
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function hello_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'hello_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function hello_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'hello_pingback_header' );


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