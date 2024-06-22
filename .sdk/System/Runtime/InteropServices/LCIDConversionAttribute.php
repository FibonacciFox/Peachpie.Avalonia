<?php
namespace System\Runtime\InteropServices;
final class LCIDConversionAttribute extends \System\Attribute
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
	 * @param \System\Int32|int $lcid
	 */
	public function __construct($lcid){}
}