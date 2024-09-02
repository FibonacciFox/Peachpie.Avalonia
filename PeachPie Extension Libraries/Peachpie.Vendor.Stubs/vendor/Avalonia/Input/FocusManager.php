<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FocusManagerOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\Input\IInputElement
	 */
	#[MethodOverride]public function GetFocusedElement_1 (){}
	/**
	 * @deprecated
	 * @param \Avalonia\Input\IFocusScope $scope
	 * @return \Avalonia\Input\IInputElement
	 */
	#[MethodOverride]public function GetFocusedElement_2 ($scope){}
}
class FocusManager extends \System\Object implements
	\Avalonia\Input\IFocusManager
{
	use FocusManagerOverride;

	/**
	 * @uses FocusManagerOverride::GetFocusedElement_1 <br>public , args: ()<br>
	 * @uses FocusManagerOverride::GetFocusedElement_2 <br>public , args: ($scope)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Input\IInputElement|mixed|\override
	 */
	#[MethodOverridePublic]function GetFocusedElement (\override ...$args){}
	/**
	 * @param \Avalonia\Input\IInputElement $control
	 * @param \Avalonia\Input\NavigationMethod $method
	 * @param \Avalonia\Input\KeyModifiers $keyModifiers
	 * @return \System\Boolean|bool
	 */
	public function Focus($control, $method, $keyModifiers){}
	/**
	 * @return \System\Void|void
	 */
	public function ClearFocus(){}
	/**
	 * @param \Avalonia\Input\IInputElement $removedElement
	 * @param \Avalonia\Visual $oldParent
	 * @return \System\Void|void
	 */
	public function ClearFocusOnElementRemoved($removedElement, $oldParent){}
	/**
	 * @param \Avalonia\Input\IFocusScope $scope
	 * @return \System\Void|void
	 */
	public function SetFocusScope($scope){}
	/**
	 * @param \Avalonia\Input\IFocusScope $scope
	 * @return \System\Void|void
	 */
	public function RemoveFocusRoot($scope){}
	/**
	 * @param \Avalonia\Input\IInputElement $e
	 * @return \System\Boolean|bool
	 */
	public static function GetIsFocusScope($e){}
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @return \Avalonia\Input\FocusManager
	 */
	protected static function GetFocusManager($element){}
	/**
	 * @param \Avalonia\Input\NavigationDirection $direction
	 * @return \System\Boolean|bool
	 */
	protected function TryMoveFocus($direction){}
	private static function CanFocus($e){}
	private static function GetFocusScope($control){}
	private static function GetFocusRoot($scope){}
	private static function OnPreviewPointerPressed($sender, $e){}
	private static function IsVisible($e){}
	/**
	 */
	public function __construct(){}
}