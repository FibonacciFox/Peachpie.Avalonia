<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Bmi2Override {
	/**
	 * @deprecated
	 * @param \System\UInt32 $left
	 * @param \System\UInt32 $right
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function MultiplyNoFlags_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $left
	 * @param \System\UInt32 $right
	 * @param \System\UInt32* $low
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function MultiplyNoFlags_2 ($left, $right, $low){}
}
class Bmi2 extends \System\Runtime\Intrinsics\X86\X86Base
{
	use Bmi2Override;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @param \System\UInt32 $value
	 * @param \System\UInt32 $index
	 * @return \System\UInt32
	 */
	public static function ZeroHighBits($value, $index){}
	/**
	 * @uses Bmi2Override::MultiplyNoFlags_1 <br>public , args: ($left, $right)<br>
	 * @uses Bmi2Override::MultiplyNoFlags_2 <br>public , args: ($left, $right, $low)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt32|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplyNoFlags (\override ...$args){}
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