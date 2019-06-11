<?php
/*
Template Name: Custom Page Template
*/
?>
<?php
/**
 * The template for Custom Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Absolutte
 */

get_header(); ?>

	<div id="content" class="container-fluid">


        <header class="page-header" style="padding-top:100px;">
            <div class="row">
                <div class="col-sm-8">
                    <h1 class="page-title" style="visibility: visible !important;"><?php the_field('page_title');?> </h1>
                </div>
                <div class="col-sm-4">
                    <h3 class="page-subtitle" style="text-align: right"><?php the_field('page_subtitle');?> </h3>
                </div>
            </div>
        </header><!-- .page-header -->

        <div class="main">
            <div class="container-fluid py-3" style="background-color: <?php the_field('banner_background_color');?>">
                <h2 class="mx-auto py-4" style="text-align: center; color:<?php the_field('title_color'); ?>"><?php the_field('description_title')?></h2>
                <h6 class="mx-auto py-2" style="text-align: center;"><?php the_field('description_paragraph')?></h6>
                <div class="button container py-2" style="text-align: center;">
                    <a class="btn btn-success" href="<?php the_field('button_url') ?>">
                        <?php the_field('button_text'); ?>
                    </a>
                </div>
            </div>
        </div>

	</div><!-- /content -->

<?php get_footer(); ?>
