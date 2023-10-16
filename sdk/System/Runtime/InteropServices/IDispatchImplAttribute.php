<?php
namespace System\Runtime\InteropServices;
/**
 */
class IDispatchImplAttribute extends \System\Attribute
{
	/**
	 * @var \System\Runtime\InteropServices\IDispatchImplType
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\InteropServices\IDispatchImplType
	 */
	public  function get_Value(){}
}
