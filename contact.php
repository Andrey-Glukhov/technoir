<?php
/**
*Template Name: Contact Page
*/
get_header(); ?>

<div class="container-fluid page-container">

    <div class="contact_wrapper row justify-content-center">
			<div id="we_need_back"></div>
	        <div id="we_need_you" class="col-xl-6 col-lg-8 col-md-8 col-sm-10 col-11">
                <img class="img-fluid" src="<?php echo get_site_url();?>/wp-content/themes/technoir/img/header-01-min.png"/>
            </div>
    </div>
    <div class="content_contact_wrapper row justify-content-md-between justify-content-sm-center justify-content-center">
        <div class="col-md-2 left">
        </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-lg-6 col-md-7 col-sm-9 col-11 contact_content">
            <?php the_content(); ?>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <div class="col-md-2 right">
        </div>
    </div>


    <div class="contact_wrapper row justify-content-center with_padding">
        <div class="col-2 d-sm-block d-none totoro"></div>

        <div class="col-md-4 d-md-block d-sm-none d-none contact-col">
            <img src="<?php echo get_site_url();?>/wp-content/themes/technoir/img/goast.png">
            <div class="booths">
            <img src="<?php echo get_site_url();?>/wp-content/themes/technoir/img/tech.png">
            <p>Het daghoreca gedeelte met Cozy comfortabele booths, hoge tafels aan het raam, 
                pastel tinten, planten en neon. Hier geniet je overdag van de lekkerste diner 
                classics zoals Pancakes met alle toppings, Chicken & waffles, de beste French 
                Toast met maple syrup en heerlijk belegde toasts.
            </p>
            </div>
        </div>

        <div class="col-md-4 d-md-block d-sm-none d-none contact-col">
            <div class="kitchen">
            <img src="<?php echo get_site_url();?>/wp-content/themes/technoir/img/contact_back_5.png">
            <p>Met grote schermen die onze producten aanprijzen boven de keuken kan alles aan de 
                keuken besteld worden aan hapjes en maaltijden om te delen.
            </p>
            </div>
            <div class="lounge">
            <img src="<?php echo get_site_url();?>/wp-content/themes/technoir/img/lounge.png">
            <p>is lekker laag zitten op grote banken genieten van verschillende verse cocktails en 
                heerlijke snacks of overdag met de krant en een havercappucino.
            </p>
            </div>
        </div>

        <div class="col-sm-8 col-11 d-md-none d-sm-block d-block contact-col">
            <img src="<?php echo get_site_url();?>/wp-content/themes/technoir/img/goast.png">
            <div class="booths">
            <img src="<?php echo get_site_url();?>/wp-content/themes/technoir/img/tech.png">
            <p>Het daghoreca gedeelte met Cozy comfortabele booths, hoge tafels aan het raam, 
                pastel tinten, planten en neon. Hier geniet je overdag van de lekkerste diner 
                classics zoals Pancakes met alle toppings, Chicken & waffles, de beste French 
                Toast met maple syrup en heerlijk belegde toasts.
            </p>
            </div>

            <div class="kitchen">
            <img src="<?php echo get_site_url();?>/wp-content/themes/technoir/img/contact_back_5.png">
            <p>Met grote schermen die onze producten aanprijzen boven de keuken kan alles aan de 
                keuken besteld worden aan hapjes en maaltijden om te delen.
            </p>
            </div>
            <div class="lounge">
            <img src="<?php echo get_site_url();?>/wp-content/themes/technoir/img/lounge.png">
            <p>is lekker laag zitten op grote banken genieten van verschillende verse cocktails en 
                heerlijke snacks of overdag met de krant en een havercappucino.
            </p>
            </div>

        </div>


        <div class="col-2 d-sm-block d-none duck"></div>
    </div>


    <div class="contact_wrapper row justify-content-center with_padding">
    <div class="col-2 d-sm-block d-none face-left"></div>

        <div class="col-lg-4 d-lg-block d-md-none d-sm-none d-none contact-col">
            <div class="arcade">
            <img src="<?php echo get_site_url();?>/wp-content/themes/technoir/img/arcade.png">
            <p>Achterin bevind zich de Arcade, onze evenementen ruimte met podium en dansvloer.
            Hier gaan de mooiste 80’s & 90’s parties plaatsvinden, dj avondjes, live optredens 
            en film avonden. Hier is natuurlijk ook de mooiste ruimte voor verjaardagen, 
            diners met grote groepen, vrijgezellen feesten en geweldige filmavonden.
            </p>
            </div>
        </div>
        <div class="col-lg-4 d-lg-block d-md-none d-sm-none d-none contact-col">
            <div class="noir">
            <img src="<?php echo get_site_url();?>/wp-content/themes/technoir/img/noir.png">
            <p>Hier is het hoog drink en avond gedeelte, met veel hoge tafels en krukken, 
                een grote bar met elke drank die je maar kan verzinnen, behendige barmannen 
                en de heerlijkste dinerclassics (burgers, Chicken, Loaded Fries) om te delen of om te snacken.
                Onze barmannen en Dj’s staan klaar om je de beste avond van de Witte de With te laten beleven 
                met de Perfecte eighties beats, warehouse en popmusic.
            </p>
            </div>
        </div>

        <div class="col-sm-8 col-11 d-lg-none d-md-block contact-col">
        <div class="arcade">
            <img src="<?php echo get_site_url();?>/wp-content/themes/technoir/img/arcade.png">
            <p>Achterin bevind zich de Arcade, onze evenementen ruimte met podium en dansvloer.
            Hier gaan de mooiste 80’s & 90’s parties plaatsvinden, dj avondjes, live optredens 
            en film avonden. Hier is natuurlijk ook de mooiste ruimte voor verjaardagen, 
            diners met grote groepen, vrijgezellen feesten en geweldige filmavonden.
            </p>
            </div>

            <div class="noir">
            <img src="<?php echo get_site_url();?>/wp-content/themes/technoir/img/noir.png">
            <p>Hier is het hoog drink en avond gedeelte, met veel hoge tafels en krukken, 
                een grote bar met elke drank die je maar kan verzinnen, behendige barmannen 
                en de heerlijkste dinerclassics (burgers, Chicken, Loaded Fries) om te delen of om te snacken.
                Onze barmannen en Dj’s staan klaar om je de beste avond van de Witte de With te laten beleven 
                met de Perfecte eighties beats, warehouse en popmusic.
            </p>
            </div>
        </div>

        <div class="col-2 d-sm-block d-none face-right"></div>
    </div>



    <div class="contact_wrapper row justify-content-md-between justify-content-sm-center justify-content-center with_padding">
        <div class="col-2 d-sm-block d-none pig"></div>
        <div class="col-lg-5 col-md-8 col-sm-8 col-11 party-content">
            <img src="<?php echo get_site_url();?>/wp-content/themes/technoir/img/party.png">
        <table>
            <tr>
                <td>all day breakfast</td>
                <td>elke dag</td>
            </tr>
            <tr>
                <td>80’s & 90’s Party</td>
                <td>eens per maand</td>
            </tr>
            <tr>
                <td>Filmavond</td>
                <td>elke dinsdag </td>
            </tr>
            <tr>
                <td>Halloween</td>
                <td>31 oktober</td>
            </tr>
            <tr>
                <td>Thanksgiving</td>
                <td>25 November</td>
            </tr>
            <tr>
                <td>Live Music</td>
                <td>coming soon...</td>
            </tr>
        </table>
        </div>
        <div class="col-2 d-sm-block d-none pika"></div>
    </div>



</div>
<?php get_footer(); ?>