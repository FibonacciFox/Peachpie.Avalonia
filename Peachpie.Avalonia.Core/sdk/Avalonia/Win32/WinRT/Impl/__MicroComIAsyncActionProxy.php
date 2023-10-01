<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAsyncActionProxyMethodsOverride
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
class __MicroComIAsyncActionProxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\IAsyncAction
{
	/**
	 * @param \Avalonia\Win32\WinRT\IAsyncActionCompletedHandler $handler
	 * @return \System\Void|void
	 */
	public  function SetCompleted($handler){}
	/**
	 * @return \Avalonia\Win32\WinRT\IAsyncActionCompletedHandler
	 */
	public  function get_Completed(){}
	/**
	 * @return \System\Void|void
	 */
	public  function GetResults(){}
	/**
	 * @uses __MicroComIAsyncActionProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAsyncActionProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAsyncActionProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAsyncActionProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
