<?php
/*
** File for Social Icons
*/
?>

<?php if (get_theme_mod('ct_white_social_enable')) { ?>
<div id="ct-social-icons">
	<?php
	for ($i = 1; $i <= 5; $i++) :
		$social = get_theme_mod('ct_white_social_'.$i);
		$social_url = get_theme_mod('ct_white_social_url'.$i);
		if ( ($social != 'none') && ($social != '') && ($social_url !='' ) ) : ?>
	
	            <div class="icon">
	                <a href="<?php echo esc_url($social_url); ?>" target="_blank">
	                   <span class="dashicons dashicons-<?php echo $social; ?>"></span>
	                </a>
	            </div>
		<?php endif;
	
	endfor; ?>
</div>
<?php } ?>