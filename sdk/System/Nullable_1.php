<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Nullable_1MethodsOverride
{
	/**
	 * @return \System\T
	 */
	#[MethodOverride] public  function GetValueOrDefault_1(){}
	/**
	 * @return \System\T
	 */
	#[MethodOverride] public  function GetValueOrDefault_2($defaultValue){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Nullable_1 extends \System\ValueType
{
	/**
	 * @var \T
	 * @field
	 */
	protected $value;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasValue;
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Value;
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasValue(){}
	/**
	 * @return \System\T
	 */
	public  function get_Value(){}
	/**
	 * @uses Nullable_1MethodsOverride::GetValueOrDefault_1 ()
	 * @uses Nullable_1MethodsOverride::GetValueOrDefault_2 ($defaultValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValueOrDefault(mixed ...$args){}
	/**
	 * @param \System\T $value
	 * @return \System\Nullable_1
	 */
	public static function op_Implicit($value){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\T
	 */
	public static function op_Explicit($value){}
}
