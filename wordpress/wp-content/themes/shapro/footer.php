<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapro
 */

?>
<footer>
    <div class="inner">
      <?php if ( is_active_sidebar( 'footer_widget_area' ) ) { ?>
      <div class="top">
        <div class="container">
          <div class="row">
              <?php  dynamic_sidebar( 'footer_widget_area' ); ?>
          </div>
        </div>
       </div>
     <?php } ?>
       <div class="bottom">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'shapro' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'shapro' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'shapro' ), 'Shapro', '<a href="https://unibirdtech.com/">Unibird Tech</a>' );
				?>
		</div><!-- .site-info -->
            </div>
          </div>
        </div>
      </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
