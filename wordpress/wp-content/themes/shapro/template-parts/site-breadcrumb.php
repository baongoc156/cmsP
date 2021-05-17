<div class="breadcrumb" style='background-image: url(<?php  echo esc_url( get_template_directory_uri() ); ?>/images/breadcrumb.jpg);'>
	<div class="inner">
        <div class="container">
        	<div class="row align-items-end">
	            <div class="col-md-6">
	              <h1><?php the_title(); ?></h1>
	            </div>
	            <div class="col-md-6">
	              <ul class="d-flex justify-content-end">
	                <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e('Home','shapro'); ?></a></li>
	                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
	              </ul>
	            </div>
        	</div>
        </div>
	</div>
</div>
<!--/breadcrumb-->