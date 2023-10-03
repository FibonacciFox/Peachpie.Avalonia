<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGISurfaceProxyMethodsOverride
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
class __MicroComIDXGISurfaceProxy extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIDeviceSubObjectProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\DirectX\IDXGIObject,
	\Avalonia\Win32\DirectX\IDXGIDeviceSubObject,
	\Avalonia\Win32\DirectX\IDXGISurface
{
	/**
	 * @return \Avalonia\Win32\DirectX\DXGI_SURFACE_DESC
	 */
	public  function get_Desc(){}
	/**
	 * @param \Avalonia\Win32\DirectX\DXGI_MAPPED_RECT* $pLockedRect
	 * @param \System\UInt16 $MapFlags
	 * @return \System\Void|void
	 */
	public  function Map($pLockedRect, $MapFlags){}
	/**
	 * @return \System\Void|void
	 */
	public  function Unmap(){}
	/**
	 * @uses __MicroComIDXGISurfaceProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDXGISurfaceProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDXGISurfaceProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDXGISurfaceProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
