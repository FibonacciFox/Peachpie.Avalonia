<?php
namespace System\Diagnostics\CodeAnalysis;
final class DynamicallyAccessedMembersAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Diagnostics\CodeAnalysis\DynamicallyAccessedMemberTypes
	 * @since readonly
	 */
	public $MemberTypes;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Diagnostics\CodeAnalysis\DynamicallyAccessedMemberTypes $memberTypes
	 */
	public function __construct($memberTypes){}
}