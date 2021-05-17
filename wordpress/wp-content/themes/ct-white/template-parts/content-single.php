<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ct-white
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	
	<div class="singular-thumb">
		<?php
			if (has_post_thumbnail()) {
				the_post_thumbnail();
			} else { ?>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 70"><rect width="100" height="70" style="fill:#28c88e"/><path d="M59.93,45.1H40A2.12,2.12,0,0,1,37.88,43V30.05A2.12,2.12,0,0,1,40,27.93h4.7a.71.71,0,0,0,.43-.27L45.94,26a2.21,2.21,0,0,1,1.79-1.08h6A2.21,2.21,0,0,1,55.52,26l.81,1.68a.59.59,0,0,0,.43.27H60a2.12,2.12,0,0,1,2.12,2.12V43a2.23,2.23,0,0,1-2.19,2.15ZM40.11,29.44a.72.72,0,0,0-.71.76V42.88a.7.7,0,0,0,.7.71H59.9a.7.7,0,0,0,.7-.71V30.15a.7.7,0,0,0-.7-.71H55.63A2,2,0,0,1,54,28.36l-.76-1.67a.59.59,0,0,0-.41-.28H47.16a.71.71,0,0,0-.41.28L46,28.36a2,2,0,0,1-1.67,1.08Z" style="fill:#fff"/><path d="M50,42a6.32,6.32,0,1,1,6.31-6.31A6.32,6.32,0,0,1,50,42Zm0-11.26a4.95,4.95,0,1,0,5,5,5,5,0,0,0-5-5Z" style="fill:#fff"/><path d="M57.72,30.72A.71.71,0,1,1,57,30a.72.72,0,0,1,.7.71" style="fill:#fff"/><polygon points="40.91 26.41 43.94 26.41 43.94 26.92 40.91 26.92 40.91 26.41" style="fill:#fff"/><path d="M50,32.48V32a3.55,3.55,0,0,0-3.54,3.54h.71A2.82,2.82,0,0,1,50,32.68" style="fill:#fff"/></svg>
				<?php
				
			}
		?>
	</div>
	
	<div class="entry-meta">
		<?php
			ct_white_posted_on();
			ct_white_posted_by();
		?>
	</div><!-- .entry-meta -->

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ct-white' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ct-white' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php ct_white_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
