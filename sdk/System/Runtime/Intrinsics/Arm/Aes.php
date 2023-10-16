<?php
namespace System\Runtime\Intrinsics\Arm;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AesMethodsOverride
{
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function PolynomialMultiplyWideningLower_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function PolynomialMultiplyWideningLower_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function PolynomialMultiplyWideningUpper_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function PolynomialMultiplyWideningUpper_2($left, $right){}
}
/**
 */
class Aes extends \System\Runtime\Intrinsics\Arm\ArmBase
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value
	 * @param \System\Runtime\Intrinsics\Vector128_1 $roundKey
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function Decrypt($value, $roundKey){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value
	 * @param \System\Runtime\Intrinsics\Vector128_1 $roundKey
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function Encrypt($value, $roundKey){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function InverseMixColumns($value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function MixColumns($value){}
	/**
	 * @uses AesMethodsOverride::PolynomialMultiplyWideningLower_1 ($left, $right)
	 * @uses AesMethodsOverride::PolynomialMultiplyWideningLower_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function PolynomialMultiplyWideningLower(mixed ...$args){}
	/**
	 * @uses AesMethodsOverride::PolynomialMultiplyWideningUpper_1 ($left, $right)
	 * @uses AesMethodsOverride::PolynomialMultiplyWideningUpper_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function PolynomialMultiplyWideningUpper(mixed ...$args){}
}
