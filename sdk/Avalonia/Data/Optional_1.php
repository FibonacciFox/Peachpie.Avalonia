<?php
namespace Avalonia\Data;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Optional_1MethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
	/**
	 * @return \Avalonia\Data\T
	 */
	#[MethodOverride] public  function GetValueOrDefault_1(){}
	/**
	 * @return \Avalonia\Data\T
	 */
	#[MethodOverride] public  function GetValueOrDefault_2($defaultValue){}
	/**
	 * @return \Avalonia\Data\TResult
	 */
	#[MethodOverride] public  function GetValueOrDefault_3(){}
	/**
	 * @return \Avalonia\Data\TResult
	 */
	#[MethodOverride] public  function GetValueOrDefault_4($defaultValue){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Optional_1 extends \System\ValueType implements 
	\System\IEquatable_1
{
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
	 * @var \Avalonia\Data\Optional_1[T]
	 * @property
	 */
	public readonly $Empty;
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasValue(){}
	/**
	 * @return \Avalonia\Data\T
	 */
	public  function get_Value(){}
	/**
	 * @uses Optional_1MethodsOverride::Equals_1 ($obj)
	 * @uses Optional_1MethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @return \Avalonia\Data\Optional_1
	 */
	public  function ToObject(){}
	/**
	 * @uses Optional_1MethodsOverride::GetValueOrDefault_1 ()
	 * @uses Optional_1MethodsOverride::GetValueOrDefault_2 ($defaultValue)
	 * @uses Optional_1MethodsOverride::GetValueOrDefault_3 ()
	 * @uses Optional_1MethodsOverride::GetValueOrDefault_4 ($defaultValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValueOrDefault(mixed ...$args){}
	/**
	 * @param \Avalonia\Data\T $value
	 * @return \Avalonia\Data\Optional_1
	 */
	public static function op_Implicit($value){}
	/**
	 * @param \Avalonia\Data\Optional_1 $x
	 * @param \Avalonia\Data\Optional_1 $y
	 * @return \System\Boolean
	 */
	public static function op_Inequality($x, $y){}
	/**
	 * @param \Avalonia\Data\Optional_1 $x
	 * @param \Avalonia\Data\Optional_1 $y
	 * @return \System\Boolean
	 */
	public static function op_Equality($x, $y){}
	/**
	 * @return \Avalonia\Data\Optional_1
	 */
	public static function get_Empty(){}
}
