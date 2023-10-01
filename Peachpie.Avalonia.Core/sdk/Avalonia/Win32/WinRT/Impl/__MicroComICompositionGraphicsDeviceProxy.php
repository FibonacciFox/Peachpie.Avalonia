<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositionGraphicsDeviceProxyMethodsOverride
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
class __MicroComICompositionGraphicsDeviceProxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\ICompositionGraphicsDevice
{
	/**
	 * @param \Avalonia\Win32\Interop\SIZE_F $sizePixels
	 * @param \Avalonia\Win32\WinRT\DirectXPixelFormat $pixelFormat
	 * @param \Avalonia\Win32\WinRT\DirectXAlphaMode $alphaMode
	 * @return \Avalonia\Win32\WinRT\ICompositionDrawingSurface
	 */
	public  function CreateDrawingSurface($sizePixels, $pixelFormat, $alphaMode){}
	/**
	 * @param \System\Void* $handler
	 * @param \System\Void* $token
	 * @return \System\Void|void
	 */
	public  function AddRenderingDeviceReplaced($handler, $token){}
	/**
	 * @param \System\Int32|int $token
	 * @return \System\Void|void
	 */
	public  function RemoveRenderingDeviceReplaced($token){}
	/**
	 * @uses __MicroComICompositionGraphicsDeviceProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComICompositionGraphicsDeviceProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComICompositionGraphicsDeviceProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComICompositionGraphicsDeviceProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
