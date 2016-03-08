<?php 

Route::group(['namespace' => 'Rorichster\Starter\Controllers', 'prefix' => 'starterdemo'], function() {
	Route::get('foo', 'StarterController@foo');
});