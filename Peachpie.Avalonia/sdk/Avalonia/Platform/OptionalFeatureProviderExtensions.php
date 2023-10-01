<?php
namespace Avalonia\Platform;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait OptionalFeatureProviderExtensionsMethodsOverride
{
	/**
	 * @return \Avalonia\Platform\T
	 */
	#[MethodOverride] public static function TryGetFeature_1($provider){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryGetFeature_2($provider, $rv){}
}
/**
 */
class OptionalFeatureProviderExtensions extends \System\Object
{
	/**
	 * @uses OptionalFeatureProviderExtensionsMethodsOverride::TryGetFeature_1 ($provider)
	 * @uses OptionalFeatureProviderExtensionsMethodsOverride::TryGetFeature_2 ($provider, $rv)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryGetFeature(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
