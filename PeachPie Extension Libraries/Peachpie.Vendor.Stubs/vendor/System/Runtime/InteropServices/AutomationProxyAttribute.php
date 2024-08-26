<?php
namespace System\Runtime\InteropServices;
final class AutomationProxyAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Boolean|bool
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
	 * @param \System\Boolean|bool $val
	 */
	public function __construct($val){}
}