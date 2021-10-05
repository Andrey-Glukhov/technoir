<?php
/**
*Template Name: Pakketten Page
*/
get_header(); ?>

<div class="container-fluid page-container">

    <div class="pakketten_wrapper row justify-content-center">
			<div id="we_need_back"></div>
	        <div id="we_need_you" class="col-xl-6 col-lg-8 col-md-8 col-sm-10 col-11">
                <img class="img-fluid" src="<?php echo get_site_url();?>/wp-content/themes/technoir/img/header-02-min.png"/>
            </div>
    </div>
    <div class="content_pakketten_wrapper row justify-content-center">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-8 col-sm-9 col-11 pakketten_content">
            <img class="fluid-image" src="<?php echo get_site_url();?>/wp-content/themes/technoir/img/pakketten.png"/>
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>