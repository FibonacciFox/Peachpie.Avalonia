<?php
namespace System\Reflection;
final class ConstArray extends \System\ValueType
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	protected $m_length;
	/**
	 * @field
	 * @since readonly
	 * @var \System\IntPtr
	 */
	protected $m_constArray;
	/**
	 * @property
	 * @var \System\IntPtr
	 * @since readonly
	 */
	public $Signature;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\Byte
	 * @since readonly
	 */
	public $Item;

}