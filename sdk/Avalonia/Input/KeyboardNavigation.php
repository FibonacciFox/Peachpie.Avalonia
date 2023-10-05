<?php
namespace Avalonia\Input;
/**
 */
class KeyboardNavigation extends \System\Object
{
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Int32]
	 * @field
	 */
	public readonly $TabIndexProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Input\KeyboardNavigationMode]
	 * @field
	 */
	public readonly $TabNavigationProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Input\IInputElement]
	 * @field
	 */
	public readonly $TabOnceActiveElementProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $IsTabStopProperty;
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
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetIsTabStop($element, $value){}
	/**
	 * @param \Avalonia\Input\InputElement $element
	 * @return \System\Boolean
	 */
	public static function GetIsTabStop($element){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
