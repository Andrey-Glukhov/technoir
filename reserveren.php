<?php
/**
*Template Name: Reserveren Page
*/
get_header(); ?>

<div class="container-fluid page-container">

    <div class="reserveren_wrapper row justify-content-center">
			<div id="we_need_back"></div>
	        <div id="we_need_you" class="col-xl-6 col-lg-8 col-md-8 col-sm-10 col-11">
                <img class="img-fluid" src="http://localhost:8888/technoir/wordpress/wp-content/themes/technoir/img/reserveren.png"/>
            </div>
    </div>

    <div class="res-background-wrapper">
    <div class="content_reserveren_wrapper res-description row justify-content-center">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-8 col-sm-10 col-11 contact_content">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>


    <div class="content_reserveren_wrapper row justify-content-center">
        <div class="col-lg-6 col-md-7 col-sm-9 col-11 reserveren_content">
            <img src="http://localhost:8888/technoir/wordpress/wp-content/themes/technoir/img/reserveren-nu.png">
            <?php echo do_shortcode( '[ninja_form id=2]' ); ?>
        </div>
    </div>


    <div class="reserveren_wrapper row justify-content-center"> 
        <div class="col-md-8 col-sm-10 col-11">
                 <video class="map_video" preload="auto" autoplay loop muted width="650px">
                    <source src="https://tech-noir.nl/wp-content/themes/technoir/vid/MAP ANIMATION.mp4" type="video/mp4">
                </video>
                <video class="map_video_vertical"  preload="auto" autoplay loop muted width="650px">
                    <source src="https://tech-noir.nl/wp-content/themes/technoir/vid/MAP ANIMATION 2.0.mp4" type="video/mp4">
                </video>
        </div> 
    </div> 

    </div>

</div>
<?php get_footer(); ?>