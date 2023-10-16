<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Ssse3MethodsOverride
{
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function Abs_1($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function Abs_2($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function Abs_3($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function AlignRight_1($left, $right, $mask){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function AlignRight_2($left, $right, $mask){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function AlignRight_3($left, $right, $mask){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function AlignRight_4($left, $right, $mask){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function AlignRight_5($left, $right, $mask){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function AlignRight_6($left, $right, $mask){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function AlignRight_7($left, $right, $mask){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function AlignRight_8($left, $right, $mask){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function HorizontalAdd_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function HorizontalAdd_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function HorizontalSubtract_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function HorizontalSubtract_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function Shuffle_1($value, $mask){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function Shuffle_2($value, $mask){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function Sign_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function Sign_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function Sign_3($left, $right){}
}
/**
 */
class Ssse3 extends \System\Runtime\Intrinsics\X86\Sse3
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @uses Ssse3MethodsOverride::Abs_1 ($value)
	 * @uses Ssse3MethodsOverride::Abs_2 ($value)
	 * @uses Ssse3MethodsOverride::Abs_3 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Abs(mixed ...$args){}
	/**
	 * @uses Ssse3MethodsOverride::AlignRight_1 ($left, $right, $mask)
	 * @uses Ssse3MethodsOverride::AlignRight_2 ($left, $right, $mask)
	 * @uses Ssse3MethodsOverride::AlignRight_3 ($left, $right, $mask)
	 * @uses Ssse3MethodsOverride::AlignRight_4 ($left, $right, $mask)
	 * @uses Ssse3MethodsOverride::AlignRight_5 ($left, $right, $mask)
	 * @uses Ssse3MethodsOverride::AlignRight_6 ($left, $right, $mask)
	 * @uses Ssse3MethodsOverride::AlignRight_7 ($left, $right, $mask)
	 * @uses Ssse3MethodsOverride::AlignRight_8 ($left, $right, $mask)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AlignRight(mixed ...$args){}
	/**
	 * @uses Ssse3MethodsOverride::HorizontalAdd_1 ($left, $right)
	 * @uses Ssse3MethodsOverride::HorizontalAdd_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function HorizontalAdd(mixed ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function HorizontalAddSaturate($left, $right){}
	/**
	 * @uses Ssse3MethodsOverride::HorizontalSubtract_1 ($left, $right)
	 * @uses Ssse3MethodsOverride::HorizontalSubtract_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function HorizontalSubtract(mixed ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function HorizontalSubtractSaturate($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function MultiplyAddAdjacent($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function MultiplyHighRoundScale($left, $right){}
	/**
	 * @uses Ssse3MethodsOverride::Shuffle_1 ($value, $mask)
	 * @uses Ssse3MethodsOverride::Shuffle_2 ($value, $mask)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Shuffle(mixed ...$args){}
	/**
	 * @uses Ssse3MethodsOverride::Sign_1 ($left, $right)
	 * @uses Ssse3MethodsOverride::Sign_2 ($left, $right)
	 * @uses Ssse3MethodsOverride::Sign_3 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Sign(mixed ...$args){}
}
