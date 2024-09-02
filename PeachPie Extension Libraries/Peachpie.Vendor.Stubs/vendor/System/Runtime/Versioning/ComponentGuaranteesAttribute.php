<?php
namespace System\Runtime\Versioning;
final class ComponentGuaranteesAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Runtime\Versioning\ComponentGuaranteesOptions
	 * @since readonly
	 */
	public $Guarantees;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Runtime\Versioning\ComponentGuaranteesOptions $guarantees
	 */
	public function __construct($guarantees){}
}