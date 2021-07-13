<?php

get_header();
?>
<div class="container">
  <div class="row">
    <div class="col-md-9">
        <main id="site-content" role="main">

            <?php
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();

                    get_template_part( 'template-parts/content', get_post_type() );
                }
            }

            ?>

        </main><!-- #site-content -->
        </div>
        <div class="col-md-3">
        
          <?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
        </div>
     </div>
     
</div>

<?php get_footer(); ?>
