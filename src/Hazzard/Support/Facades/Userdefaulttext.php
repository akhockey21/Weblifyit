<?php namespace Hazzard\Support\Facades;
/**
* @see \Hazzard\User\Meta
*/
class Userdefaulttext extends Facade {
	
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'user.defaulttext'; }
}