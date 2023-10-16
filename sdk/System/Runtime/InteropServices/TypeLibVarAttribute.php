<?php
namespace System\Runtime\InteropServices;
/**
 */
class TypeLibVarAttribute extends \System\Attribute
{
	/**
	 * @var \System\Runtime\InteropServices\TypeLibVarFlags
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\InteropServices\TypeLibVarFlags
	 */
	public  function get_Value(){}
}
