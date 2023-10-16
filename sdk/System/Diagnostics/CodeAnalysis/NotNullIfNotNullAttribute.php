<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 */
class NotNullIfNotNullAttribute extends \System\Attribute
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $ParameterName;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\String|string
	 */
	public  function get_ParameterName(){}
}
