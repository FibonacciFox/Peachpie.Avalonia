<?php
namespace System\Runtime\Versioning;
/**
 */
class ComponentGuaranteesAttribute extends \System\Attribute
{
	/**
	 * @var \System\Runtime\Versioning\ComponentGuaranteesOptions
	 * @property
	 */
	public readonly $Guarantees;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\Versioning\ComponentGuaranteesOptions
	 */
	public  function get_Guarantees(){}
}
