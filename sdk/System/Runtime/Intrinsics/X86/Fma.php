<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FmaMethodsOverride
{
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyAdd_1($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyAdd_2($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MultiplyAdd_3($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MultiplyAdd_4($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyAddScalar_1($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyAddScalar_2($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyAddSubtract_1($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyAddSubtract_2($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MultiplyAddSubtract_3($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MultiplyAddSubtract_4($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplySubtract_1($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplySubtract_2($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MultiplySubtract_3($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MultiplySubtract_4($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplySubtractScalar_1($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplySubtractScalar_2($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplySubtractAdd_1($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplySubtractAdd_2($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MultiplySubtractAdd_3($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MultiplySubtractAdd_4($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyAddNegated_1($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyAddNegated_2($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MultiplyAddNegated_3($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MultiplyAddNegated_4($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyAddNegatedScalar_1($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyAddNegatedScalar_2($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplySubtractNegated_1($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplySubtractNegated_2($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MultiplySubtractNegated_3($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MultiplySubtractNegated_4($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplySubtractNegatedScalar_1($a, $b, $c){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplySubtractNegatedScalar_2($a, $b, $c){}
}
/**
 */
class Fma extends \System\Runtime\Intrinsics\X86\Avx
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @uses FmaMethodsOverride::MultiplyAdd_1 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplyAdd_2 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplyAdd_3 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplyAdd_4 ($a, $b, $c)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplyAdd(mixed ...$args){}
	/**
	 * @uses FmaMethodsOverride::MultiplyAddScalar_1 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplyAddScalar_2 ($a, $b, $c)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplyAddScalar(mixed ...$args){}
	/**
	 * @uses FmaMethodsOverride::MultiplyAddSubtract_1 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplyAddSubtract_2 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplyAddSubtract_3 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplyAddSubtract_4 ($a, $b, $c)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplyAddSubtract(mixed ...$args){}
	/**
	 * @uses FmaMethodsOverride::MultiplySubtract_1 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplySubtract_2 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplySubtract_3 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplySubtract_4 ($a, $b, $c)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplySubtract(mixed ...$args){}
	/**
	 * @uses FmaMethodsOverride::MultiplySubtractScalar_1 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplySubtractScalar_2 ($a, $b, $c)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplySubtractScalar(mixed ...$args){}
	/**
	 * @uses FmaMethodsOverride::MultiplySubtractAdd_1 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplySubtractAdd_2 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplySubtractAdd_3 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplySubtractAdd_4 ($a, $b, $c)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplySubtractAdd(mixed ...$args){}
	/**
	 * @uses FmaMethodsOverride::MultiplyAddNegated_1 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplyAddNegated_2 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplyAddNegated_3 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplyAddNegated_4 ($a, $b, $c)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplyAddNegated(mixed ...$args){}
	/**
	 * @uses FmaMethodsOverride::MultiplyAddNegatedScalar_1 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplyAddNegatedScalar_2 ($a, $b, $c)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplyAddNegatedScalar(mixed ...$args){}
	/**
	 * @uses FmaMethodsOverride::MultiplySubtractNegated_1 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplySubtractNegated_2 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplySubtractNegated_3 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplySubtractNegated_4 ($a, $b, $c)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplySubtractNegated(mixed ...$args){}
	/**
	 * @uses FmaMethodsOverride::MultiplySubtractNegatedScalar_1 ($a, $b, $c)
	 * @uses FmaMethodsOverride::MultiplySubtractNegatedScalar_2 ($a, $b, $c)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplySubtractNegatedScalar(mixed ...$args){}
}
