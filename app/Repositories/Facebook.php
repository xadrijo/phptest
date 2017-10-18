<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class Facebook
{
	private $token = 'EAACEdEose0cBADlSLnkWlxmZA7G6mU8uVKd9uscM1OpCxZB7y4rKZBx3WM7JtibQjvAW97cOyhu9FnanDVAnBwpR0u9GcSxpe44qyDCzsjuxx6ZAgU3bBVrdYeNEfMXMrgkUegdmYYJwRZBuwbyc94gBICPdENLoyry7YY7tGFkqTNd7i8GIKjZAv5uDjSdRoZD';

	public function __construct(Client $client)
	{
		$this->client = new Client([
		    'base_uri' => 'https://graph.facebook.com/',
		]);
	}

	public function user($id) 
	{
		$response = $this->client->request('GET', $id . '?access_token=' . $this->token);

		return $response->getBody();	
	}

}