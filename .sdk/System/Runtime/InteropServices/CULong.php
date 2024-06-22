<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CULongOverride {
	/**
	 * @param \System\UInt32 $value
	 */
	#[MethodOverride]public function __construct_1 ($value){}
	/**
	 * @param \System\UIntPtr $value
	 */
	#[MethodOverride]public function __construct_2 ($value){}
}
final class CULong extends \System\ValueType implements
	\System\IEquatable_1
{
	use CULongOverride;

	/**
	 * @property
	 * @var \System\UIntPtr
	 * @since readonly
	 */
	public $Value;
	/**
	 * @uses CULongOverride::__construct_1 <br>public , args: ($value)<br>
	 * @uses CULongOverride::__construct_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}