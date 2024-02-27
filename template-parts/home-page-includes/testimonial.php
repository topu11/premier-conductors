<?php
global $wpdb;
$posttable=$wpdb->prefix.'posts';
$reviews = $wpdb->get_results("SELECT * from $posttable as wp_posts where wp_posts.post_type='premier_reviews' and wp_posts.post_status = 'publish'  ORDER BY wp_posts.menu_order, wp_posts.post_date desc;");

?>

<section class="testimonial__section section__bg__gray section__padding">
    <div class="container">
      <div class="section__width">
        <div class="text-center heading__column">
          <h2 class="heading_35 text-uppercase"><?=get_field('words_from_our_clients')?></h2>
        </div>
        <div class="testimonial__slider">
          <?php
          foreach($reviews as $key=>$val)
          {
            ?>
                           <div class="slider__single__item">
            <div class="slider__inner">
              <div class="testimonial__main">
                <div class="left__quotes">
                  <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/testimonial__quotes1.png'?>" alt="" />
                </div>
                <div class="author__comment">
                  <p>
                  <?=get_post_meta($val->ID,'review_content',true)?>
                  </p>
                </div>
                <div class="right__quotes">
                  <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/testimonial__quotes2.png'?>" alt="" />
                </div>
              </div>

              <div class="author__details">
                <h5 class="author__name heading_25"><?=get_post_meta($val->ID,'author_name',true)?></h5>
                <p class="author__designation heading_20">
                <?=get_post_meta($val->ID,'designation',true)?>
                </p>
              </div>
            </div>
          </div>
            <?php
          }
          ?>
        </div>
        <div class="testimonial__btn__wrap">
          <button class="prev-btn">
            <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/testimonial__left__icon.png'?>" alt="" />
          </button>
          <button class="next-btn">
            <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/testimonial__right__icon.png'?>" alt="" />
          </button>
        </div>
      </div>
    </div>
  </section>