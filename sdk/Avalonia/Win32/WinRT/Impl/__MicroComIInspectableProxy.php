<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIInspectableProxyMethodsOverride
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
class __MicroComIInspectableProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable
{
	/**
	 * @param \System\UInt64* $iidCount
	 * @param \System\Guid** $iids
	 * @return \System\Void|void
	 */
	public  function GetIids($iidCount, $iids){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_RuntimeClassName(){}
	/**
	 * @return \Avalonia\Win32\WinRT\TrustLevel
	 */
	public  function get_TrustLevel(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIInspectableProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIInspectableProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIInspectableProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIInspectableProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
