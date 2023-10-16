<?php
namespace System\Runtime\InteropServices;
/**
 */
class ManagedToNativeComInteropStubAttribute extends \System\Attribute
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ClassType;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $MethodName;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Type
	 */
	public  function get_ClassType(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_MethodName(){}
}
