<?php
namespace System\Diagnostics\Contracts;
final class ContractVerificationAttribute extends \System\Attribute
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
	 * @param \System\Boolean|bool $value
	 */
	public function __construct($value){}
}