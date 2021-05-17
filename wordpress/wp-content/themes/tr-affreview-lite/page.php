<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package TR_Affreview_Lite
 */

get_header();

?>
	<section id="post-details" class="section-padding">
		<div class="container">
			<div class="post-details-area">
				<?php while(have_posts()): the_post(); ?>
				<div class="post-content">
					<h2><?php the_title(); ?></h2>
					<?php 
						if(has_post_thumbnail()){
							the_post_thumbnail('tr-photography-lite-thumbnail', array('class'=>'img-responsive'));
						}
					?>
					<div class="row">
						<div class="<?php echo esc_attr( tr_affreview_lite_content_layout() ); ?>">
							<div class="caption"> 
								<p class="author-text"><span><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a>  /</span>  <?php echo get_the_date(get_option( 'date_format' )) ?> </p>

								<?php the_content();
								
								 edit_post_link( __('Edit Your Post','tr-affreview-lite') , '<p>', '</p>'); ?>
							</div>
                            
					<?php endwhile;  ?>
					
								<!-- Comment -->
						    <?php 
						 	if ( comments_open() || get_comments_number() ) :
	                            comments_template();
	                        endif;
	                        ?>
                    
						</div><!-- /.end of col-md-8 -->
						<?php get_sidebar(); ?>
					</div><!-- /.end of row -->
				</div><!-- /.end of post-content -->
			</div><!-- /.end of post-details-area -->
		</div><!-- /.end of container -->
	</section><!-- /#end of post-details section -->

<?php
 get_footer();
