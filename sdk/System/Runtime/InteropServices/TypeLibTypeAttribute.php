<?php
namespace System\Runtime\InteropServices;
/**
 */
class TypeLibTypeAttribute extends \System\Attribute
{
	/**
	 * @var \System\Runtime\InteropServices\TypeLibTypeFlags
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\InteropServices\TypeLibTypeFlags
	 */
	public  function get_Value(){}
}
