<?php
namespace System\Runtime\InteropServices;
final class FieldOffsetAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Int32|int $offset
	 */
	public function __construct($offset){}
}