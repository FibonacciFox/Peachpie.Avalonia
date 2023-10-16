<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MarshalByRefObjectMethodsOverride
{
	/**
	 * @return \System\MarshalByRefObject
	 */
	#[MethodOverride] protected  function MemberwiseClone_1($cloneIdentity){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
}
/**
 */
class MarshalByRefObject extends \System\Object
{
	/**
	 * @return \System\Object|object
	 */
	public  function GetLifetimeService(){}
	/**
	 * @return \System\Object|object
	 */
	public  function InitializeLifetimeService(){}
	/**
	 * @uses MarshalByRefObjectMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses MarshalByRefObjectMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
