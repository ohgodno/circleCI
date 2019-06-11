<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Absolutte
 */

get_header(); ?>

<div id="content" class="container-fluid">

    <?php if ( have_posts() ): ?>

        <header class="page-header pt-5" style="top:50px;">
            <h1 class="page-title" style="visibility: visible !important">Case Studies</h1>
        </header><!-- .page-header -->

        <div class="container-fluid" >

            <div class="row pt-3">
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ): the_post(); ?>


                <div class="col-sm-12 col-md-3 col-lg-2   border border-primary rounded m-2">
<!--                    <a href="--><?php //the_permalink()?><!--"-->
                        <h3 class="pt-2 pb-2 pr-2" style="background: -webkit-linear-gradient(-45deg, #42A5F5 0%, #1236e3 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                            <a href="<?php the_permalink()?>"> <?php the_field('study_name') ?></a></h3>
                        <p><?php the_field('study_description') ?></p>
<!--                    </a>-->
                </div>



            <?php endwhile; ?>

            </div>

        </div><!-- /absolutte-post-wrapper -->

    <?php endif; ?>


</div><!-- /content -->


<?php get_footer(); ?>
