<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIAdapter1ProxyMethodsOverride
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
class __MicroComIDXGIAdapter1Proxy extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIAdapterProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\DirectX\IDXGIObject,
	\Avalonia\Win32\DirectX\IDXGIAdapter,
	\Avalonia\Win32\DirectX\IDXGIAdapter1
{
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_ADAPTER_DESC1
	 * @property
	 */
	public readonly $Desc1;
	/**
	 * @var \Avalonia\Win32\DirectX\DXGI_ADAPTER_DESC
	 * @property
	 */
	public readonly $Desc;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $NativePointer;
	/**
	 * @var \System\Void***
	 * @property
	 */
	public readonly $PPV;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDisposed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $OwnsHandle;
	/**
	 * @return \Avalonia\Win32\DirectX\DXGI_ADAPTER_DESC1
	 */
	public  function get_Desc1(){}
	/**
	 * @uses __MicroComIDXGIAdapter1ProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDXGIAdapter1ProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDXGIAdapter1ProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDXGIAdapter1ProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
