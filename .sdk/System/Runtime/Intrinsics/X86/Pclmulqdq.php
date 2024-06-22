<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PclmulqdqOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int64]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function CarrylessMultiply_1 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt64]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function CarrylessMultiply_2 ($left, $right, $control){}
}
class Pclmulqdq extends \System\Runtime\Intrinsics\X86\Sse2
{
	use PclmulqdqOverride;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @uses PclmulqdqOverride::CarrylessMultiply_1 <br>public , args: ($left, $right, $control)<br>
	 * @uses PclmulqdqOverride::CarrylessMultiply_2 <br>public , args: ($left, $right, $control)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function CarrylessMultiply (\override ...$args){}
}