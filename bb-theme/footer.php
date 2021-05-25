<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
<div class="bg-image"></div>
    <div class="title-holder">
        <div class="container">
            <h2>
                <span>Contact</span>
                Please reach out to me if needed
            </h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <?php echo do_shortcode('[contact-form-7 id="17" title="Footer Form"]'); ?>
                <div class="copyright"> © Copyright Ballerina Bulldog Universe - All rights reserved // Website by Nanna, Louise & Miriam</div>
            </div>
        </div>
    </div>

</div><!-- wrapper end -->
<div class="footer-warning">
    <div class="container">
<div class="row align-items-center">
    <div class="col-md-2 col-lg-2 col-xl-1">
    <img src="<?php echo get_template_directory_uri(); ?>/img/ballerinabulldog-white.png" alt="Ballerina Bulldog" width="84px">
    </div>
    <div class="col-md-10 col-lg-10 col-xl-11">
<h3>Sorry! So far all educational material are only available in danish. </h3>
<p>If you are interested in getting some educational material for your students, 
    leave us a text message and we'll see if we can cooperate in meeting your wishes.</p>
    </div>
</div>
</div>
</div>
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

