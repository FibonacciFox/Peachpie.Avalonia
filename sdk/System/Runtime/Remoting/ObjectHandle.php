<?php
namespace System\Runtime\Remoting;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ObjectHandleMethodsOverride
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
class ObjectHandle extends \System\MarshalByRefObject
{
	/**
	 * @return \System\Object|object
	 */
	public  function Unwrap(){}
	/**
	 * @uses ObjectHandleMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses ObjectHandleMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
