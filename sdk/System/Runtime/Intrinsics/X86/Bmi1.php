<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Bmi1MethodsOverride
{
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function BitFieldExtract_1($value, $start, $length){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function BitFieldExtract_2($value, $control){}
}
/**
 */
class Bmi1 extends \System\Runtime\Intrinsics\X86\X86Base
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @param \System\UInt32 $left
	 * @param \System\UInt32 $right
	 * @return \System\UInt32
	 */
	public static function AndNot($left, $right){}
	/**
	 * @uses Bmi1MethodsOverride::BitFieldExtract_1 ($value, $start, $length)
	 * @uses Bmi1MethodsOverride::BitFieldExtract_2 ($value, $control)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function BitFieldExtract(mixed ...$args){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	public static function ExtractLowestSetBit($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	public static function GetMaskUpToLowestSetBit($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	public static function ResetLowestSetBit($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	public static function TrailingZeroCount($value){}
}
