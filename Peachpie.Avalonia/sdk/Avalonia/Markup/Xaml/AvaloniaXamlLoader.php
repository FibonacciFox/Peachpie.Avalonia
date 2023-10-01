<?php
namespace Avalonia\Markup\Xaml;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvaloniaXamlLoaderMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Load_1($obj){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Load_2($sp, $obj){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function Load_3($uri, $baseUri){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function Load_4($sp, $uri, $baseUri){}
}
/**
 */
class AvaloniaXamlLoader extends \System\Object
{
	/**
	 * @uses AvaloniaXamlLoaderMethodsOverride::Load_1 ($obj)
	 * @uses AvaloniaXamlLoaderMethodsOverride::Load_2 ($sp, $obj)
	 * @uses AvaloniaXamlLoaderMethodsOverride::Load_3 ($uri, $baseUri)
	 * @uses AvaloniaXamlLoaderMethodsOverride::Load_4 ($sp, $uri, $baseUri)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Load(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
