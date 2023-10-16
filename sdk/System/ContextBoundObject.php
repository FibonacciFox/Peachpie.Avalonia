<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ContextBoundObjectMethodsOverride
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
class ContextBoundObject extends \System\MarshalByRefObject
{
	/**
	 * @uses ContextBoundObjectMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses ContextBoundObjectMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
