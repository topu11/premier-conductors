<?php

function option_page_site_information()
{
	//echo "touhid";
	$security = $_POST['nonce'];
	if (!wp_verify_nonce($security, 'admin-ajax-nonce')) {
		echo 'Hei Dear, What are you looking for?';
	} else {
		$formdata = array();
		parse_str($_POST['formdata'], $formdata);
		foreach ($formdata as $key => $value) {

			update_option($key,  $value);
		}

		$resposedata = array(
			'success' => 'success'
		);
		echo json_encode($resposedata);
	}
	wp_die();
}
add_action('wp_ajax_option_page_site_information', 'option_page_site_information');

function option_page_display_options_social()
{
	$security = $_POST['nonce'];
	if (!wp_verify_nonce($security, 'admin-ajax-nonce')) {
		echo 'Hei Dear, What are you looking for?';
	} else {
		$formdata = array();
		parse_str($_POST['formdata'], $formdata);
		foreach ($formdata as $key => $value) {

			update_option($key,  esc_url($value));
		}

		$resposedata = array(
			'success' => 'success'
		);
		echo json_encode($resposedata);
	}
	wp_die();
}
add_action('wp_ajax_option_page_display_options_social', 'option_page_display_options_social');