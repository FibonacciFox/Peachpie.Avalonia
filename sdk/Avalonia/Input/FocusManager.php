<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FocusManagerMethodsOverride
{
	/**
	 * @return \Avalonia\Input\IInputElement
	 */
	#[MethodOverride] public  function GetFocusedElement_1(){}
	/**
	 * @return \Avalonia\Input\IInputElement
	 */
	#[MethodOverride] public  function GetFocusedElement_2($scope){}
}
/**
 */
class FocusManager extends \System\Object implements 
	\Avalonia\Input\IFocusManager
{
	/**
	 * @var \Avalonia\Input\IFocusScope
	 * @property
	 */
	public $Scope;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Current(){}
	/**
	 * @uses FocusManagerMethodsOverride::GetFocusedElement_1 ()
	 * @uses FocusManagerMethodsOverride::GetFocusedElement_2 ($scope)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetFocusedElement(mixed ...$args){}
	/**
	 * @return \Avalonia\Input\IFocusScope
	 */
	public  function get_Scope(){}
	/**
	 * @param \Avalonia\Input\IFocusScope $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Scope($value){}
	/**
	 * @param \Avalonia\Input\IInputElement $control
	 * @param \Avalonia\Input\NavigationMethod $method
	 * @param \Avalonia\Input\KeyModifiers $keyModifiers
	 * @return \System\Boolean
	 */
	public  function Focus($control, $method, $keyModifiers){}
	/**
	 * @return \System\Void|void
	 */
	public  function ClearFocus(){}
	/**
	 * @param \Avalonia\Input\IFocusScope $scope
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \Avalonia\Input\NavigationMethod $method
	 * @param \Avalonia\Input\KeyModifiers $keyModifiers
	 * @return \System\Boolean
	 */
	public  function SetFocusedElement($scope, $element, $method, $keyModifiers){}
	/**
	 * @param \Avalonia\Input\IFocusScope $scope
	 * @return \System\Void|void
	 */
	public  function SetFocusScope($scope){}
	/**
	 * @param \Avalonia\Input\IFocusScope $scope
	 * @return \System\Void|void
	 */
	public  function RemoveFocusScope($scope){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @return \System\Boolean
	 */
	public static function GetIsFocusScope($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @return \Avalonia\Input\FocusManager
	 */
	protected static function GetFocusManager($element){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CanFocus($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $control
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetFocusScopeAncestors($control){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Interactivity\RoutedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OnPreviewPointerPressed($sender, $e){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsVisible($e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
