<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvxVnniMethodsOverride
{
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyWideningAndAdd_1($addend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyWideningAndAdd_2($addend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MultiplyWideningAndAdd_3($addend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MultiplyWideningAndAdd_4($addend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyWideningAndAddSaturate_1($addend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MultiplyWideningAndAddSaturate_2($addend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MultiplyWideningAndAddSaturate_3($addend, $left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MultiplyWideningAndAddSaturate_4($addend, $left, $right){}
}
/**
 */
class AvxVnni extends \System\Runtime\Intrinsics\X86\Avx2
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @uses AvxVnniMethodsOverride::MultiplyWideningAndAdd_1 ($addend, $left, $right)
	 * @uses AvxVnniMethodsOverride::MultiplyWideningAndAdd_2 ($addend, $left, $right)
	 * @uses AvxVnniMethodsOverride::MultiplyWideningAndAdd_3 ($addend, $left, $right)
	 * @uses AvxVnniMethodsOverride::MultiplyWideningAndAdd_4 ($addend, $left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplyWideningAndAdd(mixed ...$args){}
	/**
	 * @uses AvxVnniMethodsOverride::MultiplyWideningAndAddSaturate_1 ($addend, $left, $right)
	 * @uses AvxVnniMethodsOverride::MultiplyWideningAndAddSaturate_2 ($addend, $left, $right)
	 * @uses AvxVnniMethodsOverride::MultiplyWideningAndAddSaturate_3 ($addend, $left, $right)
	 * @uses AvxVnniMethodsOverride::MultiplyWideningAndAddSaturate_4 ($addend, $left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplyWideningAndAddSaturate(mixed ...$args){}
}
