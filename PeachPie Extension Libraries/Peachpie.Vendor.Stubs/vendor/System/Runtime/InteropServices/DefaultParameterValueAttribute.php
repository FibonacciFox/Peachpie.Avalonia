<?php
namespace System\Runtime\InteropServices;
final class DefaultParameterValueAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Object|object
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
	 * @param \System\Object|object $value
	 */
	public function __construct($value){}
}