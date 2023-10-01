<?php
namespace Avalonia\Markup\Data;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DelayedBindingMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Add_1($target, $property, $binding){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Add_2($target, $property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function ApplyBindings_1($control){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function ApplyBindings_2($sender, $e){}
}
/**
 */
class DelayedBinding extends \System\Object
{
	/**
	 * @uses DelayedBindingMethodsOverride::Add_1 ($target, $property, $binding)
	 * @uses DelayedBindingMethodsOverride::Add_2 ($target, $property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Add(mixed ...$args){}
	/**
	 * @uses DelayedBindingMethodsOverride::ApplyBindings_1 ($control)
	 * @uses DelayedBindingMethodsOverride::ApplyBindings_2 ($sender, $e)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ApplyBindings(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
