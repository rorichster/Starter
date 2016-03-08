<?php namespace Rorichster\Starter;

class Starter {
	public static function saySomething() {
		return trans('starter::messages.greeting');
	}
}