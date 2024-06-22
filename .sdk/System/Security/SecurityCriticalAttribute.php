<?php
namespace System\Security;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UnmanagedBufferOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Security\SecurityCriticalScope $scope
	 */
	#[MethodOverride]public function __construct_2 ($scope){}
}
final class SecurityCriticalAttribute extends \System\Attribute
{
	use UnmanagedBufferOverride;

	/**
	 * @property
	 * @var \System\Security\SecurityCriticalScope
	 * @since readonly
	 */
	public $Scope;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses SecurityCriticalAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses SecurityCriticalAttributeOverride::__construct_2 <br>public , args: ($scope)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}