<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ContractOverride {
	/**
	 * @param \System\Boolean|bool $returnValue
	 * @param \System\String|string $member
	 */
	#[MethodOverride]public function __construct_1 ($returnValue, $member){}
	/**
	 * @param \System\Boolean|bool $returnValue
	 * @param \System\String ...$members
	 */
	#[MethodOverride]public function __construct_2 ($returnValue, ...$members){}
}
final class MemberNotNullWhenAttribute extends \System\Attribute
{
	use ContractOverride;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $ReturnValue;
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
	 * @uses MemberNotNullWhenAttributeOverride::__construct_1 <br>public , args: ($returnValue, $member)<br>
	 * @uses MemberNotNullWhenAttributeOverride::__construct_2 <br>public , args: ($returnValue, ...$members)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}