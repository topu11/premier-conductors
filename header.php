<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package premier-contractors
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php 
wp_body_open(); 
$premier_contractors_phone_number=get_option('premier_contractors_phone_number');
$premier_contractors_location=get_option('premier_contractors_location');
$site_logo=get_option('site_logo');
$premier_contractors_location_google_map=get_option('premier_contractors_location_google_map');
$menu_items = wp_get_menu_array('conductors_top_menu');
$premier_contractors_facebook=get_option('premier_contractors_facebook');
$premier_contractors_twitter=get_option('premier_contractors_twitter');
$premier_contractors_linkedln=get_option('premier_contractors_linkedln');
//var_dump($menu_items);
?>
<header>
        <nav class="navbar navbar-expand-lg">
            <div id="mobile__top__bar" class="top__bar">
            <div class="tele__loc__icon telephone__icon d-flex align-items-center">
                <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/topbar-phone.png'?>" alt="" />
                <a href="tel:<?=str_replace("-","",$premier_contractors_phone_number)?>"><?=$premier_contractors_phone_number?></a>
            </div>
            <div class="tele__loc__icon d-flex align-items-center">
                <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/topbar-location.png'?>" alt="" />
                <a href="<?=$premier_contractors_location_google_map?>" target="_blank"><?=$premier_contractors_location?></a>
            </div>
            </div>
            <div class="container container-fluid">
            <a class="navbar-brand" href="<?=site_url()?>">
                <img src="<?=$site_logo?>" alt="" />
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar_mobile_icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="menu__column mx-auto">
                <div id="desktop__top__bar" class="top__bar">
                    <div
                    class="tele__loc__icon telephone__icon d-flex align-items-center"
                    >
                    <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/topbar-phone.png'?>" alt="" />
                    <a href="tel:<?=str_replace("-","",$premier_contractors_phone_number)?>"><?=$premier_contractors_phone_number?></a>
                    </div>
                    <div class="tele__loc__icon d-flex align-items-center">
                    <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/topbar-location.png'?>" alt="" />
                    <a href="<?=$premier_contractors_location_google_map?>" target="_blank"><?=$premier_contractors_location?></a>
                    </div>
                </div>
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
                            <a href="<?=$val['url']?>" class="nav-link <?=$class;?>"><?=$val['title']?></a>
                           </li>
                            <?php
                        }else
                        {
                            ?>
                               <li class="nav-item">
                    <div class="dropdown">
                        <a
                        href="#"
						class="dropdown-toggle nav-link"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        >
                        <?=$val['title']?>
							<img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/menu_dropdown.png'?>" alt="" />
                        </a>
                        <ul class="dropdown-menu">
                         <?php
                          foreach($val['children'] as $key2=>$val2)
                          {
                            if(get_the_title() == $val['title'])
                           {
                            $class1='active';
                           }
                            else
                            {
                            $class1='';
                           }

                              ?>
                              <li>
                              <a href="<?=$val2['url']?>" class="dropdown-item <?=$class1?>"><?=$val2['title']?></a>
                             </li>
                              <?php
                          }
                          
                         ?>
                        </ul>
                    </div>
                    </li>
                            <?php
                        }    
                       
                    }
                    
                    ?>
                </ul>
                </div>
                <div class="header__right__col">
                <div class="header__social">
                    <!--<p>Follow us at</p>-->
                    <!--<ul>-->
                    <!--<li>-->
                    <!--    <a href="<?=$premier_contractors_facebook?>" target="_blank">-->
                    <!--    <i class="fa-brands fa-facebook-f"></i>-->
                    <!--    </a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--    <a href="<?=$premier_contractors_twitter?>" target="_blank">-->
                    <!--    <i class="fa-brands fa-twitter"></i>-->
                    <!--    </a>-->
                    <!--</li>-->
                    <!--<li>-->
                    <!--    <a href="<?=$premier_contractors_linkedln?>" target="_blank">-->
                    <!--    <i class="fa-brands fa-linkedin-in"></i>-->
                    <!--    </a>-->
                    <!--</li>-->
                    <!--</ul>-->
                </div>
                <a href="<?=site_url('request-quote')?>" class="_btn">
                    Get a Free Quote <img src="<?=PREMIER_CONTRACTORS_THEME_ASSETS_URI.'images/button-arrow.png'?>" alt="" />
                </a>
                </div>
            </div>
            </div>
        </nav>
    </header>