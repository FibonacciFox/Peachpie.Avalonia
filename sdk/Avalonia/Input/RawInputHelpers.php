<?php
namespace Avalonia\Input;
/**
 */
class RawInputHelpers extends \System\Object
{
	/**
	 * @param \Avalonia\Input\RawInputModifiers $modifiers
	 * @return \Avalonia\Input\KeyModifiers
	 */
	public static function ToKeyModifiers($modifiers){}
	/**
	 * @param \Avalonia\Input\Raw\RawPointerEventType $type
	 * @return \Avalonia\Input\PointerUpdateKind
	 */
	public static function ToUpdateKind($type){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
