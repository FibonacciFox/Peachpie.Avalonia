<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RandomMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Next_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Next_2($maxValue){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Next_3($minValue, $maxValue){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public  function NextInt64_1(){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public  function NextInt64_2($maxValue){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public  function NextInt64_3($minValue, $maxValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function NextBytes_1($buffer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function NextBytes_2($buffer){}
}
/**
 */
class Random extends \System\Object
{
	/**
	 * @var \System\Random
	 * @property
	 */
	public readonly $Shared;
	/**
	 * @return \System\Random
	 */
	public static function get_Shared(){}
	/**
	 * @uses RandomMethodsOverride::Next_1 ()
	 * @uses RandomMethodsOverride::Next_2 ($maxValue)
	 * @uses RandomMethodsOverride::Next_3 ($minValue, $maxValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Next(mixed ...$args){}
	/**
	 * @uses RandomMethodsOverride::NextInt64_1 ()
	 * @uses RandomMethodsOverride::NextInt64_2 ($maxValue)
	 * @uses RandomMethodsOverride::NextInt64_3 ($minValue, $maxValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function NextInt64(mixed ...$args){}
	/**
	 * @return \System\Single
	 */
	public  function NextSingle(){}
	/**
	 * @return \System\Double|double
	 */
	public  function NextDouble(){}
	/**
	 * @uses RandomMethodsOverride::NextBytes_1 ($buffer)
	 * @uses RandomMethodsOverride::NextBytes_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function NextBytes(mixed ...$args){}
	/**
	 * @return \System\Double|double
	 */
	protected  function Sample(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowMaxValueMustBeNonNegative(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowMinMaxValueSwapped(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
