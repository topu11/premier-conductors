<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package premier-contractors
 */

?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <script src="<?php echo  get_template_directory_uri(); ?>/assets/js/isotope.js"></script>

<script async defer src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script defer>
    jQuery(document).ready(function() {

       
        Fancybox.bind('[data-fancybox="gallery"]', {
            dragToClose: false,

            Toolbar: false,
            closeButton: "top",

            Image: {
                zoom: false,
            },

            on: {
                initCarousel: (fancybox) => {
                    const slide = fancybox.Carousel.slides[fancybox.Carousel.page];

                    fancybox.$container.style.setProperty(
                        "--bg-image",
                        `url("${slide.$thumb.src}")`
                    );
                },
                "Carousel.change": (fancybox, carousel, to, from) => {
                    const slide = carousel.slides[to];

                    fancybox.$container.style.setProperty(
                        "--bg-image",
                        `url("${slide.$thumb.src}")`
                    );
                },
            },
        });

        var countTime = 0;
        var storeTimeInterval = setInterval(function() {
            ++countTime;

            if (jQuery(window).width() > 900) {
                var banner_data = `<img src="<?php echo $banner_image; ?>" class="w-100" alt="banner <?php echo get_bloginfo('name'); ?>" />`;
            } else {
                var banner_data = `<img src="<?php echo $banner_image_mobile; ?>" class="w-100" alt="banner <?php echo get_bloginfo('name'); ?>" />`;
            }
            jQuery('.banner-block').html(banner_data);

            if (countTime == 1) {
                clearInterval(storeTimeInterval);
            }
        }, 300);

    })
</script>
<?php 

wp_footer(); 

$premier_contractors_phone_number=get_option('premier_contractors_phone_number');
$premier_contractors_location=get_option('premier_contractors_location');
$premier_contractors_email_footer=get_option('premier_contractors_email_footer');
$menu_items = wp_get_menu_array_footer('conductors_footer_menu');
$premier_contractors_facebook=get_option('premier_contractors_facebook');
$premier_contractors_twitter=get_option('premier_contractors_twitter');
$premier_contractors_linkedln=get_option('premier_contractors_linkedln');
$premier_contractors_location_google_map=get_option('premier_contractors_location_google_map');

?>
<footer>
      <div class="container">
        <div class="section__width">
          <div class="footer__main">
            <div
              class="footer__inner d-flex align-items-center justify-content-between"
            >
              <div class="footer__logo">
                <a href="<?=site_url()?>">
                  <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/footer-logo.png'?>" alt="" />
                </a>
              </div>
              <div class="footer__menu__container">
                <div class="menu__col">
                  <div class="quick__links">
                    <h3>quick links</h3>
                    <ul class="navbar-nav">
                      <?php
                    foreach($menu_items as $key=>$val)
                    {
                        if(get_the_title() == $val['title'])
                        {
                            $class='active';
                        }
                        else
                        {
                            $class='';
                        }
                        if(empty($val['children']))
                        {
                            ?>
                            <li class="nav-item">
                            <a href="<?=$val['url']?>" class="nav-link <?=$class;?>"><?=$val['title']?> <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/footer-menu-arrow.png'?>" alt="" /></a>
                           </li>
                            <?php
                        }
                      }
                    ?> 
                    </ul>
                  </div>
                  <!--<div class="footer__social">-->
                  <!--  <h3>Follow us</h3>-->
                  <!--  <ul>-->
                  <!--    <li>-->
                  <!--      <a href="<?=$premier_contractors_facebook;?>" target="_blank">-->
                  <!--        <i class="fa-brands fa-facebook-f"></i>-->
                  <!--      </a>-->
                  <!--    </li>-->
                  <!--    <li>-->
                  <!--      <a href="<?=$premier_contractors_twitter;?>" target="_blank">-->
                  <!--        <i class="fa-brands fa-twitter"></i>-->
                  <!--      </a>-->
                  <!--    </li>-->
                  <!--    <li>-->
                  <!--      <a href="<?=$premier_contractors_linkedln;?>" target="_blank">-->
                  <!--        <i class="fa-brands fa-linkedin-in"></i>-->
                  <!--      </a>-->
                  <!--    </li>-->
                  <!--  </ul>-->
                  <!--</div>-->
                </div>
                <div class="contact__info">
                  <div class="item">
                    <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/topbar-phone.png'?>" alt="" />
                    <a href="tel:<?=$premier_contractors_phone_number?>"><?=$premier_contractors_phone_number?></a>
                  </div>
                  <div class="item">
                    <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/footer-mail.png'?>" alt="" />
                    <a href="mailto:<?=$premier_contractors_email_footer?>">Email us</a>
                  </div>
                  <div class="item">
                    <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/topbar-location.png'?>" alt="" />
                    <a href="<?=$premier_contractors_location_google_map?>" target="_blank"><?=$premier_contractors_location?></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="copyright__text">
            <p>
              <small>
              <?=$premier_contractors_copyright?>
              </small>
            </p>
          </div>
        </div>
      </div>
    </footer>
   
</body>
</html>