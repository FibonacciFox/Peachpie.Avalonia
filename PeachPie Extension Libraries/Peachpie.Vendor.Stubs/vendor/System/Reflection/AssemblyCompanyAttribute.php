<?php
namespace System\Reflection;
final class AssemblyCompanyAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Company;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $company
	 */
	public function __construct($company){}
}