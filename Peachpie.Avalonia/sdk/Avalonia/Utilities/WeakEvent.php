<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WeakEventMethodsOverride
{
	/**
	 * @return \Avalonia\Utilities\WeakEvent_2
	 */
	#[MethodOverride] public static function Register_1($subscribe, $unsubscribe){}
	/**
	 * @return \Avalonia\Utilities\WeakEvent_2
	 */
	#[MethodOverride] public static function Register_2($subscribe){}
	/**
	 * @return \Avalonia\Utilities\WeakEvent_2
	 */
	#[MethodOverride] public static function Register_3($subscribe, $unsubscribe){}
}
/**
 */
class WeakEvent extends \System\Object
{
	/**
	 * @uses WeakEventMethodsOverride::Register_1 ($subscribe, $unsubscribe)
	 * @uses WeakEventMethodsOverride::Register_2 ($subscribe)
	 * @uses WeakEventMethodsOverride::Register_3 ($subscribe, $unsubscribe)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Register(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
