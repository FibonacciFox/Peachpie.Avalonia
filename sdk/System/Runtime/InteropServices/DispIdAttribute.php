<?php
namespace System\Runtime\InteropServices;
/**
 */
class DispIdAttribute extends \System\Attribute
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Value(){}
}
