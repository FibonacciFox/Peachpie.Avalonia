<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 */
class MemberNotNullWhenAttribute extends \System\Attribute
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $ReturnValue;
	/**
	 * @var \System\String[]
	 * @property
	 */
	public readonly $Members;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Boolean
	 */
	public  function get_ReturnValue(){}
	/**
	 * @return \System\String[]
	 */
	public  function get_Members(){}
}
