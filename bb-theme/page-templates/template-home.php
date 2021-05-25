<?php

/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<div class="home-banner col-lg-12">
<div class="container col-lg-10">
        <h1>Take control of  <span class="outline"> your own</span> linedans gennem livet.</h1>
        <p>Kort beskrivende tekst om konceptet. 
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nam lacinia ut orci ac fringilla. Fusce in turpis mi. 
            Praesent vel dictum felis. Maecenas sit amet felis ut est maximus 
            tincidunt. Fusce a lacus hendrerit, pulvinar purus luctus, 
            hendrerit urna. Proin tristique lectus vitae </p>
            <div class="button">
                    Buy your ballerina <i class="fa fa-chevron-right"></i>
                </div>
    </div>
</div>

<div class="home-call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="call-to-action">
                    <div class="image"></div>
                    <div class="title">Who am I?</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action second">
                    <div class="image"></div>
                    <div class="title">BB on tour</div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action third">
                    <div class="image"></div>
                    <div class="title">Powertools</div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-welcome">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Welcome to</span>
                The Ballerina Bulldog Universe
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <p class="tagline">
                    It is no coincidence, that this universe is build up around me - a ballerina.
                    I wasn’t casted for this project, because I’m pretty.
                </p>
                <p>
                    The ballerina serves as a symbol of what is possible for people to achieve,
                    if you put in the work. A ballerina has to work excessively hard and focused for many,
                    many years to be able to perform her art, ballet, optimally.
                </p>
            </div>
            <div class="col-lg-3">
                <div class="button">
                    Read more <i class="fa fa-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-news">
    <div class="bg-image"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-md-6 ">
                <a href="#" class="news-img">
                    <div class="image"></div>
                    <div class="date">Sun 13 may</div>
                    <div class="category">What's on</div>
                </a>
            </div>
            <div class="col-xl-1 d-none d-xl-block"></div>
            <div class="col-md-6">
                <h2>Behind the Scenes</h2>
                <p>
                    Bit Vejle is the mastermind behind the collection of me and my fellow ballerinas in this universe.
                    She was inspired by the danish philosopher Søren Kierkegaard,
                    who believed in a person’s ability to make responsible and wise decisions when life was difficult.
                </p>
                <a href="#" class="button">
                    Read more <i class="fa fa-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-about">
    <div class="bg-image">
        <div class="top-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/img/home-about-top.svg" alt="Cutout Top" width="100%">
        </div>
        <div class="bottom-overlay">
            <img src="<?php echo get_template_directory_uri(); ?>/img/bottomtear.svg" alt="Cutout Bottom" width="100%">
        </div>
    </div>
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Powertools</span>
                What is your inner strength?
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-8">
                <p class="tagline">
                    Balancing on my tightrope through life, I like to bring out my powertools
                    facing different challenges. The powertools reminds me of my inner strength,
                    as I want you to bring them with you to also be reminded of yours.

                </p>
                <p>
                    You can experience all my powertools at the Ballerina Bulldog exhibition,
                    but you can also just get your own reminder of your inner strength
                    in the webshop of The Paperart Museum.
                </p>
            </div>
            <div class="col-lg-3">
                <div class="button">
                    Read more <i class="fa fa-chevron-right"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-about-images">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#" class="call-to-action">
                    <div class="image"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action second">
                    <div class="image"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#" class="call-to-action third">
                    <div class="image"></div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="home-testimonials">
    <div class="bg-overlay">

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
                <h2>How does this work?</h2>
                <div class="testimonial-holder">
                    <p>By photographing the ballerina with your powertool
                        and share how it has been a help on your lifes journey,
                        you can participate in empowering and inspiring women
                        all over the world. Let’s travel the world!</p>
                    <div class="seperator"></div>
                    <div class="author">Ballerina Bulldog</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-subscribe">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Sign up</span>
                Get a notification when a new blogpost is published
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <?php echo do_shortcode('[contact-form-7 id="16" title="Newsletter subscription"]'); ?>
            </div>
        </div>
    </div>
</div>

<div class="home-social">
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Socials</span>
                Follow us on Facebook & Instagram
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <div class="facebook-holder">
                    <div class="title">
                        <i class="fa fa-facebook-square"></i>
                        What's new on Facebook?</div>
                    <div class="row">
                        <div class="col-lg-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/kamera.png" alt="News Item">
                        </div>
                        <div class="col-lg-6">
                            <div class="content">
                                <div class="meta-data">
                                    <div class="date"> <i class="fa fa-calendar"></i> Posted 31 Jan 2020</div>
                                    <div class="likes"> <i class="fa fa-thumbs-up"></i> 24 likes</div>
                                </div>
                                <p>Check out all the places I've already been
                                    and what events have made me even stronger and 
                                    more comfortable in my own skin!</p>
                                        <a href="#" class="button">Read on Facebook</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="instagram-holder">
                <div class="title">
                        <i class="fa fa-instagram"></i>
                        Follow @ballerinabulldog on Instagram</div>
                        <?php echo do_shortcode('[instagram-feed]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
