<?php
namespace System\Runtime\InteropServices\Marshalling;
/**
 */
class CustomMarshallerAttribute extends \System\Attribute
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ManagedType;
	/**
	 * @var \System\Runtime\InteropServices\Marshalling\MarshalMode
	 * @property
	 */
	public readonly $MarshalMode;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $MarshallerType;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Type
	 */
	public  function get_ManagedType(){}
	/**
	 * @return \System\Runtime\InteropServices\Marshalling\MarshalMode
	 */
	public  function get_MarshalMode(){}
	/**
	 * @return \System\Type
	 */
	public  function get_MarshallerType(){}
}
