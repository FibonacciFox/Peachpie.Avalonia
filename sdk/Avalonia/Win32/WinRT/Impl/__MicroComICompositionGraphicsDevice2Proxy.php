<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComICompositionGraphicsDevice2ProxyMethodsOverride
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
class __MicroComICompositionGraphicsDevice2Proxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\ICompositionGraphicsDevice2
{
	/**
	 * @param \Avalonia\Win32\Interop\SIZE $sizePixels
	 * @param \Avalonia\Win32\WinRT\DirectXPixelFormat $pixelFormat
	 * @param \Avalonia\Win32\WinRT\DirectXAlphaMode $alphaMode
	 * @return \Avalonia\Win32\WinRT\ICompositionDrawingSurface
	 */
	public  function CreateDrawingSurface2($sizePixels, $pixelFormat, $alphaMode){}
	/**
	 * @uses __MicroComICompositionGraphicsDevice2ProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComICompositionGraphicsDevice2ProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComICompositionGraphicsDevice2ProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComICompositionGraphicsDevice2ProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
