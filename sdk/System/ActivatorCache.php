<?php
namespace System;
/**
 */
class ActivatorCache extends \System\Object
{
	/**
	 * @return \System\Boolean
	 */
	protected  function get_CtorIsPublic(){}
	/**
	 * @param \System\RuntimeType $rt
	 * @return \System\Object|object
	 */
	protected  function CreateUninitializedObject($rt){}
	/**
	 * @param \System\Object|object $uninitializedObject
	 * @return \System\Void|void
	 */
	protected  function CallConstructor($uninitializedObject){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
