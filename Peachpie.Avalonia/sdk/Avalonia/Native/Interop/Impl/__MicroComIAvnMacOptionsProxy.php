<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnMacOptionsProxyMethodsOverride
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
class __MicroComIAvnMacOptionsProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnMacOptions
{
	/**
	 * @param \System\Int32|int $show
	 * @return \System\Void|void
	 */
	public  function SetShowInDock($show){}
	/**
	 * @param \System\String|string $utf8string
	 * @return \System\Void|void
	 */
	public  function SetApplicationTitle($utf8string){}
	/**
	 * @param \System\Int32|int $disable
	 * @return \System\Void|void
	 */
	public  function SetDisableSetProcessName($disable){}
	/**
	 * @param \System\Int32|int $disable
	 * @return \System\Void|void
	 */
	public  function SetDisableAppDelegate($disable){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnMacOptionsProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnMacOptionsProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvnMacOptionsProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvnMacOptionsProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
