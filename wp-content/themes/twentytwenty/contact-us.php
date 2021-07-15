<?php
/**
 * Template Name: Contact Us
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
    <div class="col-md-12">
        <main id="site-content my-4" role="main">
            <?= do_shortcode('[contact-form-7 id="66" title="Contact form 1"]'); ?>
        </main><!-- #site-content -->
    </div>
</div>
</div>

<?php get_footer(); ?>
