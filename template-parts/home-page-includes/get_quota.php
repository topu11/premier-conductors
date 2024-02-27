<?php
$home_page_banner_text=get_field('home_page_banner_text');
$home_page_banner_image=get_field('home_page_banner_image');
?>

<style>
.home__banner {
  background-image: url("<?=$home_page_banner_image?>");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-color: var(--primary-color);
}
</style>
<section class="home__banner">
    <div class="container">
      <div class="inner__content">
        <div class="content__column">
          <h1 class="heading_35 website__heading"><?=$home_page_banner_text?></h1>
          <a href="<?=site_url('request-quote')?>" class="_btn">
            Get a Free Quote <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/button-arrow.png'?>" alt="" />
          </a>
        </div>
      </div>
    </div>
  </section>