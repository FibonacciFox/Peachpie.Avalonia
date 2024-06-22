<?php
namespace Avalonia\Controls;
class HotKeyManager extends \System\Object
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Input\KeyGesture]
	 */
	public static $HotKeyProperty;
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
	 */
	public function __construct(){}
}