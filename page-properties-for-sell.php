<?php
/* Template Name: Properties For Sale */
get_header();
global $wpdb;
$posttable=$wpdb->prefix.'posts';
$projects_for_sell = $wpdb->get_results("SELECT * from $posttable as wp_posts where wp_posts.post_type='properties_for_sell' and wp_posts.post_status = 'publish'  ORDER BY wp_posts.menu_order, wp_posts.post_date desc;");
?>
<style>
    .breadcrumb__inner {
  text-align: center;
  padding: 25px;
  background-image: url("<?=get_the_post_thumbnail_url(get_the_ID())?>");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 300px;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>

  <section class="breadcrumb">
        <div class="container">
          <div class="breadcrumb__inner">
            <div class="inner__main">
              <h1 class="heading_35"><?=get_the_title()?></h1>
              <nav>
                <ul>
                  <li class="breadcrumb-item"><a href="<?=site_url()?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Properties For Sale
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>

  <section class="properties__section section__padding">
    <div class="container">
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
    </div>
  </section>
<?php 
get_footer();