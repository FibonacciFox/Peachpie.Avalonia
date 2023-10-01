<?php
namespace Avalonia\FreeDesktop;
/**
 */
class DBusPlatformSettings extends \Avalonia\Platform\DefaultPlatformSettings implements 
	\Avalonia\Platform\IPlatformSettings
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetInitialValuesAsync(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetThemeVariantAsync(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetAccentColorAsync(){}
	/**
	 * @param \System\Exception $exception
	 * @param \System\ValueTuple_3 $valueTuple
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SettingsChangedHandler($exception, $valueTuple){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function BuildPlatformColorValues(){}
	/**
	 * @param \System\UInt32 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ToColorScheme($value){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ToAccentColor($value){}
}
