<?php namespace Hazzard\Support\Facades;
/**
* @see \Hazzard\User\Meta
*/
class Categories extends Facade {
	
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'user.categories'; }
}