<?php
namespace System\Reflection;
/**
 */
class ConstArray extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $m_length;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected readonly $m_constArray;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $Signature;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Length;
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $Item;
	/**
	 * @return \System\IntPtr
	 */
	public  function get_Signature(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Byte
	 */
	public  function get_Item($index){}
}
