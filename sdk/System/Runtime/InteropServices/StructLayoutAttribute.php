<?php
namespace System\Runtime\InteropServices;
/**
 */
class StructLayoutAttribute extends \System\Attribute
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Pack;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $Size;
	/**
	 * @var \System\Runtime\InteropServices\CharSet
	 * @field
	 */
	public $CharSet;
	/**
	 * @var \System\Runtime\InteropServices\LayoutKind
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\InteropServices\LayoutKind
	 */
	public  function get_Value(){}
}
