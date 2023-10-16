<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Sse3MethodsOverride
{
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function AddSubtract_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function AddSubtract_2($left, $right){}
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
	#[MethodOverride] public static function LoadDquVector128_1($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function LoadDquVector128_2($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function LoadDquVector128_3($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function LoadDquVector128_4($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function LoadDquVector128_5($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function LoadDquVector128_6($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function LoadDquVector128_7($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function LoadDquVector128_8($address){}
}
/**
 */
class Sse3 extends \System\Runtime\Intrinsics\X86\Sse2
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @uses Sse3MethodsOverride::AddSubtract_1 ($left, $right)
	 * @uses Sse3MethodsOverride::AddSubtract_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AddSubtract(mixed ...$args){}
	/**
	 * @uses Sse3MethodsOverride::HorizontalAdd_1 ($left, $right)
	 * @uses Sse3MethodsOverride::HorizontalAdd_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function HorizontalAdd(mixed ...$args){}
	/**
	 * @uses Sse3MethodsOverride::HorizontalSubtract_1 ($left, $right)
	 * @uses Sse3MethodsOverride::HorizontalSubtract_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function HorizontalSubtract(mixed ...$args){}
	/**
	 * @param \System\Double* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function LoadAndDuplicateToVector128($address){}
	/**
	 * @uses Sse3MethodsOverride::LoadDquVector128_1 ($address)
	 * @uses Sse3MethodsOverride::LoadDquVector128_2 ($address)
	 * @uses Sse3MethodsOverride::LoadDquVector128_3 ($address)
	 * @uses Sse3MethodsOverride::LoadDquVector128_4 ($address)
	 * @uses Sse3MethodsOverride::LoadDquVector128_5 ($address)
	 * @uses Sse3MethodsOverride::LoadDquVector128_6 ($address)
	 * @uses Sse3MethodsOverride::LoadDquVector128_7 ($address)
	 * @uses Sse3MethodsOverride::LoadDquVector128_8 ($address)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LoadDquVector128(mixed ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function MoveAndDuplicate($source){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function MoveHighAndDuplicate($source){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function MoveLowAndDuplicate($source){}
}
