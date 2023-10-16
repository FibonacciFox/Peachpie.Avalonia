<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 */
class MemberNotNullAttribute extends \System\Attribute
{
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
	 * @return \System\String[]
	 */
	public  function get_Members(){}
}
