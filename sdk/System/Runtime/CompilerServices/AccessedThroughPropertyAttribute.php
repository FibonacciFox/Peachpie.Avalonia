<?php
namespace System\Runtime\CompilerServices;
/**
 */
class AccessedThroughPropertyAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $PropertyName;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_PropertyName(){}
}
