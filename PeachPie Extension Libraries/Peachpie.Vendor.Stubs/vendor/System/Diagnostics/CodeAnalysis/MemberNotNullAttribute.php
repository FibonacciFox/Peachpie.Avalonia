<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ContractOverride {
	/**
	 * @param \System\String|string $member
	 */
	#[MethodOverride]public function __construct_1 ($member){}
	/**
	 * @param \System\String ...$members
	 */
	#[MethodOverride]public function __construct_2 (...$members){}
}
final class MemberNotNullAttribute extends \System\Attribute
{
	use ContractOverride;
	/**
	 * @property
	 * @var \System\String[]|array
	 * @since readonly
	 */
	public $Members;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses MemberNotNullAttributeOverride::__construct_1 <br>public , args: ($member)<br>
	 * @uses MemberNotNullAttributeOverride::__construct_2 <br>public , args: (...$members)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}