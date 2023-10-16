<?php
namespace System\Runtime\Intrinsics\Arm;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RdmMethodsOverride
{
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingAndAddSaturateHigh_1($addend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingAndAddSaturateHigh_2($addend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingAndAddSaturateHigh_3($addend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingAndAddSaturateHigh_4($addend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingAndSubtractSaturateHigh_1($minuend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingAndSubtractSaturateHigh_2($minuend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingAndSubtractSaturateHigh_3($minuend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingAndSubtractSaturateHigh_4($minuend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_1($addend, $left, $right, $rightIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_2($addend, $left, $right, $rightIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_3($addend, $left, $right, $rightIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_4($addend, $left, $right, $rightIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_5($addend, $left, $right, $rightIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_6($addend, $left, $right, $rightIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_7($addend, $left, $right, $rightIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_8($addend, $left, $right, $rightIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_1($minuend, $left, $right, $rightIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_2($minuend, $left, $right, $rightIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_3($minuend, $left, $right, $rightIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_4($minuend, $left, $right, $rightIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_5($minuend, $left, $right, $rightIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_6($minuend, $left, $right, $rightIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_7($minuend, $left, $right, $rightIndex){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_8($minuend, $left, $right, $rightIndex){}
}
/**
 */
class Rdm extends \System\Runtime\Intrinsics\Arm\AdvSimd
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingAndAddSaturateHigh_1 ($addend, $left, $right)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingAndAddSaturateHigh_2 ($addend, $left, $right)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingAndAddSaturateHigh_3 ($addend, $left, $right)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingAndAddSaturateHigh_4 ($addend, $left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplyRoundedDoublingAndAddSaturateHigh(mixed ...$args){}
	/**
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingAndSubtractSaturateHigh_1 ($minuend, $left, $right)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingAndSubtractSaturateHigh_2 ($minuend, $left, $right)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingAndSubtractSaturateHigh_3 ($minuend, $left, $right)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingAndSubtractSaturateHigh_4 ($minuend, $left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplyRoundedDoublingAndSubtractSaturateHigh(mixed ...$args){}
	/**
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_1 ($addend, $left, $right, $rightIndex)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_2 ($addend, $left, $right, $rightIndex)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_3 ($addend, $left, $right, $rightIndex)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_4 ($addend, $left, $right, $rightIndex)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_5 ($addend, $left, $right, $rightIndex)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_6 ($addend, $left, $right, $rightIndex)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_7 ($addend, $left, $right, $rightIndex)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_8 ($addend, $left, $right, $rightIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh(mixed ...$args){}
	/**
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_1 ($minuend, $left, $right, $rightIndex)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_2 ($minuend, $left, $right, $rightIndex)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_3 ($minuend, $left, $right, $rightIndex)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_4 ($minuend, $left, $right, $rightIndex)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_5 ($minuend, $left, $right, $rightIndex)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_6 ($minuend, $left, $right, $rightIndex)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_7 ($minuend, $left, $right, $rightIndex)
	 * @uses RdmMethodsOverride::MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_8 ($minuend, $left, $right, $rightIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh(mixed ...$args){}
}
