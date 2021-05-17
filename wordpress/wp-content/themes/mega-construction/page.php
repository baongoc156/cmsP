<?php
/**
 * The template for displaying all pages.
 * @package Mega Construction
 */
get_header(); ?>

<?php do_action('mega_construction_page_header'); ?>

<main id="maincontent" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="title-box text-center mb-4">
            <div class="container">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="container">
            <?php $mega_construction_page_layout = get_theme_mod( 'mega_construction_single_page_layout','One Column');
            if($mega_construction_page_layout == 'One Column'){ ?>
                <div id="wrapper" class="p-3 mb-4">
                    <div class="main-wrap-box"> 
                        <div class="feature-box">
                            <div class="bradcrumbs">
                                <?php mega_construction_the_breadcrumb(); ?>
                            </div>
                        </div> 
                        <div class="feature-box">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="entry-content"><?php the_content(); ?> </div>
                        <?php wp_link_pages( array(
                                'before'      => '<div class="page-links"><span class="page-links-title p-3">' . __( 'Pages:', 'mega-construction' ) . '</span>',
                                'after'       => '</div>',
                                'link_before' => '<span class="page-number py-2 px-3">',
                                'link_after'  => '</span>',
                                'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'mega-construction' ) . ' </span>%',
                                'separator'   => '<span class="screen-reader-text">, </span>',
                        )   ); ?>       
                        <div class="clearfix"></div>    
                    </div>
                    <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) {
                            comments_template();
                        }
                    ?>
                </div>
            <?php }else if($mega_construction_page_layout == 'Left Sidebar'){ ?>
                <div class="row">
                    <div  id="sidebar" class="col-lg-3 col-md-4">
                        <?php dynamic_sidebar('sidebar-2'); ?>
                    </div>
                    <div class="col-lg-9 col-md-8">
                        <div id="wrapper" class="p-3 mb-4">
                            <div class="main-wrap-box"> 
                                <div class="feature-box">
                                    <div class="bradcrumbs">
                                        <?php mega_construction_the_breadcrumb(); ?>
                                    </div>
                                </div> 
                                <div class="feature-box">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="entry-content"><?php the_content(); ?> </div>
                                <?php wp_link_pages( array(
                                        'before'      => '<div class="page-links"><span class="page-links-title p-3">' . __( 'Pages:', 'mega-construction' ) . '</span>',
                                        'after'       => '</div>',
                                        'link_before' => '<span class="page-number py-2 px-3">',
                                        'link_after'  => '</span>',
                                        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'mega-construction' ) . ' </span>%',
                                        'separator'   => '<span class="screen-reader-text">, </span>',
                                )   ); ?>       
                                <div class="clearfix"></div>    
                            </div>
                            <?php
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) {
                                    comments_template();
                                }
                            ?>
                        </div>
                    </div>
                </div>
            <?php }else if($mega_construction_page_layout == 'Right Sidebar'){ ?>
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <div id="wrapper" class="p-3 mb-4">
                            <div class="main-wrap-box"> 
                                <div class="feature-box">
                                    <div class="bradcrumbs">
                                        <?php mega_construction_the_breadcrumb(); ?>
                                    </div>
                                </div> 
                                <div class="feature-box">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="entry-content"><?php the_content(); ?> </div>
                                <?php wp_link_pages( array(
                                        'before'      => '<div class="page-links"><span class="page-links-title p-3">' . __( 'Pages:', 'mega-construction' ) . '</span>',
                                        'after'       => '</div>',
                                        'link_before' => '<span class="page-number py-2 px-3">',
                                        'link_after'  => '</span>',
                                        'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'mega-construction' ) . ' </span>%',
                                        'separator'   => '<span class="screen-reader-text">, </span>',
                                )   ); ?>       
                                <div class="clearfix"></div>    
                            </div>
                            <?php
                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) {
                                    comments_template();
                                }
                            ?>
                        </div>
                    </div>
                    <div  id="sidebar" class="col-lg-3 col-md-4">
                        <?php dynamic_sidebar('sidebar-2'); ?>
                    </div>
                </div>
            <?php }?>
        </div>
    <?php endwhile; // end of the loop. 
    wp_reset_postdata();?>
</main>

<?php do_action('mega_construction_page_left_footer'); ?>

<?php get_footer(); ?>