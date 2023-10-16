<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Negate_1MethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function NegateIfNeeded_1($equals){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function NegateIfNeeded_2($equals){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function NegateIfNeeded_3($equals){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Negate_1 extends \System\ValueType implements 
	\System\INegator_1
{
	/**
	 * @uses Negate_1MethodsOverride::NegateIfNeeded_1 ($equals)
	 * @uses Negate_1MethodsOverride::NegateIfNeeded_2 ($equals)
	 * @uses Negate_1MethodsOverride::NegateIfNeeded_3 ($equals)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function NegateIfNeeded(mixed ...$args){}
}
