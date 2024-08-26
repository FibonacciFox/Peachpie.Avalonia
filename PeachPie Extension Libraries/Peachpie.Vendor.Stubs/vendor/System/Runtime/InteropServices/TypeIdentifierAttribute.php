<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SEHExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $scope
	 * @param \System\String|string $identifier
	 */
	#[MethodOverride]public function __construct_2 ($scope, $identifier){}
}
final class TypeIdentifierAttribute extends \System\Attribute
{
	use SEHExceptionOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Scope;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Identifier;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses TypeIdentifierAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses TypeIdentifierAttributeOverride::__construct_2 <br>public , args: ($scope, $identifier)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}