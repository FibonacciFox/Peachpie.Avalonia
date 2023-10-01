<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDesktopWindowContentBridgeInteropProxyMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function QueryInterface_1($guid, $ppv){}
	/**
	 * @return \MicroCom\Runtime\T
	 */
	#[MethodOverride] public  function QueryInterface_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class __MicroComIDesktopWindowContentBridgeInteropProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IDesktopWindowContentBridgeInterop
{
	/**
	 * @param \Avalonia\Win32\WinRT\ICompositor $compositor
	 * @param \System\IntPtr $parentHwnd
	 * @return \System\Void|void
	 */
	public  function Initialize($compositor, $parentHwnd){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_HWnd(){}
	/**
	 * @return \System\Single
	 */
	public  function get_AppliedScaleFactor(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIDesktopWindowContentBridgeInteropProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDesktopWindowContentBridgeInteropProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDesktopWindowContentBridgeInteropProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDesktopWindowContentBridgeInteropProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
