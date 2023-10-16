<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NullableMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Equals_1($n1, $n2){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class Nullable extends \System\Object
{
	/**
	 * @param \System\Nullable_1 $n1
	 * @param \System\Nullable_1 $n2
	 * @return \System\Int32|int
	 */
	public static function Compare($n1, $n2){}
	/**
	 * @uses NullableMethodsOverride::Equals_1 ($n1, $n2)
	 * @uses NullableMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Type $nullableType
	 * @return \System\Type
	 */
	public static function GetUnderlyingType($nullableType){}
	/**
	 * @param \System\Nullable_1& $nullable
	 * @return \System\T&
	 */
	public static function GetValueRefOrDefaultRef($nullable){}
}
