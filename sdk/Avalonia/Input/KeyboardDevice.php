<?php
namespace Avalonia\Input;
/**
 */
class KeyboardDevice extends \System\Object implements 
	\Avalonia\Input\IKeyboardDevice,
	\Avalonia\Input\IInputDevice,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @var \Avalonia\Input\IInputManager
	 * @property
	 */
	public readonly $InputManager;
	/**
	 * @var \Avalonia\Input\IFocusManager
	 * @property
	 */
	public readonly $FocusManager;
	/**
	 * @var \Avalonia\Input\IInputElement
	 * @property
	 */
	public readonly $FocusedElement;
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_PropertyChanged($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_PropertyChanged($value){}
	/**
	 * @return \Avalonia\Input\KeyboardDevice
	 */
	protected static function get_Instance(){}
	/**
	 * @return \Avalonia\Input\IInputManager
	 */
	public  function get_InputManager(){}
	/**
	 * @return \Avalonia\Input\IFocusManager
	 */
	public  function get_FocusManager(){}
	/**
	 * @return \Avalonia\Input\IInputElement
	 */
	public  function get_FocusedElement(){}
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ClearFocusWithinAncestors($element){}
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \System\Boolean $clearRoot
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ClearFocusWithin($element, $clearRoot){}
	/**
	 * @param \Avalonia\Input\IInputElement $oldElement
	 * @param \Avalonia\Input\IInputElement $newElement
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetIsFocusWithin($oldElement, $newElement){}
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \System\Boolean $clearRoot
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ClearChildrenFocusWithin($element, $clearRoot){}
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \Avalonia\Input\NavigationMethod $method
	 * @param \Avalonia\Input\KeyModifiers $keyModifiers
	 * @return \System\Void|void
	 */
	public  function SetFocusedElement($element, $method, $keyModifiers){}
	/**
	 * @param \System\String|string $propertyName
	 * @return \System\Void|void
	 */
	protected  function RaisePropertyChanged($propertyName){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $e
	 * @return \System\Void|void
	 */
	public  function ProcessRawEvent($e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
