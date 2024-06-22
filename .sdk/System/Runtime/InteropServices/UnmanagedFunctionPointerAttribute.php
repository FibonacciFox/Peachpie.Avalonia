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
	 * @param \System\Runtime\InteropServices\CallingConvention $callingConvention
	 */
	#[MethodOverride]public function __construct_2 ($callingConvention){}
}
final class UnmanagedFunctionPointerAttribute extends \System\Attribute
{
	use SEHExceptionOverride;

	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $BestFitMapping;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $SetLastError;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $ThrowOnUnmappableChar;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\CharSet
	 */
	public $CharSet;
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\CallingConvention
	 * @since readonly
	 */
	public $CallingConvention;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses UnmanagedFunctionPointerAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses UnmanagedFunctionPointerAttributeOverride::__construct_2 <br>public , args: ($callingConvention)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}