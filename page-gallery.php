<?php
get_header();
$args = array(
    'post_type' => 'featured_products',
    'orderby' => 'post_date',
    'post_status' => 'publish',
    'taxonomy' => 'featured_products_category',
    'posts_per_page' => -1
);
$products = new WP_Query($args);
$categories = get_categories($args);
if ($products->have_posts()) {
?>
<style>
    .home-spinner {
    font-size: 40px;
    color: #c40202;
    padding-top: 20px;
}
 .homepage_gallery_tab button {
    border: 1px solid #e8ce61 ;
    width: auto;
    text-transform: uppercase;
    color: #000;
    
    height: 46px;
    margin-right: 20px;
    margin-bottom: 15px;
    font-size: 16px;
    background: #fff;
}
.homepage_menu_tab button:hover, .homepage_menu_tab .filter_active, .homepage_gallery_tab button:hover, .homepage_gallery_tab .filter_active {
    background: #e8ce61;
    color: #fff;
}
.carousel__button svg path,.fancybox__counter,.fancybox__counter span,.carousel__button svg circle{
    color:#fff;
}
</style>
<section
    class="featured__section properties__section section__padding"
  >
    <div class="container">
      <div class="text-center heading__column heading__col__position">
        <h2 class="">FEATURED PROJECTS</h2>
       
      </div>
           <div class="row_d justify-content-center text-center home-spinner"  id="show-gallery-data">
    <div class="homepage_gallery_tab">
        <button type="button" name="button" data-filter="*" class="px-3 filter_active">Show All</button>
        <?php foreach ($categories as $category) { ?>
            <button type="button" name="button" class="px-3" data-filter=".filter-<?php echo $category->term_id; ?>-gallery"><?php echo $category->name; ?></button>
        <?php } ?>
    </div>
    <div class="homepage_gallery_tab_content  pt-5 row justify-content-center">
        <?php
        foreach ($categories as $category) {
            $args = array(
                'post_type' => 'featured_products',
                'orderby' => 'ID',
                'order' => 'ASC',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'tax_query' => [
                    [
                        'taxonomy' => 'featured_products_category',
                        'terms' => $category->term_id,
                    ],
                ],
            );
            $products = new WP_Query($args);
            while ($products->have_posts()) {
        ?>
                <div class="col-md-2 col-6 pb-2 gallery-item filter-<?php echo $category->term_id ?>-gallery ">
                    <?php
                    $products->the_post();
                    $product_cat = get_the_terms(get_the_id(), 'homepagegallery_category');
                    $image = wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail');
                    ?>
                    <div data-fancybox="gallery" class="gallery" data-src="<?php echo $image; ?>" rel="gallery-<?php echo get_the_ID(); ?>" style="">
                        <img loading="lazy" src="<?php echo $image; ?>" class="w-100 h-100" alt="<?php echo get_bloginfo('name'); ?> gallery">
                    </div>
                </div>
        <?php
            }
        } ?>
    </div>
        </div>
<?php } ?>
    </div>
      </section>
<?php
get_footer();
?>