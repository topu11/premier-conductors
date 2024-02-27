<?php
get_header();
$location=get_field('location');
$description=get_field('description');
$price=get_field('price');
$main_floor_plan=get_field('main_floor_plan');
$additional_floor_plan_first=get_field('additional_floor_plan_first');
$additional_floor_plan_second=get_field('additional_floor_plan_second');
?>
<main class="propertice__single__page">
  <section class="breadcrumb">
    <div class="container">
      <div class="breadcrumb__noimg">
        <nav>
          <ul class="justify-content-start">
            <li class="breadcrumb-item"><a href="<?=site_url();?>">Home</a></li>
            <li class="breadcrumb-item">
              <a href="<?=get_the_permalink(62)?>">Properties For Sale</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              <?=get_the_title()?>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </section>

  <section class="single_page_propertice__section">
    <div class="container">
      <div class="propertice__section__heading d-flex justify-content-between">
        <div class="heading__col">
          <h1 class="heading_35 text-uppercase"><?=get_the_title()?></h1>
          <div>
            <a href="" class="location d-flex align-items-center">
              <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/topbar-location.png'?>" alt="" />
              <span><?=$location?></span>
            </a>
          </div>
        </div>
        <div class="price">
          <h2 class="heading_35 primary_color"><?=PREMIER_CONTRACTORS_DOLER_SYMBOL?><?=$price?></h2>
        </div>
      </div>
      <?=get_template_part('/template-parts/properties-for-sell-includes/slider-section')?>
      <div class="single__details row_d">
        <div class="properties__description">
          <div class="_col description_col">
            <h2 class="heading_25">Description</h2>
            <p>
              <?=$description?>
            </p>
          </div>
          <div class="_col features_col">
            <h2 class="heading_25">Property features</h2>
            <?=get_template_part('/template-parts/properties-for-sell-includes/features-properties')?>
          </div>
          <div class="_col plans_col">
            <h2 class="heading_25">Floor Plans</h2>
            <div class="floor_plans_img">
              <div class="parent_img">
                <img src="<?=$main_floor_plan?>" alt="" />
              </div>
              <div class="small__img d-flex">
                <div class="img">
                  <img src="<?=$additional_floor_plan_first?>" alt="" />
                </div>
                <div class="img">
                  <img src="<?=$additional_floor_plan_second?>" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="related__properties section__bg__gray">
          <?=get_template_part('/template-parts/properties-for-sell-includes/right-side-bar-properties-for-sell')?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();