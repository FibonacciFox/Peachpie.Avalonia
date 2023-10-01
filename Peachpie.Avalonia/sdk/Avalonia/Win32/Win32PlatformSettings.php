<?php
namespace Avalonia\Win32;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Win32PlatformSettingsMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function OnColorValuesChanged_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function OnColorValuesChanged_2($colorValues){}
}
/**
 */
class Win32PlatformSettings extends \Avalonia\Platform\DefaultPlatformSettings implements 
	\Avalonia\Platform\IPlatformSettings
{
	/**
	 * @uses Win32PlatformSettingsMethodsOverride::OnColorValuesChanged_1 ()
	 * @uses Win32PlatformSettingsMethodsOverride::OnColorValuesChanged_2 ($colorValues)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnColorValuesChanged(mixed ...$args){}
}
