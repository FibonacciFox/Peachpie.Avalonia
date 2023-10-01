<?php
namespace Avalonia;
/**
 */
class EnumExtensions extends \System\Object
{
	/**
	 * @param \Avalonia\T $value
	 * @param \Avalonia\T $flags
	 * @return \System\Boolean
	 */
	public static function HasAllFlags($value, $flags){}
	/**
	 * @param \Avalonia\T $value
	 * @param \Avalonia\T $flags
	 * @return \System\Boolean
	 */
	public static function HasAnyFlag($value, $flags){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
