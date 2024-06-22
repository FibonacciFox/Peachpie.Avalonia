<?php
namespace System\Runtime\Intrinsics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Vector128_1Override {
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function op_Multiply_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: T]
	 * @param \T|object $right
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function op_Multiply_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \T|object $left
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function op_Multiply_3 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\String|string
	 */
	#[MethodOverride]private function ToString_1 ($format, $formatProvider){}
}
final class Vector128_1 extends \System\ValueType implements
	\System\IEquatable_1
{
	use Vector128_1Override;

	/**
	 * @property
	 * @var \System\Runtime\Intrinsics\Vector128_1[T]
	 * @since readonly
	 */
	public $AllBitsSet;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @property
	 * @var \System\Runtime\Intrinsics\Vector128_1[T]
	 * @since readonly
	 */
	public $Zero;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Item;
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector128_1[T]
	 */
	public static function op_Addition($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector128_1[T]
	 */
	public static function op_BitwiseAnd($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector128_1[T]
	 */
	public static function op_BitwiseOr($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector128_1[T]
	 */
	public static function op_Division($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector128_1[T]
	 */
	public static function op_ExclusiveOr($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses Vector128_1Override::op_Multiply_1 <br>public , args: ($left, $right)<br>
	 * @uses Vector128_1Override::op_Multiply_2 <br>public , args: ($left, $right)<br>
	 * @uses Vector128_1Override::op_Multiply_3 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function op_Multiply (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector128_1[T]
	 */
	public static function op_OnesComplement($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector128_1[T]
	 */
	public static function op_Subtraction($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector128_1[T]
	 */
	public static function op_UnaryNegation($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector128_1[T]
	 */
	public static function op_UnaryPlus($value){}
}