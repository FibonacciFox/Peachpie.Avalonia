<?php
namespace System\Diagnostics\Contracts;
final class ContractClassForAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $TypeContractsAreFor;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Type $typeContractsAreFor
	 */
	public function __construct($typeContractsAreFor){}
}