<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 */
class DynamicallyAccessedMembersAttribute extends \System\Attribute
{
	/**
	 * @var \System\Diagnostics\CodeAnalysis\DynamicallyAccessedMemberTypes
	 * @property
	 */
	public readonly $MemberTypes;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
	/**
	 * @return \System\Diagnostics\CodeAnalysis\DynamicallyAccessedMemberTypes
	 */
	public  function get_MemberTypes(){}
}
