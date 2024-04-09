<?php
namespace System\Runtime\InteropServices;
final class TypeLibVersionAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MajorVersion;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MinorVersion;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Int32|int $major
	 * @param \System\Int32|int $minor
	 */
	public function __construct($major, $minor){}
}