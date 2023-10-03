<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIResourceProxyMethodsOverride
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
class __MicroComIDXGIResourceProxy extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIDeviceSubObjectProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\DirectX\IDXGIObject,
	\Avalonia\Win32\DirectX\IDXGIDeviceSubObject,
	\Avalonia\Win32\DirectX\IDXGIResource
{
	/**
	 * @return \System\IntPtr
	 */
	public  function get_SharedHandle(){}
	/**
	 * @return \System\UInt32
	 */
	public  function get_Usage(){}
	/**
	 * @param \System\UInt16 $EvictionPriority
	 * @return \System\Void|void
	 */
	public  function SetEvictionPriority($EvictionPriority){}
	/**
	 * @return \System\UInt16
	 */
	public  function get_EvictionPriority(){}
	/**
	 * @uses __MicroComIDXGIResourceProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDXGIResourceProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDXGIResourceProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDXGIResourceProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
