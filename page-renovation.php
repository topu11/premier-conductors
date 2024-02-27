<?php
/* Template Name: Renovation */
get_header();
$header_banner=get_field('header_banner');
$banner_heading_one=get_field('banner_heading_one');
$banner_heading_two=get_field('banner_heading_two');
?>
<style>
    .breadcrumb__inner {
  text-align: center;
  padding: 25px;
  background-image: url("<?=$header_banner?>");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 300px;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>

<main class="service__page">
  <section class="breadcrumb">
    <div class="container">
      <div class="breadcrumb__inner">
        <div class="inner__main">
          <h1 class="heading_30 slim__heading"><?=$banner_heading_one?></h1>
          <h2 class="heading_35 primary_color">
            <?=$banner_heading_two?>
          </h2>
          <nav>
            <ul>
              <li class="breadcrumb-item">
                <a href="<?=site_url()?>">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="<?=get_the_permalink(get_the_ID())?>">Services</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Renovation
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <section class="service__page__section">
    <div class="container">
      <div class="section__width">
        <div class="row_d">
          <div class="service__section__menu">
            <ul class="service__menu">
              <li>
                <a href="<?=get_the_permalink(133)?>" class="active">
                  <div>
                    <span class="heading_25"><?=get_the_title(133)?></span>
                    <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/service__menu__arrow.png'?>" alt="" />
                  </div>
                </a>
              </li>
              <li>
                <a href="<?=get_the_permalink(135)?>">
                  <div>
                    <span class="heading_25"><?=get_the_title(135)?></span>
                    <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/service__menu__arrow.png'?>" alt="" />
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="service__section__details">
            <?php echo get_the_content();?>
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('/template-parts/home-page-includes/featured_product'); ?>

  <!-- Includes FAQ Section -->
  <?php get_template_part('/template-parts/renovation-page-inc/frequently-asked-question'); ?>

  <!-- Includes Contact Section -->
  <?php get_template_part('/template-parts/home-page-includes/contact_us'); ?>
</main>
<?php
get_footer();