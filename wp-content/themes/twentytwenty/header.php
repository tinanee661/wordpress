<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Cron</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?> /assets/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri() ?> /assets/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?> /assets/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="<?= get_template_directory_uri() ?> /assets/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?> /assets/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?> /assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?> /assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?> /style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<!-- body -->
<div class="header_main">
		<div class="container">
			<div class="logo"><a href="index.html"><img src="<?= get_template_directory_uri() ?> /assets/images/logo.png"></a></div>
		</div>
	</div>
	</div>
	<div class="header">
		<div class="container">
        <!--  header inner -->
            <div class="col-sm-12">
                 
                 <div class="menu-area">
                    <nav class="navbar navbar-expand-lg ">
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <?php
                                
                                if ( has_nav_menu( 'primary' ) ) {
									wp_nav_menu(
										array(
											'container'  => '',
											'items_wrap' => '%3$s',
											'theme_location' => 'primary',
											'add_li_class'  => 'nav-item'
										)
									);
								}

                                ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div> 
    </div>

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
