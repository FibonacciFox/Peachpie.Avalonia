<?php
namespace Avalonia\Controls;
/**
 */
class HotKeyManager extends \System\Object
{
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\Input\KeyGesture $value
	 * @return \System\Void|void
	 */
	public static function SetHotKey($target, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @return \Avalonia\Input\KeyGesture
	 */
	public static function GetHotKey($target){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
