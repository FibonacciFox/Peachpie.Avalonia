<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait InvalidOleVariantTypeExceptionOverride {
	/**
	 * @param \System\Runtime\InteropServices\UnmanagedType $unmanagedType
	 */
	#[MethodOverride]public function __construct_1 ($unmanagedType){}
	/**
	 * @param \System\Int16 $unmanagedType
	 */
	#[MethodOverride]public function __construct_2 ($unmanagedType){}
}
final class MarshalAsAttribute extends \System\Attribute
{
	use InvalidOleVariantTypeExceptionOverride;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\VarEnum
	 */
	public $SafeArraySubType;
	/**
	 * @field
	 * @var \System\Type
	 */
	public $SafeArrayUserDefinedSubType;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $IidParameterIndex;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\UnmanagedType
	 */
	public $ArraySubType;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $SizeParamIndex;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $SizeConst;
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $MarshalType;
	/**
	 * @field
	 * @var \System\Type
	 */
	public $MarshalTypeRef;
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $MarshalCookie;
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\UnmanagedType
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses MarshalAsAttributeOverride::__construct_1 <br>public , args: ($unmanagedType)<br>
	 * @uses MarshalAsAttributeOverride::__construct_2 <br>public , args: ($unmanagedType)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}