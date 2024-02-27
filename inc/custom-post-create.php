<?php 


function premier_contractors_cpts()
{

	// register_post_type(
	// 	'premier_renovation',
	// 	array(
	// 		'labels' => array(
	// 			'name' => __('Renovation'),
	// 			'singular_name' => __('Renovation')
	// 		),
	// 		'public' => true,
	// 		'show_in_menu' => 'premier_conductors_theme_menu_cpt',
	// 		'menu_position'       => 18,
	// 		'has_archive' => false,
	// 		'supports' => array('title','editor','excerpt','thumbnail')
	// 	)
	// );
	// register_taxonomy('ett_package_category', ['ett_packages'], [
	// 	'label' => __('Feature Product Categories', 'txtdomain'),
	// 	'hierarchical' => true,
	// 	'rewrite' => ['slug' => 'ett-package-category'],
	// 	'show_admin_column' => true,
	// 	'show_in_rest' => true,
	// 	'labels' => [
	// 		'singular_name' => __('Feature Product Category', 'txtdomain'),
	// 		'all_items' => __('Feature Product Categories', 'txtdomain'),
	// 		'edit_item' => __('Edit Feature Product Category', 'txtdomain'),
	// 		'view_item' => __('View Feature Product Category', 'txtdomain'),
	// 		'update_item' => __('Update Feature Product Category', 'txtdomain'),
	// 		'add_new_item' => __('Add New Feature Product Category', 'txtdomain'),
	// 		'new_item_name' => __('New Feature Product Category', 'txtdomain'),
	// 		'search_items' => __('Search Feature Product Categories', 'txtdomain'),
	// 		'popular_items' => __('Popular Feature Product Categories', 'txtdomain'),
	// 		'separate_items_with_commas' => __('Separate Feature Product Categories with comma', 'txtdomain'),
	// 		'choose_from_most_used' => __('Choose from most used Feature Product Categories', 'txtdomain'),
	// 		'not_found' => __('No Feature Product Categories found', 'txtdomain'),
	// 	]
	// ]);

   
	
	register_post_type(
		'properties_for_sell',
		array(
			'labels' => array(
				'name' => __('Properties for sale'),
				'singular_name' => __('Properties for sale')
			),
			'public' => true,
			'show_in_menu' => 'premier_conductors_theme_menu_cpt',
			'has_archive' => false,
			'supports' => array('title', 'thumbnail', 'editor')
		)
	);
	register_post_type(
		'premier_faqs',
		array(
			'labels' => array(
				'name' => __('Frequently asked questions'),
				'singular_name' => __('Frequently asked questions')
			),
			'public' => true,
			'show_in_menu' => 'premier_conductors_theme_menu_cpt',
			'has_archive' => false,
			'supports' => array('title', 'thumbnail', 'editor')
		)
	);
    
	register_post_type(
		'featured_products',
		array(
			'labels' => array(
				'name' => __('Featured Products'),
				'singular_name' => __('Featured Products')
			),
			'public' => true,
			'show_in_menu' => true,
			'has_archive' => false,
			'supports' => array('title', 'thumbnail', 'editor')
		)
	);
	register_taxonomy('featured_products_category', ['featured_products'], [
		'label' => __('Feature Product Categories', 'txtdomain'),
		'hierarchical' => true,
		'rewrite' => ['slug' => 'featured_products_category'],
		'show_admin_column' => true,
		'show_in_rest' => true,
		'labels' => [
			'singular_name' => __('Feature Product Category', 'txtdomain'),
			'all_items' => __('Feature Product Categories', 'txtdomain'),
			'edit_item' => __('Edit Feature Product Category', 'txtdomain'),
			'view_item' => __('View Feature Product Category', 'txtdomain'),
			'update_item' => __('Update Feature Product Category', 'txtdomain'),
			'add_new_item' => __('Add New Feature Product Category', 'txtdomain'),
			'new_item_name' => __('New Feature Product Category', 'txtdomain'),
			'search_items' => __('Search Feature Product Categories', 'txtdomain'),
			'popular_items' => __('Popular Feature Product Categories', 'txtdomain'),
			'separate_items_with_commas' => __('Separate Feature Product Categories with comma', 'txtdomain'),
			'choose_from_most_used' => __('Choose from most used Feature Product Categories', 'txtdomain'),
			'not_found' => __('No Feature Product Categories found', 'txtdomain'),
		]
	]);
    
	register_post_type(
		'premier_reviews',
		array(
			'labels' => array(
				'name' => __('Reviews'),
				'singular_name' => __('Reviews')
			),
			'public' => true,
			'show_in_menu' => 'premier_conductors_theme_menu_cpt',
			'has_archive' => false,
			'supports' => array('title', 'thumbnail', 'editor')
		)
	);

}

add_action("init", "premier_contractors_cpts");

function premier_conductors_cpts_admin_menu() {
    add_menu_page(
        'Premier Contractors CPT',
        'Premier Contractors CPT',
        'manage_options',
        'premier_conductors_theme_menu_cpt',
        '', 
        'dashicons-calendar',
        10
    );
}

add_action( 'admin_menu', 'premier_conductors_cpts_admin_menu' );

