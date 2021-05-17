<?php
/**
 *	Footer Sidebar
 */

function oro_footer_sidebar() { ?>
	<div id="footer-sidebar">
		<div class="container">
			<div class="row">
				<?php if ( is_active_sidebar( 'footer-1' ) ) { ?>
					<div class="footer-column col-md-4">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
					<?php
					}
				?>
				
				
				<?php if ( is_active_sidebar( 'footer-2' ) ) { ?>
					<div class="footer-column col-md-4">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
					<?php
					}
				?>
				
				<?php if ( is_active_sidebar( 'footer-3' ) ) { ?>
					<div class="footer-column col-md-4">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
					<?php
					}
				?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div>
<?php } ?>