<?php
namespace System\Runtime\Intrinsics\Arm;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DpMethodsOverride
{
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function DotProduct_1($addend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function DotProduct_2($addend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function DotProduct_3($addend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function DotProduct_4($addend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function DotProductBySelectedQuadruplet_1($addend, $left, $right, $rightScaledIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function DotProductBySelectedQuadruplet_2($addend, $left, $right, $rightScaledIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function DotProductBySelectedQuadruplet_3($addend, $left, $right, $rightScaledIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function DotProductBySelectedQuadruplet_4($addend, $left, $right, $rightScaledIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function DotProductBySelectedQuadruplet_5($addend, $left, $right, $rightScaledIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function DotProductBySelectedQuadruplet_6($addend, $left, $right, $rightScaledIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function DotProductBySelectedQuadruplet_7($addend, $left, $right, $rightScaledIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function DotProductBySelectedQuadruplet_8($addend, $left, $right, $rightScaledIndex){}
}
/**
 */
class Dp extends \System\Runtime\Intrinsics\Arm\AdvSimd
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @uses DpMethodsOverride::DotProduct_1 ($addend, $left, $right)
	 * @uses DpMethodsOverride::DotProduct_2 ($addend, $left, $right)
	 * @uses DpMethodsOverride::DotProduct_3 ($addend, $left, $right)
	 * @uses DpMethodsOverride::DotProduct_4 ($addend, $left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function DotProduct(mixed ...$args){}
	/**
	 * @uses DpMethodsOverride::DotProductBySelectedQuadruplet_1 ($addend, $left, $right, $rightScaledIndex)
	 * @uses DpMethodsOverride::DotProductBySelectedQuadruplet_2 ($addend, $left, $right, $rightScaledIndex)
	 * @uses DpMethodsOverride::DotProductBySelectedQuadruplet_3 ($addend, $left, $right, $rightScaledIndex)
	 * @uses DpMethodsOverride::DotProductBySelectedQuadruplet_4 ($addend, $left, $right, $rightScaledIndex)
	 * @uses DpMethodsOverride::DotProductBySelectedQuadruplet_5 ($addend, $left, $right, $rightScaledIndex)
	 * @uses DpMethodsOverride::DotProductBySelectedQuadruplet_6 ($addend, $left, $right, $rightScaledIndex)
	 * @uses DpMethodsOverride::DotProductBySelectedQuadruplet_7 ($addend, $left, $right, $rightScaledIndex)
	 * @uses DpMethodsOverride::DotProductBySelectedQuadruplet_8 ($addend, $left, $right, $rightScaledIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function DotProductBySelectedQuadruplet(mixed ...$args){}
}
