<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PclmulqdqMethodsOverride
{
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function CarrylessMultiply_1($left, $right, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function CarrylessMultiply_2($left, $right, $control){}
}
/**
 */
class Pclmulqdq extends \System\Runtime\Intrinsics\X86\Sse2
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @uses PclmulqdqMethodsOverride::CarrylessMultiply_1 ($left, $right, $control)
	 * @uses PclmulqdqMethodsOverride::CarrylessMultiply_2 ($left, $right, $control)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CarrylessMultiply(mixed ...$args){}
}
