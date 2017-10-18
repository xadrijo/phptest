<?php

use GuzzleHttp\Client;

Route::get('/', function() {
    
    $client = new Client([
	    'base_uri' => 'http://jsonplaceholder.typicode.com/',
	    // You can set any number of default request options.
	    'timeout'  => 2.0,
	]);

	$response = $client->request('GET', 'posts');

	return json_decode( $response->getBody()->getContents() );
});
