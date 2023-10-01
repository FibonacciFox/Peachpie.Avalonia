<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIFactory1ProxyMethodsOverride
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
class __MicroComIDXGIFactory1Proxy extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIFactoryProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\DirectX\IDXGIObject,
	\Avalonia\Win32\DirectX\IDXGIFactory,
	\Avalonia\Win32\DirectX\IDXGIFactory1
{
	/**
	 * @param \System\UInt16 $Adapter
	 * @param \System\Void** $ppAdapter
	 * @return \System\Int32|int
	 */
	public  function EnumAdapters1($Adapter, $ppAdapter){}
	/**
	 * @return \System\Int32|int
	 */
	public  function IsCurrent(){}
	/**
	 * @uses __MicroComIDXGIFactory1ProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDXGIFactory1ProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDXGIFactory1ProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDXGIFactory1ProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
