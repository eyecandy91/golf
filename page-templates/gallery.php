<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: Gallery page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();

get_template_part( 'template-parts/hero' ); 
get_template_part( 'template-parts/gallery' ); 
// get_template_part( 'template-parts/content-split-1'); 
// get_template_part( 'template-parts/performance' ); 
// get_template_part( 'template-parts/rules' ); 


// get_sidebar();
get_footer();