<?php
namespace System\Runtime\InteropServices;
/**
 */
class ClassInterfaceAttribute extends \System\Attribute
{
	/**
	 * @var \System\Runtime\InteropServices\ClassInterfaceType
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\InteropServices\ClassInterfaceType
	 */
	public  function get_Value(){}
}
