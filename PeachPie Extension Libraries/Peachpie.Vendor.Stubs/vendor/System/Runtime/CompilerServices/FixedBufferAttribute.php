<?php
namespace System\Runtime\CompilerServices;
final class FixedBufferAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $ElementType;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Type $elementType
	 * @param \System\Int32|int $length
	 */
	public function __construct($elementType, $length){}
}