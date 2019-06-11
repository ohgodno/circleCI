<?php
    /**
     * The template for displaying all single posts.
     *
     * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
     *
     * @package Absolutte
     */

get_header(); ?>


	<div id="content" class="site-content container-fluid" role="content">

        <header class="page-header" style="padding-top:100px;">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="page-title" style="visibility: visible !important;"><?php the_field('study_name');?> </h1>
                </div>
                <div class="col-sm-4">
                    <h3 class="page-subtitle" style="text-align: right"><?php the_field('study_description');?> </h3>
                </div>
            </div>
        </header><!-- .page-header -->

        <div class="main">
            <div class="container-fluid py-3">
                <h2 class="mx-auto py-4" style="text-align: center; background: -webkit-linear-gradient(-45deg, #e66465 0%, #9198e5 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;"><?php the_field('study_name')?></h2>
                <h6 class="mx-auto py-2" style="text-align: center;"><?php the_field('study_description')?></h6>
                <div class="button container py-2" style="text-align: center;">
                    <a class="btn btn-success" href="/mySite/case_study">
                        back
                    </a>
                </div>
            </div>
        </div>

	</div><!-- #content -->

<?php get_footer(); ?>
