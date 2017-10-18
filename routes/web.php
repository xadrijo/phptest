<?php

// Request GET /profile/facebook/123456
Route::get('/profile/facebook/{id}', 'FacebookController@show');
