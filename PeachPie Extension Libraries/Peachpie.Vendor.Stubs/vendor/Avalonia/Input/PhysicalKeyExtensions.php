<?php
namespace Avalonia\Input;
class PhysicalKeyExtensions extends \System\Object
{

	/**
	 * @param \Avalonia\Input\PhysicalKey $physicalKey
	 * @return \Avalonia\Input\Key
	 */
	public static function ToQwertyKey($physicalKey){}
	/**
	 * @param \Avalonia\Input\PhysicalKey $physicalKey
	 * @param \System\Boolean|bool $useShiftModifier
	 * @return \System\String|string
	 */
	public static function ToQwertyKeySymbol($physicalKey, $useShiftModifier){}
}