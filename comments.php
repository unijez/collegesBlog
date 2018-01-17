<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage collegeBlog
 * @author     Jez Thompson <jthompson@lincoln.ac.uk>
 * @since 1.0
 * @version 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!

	if ( have_comments() ) : ?>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments('type=comment&callback=mytheme_comment');
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'collegeBlog' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().




						$commenter = wp_get_current_commenter();
						$req = get_option( 'require_name_email' );
						$aria_req = ( $req ? " aria-required='true'" : '' );



						$args_blog = array(

							'comment_field' => '<div class="site-comment__review-body">
							<div class="site-comment__actual"><label for="Your Comment">' . _x( 'Your Comment', 'noun' ) . ' <span class="required">*</span></label> <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></div>',

							'title_reply_before' => __('<h4 class="site-comment__title">'),
							'class_submit' => __('submit-review main-btn'),
							'comment_notes_before' => '',
							'title_reply' => ''.__( 'Leave your Comment','afternoontea' ).'',

							'fields' =>array(
								'author' => '<div class="site-comment__author-detail">
									<div class="site-comment__author"><label for="author">' . __( 'Your Name','afternoontea' ) . ' <span class="required">*</span></label> <input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
								'email'  => '<div class="site-comment__email"><label for="email">' . __( 'Your Email address','afternoontea' ) . ' <span class="required">*</span></label> <input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div></div></div>',

							),

						);






	 comment_form($args_blog); ?>

</div><!-- #comments -->
