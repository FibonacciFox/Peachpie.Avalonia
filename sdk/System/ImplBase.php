<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImplBaseMethodsOverride
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
class ImplBase extends \System\Object
{
	/**
	 * @return \System\Double|double
	 */
	public  function Sample(){}
	/**
	 * @uses ImplBaseMethodsOverride::Next_1 ()
	 * @uses ImplBaseMethodsOverride::Next_2 ($maxValue)
	 * @uses ImplBaseMethodsOverride::Next_3 ($minValue, $maxValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Next(mixed ...$args){}
	/**
	 * @uses ImplBaseMethodsOverride::NextInt64_1 ()
	 * @uses ImplBaseMethodsOverride::NextInt64_2 ($maxValue)
	 * @uses ImplBaseMethodsOverride::NextInt64_3 ($minValue, $maxValue)
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
	 * @uses ImplBaseMethodsOverride::NextBytes_1 ($buffer)
	 * @uses ImplBaseMethodsOverride::NextBytes_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function NextBytes(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
