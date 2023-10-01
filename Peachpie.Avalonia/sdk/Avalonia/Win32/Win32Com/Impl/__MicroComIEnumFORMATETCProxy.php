<?php
namespace Avalonia\Win32\Win32Com\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIEnumFORMATETCProxyMethodsOverride
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
class __MicroComIEnumFORMATETCProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\Win32Com\IEnumFORMATETC
{
	/**
	 * @param \System\UInt32 $celt
	 * @param \Avalonia\Win32\Interop\FORMATETC* $rgelt
	 * @param \System\UInt32* $pceltFetched
	 * @return \System\UInt32
	 */
	public  function Next($celt, $rgelt, $pceltFetched){}
	/**
	 * @param \System\UInt32 $celt
	 * @return \System\UInt32
	 */
	public  function Skip($celt){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
	/**
	 * @return \Avalonia\Win32\Win32Com\IEnumFORMATETC
	 */
	public  function Clone(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIEnumFORMATETCProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIEnumFORMATETCProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIEnumFORMATETCProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIEnumFORMATETCProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
