<?php
/*
Template Name: Case Studies
*/
?>
<?php
/**
 * The template for Case Studies
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Absolutte
 */

get_header(); ?>

<div id="content" class="<?php echo esc_attr( absolutte_content_css_class() ); ?>">

    <?php if ( have_posts() ): ?>


        <div class="container">
            <div class="row">

                <?php while ( have_posts() ): the_post(); ?>
                    <a href="<?php the_permalink()?>"
                        <div class="col-sm">
                            <h3><?php the_field('study_name') ?></h3>
                            <h5><?php the_field('study_description') ?></h5>
                        </div>
                    </a>

                <?php endwhile; ?>

            </div>

        </div><!-- /absolutte-post-wrapper -->

    <?php endif; ?>

</div><!-- /content -->


<?php get_footer(); ?>
