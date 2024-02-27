<?php
/* Template Name: contact us*/
get_header();
$premier_contractors_phone_number=get_option('premier_contractors_phone_number');
$premier_contractors_location=get_option('premier_contractors_location');
$premier_contractors_email_footer=get_option('premier_contractors_email_footer');
$header_banner=get_field('banner_image');
$google_map_location=get_field('google_map_location');
$contact_us_title=get_field('contact_us_title');
$get_in_touch_get_title=get_field('get_in_touch_get_title');
$get_in_touch_touch_title=get_field('get_in_touch_touch_title');
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
<main class="contact__page">
  <section class="breadcrumb">
    <div class="container">
      <div class="breadcrumb__inner">
        <div class="inner__main">
          <h1 class="heading_35"><?=$contact_us_title?></h1>
          <nav>
            <ul>
              <li class="breadcrumb-item"><a href="<?=site_url()?>">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Contact
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <section class="get__in__touch">
    <div class="container">
      <div class="row_d mx-auto">
        <div class="get__touch__column">
          <div class="inner__column">
            <h2 class="heading_35 text-uppercase"><?=$get_in_touch_get_title?></h2>
            <h2 class="heading_35 text-uppercase"><?=$get_in_touch_touch_title?></h2>
            <div class="contact__number__mail">
              <div class="item">
                <div class="icon">
                  <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/get__in__touch__phone.png'?>" alt="" />
                </div>
                <a href="tel:<?=str_replace("-","",$premier_contractors_phone_number)?>"><?=$premier_contractors_phone_number?></a>
              </div>
              <!--<div class="item">-->
              <!--  <div class="icon">-->
              <!--    <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/get__in__touch__email.png'?>" alt="" />-->
              <!--  </div>-->
              <!--  <a href="mailto:<?=$premier_contractors_email_footer?>"><?=$premier_contractors_email_footer?></a>-->
              <!--</div>-->
              <div class="item">
                <div class="icon">
                  <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/get__in__touch__location.png'?>" alt="" />
                </div>
                <span><?=$premier_contractors_location?></span>
              </div>
            </div>
          </div>
        </div>
        <div class="google__map__column">
            <section id="contact__section" class="contact__section section__padding">
                <h2 class="text-center">Contact Us</h2>
                <div id="">  <?=do_shortcode('[forminator_form id="278"]')?></div>
          
            </section>          
        </div>
      </div>
    </div>
  </section>
  
<?php
get_footer();
?>
 <script>
 
        document.addEventListener("DOMContentLoaded", function () {
            // Check if there's a hash tag in the URL
            if (window.location.hash) {
               // alert(window.location.hash);
                // Get the target element based on the hash tag
                var targetElement = document.querySelector(window.location.hash);
setTimeout(function(){
                // Scroll to the target element
               jQuery('html,body').animate({scrollTop:jQuery(window.location.hash).offset().top}, 500);
}, 2200);
            }
        });
    </script>