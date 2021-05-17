<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package TR_Affreview_Lite
 */

get_header(); ?>

	<div id="primary" class="content-area-404 ">
		<main id="main" class="site-main">
			<section class="error-404 not-found">
				<div class="container"> 
					<div class="content-404"> 
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'tr-affreview-lite'); ?></h1>
						</header><!-- .page-header -->
						<div class="page-content-404">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'tr-affreview-lite' ); ?></p>

							<a href="<?php echo esc_url( home_url() ) ?>"><?php esc_html_e( 'go to home page' , 'tr-affreview-lite' ); ?></a>

							<p class="or"><?php esc_html_e( 'or' , 'tr-affreview-lite' ); ?></p>
							<div class="form-404"> 
								<?php get_search_form(); ?>
							</div>
						</div><!-- .page-content -->
				   </div>
				</div>
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();