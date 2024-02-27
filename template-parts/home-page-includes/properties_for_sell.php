<?php
global $wpdb;
$posttable=$wpdb->prefix.'posts';
$projects_for_sell = $wpdb->get_results("SELECT * from $posttable as wp_posts where wp_posts.post_type='properties_for_sell' and wp_posts.post_status = 'publish'  ORDER BY wp_posts.menu_order, wp_posts.post_date desc limit 6;");
?>

<section class="properties__section section__bg__gray section__padding">
    <div class="container">
      <div class="text-center heading__column">
        <h2 class="heading_35 text-uppercase"><?=get_field('properties_for_sell_title')?></h2>
      </div>
      <div class="row_d justify-content-center">
        <?php
        foreach($projects_for_sell as $key=>$val)
        {
           ?>
        <div class="card__column">
          <div class="card__inner">
            <div class="img">
              <a href="<?=get_the_permalink($val->ID)?>" class="img__overley"></a>
              <img src="<?=get_the_post_thumbnail_url($val->ID)?>" alt="" />
            </div>
            <div class="card__descriptions">
              <div class="details__column">
                <div class="heading__location">
                  <h3 class="heading_20">
                    <a
                      class="heading_20 text-uppercase"
                      href="<?=get_the_permalink($val->ID)?>"
                    >
                    <?=$val->post_title?>
                    </a>
                  </h3>
                  <a href="<?=get_post_meta($val->ID,'location_url',true)?>" target="_blank" class="location d-flex align-items-center">
                    <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/topbar-location.png'?>" alt="" />
                    <span><?=get_post_meta($val->ID,'location',true)?></span>
                  </a>
                </div>
                <div class="house__details d-flex">
                  <div class="items d-flex align-items-center">
                    <div class="img__icon">
                      <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/full-size-icon.png'?>" alt="" />
                    </div>
                    <p class="mb-0"><?=get_post_meta($val->ID,'size',true)?></p>
                  </div>
                  <div class="items d-flex align-items-center">
                    <div class="img__icon">
                      <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/bed-icon.png'?>" alt="" />
                    </div>
                    <p class="mb-0"><?=get_post_meta($val->ID,'bedrooms',true)?></p>
                  </div>
                  <div class="items d-flex align-items-center">
                    <div class="img__icon">
                      <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/bath-tub.png'?>" alt="" />
                    </div>
                    <p class="mb-0"><?=get_post_meta($val->ID,'bathrooms',true)?></p>
                  </div>
                </div>
              </div>
              <a class="_btn" href="<?=get_the_permalink($val->ID)?>">
                <span class="price"><?=PREMIER_CONTRACTORS_DOLER_SYMBOL?><?=get_post_meta($val->ID,'price',true)?></span>
                <span class="_view">
                  View
                  <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/button-arrow.png'?>" alt="" />
                </span>
              </a>
            </div>
          </div>
        </div>
                
           <?php
        }        
        ?>

      </div>
      <div class="properties__browse__btn text-center">
        <a href="<?=site_url('/properties-for-sale/')?>" class="_btn btn_dark">
          <?=get_field('browse_more_properties_button_text')?>
        </a>
      </div>
    </div>
  </section>