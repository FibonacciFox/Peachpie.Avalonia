<?php
namespace System\Runtime\Intrinsics\Arm;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AesOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\Int64]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function PolynomialMultiplyWideningLower_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\UInt64]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function PolynomialMultiplyWideningLower_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int64]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function PolynomialMultiplyWideningUpper_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt64]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function PolynomialMultiplyWideningUpper_2 ($left, $right){}
}
class Aes extends \System\Runtime\Intrinsics\Arm\ArmBase
{
	use AesOverride;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $roundKey [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Byte]
	 */
	public static function Decrypt($value, $roundKey){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $roundKey [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Byte]
	 */
	public static function Encrypt($value, $roundKey){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Byte]
	 */
	public static function InverseMixColumns($value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Byte]
	 */
	public static function MixColumns($value){}
	/**
	 * @uses AesOverride::PolynomialMultiplyWideningLower_1 <br>public , args: ($left, $right)<br>
	 * @uses AesOverride::PolynomialMultiplyWideningLower_2 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function PolynomialMultiplyWideningLower (\override ...$args){}
	/**
	 * @uses AesOverride::PolynomialMultiplyWideningUpper_1 <br>public , args: ($left, $right)<br>
	 * @uses AesOverride::PolynomialMultiplyWideningUpper_2 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function PolynomialMultiplyWideningUpper (\override ...$args){}
}