<section class="services__section section__padding">
    <div class="container">
      <div class="section__width">
        <div class="text-center heading__column heading__col__position">
          <h2 class="transparent__text text-uppercase">Services</h2>
          <h3 class="heading_35 text-uppercase"><?=get_field('service_title');?></h3>
          <p class="mt-1"><?=get_field('service_intro');?></p>

        </div>

        <div class="row_d justify-content-center">
          <div class="card__column">
            <div class="card__inner">
              <div class="img">
                <a href="<?=get_the_permalink(133)?>" class="img__overley"></a>
                <img src="<?=get_the_post_thumbnail_url(133)?>" alt="" />
              </div>
              <h3>
                <a href="<?=get_the_permalink(133)?>" class="_btn card__btn">
                  <span class="heading_35">Renovations</span>
                  <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/service-arrow.png'?>" alt="" />
                </a>
              </h3>
            </div>
          </div>
          <div class="card__column">
            <div class="card__inner">
              <div class="img">
                <a href="<?=get_the_permalink(135)?>" class="img__overley"></a>
                <img src="<?=get_the_post_thumbnail_url(135)?>" alt="" />
              </div>
              <h3>
                <a href="<?=get_the_permalink(135)?>" class="card__btn">
                  <span class="heading_35">
                    Custom <br />
                    Home Building
                  </span>
                  <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/service-arrow.png'?>" alt="" />
                </a>
              </h3>
            </div>
          </div>
          <!-- <div class="card__column">
                <div class="card__inner">
                  <div class="img">
                    <a href="" class="img__overley"></a>
                    <img src="images/featured-4.png" alt="" />
                  </div>
                  <h3>
                    <a href="" class="card__btn">
                      <span class="heading_35">Luxury Home Construction</span>
                      <img src="images/service-arrow.png" alt="" />
                    </a>
                  </h3>
                </div>
              </div> -->
        </div>
      </div>
    </div>
  </section>