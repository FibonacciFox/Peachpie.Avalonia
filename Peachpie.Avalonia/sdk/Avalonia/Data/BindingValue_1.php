<?php
namespace Avalonia\Data;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BindingValue_1MethodsOverride
{
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
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] public static function FromUntyped_1($value){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] public static function FromUntyped_2($value, $targetType){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] public static function op_Implicit_1($value){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] public static function op_Implicit_2($optional){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] public static function BindingError_1($e){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] public static function BindingError_2($e, $fallbackValue){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] public static function BindingError_3($e, $fallbackValue){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] public static function DataValidationError_1($e){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] public static function DataValidationError_2($e, $fallbackValue){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	#[MethodOverride] public static function DataValidationError_3($e, $fallbackValue){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class BindingValue_1 extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasError(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasValue(){}
	/**
	 * @return \Avalonia\Data\BindingValueType
	 */
	public  function get_Type(){}
	/**
	 * @return \Avalonia\Data\T
	 */
	public  function get_Value(){}
	/**
	 * @return \System\Exception
	 */
	public  function get_Error(){}
	/**
	 * @return \Avalonia\Data\Optional_1
	 */
	public  function ToOptional(){}
	/**
	 * @return \System\Object|object
	 */
	public  function ToUntyped(){}
	/**
	 * @param \Avalonia\Data\T $value
	 * @return \Avalonia\Data\BindingValue_1
	 */
	public  function WithValue($value){}
	/**
	 * @uses BindingValue_1MethodsOverride::GetValueOrDefault_1 ()
	 * @uses BindingValue_1MethodsOverride::GetValueOrDefault_2 ($defaultValue)
	 * @uses BindingValue_1MethodsOverride::GetValueOrDefault_3 ()
	 * @uses BindingValue_1MethodsOverride::GetValueOrDefault_4 ($defaultValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValueOrDefault(mixed ...$args){}
	/**
	 * @uses BindingValue_1MethodsOverride::FromUntyped_1 ($value)
	 * @uses BindingValue_1MethodsOverride::FromUntyped_2 ($value, $targetType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromUntyped(mixed ...$args){}
	/**
	 * @uses BindingValue_1MethodsOverride::op_Implicit_1 ($value)
	 * @uses BindingValue_1MethodsOverride::op_Implicit_2 ($optional)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Implicit(mixed ...$args){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	public static function get_Unset(){}
	/**
	 * @return \Avalonia\Data\BindingValue_1
	 */
	public static function get_DoNothing(){}
	/**
	 * @uses BindingValue_1MethodsOverride::BindingError_1 ($e)
	 * @uses BindingValue_1MethodsOverride::BindingError_2 ($e, $fallbackValue)
	 * @uses BindingValue_1MethodsOverride::BindingError_3 ($e, $fallbackValue)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function BindingError(mixed ...$args){}
	/**
	 * @uses BindingValue_1MethodsOverride::DataValidationError_1 ($e)
	 * @uses BindingValue_1MethodsOverride::DataValidationError_2 ($e, $fallbackValue)
	 * @uses BindingValue_1MethodsOverride::DataValidationError_3 ($e, $fallbackValue)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function DataValidationError(mixed ...$args){}
	/**
	 * @param \Avalonia\Data\T $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateValue($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Data\BindingValue_1 $left
	 * @param \Avalonia\Data\BindingValue_1 $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Data\BindingValue_1 $left
	 * @param \Avalonia\Data\BindingValue_1 $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses BindingValue_1MethodsOverride::Equals_1 ($obj)
	 * @uses BindingValue_1MethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
