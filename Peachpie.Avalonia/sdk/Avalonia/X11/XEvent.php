<?php
namespace Avalonia\X11;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait XEventMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function ToString_2($ev){}
}
/**
 */
class XEvent extends \System\ValueType
{
	/**
	 * @uses XEventMethodsOverride::ToString_1 ()
	 * @uses XEventMethodsOverride::ToString_2 ($ev)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToString(mixed ...$args){}
}
