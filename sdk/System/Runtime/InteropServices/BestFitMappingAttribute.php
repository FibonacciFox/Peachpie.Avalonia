<?php
namespace System\Runtime\InteropServices;
/**
 */
class BestFitMappingAttribute extends \System\Attribute
{
	/**
	 * @var \System\Boolean
	 * @field
	 */
	public $ThrowOnUnmappableChar;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $BestFitMapping;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Boolean
	 */
	public  function get_BestFitMapping(){}
}
