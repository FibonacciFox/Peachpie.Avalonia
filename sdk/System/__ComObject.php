<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __ComObjectMethodsOverride
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
class __ComObject extends \System\MarshalByRefObject
{
	/**
	 * @param \System\Object|object $key
	 * @return \System\Object|object
	 */
	protected  function GetData($key){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Object|object $data
	 * @return \System\Boolean
	 */
	protected  function SetData($key, $data){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ReleaseAllData(){}
	/**
	 * @param \System\RuntimeType $t
	 * @return \System\Object|object
	 */
	protected  function GetEventProvider($t){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function ReleaseSelf(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function FinalReleaseSelf(){}
	/**
	 * @param \System\RuntimeType $t
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateEventProvider($t){}
	/**
	 * @uses __ComObjectMethodsOverride::MemberwiseClone_1 ($cloneIdentity)
	 * @uses __ComObjectMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
}
