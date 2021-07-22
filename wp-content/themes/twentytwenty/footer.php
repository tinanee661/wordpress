<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
    <div class="container">
        <?php 
            if ( function_exists( 'register_sidebar' ) ) { 
                dynamic_sidebar('sidebar-2'); 
            }
        ?>
    </div>
	<footer id="site-footer" role="contentinfo" class="header-footer-group">
			<div class="contact_main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="touch_text">Contact Us</h1>
                </div>
            </div>
        </div>
        <div class="contact_section_2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="<?= get_template_directory_uri() ?> /assets/images/map-icon.png" style="max-width: 100%;padding-left: 30px; ">
                            <p class="email-text" style="font-family: Arial; font-weight: Bold"><a href="#">Rr.Kalabria Prishtine UBT<br>Uk</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="<?= get_template_directory_uri() ?> /assets/images/call-icon.png" style="max-width: 100%;padding-left: 30px;">
                            <p class="email-text" style="font-family: Arial; font-weight: Bold"><a href="#">044924579</a></p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="map_icon">
                            <img src="<?= get_template_directory_uri() ?> /assets/images/email-icon.png" style="max-width: 100%; padding-left: 30px;">
                            <p class="email-text" style="font-family: Arial; font-weight: Bold"><a href="#">favgraf@favgrafwts2021.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Contact_section end -->
        <div class="copyright" style="background-color: black ">
            <div class="container">
                <div class="row" style="background-color: black ">
                    <div class="col-sm-12" style="background-color: black ">
                        <p class="copyright_text" style="background-color: black ">© 2021 All Rights Reserved. <a href="https://html.design">Wordpress</a></p>
                    </div>
                </div>
            </div>
        </div>

    </footer><!-- #site-footer -->

	</body>
</html>
