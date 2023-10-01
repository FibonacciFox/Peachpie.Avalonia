<?php
namespace Avalonia\Win32\DirectX\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIDXGIObjectProxyMethodsOverride
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
class __MicroComIDXGIObjectProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\DirectX\IDXGIObject
{
	/**
	 * @param \System\Guid* $Name
	 * @param \System\UInt16 $DataSize
	 * @param \System\Void** $pData
	 * @return \System\Void|void
	 */
	public  function SetPrivateData($Name, $DataSize, $pData){}
	/**
	 * @param \System\Guid* $Name
	 * @param \MicroCom\Runtime\IUnknown $pUnknown
	 * @return \System\Void|void
	 */
	public  function SetPrivateDataInterface($Name, $pUnknown){}
	/**
	 * @param \System\Guid* $Name
	 * @param \System\UInt16* $pDataSize
	 * @return \System\Void*
	 */
	public  function GetPrivateData($Name, $pDataSize){}
	/**
	 * @param \System\Guid* $riid
	 * @return \System\Void*
	 */
	public  function GetParent($riid){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIDXGIObjectProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIDXGIObjectProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIDXGIObjectProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIDXGIObjectProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
