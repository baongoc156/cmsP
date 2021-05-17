<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package CT_White
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'ct-white' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ct-white' ); ?></p>

				<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/404.png'); ?>" alt="<?php _e('Page Not Found', 'ct-white'); ?>">
				
				<p><?php _e('You can try searching for what you are looking for!', 'ct-white'); ?></p>
					<?php
					the_widget( 'WP_Widget_Search' );
					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
