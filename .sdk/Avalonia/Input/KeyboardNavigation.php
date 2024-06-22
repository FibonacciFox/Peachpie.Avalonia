<?php
namespace Avalonia\Input;
class KeyboardNavigation extends \System\Object
{

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Int32]
	 */
	public static $TabIndexProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Input\KeyboardNavigationMode]
	 */
	public static $TabNavigationProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Input\IInputElement]
	 */
	public static $TabOnceActiveElementProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $IsTabStopProperty;
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @return \System\Int32|int
	 */
	public static function GetTabIndex($element){}
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public static function SetTabIndex($element, $value){}
	/**
	 * @param \Avalonia\Input\InputElement $element
	 * @return \Avalonia\Input\KeyboardNavigationMode
	 */
	public static function GetTabNavigation($element){}
	/**
	 * @param \Avalonia\Input\InputElement $element
	 * @param \Avalonia\Input\KeyboardNavigationMode $value
	 * @return \System\Void|void
	 */
	public static function SetTabNavigation($element, $value){}
	/**
	 * @param \Avalonia\Input\InputElement $element
	 * @return \Avalonia\Input\IInputElement
	 */
	public static function GetTabOnceActiveElement($element){}
	/**
	 * @param \Avalonia\Input\InputElement $element
	 * @param \Avalonia\Input\IInputElement $value
	 * @return \System\Void|void
	 */
	public static function SetTabOnceActiveElement($element, $value){}
	/**
	 * @param \Avalonia\Input\InputElement $element
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetIsTabStop($element, $value){}
	/**
	 * @param \Avalonia\Input\InputElement $element
	 * @return \System\Boolean|bool
	 */
	public static function GetIsTabStop($element){}
}