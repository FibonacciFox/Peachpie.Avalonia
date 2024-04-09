<?php
namespace System\Diagnostics\Contracts;
final class ContractClassAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $TypeContainingContracts;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Type $typeContainingContracts
	 */
	public function __construct($typeContainingContracts){}
}