<?php namespace Rorichster\Starter\Controllers;

use App\Http\Controllers\Controller;

use Rorichster\Starter\Starter;

class StarterController extends Controller {
	
	public function foo() {

		$page_title = '2 bananas';
		$welcome_message = 'Welcome! Welcome! Have 2 bananas';

		$data = compact('page_title', 'welcome_message');

		return view('starter::welcome', $data);
	}
}