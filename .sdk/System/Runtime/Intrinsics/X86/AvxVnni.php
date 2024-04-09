<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AvxVnniOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyWideningAndAdd_1 ($addend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyWideningAndAdd_2 ($addend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MultiplyWideningAndAdd_3 ($addend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MultiplyWideningAndAdd_4 ($addend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyWideningAndAddSaturate_1 ($addend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyWideningAndAddSaturate_2 ($addend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MultiplyWideningAndAddSaturate_3 ($addend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MultiplyWideningAndAddSaturate_4 ($addend, $left, $right){}
}
class AvxVnni extends \System\Runtime\Intrinsics\X86\Avx2
{
	use AvxVnniOverride;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @uses AvxVnniOverride::MultiplyWideningAndAdd_1 <br>public , args: ($addend, $left, $right)<br>
	 * @uses AvxVnniOverride::MultiplyWideningAndAdd_2 <br>public , args: ($addend, $left, $right)<br>
	 * @uses AvxVnniOverride::MultiplyWideningAndAdd_3 <br>public , args: ($addend, $left, $right)<br>
	 * @uses AvxVnniOverride::MultiplyWideningAndAdd_4 <br>public , args: ($addend, $left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|\System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplyWideningAndAdd (\override ...$args){}
	/**
	 * @uses AvxVnniOverride::MultiplyWideningAndAddSaturate_1 <br>public , args: ($addend, $left, $right)<br>
	 * @uses AvxVnniOverride::MultiplyWideningAndAddSaturate_2 <br>public , args: ($addend, $left, $right)<br>
	 * @uses AvxVnniOverride::MultiplyWideningAndAddSaturate_3 <br>public , args: ($addend, $left, $right)<br>
	 * @uses AvxVnniOverride::MultiplyWideningAndAddSaturate_4 <br>public , args: ($addend, $left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|\System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplyWideningAndAddSaturate (\override ...$args){}
}