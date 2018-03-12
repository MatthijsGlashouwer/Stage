<?php

/*
 *	Plugin Name: BeeWizer Niews overzicht
 *	Plugin URI: zwf-ontwerp.nl
 *	Description: Widget & Shortcode voor het maken van een newsfeed
 *	Version: 1.0
 *	Author: Matthijs Glashouwer
 *	Author URI: zwf-ontwerp.nl
 *	License: GPL2
 *
*/

function bwznews_articles_menu(){

	add_options_page(
		'BeeWizer News Overzicht plugin',
		'BWZNews',
		'manage_options',
		'bwznews-articles',
		'bwznews_articles_options_page'
	);

}

add_action('admin_menu', 'bwznews_articles_menu');


function bwznews_articles_options_page() {

	if (!current_user_can('manage_options' )){
		wp_die('Niet genoeg rechten om deze pagina te bekijken');
	}

	require('inc/options-page-wrapper.php');

}

function bwznews_articles_get_results(){
$url      = 'http://example.org/api';
$response = wp_remote_get( esc_url_raw( $url ) );

/* Will result in $api_response being an array of data,
parsed from the JSON response of the API listed above */
$api_response = json_decode( wp_remote_retrieve_body( $response ), true );



}










 ?>