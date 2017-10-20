<?php

namespace App\Repositories;

use GuzzleHttp\Client;

class Facebook
{
	private $token = 'EAACEdEose0cBAJlzIrCUUYot1gGarq9K3j2PGvfUZAeyXFnRoiQfl0axCUohiLgct9TRHjIZB3pa25OKH3hWYhZCXkjdW8wdg4ufXmhGRZBZBhaQvcFrNDGAyVCind1d1Mhtp5podtvAtZCsre9qMZARHPHMKs1Dx3rYIyESI5oGwDeaBCZBf6r5vO5JruhVIWqdAlZCPscGcJ1ywfN3TeYPQZA1AY9GGmhzcBv71Bo8Ao4QZDZD';

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