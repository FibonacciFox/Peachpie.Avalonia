<?php
namespace System\Diagnostics\CodeAnalysis;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ContractOverride {
	/**
	 * @param \System\String|string $memberSignature
	 */
	#[MethodOverride]public function __construct_1 ($memberSignature){}
	/**
	 * @param \System\String|string $memberSignature
	 * @param \System\Type $type
	 */
	#[MethodOverride]public function __construct_2 ($memberSignature, $type){}
	/**
	 * @param \System\String|string $memberSignature
	 * @param \System\String|string $typeName
	 * @param \System\String|string $assemblyName
	 */
	#[MethodOverride]public function __construct_3 ($memberSignature, $typeName, $assemblyName){}
	/**
	 * @param \System\Diagnostics\CodeAnalysis\DynamicallyAccessedMemberTypes $memberTypes
	 * @param \System\Type $type
	 */
	#[MethodOverride]public function __construct_4 ($memberTypes, $type){}
	/**
	 * @param \System\Diagnostics\CodeAnalysis\DynamicallyAccessedMemberTypes $memberTypes
	 * @param \System\String|string $typeName
	 * @param \System\String|string $assemblyName
	 */
	#[MethodOverride]public function __construct_5 ($memberTypes, $typeName, $assemblyName){}
}
final class DynamicDependencyAttribute extends \System\Attribute
{
	use ContractOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $MemberSignature;
	/**
	 * @property
	 * @var \System\Diagnostics\CodeAnalysis\DynamicallyAccessedMemberTypes
	 * @since readonly
	 */
	public $MemberTypes;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $Type;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $TypeName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $AssemblyName;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Condition;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses DynamicDependencyAttributeOverride::__construct_1 <br>public , args: ($memberSignature)<br>
	 * @uses DynamicDependencyAttributeOverride::__construct_2 <br>public , args: ($memberSignature, $type)<br>
	 * @uses DynamicDependencyAttributeOverride::__construct_3 <br>public , args: ($memberSignature, $typeName, $assemblyName)<br>
	 * @uses DynamicDependencyAttributeOverride::__construct_4 <br>public , args: ($memberTypes, $type)<br>
	 * @uses DynamicDependencyAttributeOverride::__construct_5 <br>public , args: ($memberTypes, $typeName, $assemblyName)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}