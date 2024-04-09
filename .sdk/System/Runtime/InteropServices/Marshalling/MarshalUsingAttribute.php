<?php
namespace System\Runtime\InteropServices\Marshalling;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ManagedToUnmanagedInOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Type $nativeType
	 */
	#[MethodOverride]public function __construct_2 ($nativeType){}
}
final class MarshalUsingAttribute extends \System\Attribute
{
	use ManagedToUnmanagedInOverride;
	/**
	 * @field
	 * @var \System\String|string
	 */
	const ReturnsCountValue = 'return-value';
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $NativeType;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $CountElementName;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $ConstantElementCount;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $ElementIndirectionDepth;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses MarshalUsingAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses MarshalUsingAttributeOverride::__construct_2 <br>public , args: ($nativeType)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}