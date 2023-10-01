<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ResourceNodeExtensionsMethodsOverride
{
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function FindResource_1($control, $key){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function FindResource_2($control, $theme, $key){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryFindResource_1($control, $key, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryFindResource_2($control, $key, $theme, $value){}
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function GetResourceObservable_1($control, $key, $converter){}
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function GetResourceObservable_2($resourceProvider, $key, $converter){}
	/**
	 * @return \System\IObservable_1
	 */
	#[MethodOverride] public static function GetResourceObservable_3($resourceProvider, $key, $defaultThemeVariant, $converter){}
}
/**
 */
class ResourceNodeExtensions extends \System\Object
{
	/**
	 * @uses ResourceNodeExtensionsMethodsOverride::FindResource_1 ($control, $key)
	 * @uses ResourceNodeExtensionsMethodsOverride::FindResource_2 ($control, $theme, $key)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FindResource(mixed ...$args){}
	/**
	 * @uses ResourceNodeExtensionsMethodsOverride::TryFindResource_1 ($control, $key, $value)
	 * @uses ResourceNodeExtensionsMethodsOverride::TryFindResource_2 ($control, $key, $theme, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryFindResource(mixed ...$args){}
	/**
	 * @param \Avalonia\Controls\IResourceHost $control
	 * @param \System\Object|object $key
	 * @param \System\Object& $value
	 * @return \System\Boolean
	 */
	public static function TryGetResource($control, $key, $value){}
	/**
	 * @uses ResourceNodeExtensionsMethodsOverride::GetResourceObservable_1 ($control, $key, $converter)
	 * @uses ResourceNodeExtensionsMethodsOverride::GetResourceObservable_2 ($resourceProvider, $key, $converter)
	 * @uses ResourceNodeExtensionsMethodsOverride::GetResourceObservable_3 ($resourceProvider, $key, $defaultThemeVariant, $converter)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetResourceObservable(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
