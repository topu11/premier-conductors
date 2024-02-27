<?php
function bootstrap_nav_menu_config()
{
    register_nav_menus(array(

        "ett_top_menu" => "ETT Top Menu",
        "ett_footer_menu_about_us"=>"ETT About US",
        "ett_footer_menu_resources"=>"ETT Resources",
        "ett_get_in_touch"=>"ETT Get in touch"


    ));
}
add_action("init", "bootstrap_nav_menu_config");


// add_action('init','custom_login_redirect');
// function custom_login_redirect(){
//     wp_logout();
//  global $pagenow;
//  if( 'wp-login.php' == $pagenow ) {
//   wp_redirect(site_url('/404'));
//   exit();
//  }
// }