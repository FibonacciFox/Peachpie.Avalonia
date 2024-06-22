<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LocatorExtensionsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\IAvaloniaDependencyResolver $resolver
	 * @param \System\Type $t
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function GetRequiredService_1 ($resolver, $t){}
	/**
	 * @deprecated
	 * @param \Avalonia\IAvaloniaDependencyResolver $resolver
	 * @return \T|object
	 */
	#[MethodOverride]public static function GetRequiredService_2 ($resolver){}
}
class LocatorExtensions extends \System\Object
{
	use LocatorExtensionsOverride;


	/**
	 * @param \Avalonia\IAvaloniaDependencyResolver $resolver
	 * @return \T|object
	 */
	public static function GetService($resolver){}
	/**
	 * @uses LocatorExtensionsOverride::GetRequiredService_1 <br>public , args: ($resolver, $t)<br>
	 * @uses LocatorExtensionsOverride::GetRequiredService_2 <br>public , args: ($resolver)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|\T|object|mixed|\override
	 */
	#[MethodOverridePublic]function GetRequiredService (\override ...$args){}
}