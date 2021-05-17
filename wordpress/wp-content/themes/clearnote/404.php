<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Clearnote
 */

get_header();
?>

<div class="container-fluid">
	<div class="row justify-content-center page-header-row">
		<div class="col-md-8">
			<header class="page-header text-center">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'clearnote' ); ?></h1>
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'clearnote' ); ?></p>
			</header><!-- .page-header -->
		</div>
	</div>
</div>

<div class="container">
	<div class="row justify-content-center">
		<div id="primary" class="content-area col-md-9">
			<main id="main" class="site-main">

				<section class="error-404 not-found">

					<div class="page-content">
						<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );
						?>

						<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'clearnote' ); ?></h2>
							<ul>
								<?php
								wp_list_categories(
									array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									)
								);
								?>
							</ul>
						</div><!-- .widget -->

						<?php
						/* translators: %1$s: smiley */
						$clearnote_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'clearnote' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$clearnote_archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
						?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
<?php
get_footer();
