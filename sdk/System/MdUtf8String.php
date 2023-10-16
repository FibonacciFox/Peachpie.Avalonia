<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MdUtf8StringMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function EqualsCaseInsensitive_1($szLhs, $szRhs, $cSz){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function EqualsCaseInsensitive_2($s){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] private static function HashCaseInsensitive_1($sz, $cSz){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] protected  function HashCaseInsensitive_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function Equals_1($s){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class MdUtf8String extends \System\ValueType
{
	/**
	 * @uses MdUtf8StringMethodsOverride::EqualsCaseInsensitive_1 ($szLhs, $szRhs, $cSz)
	 * @uses MdUtf8StringMethodsOverride::EqualsCaseInsensitive_2 ($s)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EqualsCaseInsensitive(mixed ...$args){}
	/**
	 * @uses MdUtf8StringMethodsOverride::HashCaseInsensitive_1 ($sz, $cSz)
	 * @uses MdUtf8StringMethodsOverride::HashCaseInsensitive_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function HashCaseInsensitive(mixed ...$args){}
	/**
	 * @uses MdUtf8StringMethodsOverride::Equals_1 ($s)
	 * @uses MdUtf8StringMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
