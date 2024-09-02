<?php
namespace System\Diagnostics\Contracts;
final class ContractInvariantMethodAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 */
	public function __construct(){}
}