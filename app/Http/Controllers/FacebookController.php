<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Facebook;

class FacebookController extends Controller
{
	protected $profile;

	public function __construct(Facebook $profile)
	{
		$this->profile = $profile;
	}

	// Show profile information
    public function show($id)
    {
		return $this->profile->user($id);
    }
}
