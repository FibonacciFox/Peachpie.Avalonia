<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositorDesktopInteropProxyMethodsOverride
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
class __MicroComICompositorDesktopInteropProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\ICompositorDesktopInterop
{
	/**
	 * @param \System\IntPtr $hwndTarget
	 * @param \System\Int32|int $isTopmost
	 * @return \Avalonia\Win32\WinRT\IDesktopWindowTarget
	 */
	public  function CreateDesktopWindowTarget($hwndTarget, $isTopmost){}
	/**
	 * @param \System\Int32|int $threadId
	 * @return \System\Void|void
	 */
	public  function EnsureOnThread($threadId){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComICompositorDesktopInteropProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComICompositorDesktopInteropProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComICompositorDesktopInteropProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComICompositorDesktopInteropProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
