<?php
namespace System\Runtime\InteropServices\Marshalling;
/**
 */
class NativeMarshallingAttribute extends \System\Attribute
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $NativeType;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Type
	 */
	public  function get_NativeType(){}
}
