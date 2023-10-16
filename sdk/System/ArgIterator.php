<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ArgIteratorMethodsOverride
{
	/**
	 * @return \System\TypedReference
	 */
	#[MethodOverride] public  function GetNextArg_1(){}
	/**
	 * @return \System\TypedReference
	 */
	#[MethodOverride] public  function GetNextArg_2($rth){}
}
/**
 */
class ArgIterator extends \System\ValueType
{
	/**
	 * @uses ArgIteratorMethodsOverride::GetNextArg_1 ()
	 * @uses ArgIteratorMethodsOverride::GetNextArg_2 ($rth)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetNextArg(mixed ...$args){}
	/**
	 * @param \System\Void* $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FCallGetNextArg($result){}
	/**
	 * @param \System\Void* $result
	 * @param \System\RuntimeType $rt
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalGetNextArg($result, $rt){}
	/**
	 * @return \System\Void|void
	 */
	public  function End(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function GetRemainingCount(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function _GetNextArgType(){}
	/**
	 * @return \System\RuntimeTypeHandle
	 */
	public  function GetNextArgType(){}
}
