<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TR_Affreview_Lite
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<div class="<?php echo esc_attr( tr_affreview_lite_content_layout() ); ?>">
						<div class="blog-post">
							<?php if ( have_posts() ) : ?>

							<header id="breadcrumb">
								<div class="breadcrumb">
									<?php
										the_archive_title( '<h1 class="page-title">', '</h1>' );
										the_archive_description( '<div class="archive-description">', '</div>' );
									?>
								</div><!-- /.end of breadcrumb -->
							</header><!-- /#end of breadcrumb section -->

							<?php
  								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_format() );

								endwhile;

							else :

								get_template_part( 'template-parts/content', 'none' );

							endif; ?>
							<div class="blog-pagination">
								<?php previous_posts_link(esc_html__( 'Previous Page', 'tr-affreview-lite' )); ?>
								<div class="pull-right">
									<?php next_posts_link(esc_html__('Next Page', 'tr-affreview-lite')); ?>
								</div>
							</div><!-- /.pagination -->
						</div>
					</div><!-- .col-md-8 -->
					<?php get_sidebar(); ?>
				</div><!-- .row -->
			</div><!-- .comtainer -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();

