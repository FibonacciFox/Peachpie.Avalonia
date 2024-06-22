<?php
namespace System\Runtime\InteropServices;
final class DispIdAttribute extends \System\Attribute
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
	 * @param \System\Int32|int $dispId
	 */
	public function __construct($dispId){}
}