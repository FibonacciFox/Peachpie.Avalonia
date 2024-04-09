<?php
namespace Avalonia\Input;
class KeyboardDevice extends \System\Object implements
	\Avalonia\Input\IKeyboardDevice,
	\Avalonia\Input\IInputDevice,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @property
	 * @var \Avalonia\Input\IInputManager
	 * @since readonly
	 */
	public $InputManager;
	/**
	 * @property
	 * @var \Avalonia\Input\IFocusManager
	 * @since readonly
	 */
	public $FocusManager;
	/**
	 * @property
	 * @var \Avalonia\Input\IInputElement
	 * @since readonly
	 */
	public $FocusedElement;
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public function add_PropertyChanged($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_PropertyChanged($value){}
	private static function ClearFocusWithinAncestors($element){}
	private function ClearFocusWithin($element, $clearRoot){}
	private function SetIsFocusWithin($oldElement, $newElement){}
	private function ClearChildrenFocusWithin($element, $clearRoot){}
	/**
	 * @param \Avalonia\Input\IInputElement $element
	 * @param \Avalonia\Input\NavigationMethod $method
	 * @param \Avalonia\Input\KeyModifiers $keyModifiers
	 * @return \System\Void|void
	 */
	public function SetFocusedElement($element, $method, $keyModifiers){}
	/**
	 * @param \System\String|string $propertyName
	 * @return \System\Void|void
	 */
	protected function RaisePropertyChanged($propertyName){}
	/**
	 * @param \Avalonia\Input\Raw\RawInputEventArgs $e
	 * @return \System\Void|void
	 */
	public function ProcessRawEvent($e){}
	/**
	 */
	public function __construct(){}
}