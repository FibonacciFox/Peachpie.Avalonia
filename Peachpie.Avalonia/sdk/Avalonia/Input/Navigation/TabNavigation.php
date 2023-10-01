<?php
namespace Avalonia\Input\Navigation;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TabNavigationMethodsOverride
{
	/**
	 * @return \Avalonia\Input\IInputElement
	 */
	#[MethodOverride] public static function GetNextTab_1($e, $goDownOnly){}
	/**
	 * @return \Avalonia\Input\IInputElement
	 */
	#[MethodOverride] public static function GetNextTab_2($e, $container, $goDownOnly){}
	/**
	 * @return \Avalonia\Input\IInputElement
	 */
	#[MethodOverride] private static function GetGroupParent_1($e){}
	/**
	 * @return \Avalonia\Input\IInputElement
	 */
	#[MethodOverride] private static function GetGroupParent_2($element, $includeCurrent){}
}
/**
 */
class TabNavigation extends \System\Object
{
	/**
	 * @uses TabNavigationMethodsOverride::GetNextTab_1 ($e, $goDownOnly)
	 * @uses TabNavigationMethodsOverride::GetNextTab_2 ($e, $container, $goDownOnly)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetNextTab(mixed ...$args){}
	/**
	 * @param \Avalonia\Input\ICustomKeyboardNavigation $e
	 * @return \Avalonia\Input\IInputElement
	 */
	public static function GetNextTabOutside($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @param \Avalonia\Input\IInputElement $container
	 * @param \System\Boolean $goDownOnly
	 * @return \Avalonia\Input\IInputElement
	 */
	public static function GetPrevTab($e, $container, $goDownOnly){}
	/**
	 * @param \Avalonia\Input\ICustomKeyboardNavigation $e
	 * @return \Avalonia\Input\IInputElement
	 */
	public static function GetPrevTabOutside($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FocusedElement($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFirstChild($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLastChild($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $container
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFirstTabInGroup($container){}
	/**
	 * @param \Avalonia\Input\IInputElement $container
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLastInTree($container){}
	/**
	 * @param \Avalonia\Input\IInputElement $container
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLastTabInGroup($container){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @param \Avalonia\Input\IInputElement $container
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNextInTree($e, $container){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNextSibling($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @param \Avalonia\Input\IInputElement $container
	 * @param \Avalonia\Input\KeyboardNavigationMode $tabbingType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNextTabInGroup($e, $container, $tabbingType){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @param \Avalonia\Input\IInputElement $container
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNextTabWithSameIndex($e, $container){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @param \Avalonia\Input\IInputElement $container
	 * @param \Avalonia\Input\KeyboardNavigationMode $tabbingType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNextTabWithNextIndex($e, $container, $tabbingType){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @param \Avalonia\Input\IInputElement $container
	 * @param \Avalonia\Input\KeyboardNavigationMode $tabbingType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPrevTabInGroup($e, $container, $tabbingType){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @param \Avalonia\Input\IInputElement $container
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPrevTabWithSameIndex($e, $container){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @param \Avalonia\Input\IInputElement $container
	 * @param \Avalonia\Input\KeyboardNavigationMode $tabbingType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPrevTabWithPrevIndex($e, $container, $tabbingType){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @param \Avalonia\Input\IInputElement $container
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPreviousInTree($e, $container){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPreviousSibling($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetActiveElement($e){}
	/**
	 * @uses TabNavigationMethodsOverride::GetGroupParent_1 ($e)
	 * @uses TabNavigationMethodsOverride::GetGroupParent_2 ($element, $includeCurrent)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetGroupParent(mixed ...$args){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetParent($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetKeyNavigationMode($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsFocusScope($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsGroup($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsTabStop($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsTabStopOrGroup($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsVisible($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsVisibleAndEnabled($e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
