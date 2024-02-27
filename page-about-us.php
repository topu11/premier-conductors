<?php
/* Template Name: About Us */

get_header();
$who_we_are=get_field('who_we_are');
$our_credentials=get_field('our_credentials');
$our_process=get_field('our_process');
$what_makes_us_stand_out=get_field('what_makes_us_stand_out');
$financing=get_field('financing');
$a_message_to_our_future_clients=get_field('a_message_to_our_future_clients');


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
  <main class="about__page">
      <section class="breadcrumb">
        <div class="container">
          <div class="breadcrumb__inner">
            <div class="inner__main">
              <h1 class="heading_35"><?= get_the_title();?></h1>
              <nav>
                <ul>
                  <li class="breadcrumb-item"><a href="<?=site_url()?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    About
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="about__us__section section__padding">
        <div class="container">
          <div class="section__width">
            <div class="inner__content">
              <?= get_the_content();?>
            </div>
          </div>
        </div>
      </section>

      <section class="why__us__section section__padding">
        <div class="container">
          <div class="text-center heading__column">
            <h2 class="heading_35 text-uppercase">Why us?</h2>
          </div>
          <div class="row_d align-items-start justify-content-between">
            <div class="items">
              <h3><span class="counter">500</span>+</h3>
              <p class="heading_35 mb-0">Completed Projects</p>
            </div>
            <div class="items">
              <h3><span class="counter">200</span>+</h3>
              <p class="heading_35 mb-0">Satisfied Clients</p>
            </div>
            <div class="items">
              <h3><span class="counter">30</span>+</h3>
              <p class="heading_35 mb-0">years of experience</p>
            </div>
          </div>
        </div>
      </section>
      
         <!-- Includes Services -->
         <?php get_template_part('/template-parts/home-page-includes/services'); ?>

        <?php get_template_part('/template-parts/home-page-includes/contact_us'); ?>
 
    </main>

<?php 

get_footer();