<?php
namespace System\Diagnostics\Contracts;
/**
 */
class ContractClassAttribute extends \System\Attribute
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $TypeContainingContracts;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Type
	 */
	public  function get_TypeContainingContracts(){}
}
