<?php
namespace Avalonia\Skia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SkiaPlatformMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Initialize_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Initialize_2($options){}
}
/**
 */
class SkiaPlatform extends \System\Object
{
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $DefaultDpi;
	/**
	 * @uses SkiaPlatformMethodsOverride::Initialize_1 ()
	 * @uses SkiaPlatformMethodsOverride::Initialize_2 ($options)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Initialize(mixed ...$args){}
	/**
	 * @return \Avalonia\Vector
	 */
	public static function get_DefaultDpi(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
