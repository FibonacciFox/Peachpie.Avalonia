<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 */
class DoesNotReturnIfAttribute extends \System\Attribute
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ParameterValue;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Boolean
	 */
	public  function get_ParameterValue(){}
}
