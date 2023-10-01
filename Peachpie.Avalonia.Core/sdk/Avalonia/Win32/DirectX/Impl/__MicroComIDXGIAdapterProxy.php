<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIAdapterProxyMethodsOverride
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
class __MicroComIDXGIAdapterProxy extends \Avalonia\Win32\DirectX\Impl\__MicroComIDXGIObjectProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\DirectX\IDXGIObject,
	\Avalonia\Win32\DirectX\IDXGIAdapter
{
	/**
	 * @param \System\UInt16 $Output
	 * @param \System\Void* $ppOutput
	 * @return \System\Int32|int
	 */
	public  function EnumOutputs($Output, $ppOutput){}
	/**
	 * @return \Avalonia\Win32\DirectX\DXGI_ADAPTER_DESC
	 */
	public  function get_Desc(){}
	/**
	 * @param \System\Guid* $InterfaceName
	 * @return \System\UInt64
	 */
	public  function CheckInterfaceSupport($InterfaceName){}
	/**
	 * @uses __MicroComIDXGIAdapterProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDXGIAdapterProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDXGIAdapterProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDXGIAdapterProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
