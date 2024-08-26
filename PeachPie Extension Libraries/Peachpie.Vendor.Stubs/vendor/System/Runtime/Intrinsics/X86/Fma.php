<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FmaOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyAdd_1 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyAdd_2 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $c [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MultiplyAdd_3 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $a [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $b [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $c [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MultiplyAdd_4 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyAddScalar_1 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyAddScalar_2 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyAddSubtract_1 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyAddSubtract_2 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $c [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MultiplyAddSubtract_3 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $a [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $b [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $c [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MultiplyAddSubtract_4 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplySubtract_1 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplySubtract_2 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $c [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MultiplySubtract_3 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $a [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $b [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $c [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MultiplySubtract_4 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplySubtractScalar_1 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplySubtractScalar_2 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplySubtractAdd_1 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplySubtractAdd_2 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $c [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MultiplySubtractAdd_3 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $a [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $b [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $c [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MultiplySubtractAdd_4 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyAddNegated_1 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyAddNegated_2 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $c [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MultiplyAddNegated_3 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $a [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $b [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $c [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MultiplyAddNegated_4 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyAddNegatedScalar_1 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyAddNegatedScalar_2 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplySubtractNegated_1 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplySubtractNegated_2 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $c [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MultiplySubtractNegated_3 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $a [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $b [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $c [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MultiplySubtractNegated_4 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplySubtractNegatedScalar_1 ($a, $b, $c){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $a [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $b [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $c [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplySubtractNegatedScalar_2 ($a, $b, $c){}
}
class Fma extends \System\Runtime\Intrinsics\X86\Avx
{
	use FmaOverride;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @uses FmaOverride::MultiplyAdd_1 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplyAdd_2 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplyAdd_3 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplyAdd_4 <br>public , args: ($a, $b, $c)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|\System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplyAdd (\override ...$args){}
	/**
	 * @uses FmaOverride::MultiplyAddScalar_1 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplyAddScalar_2 <br>public , args: ($a, $b, $c)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplyAddScalar (\override ...$args){}
	/**
	 * @uses FmaOverride::MultiplyAddSubtract_1 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplyAddSubtract_2 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplyAddSubtract_3 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplyAddSubtract_4 <br>public , args: ($a, $b, $c)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|\System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplyAddSubtract (\override ...$args){}
	/**
	 * @uses FmaOverride::MultiplySubtract_1 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplySubtract_2 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplySubtract_3 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplySubtract_4 <br>public , args: ($a, $b, $c)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|\System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplySubtract (\override ...$args){}
	/**
	 * @uses FmaOverride::MultiplySubtractScalar_1 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplySubtractScalar_2 <br>public , args: ($a, $b, $c)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplySubtractScalar (\override ...$args){}
	/**
	 * @uses FmaOverride::MultiplySubtractAdd_1 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplySubtractAdd_2 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplySubtractAdd_3 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplySubtractAdd_4 <br>public , args: ($a, $b, $c)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|\System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplySubtractAdd (\override ...$args){}
	/**
	 * @uses FmaOverride::MultiplyAddNegated_1 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplyAddNegated_2 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplyAddNegated_3 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplyAddNegated_4 <br>public , args: ($a, $b, $c)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|\System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplyAddNegated (\override ...$args){}
	/**
	 * @uses FmaOverride::MultiplyAddNegatedScalar_1 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplyAddNegatedScalar_2 <br>public , args: ($a, $b, $c)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplyAddNegatedScalar (\override ...$args){}
	/**
	 * @uses FmaOverride::MultiplySubtractNegated_1 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplySubtractNegated_2 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplySubtractNegated_3 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplySubtractNegated_4 <br>public , args: ($a, $b, $c)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|\System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplySubtractNegated (\override ...$args){}
	/**
	 * @uses FmaOverride::MultiplySubtractNegatedScalar_1 <br>public , args: ($a, $b, $c)<br>
	 * @uses FmaOverride::MultiplySubtractNegatedScalar_2 <br>public , args: ($a, $b, $c)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplySubtractNegatedScalar (\override ...$args){}
}