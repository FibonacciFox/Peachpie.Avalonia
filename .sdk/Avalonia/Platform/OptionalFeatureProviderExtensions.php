<?php
namespace Avalonia\Platform;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait OptionalFeatureProviderExtensionsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Platform\IOptionalFeatureProvider $provider
	 * @return \T|object
	 */
	#[MethodOverride]public static function TryGetFeature_1 ($provider){}
	/**
	 * @deprecated
	 * @param \Avalonia\Platform\IOptionalFeatureProvider $provider
	 * @param \T& &$rv
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryGetFeature_2 ($provider, &$rv){}
}
class OptionalFeatureProviderExtensions extends \System\Object
{
	use OptionalFeatureProviderExtensionsOverride;


	/**
	 * @uses OptionalFeatureProviderExtensionsOverride::TryGetFeature_1 <br>public , args: ($provider)<br>
	 * @uses OptionalFeatureProviderExtensionsOverride::TryGetFeature_2 <br>public , args: ($provider, &$rv)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryGetFeature (\override ...$args){}
}