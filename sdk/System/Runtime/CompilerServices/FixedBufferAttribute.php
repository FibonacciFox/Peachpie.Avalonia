<?php
namespace System\Runtime\CompilerServices;
/**
 */
class FixedBufferAttribute extends \System\Attribute
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $ElementType;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Length;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Type
	 */
	public  function get_ElementType(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
}
