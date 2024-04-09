<?php
namespace System\Diagnostics\Contracts;
final class ContractPublicPropertyNameAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $name
	 */
	public function __construct($name){}
}