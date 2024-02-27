<?php
function bootstrap_nav_menu_config()
{
  register_nav_menus(array(

    "conductors_top_menu" => "conductors Top Menu",

    "conductors_footer_menu" => "conductors Footer Menu",

  ));
}
add_action("after_setup_theme", "bootstrap_nav_menu_config");


// function add_additional_class_on_a($classes, $item, $args)
// {
//   if (isset($args->add_a_class)) {
//     $classes['class'] = $args->add_a_class;
//   }
//   return $classes;
// }

// add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

// add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

// function special_nav_class($classes, $item)
// {
//   if (in_array('current-menu-item', $classes)) {
//     $classes[] = 'active ';
//   }
//   return $classes;
// }






function wp_get_menu_array($current_menu='Main Menu') {

    $menu_array = wp_get_nav_menu_items( wp_get_nav_menu_name($current_menu));
    
    

    $menu = array();

    function populate_children($menu_array, $menu_item)
    {
        $children = array();
        if (!empty($menu_array)){
            foreach ($menu_array as $k=>$m) {
                if ($m->menu_item_parent == $menu_item->ID) {
                    $children[$m->ID] = array();
                    $children[$m->ID]['ID'] = $m->ID;
                    $children[$m->ID]['title'] = $m->title;
                    $children[$m->ID]['url'] = $m->url;
                    unset($menu_array[$k]);
                    $children[$m->ID]['children'] = populate_children($menu_array, $m);
                }
            }
        };
        return $children;
    }

    foreach ($menu_array as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID'] = $m->ID;
            $menu[$m->ID]['title'] = $m->title;
            $menu[$m->ID]['url'] = $m->url;
            $menu[$m->ID]['children'] = populate_children($menu_array, $m);
        }
    }

    return $menu;

}

function wp_get_menu_array_footer($current_menu='Main Menu') {

    $menu_array = wp_get_nav_menu_items( wp_get_nav_menu_name($current_menu));
    
    

    $menu = array();

    function populate_children_footer($menu_array, $menu_item)
    {
        $children = array();
        if (!empty($menu_array)){
            foreach ($menu_array as $k=>$m) {
                if ($m->menu_item_parent == $menu_item->ID) {
                    $children[$m->ID] = array();
                    $children[$m->ID]['ID'] = $m->ID;
                    $children[$m->ID]['title'] = $m->title;
                    $children[$m->ID]['url'] = $m->url;
                    unset($menu_array[$k]);
                    $children[$m->ID]['children'] = populate_children_footer($menu_array, $m);
                }
            }
        };
        return $children;
    }

    foreach ($menu_array as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID'] = $m->ID;
            $menu[$m->ID]['title'] = $m->title;
            $menu[$m->ID]['url'] = $m->url;
            $menu[$m->ID]['children'] = populate_children_footer($menu_array, $m);
        }
    }

    return $menu;

}

// $menu_location = 'ett_top_menu';
     
//     ///custorm_var_dump(wp_get_nav_menu_items( wp_get_nav_menu_name( $menu_location )));
    
// $menu_items = wp_get_menu_array('ett_top_menu');