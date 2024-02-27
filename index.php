<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package premier-contractors
 */
/* Template Name: Home */
get_header();
?>
<main>
<?php get_template_part('/template-parts/home-page-includes/get_quota'); ?>
<?php get_template_part('/template-parts/home-page-includes/services'); ?>
<?php get_template_part('/template-parts/home-page-includes/properties_for_sell'); ?>
<?php get_template_part('/template-parts/home-page-includes/why_choose_us'); ?>
<?php get_template_part('/template-parts/home-page-includes/featured_product'); ?>
<?php get_template_part('/template-parts/home-page-includes/testimonial'); ?>
<?php get_template_part('/template-parts/home-page-includes/contact_us'); ?>
</main>

<?php
get_footer();
