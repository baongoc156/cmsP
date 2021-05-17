<?php
/**
 * The template for displaying the footer.
 * @package Mega Construction
 */
?>
<?php if( get_theme_mod( 'mega_construction_hide_scroll',true) != '') { ?>
  <?php $mega_construction_scroll_align = get_theme_mod( 'mega_construction_back_to_top','Right');
  if($mega_construction_scroll_align == 'Left'){ ?>
    <a href="#content" class="back-to-top scroll-left text-center"><?php esc_html_e('Top', 'mega-construction'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'mega-construction'); ?></span></a>
  <?php }else if($mega_construction_scroll_align == 'Center'){ ?>
    <a href="#content" class="back-to-top scroll-center"><?php esc_html_e('Top', 'mega-construction'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'mega-construction'); ?></span></a>
  <?php }else{ ?>
    <a href="#content" class="back-to-top scroll-right"><?php esc_html_e('Top', 'mega-construction'); ?><span class="screen-reader-text"><?php esc_html_e('Back to Top', 'mega-construction'); ?></span></a>
  <?php }?>
<?php }?>
  <footer role="contentinfo" id="footer">
    <?php //Set widget areas classes based on user choice
    $mega_construction_footer_columns = get_theme_mod('mega_construction_footer_widget', '4');
    if ($mega_construction_footer_columns == '3') {
      $cols = 'col-lg-4 col-md-4';
    } elseif ($mega_construction_footer_columns == '4') {
      $cols = 'col-lg-3 col-md-3';
    } elseif ($mega_construction_footer_columns == '2') {
      $cols = 'col-lg-6 col-md-6';
    } else {
      $cols = 'col-lg-12 col-md-12';
    }
  ?>
    <div class="copyright-wrapper">
      <div class="container">
        <div class="footerinner row">
          <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-1'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-2'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-3'); ?>
          </div>
        <?php endif; ?> 
        <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
            <?php dynamic_sidebar( 'footer-4'); ?>
          </div>
        <?php endif; ?>
        </div>        
      </div>
      <div class="inner">
        <div class="container">
          <div class="copyright">
            <p class="testparabt"><?php mega_construction_credit_link(); ?> <?php echo esc_html(get_theme_mod('mega_construction_text',__('By Themesglance','mega-construction'))); ?></p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>