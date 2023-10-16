<?php
namespace System\Runtime\InteropServices;
/**
 */
class TypeLibFuncAttribute extends \System\Attribute
{
	/**
	 * @var \System\Runtime\InteropServices\TypeLibFuncFlags
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\InteropServices\TypeLibFuncFlags
	 */
	public  function get_Value(){}
}
