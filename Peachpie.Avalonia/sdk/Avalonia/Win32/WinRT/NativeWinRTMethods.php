<?php
namespace Avalonia\Win32\WinRT;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NativeWinRTMethodsMethodsOverride
{
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] protected static function WindowsCreateString_1($sourceString, $length){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] protected static function WindowsCreateString_2($sourceString){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private static function GetWindowsUICompositionActivationFactory_1($activatableClassId){}
	/**
	 * @return \Avalonia\Win32\WinRT\IActivationFactory
	 */
	#[MethodOverride] protected static function GetWindowsUICompositionActivationFactory_2($className){}
}
/**
 */
class NativeWinRTMethods extends \System\Object
{
	/**
	 * @uses NativeWinRTMethodsMethodsOverride::WindowsCreateString_1 ($sourceString, $length)
	 * @uses NativeWinRTMethodsMethodsOverride::WindowsCreateString_2 ($sourceString)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WindowsCreateString(mixed ...$args){}
	/**
	 * @param \System\IntPtr $hstring
	 * @param \System\UInt32* $length
	 * @return \System\Char*
	 */
	protected static function WindowsGetStringRawBuffer($hstring, $length){}
	/**
	 * @param \System\IntPtr $hString
	 * @return \System\Void|void
	 */
	protected static function WindowsDeleteString($hString){}
	/**
	 * @uses NativeWinRTMethodsMethodsOverride::GetWindowsUICompositionActivationFactory_1 ($activatableClassId)
	 * @uses NativeWinRTMethodsMethodsOverride::GetWindowsUICompositionActivationFactory_2 ($className)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetWindowsUICompositionActivationFactory(mixed ...$args){}
	/**
	 * @param \System\String|string $fullName
	 * @return \Avalonia\Win32\WinRT\T
	 */
	protected static function CreateInstance($fullName){}
	/**
	 * @param \System\String|string $fullName
	 * @return \Avalonia\Win32\WinRT\TFactory
	 */
	protected static function CreateActivationFactory($fullName){}
	/**
	 * @param \Avalonia\Win32\WinRT\DispatcherQueueOptions $options
	 * @return \System\IntPtr
	 */
	protected static function CreateDispatcherQueueController($options){}
	/**
	 * @param \Avalonia\Win32\WinRT\RO_INIT_TYPE $initType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RoInitialize($initType){}
	/**
	 * @param \System\IntPtr $activatableClassId
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RoActivateInstance($activatableClassId){}
	/**
	 * @param \System\IntPtr $activatableClassId
	 * @param \System\Guid& $iid
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RoGetActivationFactory($activatableClassId, $iid){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EnsureRoInitialized(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
