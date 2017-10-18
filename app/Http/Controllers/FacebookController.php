<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FacebookController extends Controller
{
	// Show profile information
    public function show($id)
    {
    	$client = new Client([
		    'base_uri' => 'https://graph.facebook.com/',

		    'timeout'  => 2.0,
		]);

		$token = 'EAACEdEose0cBADlSLnkWlxmZA7G6mU8uVKd9uscM1OpCxZB7y4rKZBx3WM7JtibQjvAW97cOyhu9FnanDVAnBwpR0u9GcSxpe44qyDCzsjuxx6ZAgU3bBVrdYeNEfMXMrgkUegdmYYJwRZBuwbyc94gBICPdENLoyry7YY7tGFkqTNd7i8GIKjZAv5uDjSdRoZD';

		$response = $client->request('GET', $id . '?access_token=' . $token);

		return $response->getBody();
    }
}
