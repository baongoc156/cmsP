<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package
 */
?>
<div class="blog_post mb-4">
    <div class="post_img">
        <?php shapro_post_thumbnail(); ?>
    </div>
    <div class="post_content">
        <div class="post_meta mt-2">
            <span class="date"><a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><time><?php echo esc_html(get_the_date()); ?></time></a></span>
            <span class="author"><?php esc_html_e('By','shapro');?> <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><?php echo esc_html(get_the_author());?></a>
            </span>
            <span class="categories">
                <?php $shapro_cats = get_the_category_list();
                    if(!empty($shapro_cats)) { ?>
                    <?php the_category(' '); ?>
                <?php } ?>     
            </span>
        </div>

                        
                        
                        <?php
                        if (is_singular()) :
                            the_title('<h4 class="entry-title">', '</h4>');
                        else :
                            the_title('<h4 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h4>');
                        endif;
                        ?>
                        <?php
                        the_content(
                                sprintf(
                                        wp_kses(
                                                /* translators: %s: Name of current post. Only visible to screen readers */
                                                __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'shapro'),
                                                array(
                                                    'span' => array(
                                                        'class' => array(),
                                                    ),
                                                )
                                        ),
                                        wp_kses_post(get_the_title())
                                )
                        );
                        ?>
                        <!--<a href="#" class="cont-btn">Continue<i class="fa fa-arrow-right"></i></a>-->
                   
                </div>
                    
                        <?php // shapro_entry_footer(); ?>
                   
                </div>