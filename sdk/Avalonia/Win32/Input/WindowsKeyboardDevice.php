<?php
namespace Avalonia\Win32\Input;
/**
 */
class WindowsKeyboardDevice extends \Avalonia\Input\KeyboardDevice implements 
	\Avalonia\Input\IKeyboardDevice,
	\Avalonia\Input\IInputDevice,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @return \Avalonia\Win32\Input\WindowsKeyboardDevice
	 */
	public static function get_Instance(){}
	/**
	 * @return \Avalonia\Input\RawInputModifiers
	 */
	public  function get_Modifiers(){}
	/**
	 * @param \Avalonia\Controls\Window $window
	 * @return \System\Void|void
	 */
	public  function WindowActivated($window){}
	/**
	 * @param \System\UInt32 $virtualKey
	 * @return \System\String|string
	 */
	public  function StringFromVirtualKey($virtualKey){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateKeyStates(){}
	/**
	 * @param \Avalonia\Input\Key $key
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsDown($key){}
	/**
	 * @param \Avalonia\Input\Key $key
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetKeyStates($key){}
}
