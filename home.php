<?php
/**
*Template Name: Home Page
*/
get_header(); ?>

<div class="container-fluid">
    <div id="page_top" class="row">
        <div class="col-12">
            <div id="top_video">
                <video id="start_video" class="show_video" preload="metadata" playsinline>
                    <source src="https://tech-noir.nl/wp-content/themes/technoir/vid/Technoir_logo%20with%20button.mp4#t=0.001">
                </video>
                <video id="start_video_vertical" preload="metadata" playsinline muted>
                    <source
                        src="https://tech-noir.nl/wp-content/themes/technoir/vid/Technoir_mainanimation vertical_1.0.mp4#t=0.001">
                </video>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>