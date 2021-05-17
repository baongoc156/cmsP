<?php
/**
 * The template for displaying 404 pages (Not Found).
 * @package Mega Construction
 */

get_header(); ?>

<div class="container">
    <main id="maincontent" role="main" class="page-content">
		<div class="notfound py-4 text-center">
			<?php if(get_theme_mod('mega_construction_404_title','404 Not Found')){ ?>
				<h1><?php echo esc_html( get_theme_mod('mega_construction_404_title',__('404 Not Found', 'mega-construction' )) ); ?></h1>
			<?php }?>
			<?php if(get_theme_mod('mega_construction_404_button_label','Return to the home page')){ ?>
				<div class="read-moresec mt-3">
	        		<a href="<?php echo esc_url( home_url() ); ?>" class="button py-2 px-4"><?php echo esc_html( get_theme_mod('mega_construction_404_button_label',__('Return to the home page', 'mega-construction' )) ); ?><span class="screen-reader-text"><?php esc_html_e('Return to the home page','mega-construction'); ?></span></a>
				</div>
			<?php }?>
		</div>
		<div class="clearfix"></div>
    </main>
</div>
	
<?php get_footer(); ?>