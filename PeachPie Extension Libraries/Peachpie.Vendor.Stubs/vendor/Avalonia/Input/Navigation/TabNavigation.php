<?php
namespace Avalonia\Input\Navigation;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TabNavigationOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Input\IInputElement $e
	 * @param \System\Boolean|bool $goDownOnly
	 * @return \Avalonia\Input\IInputElement
	 */
	#[MethodOverride]public static function GetNextTab_1 ($e, $goDownOnly){}
	/**
	 * @deprecated
	 * @param \Avalonia\Input\IInputElement $e
	 * @param \Avalonia\Input\IInputElement $container
	 * @param \System\Boolean|bool $goDownOnly
	 * @return \Avalonia\Input\IInputElement
	 */
	#[MethodOverride]public static function GetNextTab_2 ($e, $container, $goDownOnly){}
	/**
	 * @deprecated
	 * @param \Avalonia\Input\IInputElement $e
	 * @return \Avalonia\Input\IInputElement
	 */
	#[MethodOverride]private static function GetGroupParent_1 ($e){}
	/**
	 * @deprecated
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \System\Boolean|bool $includeCurrent
	 * @return \Avalonia\Input\IInputElement
	 */
	#[MethodOverride]private static function GetGroupParent_2 ($element, $includeCurrent){}
}
class TabNavigation extends \System\Object
{
	use TabNavigationOverride;

	/**
	 * @uses TabNavigationOverride::GetNextTab_1 <br>public , args: ($e, $goDownOnly)<br>
	 * @uses TabNavigationOverride::GetNextTab_2 <br>public , args: ($e, $container, $goDownOnly)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Input\IInputElement|mixed|\override
	 */
	#[MethodOverridePublic]function GetNextTab (\override ...$args){}
	/**
	 * @param \Avalonia\Input\ICustomKeyboardNavigation $e
	 * @return \Avalonia\Input\IInputElement
	 */
	public static function GetNextTabOutside($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @param \Avalonia\Input\IInputElement $container
	 * @param \System\Boolean|bool $goDownOnly
	 * @return \Avalonia\Input\IInputElement
	 */
	public static function GetPrevTab($e, $container, $goDownOnly){}
	/**
	 * @param \Avalonia\Input\ICustomKeyboardNavigation $e
	 * @return \Avalonia\Input\IInputElement
	 */
	public static function GetPrevTabOutside($e){}
	private static function FocusedElement($e){}
	private static function GetFirstChild($e){}
	private static function GetLastChild($e){}
	private static function GetFirstTabInGroup($container){}
	private static function GetLastInTree($container){}
	private static function GetLastTabInGroup($container){}
	private static function GetNextInTree($e, $container){}
	private static function GetNextSibling($e){}
	private static function GetNextTabInGroup($e, $container, $tabbingType){}
	private static function GetNextTabWithSameIndex($e, $container){}
	private static function GetNextTabWithNextIndex($e, $container, $tabbingType){}
	private static function GetPrevTabInGroup($e, $container, $tabbingType){}
	private static function GetPrevTabWithSameIndex($e, $container){}
	private static function GetPrevTabWithPrevIndex($e, $container, $tabbingType){}
	private static function GetPreviousInTree($e, $container){}
	private static function GetPreviousSibling($e){}
	private static function GetActiveElement($e){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses TabNavigationOverride::GetGroupParent_1 <br>private , args: ($e)<br>
	 * @uses TabNavigationOverride::GetGroupParent_2 <br>private , args: ($element, $includeCurrent)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Input\IInputElement|mixed|\override
	 */
	#[MethodOverridePrivate]function GetGroupParent (\override ...$args){}
	private static function GetParent($e){}
	private static function GetKeyNavigationMode($e){}
	private static function IsFocusScope($e){}
	private static function IsGroup($e){}
	private static function IsTabStop($e){}
	private static function IsTabStopOrGroup($e){}
	private static function IsVisible($e){}
	private static function IsVisibleAndEnabled($e){}
}