<?php
namespace System\Reflection;
final class AssemblyDelaySignAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $DelaySign;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Boolean|bool $delaySign
	 */
	public function __construct($delaySign){}
}