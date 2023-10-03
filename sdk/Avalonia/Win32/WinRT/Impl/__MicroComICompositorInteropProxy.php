<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositorInteropProxyMethodsOverride
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
class __MicroComICompositorInteropProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\ICompositorInterop
{
	/**
	 * @param \System\IntPtr $swapChain
	 * @return \Avalonia\Win32\WinRT\ICompositionSurface
	 */
	public  function CreateCompositionSurfaceForHandle($swapChain){}
	/**
	 * @param \MicroCom\Runtime\IUnknown $swapChain
	 * @return \Avalonia\Win32\WinRT\ICompositionSurface
	 */
	public  function CreateCompositionSurfaceForSwapChain($swapChain){}
	/**
	 * @param \MicroCom\Runtime\IUnknown $renderingDevice
	 * @return \Avalonia\Win32\WinRT\ICompositionGraphicsDevice
	 */
	public  function CreateGraphicsDevice($renderingDevice){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComICompositorInteropProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComICompositorInteropProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComICompositorInteropProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComICompositorInteropProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
