<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package encoderit
 */

get_header();
?>

<div class="container">
<?php 

if(has_post_thumbnail(get_the_ID())){
	$url = get_the_post_thumbnail_url(get_the_ID());
	
?> 
<div class="row">
<div class="col-12 py-5">
	<img src="<?php echo $url?>" loading="lazy" alt="">
</div>
</div>
<?php
}


?>

<div class="row">
	<div class="col-12 pb-5">
		<?php the_content()?>
	</div>
</div>
</div>


<?php
get_footer();
