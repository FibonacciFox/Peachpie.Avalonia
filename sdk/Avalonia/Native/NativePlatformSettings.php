<?php
namespace Avalonia\Native;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NativePlatformSettingsMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function OnColorValuesChanged_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function OnColorValuesChanged_2($colorValues){}
}
/**
 */
class NativePlatformSettings extends \Avalonia\Platform\DefaultPlatformSettings implements 
	\Avalonia\Platform\IPlatformSettings
{
	/**
	 * @var \System\TimeSpan
	 * @property
	 */
	public readonly $HoldWaitDuration;
	/**
	 * @var \Avalonia\Input\Platform\PlatformHotkeyConfiguration
	 * @property
	 */
	public readonly $HotkeyConfiguration;
	/**
	 * @uses NativePlatformSettingsMethodsOverride::OnColorValuesChanged_1 ()
	 * @uses NativePlatformSettingsMethodsOverride::OnColorValuesChanged_2 ($colorValues)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnColorValuesChanged(mixed ...$args){}
}
