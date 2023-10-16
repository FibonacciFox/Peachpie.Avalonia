<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IndexMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class Index extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Index
	 * @property
	 */
	public readonly $Start;
	/**
	 * @var \System\Index
	 * @property
	 */
	public readonly $End;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFromEnd;
	/**
	 * @return \System\Index
	 */
	public static function get_Start(){}
	/**
	 * @return \System\Index
	 */
	public static function get_End(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Index
	 */
	public static function FromStart($value){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Index
	 */
	public static function FromEnd($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Value(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFromEnd(){}
	/**
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	public  function GetOffset($length){}
	/**
	 * @uses IndexMethodsOverride::Equals_1 ($value)
	 * @uses IndexMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Index
	 */
	public static function op_Implicit($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToStringFromEnd(){}
}
