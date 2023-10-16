<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Bmi2MethodsOverride
{
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function MultiplyNoFlags_1($left, $right){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function MultiplyNoFlags_2($left, $right, $low){}
}
/**
 */
class Bmi2 extends \System\Runtime\Intrinsics\X86\X86Base
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @param \System\UInt32 $value
	 * @param \System\UInt32 $index
	 * @return \System\UInt32
	 */
	public static function ZeroHighBits($value, $index){}
	/**
	 * @uses Bmi2MethodsOverride::MultiplyNoFlags_1 ($left, $right)
	 * @uses Bmi2MethodsOverride::MultiplyNoFlags_2 ($left, $right, $low)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MultiplyNoFlags(mixed ...$args){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\UInt32 $mask
	 * @return \System\UInt32
	 */
	public static function ParallelBitDeposit($value, $mask){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\UInt32 $mask
	 * @return \System\UInt32
	 */
	public static function ParallelBitExtract($value, $mask){}
}
