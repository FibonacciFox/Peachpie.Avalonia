<?php
namespace System\Diagnostics\Contracts;
/**
 */
class ContractPublicPropertyNameAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
}
