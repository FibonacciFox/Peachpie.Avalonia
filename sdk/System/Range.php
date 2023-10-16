<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RangeMethodsOverride
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
class Range extends \System\ValueType implements 
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
	 * @var \System\Range
	 * @property
	 */
	public readonly $All;
	/**
	 * @return \System\Index
	 */
	public  function get_Start(){}
	/**
	 * @return \System\Index
	 */
	public  function get_End(){}
	/**
	 * @uses RangeMethodsOverride::Equals_1 ($value)
	 * @uses RangeMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Index $start
	 * @return \System\Range
	 */
	public static function StartAt($start){}
	/**
	 * @param \System\Index $end
	 * @return \System\Range
	 */
	public static function EndAt($end){}
	/**
	 * @return \System\Range
	 */
	public static function get_All(){}
	/**
	 * @param \System\Int32|int $length
	 * @return \System\ValueTuple_2
	 */
	public  function GetOffsetAndLength($length){}
}
