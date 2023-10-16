<?php
namespace System\Runtime\InteropServices;
/**
 */
class InterfaceTypeAttribute extends \System\Attribute
{
	/**
	 * @var \System\Runtime\InteropServices\ComInterfaceType
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\InteropServices\ComInterfaceType
	 */
	public  function get_Value(){}
}
