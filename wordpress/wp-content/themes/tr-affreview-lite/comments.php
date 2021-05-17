<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TR_Affreview_Lite
 */
?>

<div class="comment">

<?php the_comments_navigation(); ?>
	 
	<h3><?php comments_number( '', 'One Comment', 'Comments' ); ?></h3>

		<ul class="list-unstyled">
	    <?php
	        wp_list_comments( array(
	            'style'         => 'ul',
	            'short_ping'    => true,
	            'avatar_size'   => '64',
	            'walker'        => new Bootstrap_Comment_Walker(),
	        ) );
	    ?>
		</ul><!-- .comment-list -->
</div><!-- /.end of comment -->
	<?php the_comments_navigation(); ?>
<?php
// Are there comments to navigate through?
// If comments are closed and there are comments, let's leave a little note, shall we?
if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
?>
<p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'tr-affreview-lite'); ?></p>
<?php endif; ?>
<?php  get_template_part('template-parts/comment-arg'); ?>