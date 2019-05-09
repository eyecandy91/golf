<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: Standard design page
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

get_template_part('template-parts/hero');
get_template_part('template-parts/centered');
get_template_part('template-parts/content-split-1');
if (is_page('weddings-functions')) :
    get_template_part('template-parts/menus');
endif;
get_template_part('template-parts/booking');
get_template_part('template-parts/content-split-2');
get_template_part('template-parts/content-split-3');
//global $template; echo basename($template);
// $template = get_post_meta( $post->ID, '_wp_page_template', true );
// echo "Template: " . $template;

// get_sidebar();
get_footer();
