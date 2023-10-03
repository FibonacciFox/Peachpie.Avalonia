<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LocatorExtensionsMethodsOverride
{
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function GetRequiredService_1($resolver, $t){}
	/**
	 * @return \Avalonia\T
	 */
	#[MethodOverride] public static function GetRequiredService_2($resolver){}
}
/**
 */
class LocatorExtensions extends \System\Object
{
	/**
	 * @param \Avalonia\IAvaloniaDependencyResolver $resolver
	 * @return \Avalonia\T
	 */
	public static function GetService($resolver){}
	/**
	 * @uses LocatorExtensionsMethodsOverride::GetRequiredService_1 ($resolver, $t)
	 * @uses LocatorExtensionsMethodsOverride::GetRequiredService_2 ($resolver)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetRequiredService(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
