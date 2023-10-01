<?php
namespace Avalonia\Native\Interop\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIAvnPlatformSettingsProxyMethodsOverride
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
class __MicroComIAvnPlatformSettingsProxy extends \MicroCom\Runtime\MicroComProxyBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Native\Interop\IAvnPlatformSettings
{
	/**
	 * @return \Avalonia\Native\Interop\AvnPlatformThemeVariant
	 */
	public  function get_PlatformTheme(){}
	/**
	 * @return \System\UInt32
	 */
	public  function get_AccentColor(){}
	/**
	 * @param \Avalonia\Native\Interop\IAvnActionCallback $callback
	 * @return \System\Void|void
	 */
	public  function RegisterColorsChange($callback){}
	/**
	 * @return \System\Void|void
	 */
	protected static function __MicroComModuleInit(){}
	/**
	 * @uses __MicroComIAvnPlatformSettingsProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIAvnPlatformSettingsProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIAvnPlatformSettingsProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIAvnPlatformSettingsProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
