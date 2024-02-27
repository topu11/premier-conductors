<?php 
function ett_contact_menu()
{

	

	// contacts

	add_menu_page(__('Ethical Tours & Travels Contacts', 'ethical_tours_travels'), __('Ethical Tours & Travels Contacts', 'ethical_tours_travels'), 'manage_options', 'ett-contact-lists', 'show_contact_lists', 'dashicons-admin-site-alt3', 4);

    add_submenu_page('ett-contact-lists', __('Subscriber', 'ethical_tours_travels'), __('Subscriber', 'ethical_tours_travels'), 'manage_options', 'encoderit-subscriber-list', 'show_subscriber_list');

    add_menu_page(__('Tours Package Management', 'ethical_tours_travels'), __('Tours Package Management', 'ethical_tours_travels'), 'manage_options', 'tour-package-managenet', 'show_tour_package_management', '', 4);
     
    add_submenu_page('tour-package-managenet', __('Tours Package Choice Management', 'ethical_tours_travels'),__('Tours Package Choice Management', 'ethical_tours_travels'), 'manage_options', 'tour-package-choice-managenet', 'show_tour_package_choice_management', '', 4);
    
    add_submenu_page('','','', 'manage_options', 'tour-package-managenet-customer', 'show_tour_package_management_customer', '', 4);


}

add_action('admin_menu','ett_contact_menu');



function show_contact_lists()
{

    require get_template_directory() . '/template-parts/admin/contact/index.php';
}
function show_subscriber_list()
{
    require get_template_directory() . '/template-parts/admin/subscriber/index.php';
}

function show_tour_package_management()
{
    require get_template_directory() . '/template-parts/admin/package_management/index.php';
}
function show_tour_package_choice_management()
{
    require get_template_directory() . '/template-parts/admin/package_choice_management/index.php';
}
function show_tour_package_management_customer()
{
    require get_template_directory() . '/template-parts/admin/package_management/customer.php';
}