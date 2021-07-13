<?php
/**
 * Template Name: Front Page
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
                <?php
                    $args = array(
                        'posts_per_page' => 1,
                        'post_type' => 'post',
                        'order' => 'DSC',
                    );

                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>

                <div class="col-md-12">
                    <div class="current-post">
                        <?php
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('large', ['alt' => get_the_title(), 'title' => get_the_title()]);
                        }?>
                        
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-link">
                            <h4 class="post-title"><?php the_title(); ?></h4>
                        </a>
                        <p class="post-desc">
                            <?= the_excerpt() ?>
                        </p>
                    </div>
                </diV>

                <?php endwhile; else : ?>
                    <!-- IF NOTHING FOUND CONTENT HERE -->
                <?php endif; ?>
            </section>

            <section class="posts">
                <h3>Lajmet me te fundit</h3>
                <div class="row">
                    <?php
                        $args = array(
                            'posts_per_page' => 3,
                            'post_type' => 'post',
                            'order' => 'DSC',
                        );

                        $the_query = new WP_Query( $args );
                        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>

                    <div class="col-md-4">
                        <div class="latest-posts">
                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail('large', ['alt' => get_the_title(), 'title' => get_the_title()]);
                            }?>
                            
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-link">
                                <h4 class="post-title"><?php the_title(); ?></h4>
                            </a>
                        </div>
                    </diV>

                    <?php endwhile; else : ?>
                        <!-- IF NOTHING FOUND CONTENT HERE -->
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>

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
