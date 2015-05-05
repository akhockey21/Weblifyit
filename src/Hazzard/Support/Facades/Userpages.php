<?php namespace Hazzard\Support\Facades;
/**
* @see \Hazzard\User\Fields
*/
class Userpages extends Facade {
	
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'user.pages'; }
}