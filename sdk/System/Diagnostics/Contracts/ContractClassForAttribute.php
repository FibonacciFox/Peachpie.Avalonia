<?php
namespace System\Diagnostics\Contracts;
/**
 */
class ContractClassForAttribute extends \System\Attribute
{
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $TypeContractsAreFor;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Type
	 */
	public  function get_TypeContractsAreFor(){}
}
