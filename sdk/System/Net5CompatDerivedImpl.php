<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Net5CompatDerivedImplMethodsOverride
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
class Net5CompatDerivedImpl extends \System\ImplBase
{
	/**
	 * @uses Net5CompatDerivedImplMethodsOverride::Next_1 ()
	 * @uses Net5CompatDerivedImplMethodsOverride::Next_2 ($maxValue)
	 * @uses Net5CompatDerivedImplMethodsOverride::Next_3 ($minValue, $maxValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Next(mixed ...$args){}
	/**
	 * @uses Net5CompatDerivedImplMethodsOverride::NextInt64_1 ()
	 * @uses Net5CompatDerivedImplMethodsOverride::NextInt64_2 ($maxValue)
	 * @uses Net5CompatDerivedImplMethodsOverride::NextInt64_3 ($minValue, $maxValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function NextInt64(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NextUInt64(){}
	/**
	 * @uses Net5CompatDerivedImplMethodsOverride::NextBytes_1 ($buffer)
	 * @uses Net5CompatDerivedImplMethodsOverride::NextBytes_2 ($buffer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function NextBytes(mixed ...$args){}
}
