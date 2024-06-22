<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DontNegate_1Override {
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $equals
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function NegateIfNeeded_1 ($equals){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $equals [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function NegateIfNeeded_2 ($equals){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $equals [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function NegateIfNeeded_3 ($equals){}
}
final class DontNegate_1 extends \System\ValueType implements
	\System\INegator_1
{
	use DontNegate_1Override;


	/**
	 * @uses DontNegate_1Override::NegateIfNeeded_1 <br>public , args: ($equals)<br>
	 * @uses DontNegate_1Override::NegateIfNeeded_2 <br>public , args: ($equals)<br>
	 * @uses DontNegate_1Override::NegateIfNeeded_3 <br>public , args: ($equals)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|\System\Runtime\Intrinsics\Vector128_1|\System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function NegateIfNeeded (\override ...$args){}
}