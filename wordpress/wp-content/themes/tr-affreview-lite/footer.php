<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TR_Affreview_Lite
 */

 ?>

	<!-- ========== start of footer-top section ========== -->
	<section id="footer-top">
		
	</section><!-- /#end of footer-top section -->

	<!-- ========== start of footer section ========== -->
	<section id="footer">
		<div class="container">
			<div class="footer-text">
				<p>
					<?php
						$theme_url = 'https://www.themerally.com/';
						/* translators: 1: Year, 2: Theme name, 3: Theme author, 4:CMS name. */
						$copyright = sprintf( esc_html__( '&copy; %1$s All Rights Reserved by %2$s. Theme Developed by %3$s. Powered by %4$s', 'tr-affreview-lite' ), '<span>'. date('Y') .'</span>' , '<a href="' . esc_url( home_url( '/' ) ) . '">'. get_bloginfo( 'name' ) .'</a>', '<a href="' . esc_url( 'https://www.themerally.com/' ) . '" target="blank" >Theme Rally</a>', '<a href="'. esc_url('https://wordpress.org/').'" target="blank" >WordPress</a>.');
						$copyright_noback = sprintf( esc_html__( '&copy; %1$s All Rights Reserved by %2$s. Theme Developed by %3$s. Powered by %4$s', 'tr-affreview-lite' ), '<span>'. date('Y') .'</span>' , '<a href="' . esc_url( home_url( '/' ) ) . '">'. get_bloginfo( 'name' ) .'</a>', 'Theme Rally', '<a href="'. esc_url('https://wordpress.org/').'" target="blank" >WordPress</a>.');

						if(is_home() || is_front_page()){
							if(get_theme_mod( 'footer_copyright')){
								echo wp_kses_post( get_theme_mod( 'footer_copyright', $copyright ) );
							}else{
								echo $copyright; /* WPCS: xss ok. */
							}
						}
						else{
							if(get_theme_mod( 'footer_copyright')){
								echo wp_kses_post( get_theme_mod( 'footer_copyright', $copyright_noback ) );
							}else{
								echo $copyright_noback; /* WPCS: xss ok. */
							}
						}
					?>
				</p>
			</div><!-- /.end of footer-text -->
		</div><!-- /.end of container -->
	</section><!-- /#end of footer section -->
	<?php wp_footer(); ?>
</body>
</html>

 
 