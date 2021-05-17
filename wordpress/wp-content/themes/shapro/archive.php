<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Shapro
 */

get_header();
get_template_part('template-parts/site','breadcrumb');
?>

	<main id="content" class="content">
      <div class="container">
        <div class="row">
        	<!--content-->
          <div class="col-md-8">

		<?php if ( have_posts() ) : ?>

			<header class="page-header mb-3">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;

		// Post Pagination links.
					the_posts_pagination( array(
						'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
						'next_text'          => '<i class="fa fa-angle-double-right"></i>'
					) );
		?>
	</div>
	<?php
get_sidebar(); ?>
</div></div>
	</main><!-- #main -->

<?php
get_footer();