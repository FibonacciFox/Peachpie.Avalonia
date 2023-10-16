<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait XoshiroImplMethodsOverride
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
class XoshiroImpl extends \System\ImplBase
{
	/**
	 * @return \System\UInt32
	 */
	protected  function NextUInt32(){}
	/**
	 * @return \System\UInt64
	 */
	protected  function NextUInt64(){}
	/**
	 * @uses XoshiroImplMethodsOverride::Next_1 ()
	 * @uses XoshiroImplMethodsOverride::Next_2 ($maxValue)
	 * @uses XoshiroImplMethodsOverride::Next_3 ($minValue, $maxValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Next(mixed ...$args){}
	/**
	 * @uses XoshiroImplMethodsOverride::NextInt64_1 ()
	 * @uses XoshiroImplMethodsOverride::NextInt64_2 ($maxValue)
	 * @uses XoshiroImplMethodsOverride::NextInt64_3 ($minValue, $maxValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function NextInt64(mixed ...$args){}
	/**
	 * @uses XoshiroImplMethodsOverride::NextBytes_1 ($buffer)
	 * @uses XoshiroImplMethodsOverride::NextBytes_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function NextBytes(mixed ...$args){}
}
