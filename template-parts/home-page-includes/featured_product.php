<?php
global $wpdb;
$posttable=$wpdb->prefix.'posts';
$featured_products = $wpdb->get_results("SELECT * from $posttable as wp_posts where wp_posts.post_type='featured_products' and wp_posts.post_status = 'publish'  ORDER BY RAND() limit 6;");

?>
<section
    class="featured__section properties__section section__padding section__bg__black"
  >
    <div class="container">
      <div class="text-center heading__column heading__col__position">
        <h2 class="transparent__text text-uppercase"><?=get_field('featured_title')?></h2>
        <h3 class="heading_35 text-uppercase"><?=get_field('featured_projects_text')?></h3>
      </div>
      <div class="row_d justify-content-center">
        <?php
         foreach($featured_products as $key=>$value)
         {
              ?>
                      <div class="card__column">
                  <div class="card__inner">
                    <div class="img">
                      <a href="" class="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'img__overley'?>"></a>
                      <img src="<?=get_the_post_thumbnail_url($value->ID)?>" alt="" />
                    </div>
                  </div>
           </div>
              <?php
         }
        ?>
      </div>

      <div class="properties__browse__btn text-center">
        <a href="<?php echo site_url('project-gallery')?>" class="_btn"
          >VIEW ALL <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/button-arrow.png'?>" alt=""
        /></a>
      </div>
    </div>
  </section>