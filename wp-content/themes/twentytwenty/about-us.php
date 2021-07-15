<?php
/**
 * Template Name: About Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<div class="container">
  <div class="row">
    <div class="col-md-9">
        <main id="site-content my-4" role="main">
            <section class="main-post">
                <div>
                <?php
                    echo do_shortcode('[smartslider3 slider="2"]');
                ?>
                </div>
            </section>

        </main><!-- #site-content -->
        </div>
        <div class="col-md-3">
        
          <?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
        </div>
     </div>
     
</div>

<?php get_footer(); ?>
