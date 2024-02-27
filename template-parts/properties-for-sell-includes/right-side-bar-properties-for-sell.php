<?php
global $wpdb;
$posttable=$wpdb->prefix.'posts';
$current_postID=get_the_ID();
$projects_for_sell = $wpdb->get_results("SELECT * from $posttable as wp_posts where wp_posts.post_type='properties_for_sell' and wp_posts.post_status = 'publish' and wp_posts.ID <> $current_postID ORDER BY wp_posts.menu_order, wp_posts.post_date desc limit 4;");


?>

<div class="properties__section">
            <div class="text-center heading__column">
              <h2 class="heading_25 text-uppercase">Related Properties</h2>
            </div>
            <div class="row_d">
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
                          <a class="heading_20 text-uppercase" href="">
                            <?=$val->post_title?>
                          </a>
                        </h3>
                        <a href="<?=get_post_meta($val->ID,'location_url',true)?>" class="location d-flex align-items-center">
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
          </div>