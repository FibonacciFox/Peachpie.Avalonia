<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 */
class MaybeNullWhenAttribute extends \System\Attribute
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ReturnValue;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Boolean
	 */
	public  function get_ReturnValue(){}
}
