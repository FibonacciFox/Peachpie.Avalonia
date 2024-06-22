<?php
namespace Avalonia\Input;
class NavigationDirectionExtensions extends \System\Object
{


	/**
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @return \System\Boolean|bool
	 */
	public static function IsTab($direction){}
	/**
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @return \System\Boolean|bool
	 */
	public static function IsDirectional($direction){}
	/**
	 * @param \Avalonia\Input\Key $key
	 * @param \Avalonia\Input\KeyModifiers $modifiers
	 * @return \System\Nullable_1[Avalonia\Input\NavigationDirection]
	 */
	public static function ToNavigationDirection($key, $modifiers){}
}