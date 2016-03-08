<?php namespace Rorichster\Starter\Facade;

use Illuminate\Support\Facades\Facade;

class Starter extends Facade {
	protected static function getFacadeAccessor() { return 'starter'; }
}