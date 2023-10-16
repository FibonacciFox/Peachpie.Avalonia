<?php
namespace System\Runtime\Versioning;
/**
 */
class ResourceConsumptionAttribute extends \System\Attribute
{
	/**
	 * @var \System\Runtime\Versioning\ResourceScope
	 * @property
	 */
	public readonly $ResourceScope;
	/**
	 * @var \System\Runtime\Versioning\ResourceScope
	 * @property
	 */
	public readonly $ConsumptionScope;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Runtime\Versioning\ResourceScope
	 */
	public  function get_ResourceScope(){}
	/**
	 * @return \System\Runtime\Versioning\ResourceScope
	 */
	public  function get_ConsumptionScope(){}
}
