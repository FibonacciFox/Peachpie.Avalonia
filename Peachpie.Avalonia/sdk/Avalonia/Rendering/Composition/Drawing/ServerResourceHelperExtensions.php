<?php
namespace Avalonia\Rendering\Composition\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerResourceHelperExtensionsMethodsOverride
{
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	#[MethodOverride] public static function GetServer_1($brush, $compositor){}
	/**
	 * @return \Avalonia\Media\IPen
	 */
	#[MethodOverride] public static function GetServer_2($pen, $compositor){}
	/**
	 * @return \Avalonia\Media\ITransform
	 */
	#[MethodOverride] public static function GetServer_3($transform, $compositor){}
}
/**
 */
class ServerResourceHelperExtensions extends \System\Object
{
	/**
	 * @uses ServerResourceHelperExtensionsMethodsOverride::GetServer_1 ($brush, $compositor)
	 * @uses ServerResourceHelperExtensionsMethodsOverride::GetServer_2 ($pen, $compositor)
	 * @uses ServerResourceHelperExtensionsMethodsOverride::GetServer_3 ($transform, $compositor)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetServer(mixed ...$args){}
	/**
	 * @param \System\Object|object $o
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowNotCompatible($o){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
