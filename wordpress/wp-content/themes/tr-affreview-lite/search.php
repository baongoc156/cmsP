<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package TR_Affreview_Lite
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div class="container"> 
			<main id="main" class="site-main row">
				<div class="<?php echo esc_attr( tr_affreview_lite_content_layout() ); ?>">
					<?php
					if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title"><?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for: %s', 'tr-affreview-lite' ), '<span>' . get_search_query() . '</span>' );
							?></h1>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile; ?>

						<div class="blog-pagination">
							<?php previous_posts_link('Previous Page'); ?>
							<div class="pull-right">
								<?php next_posts_link('Next Page'); ?>
							</div>
						</div><!-- /.pagination -->

					<?php else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
				</div><!-- .col-md-8 -->
				<?php get_sidebar(); ?>
			</main><!-- #main -->
		</div><!-- .container -->
	</section><!-- #primary -->

<?php
get_footer();
