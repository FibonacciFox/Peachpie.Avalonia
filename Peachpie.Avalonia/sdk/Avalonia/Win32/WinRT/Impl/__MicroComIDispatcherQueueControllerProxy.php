<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDispatcherQueueControllerProxyMethodsOverride
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
class __MicroComIDispatcherQueueControllerProxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\IDispatcherQueueController
{
	/**
	 * @return \Avalonia\Win32\WinRT\IDispatcherQueue
	 */
	public  function get_DispatcherQueue(){}
	/**
	 * @return \Avalonia\Win32\WinRT\IAsyncAction
	 */
	public  function ShutdownQueueAsync(){}
	/**
	 * @uses __MicroComIDispatcherQueueControllerProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDispatcherQueueControllerProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDispatcherQueueControllerProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDispatcherQueueControllerProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
