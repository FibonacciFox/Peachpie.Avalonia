<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Bmi1Override {
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @param \System\Byte $start
	 * @param \System\Byte $length
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function BitFieldExtract_1 ($value, $start, $length){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @param \System\UInt16 $control
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function BitFieldExtract_2 ($value, $control){}
}
class Bmi1 extends \System\Runtime\Intrinsics\X86\X86Base
{
	use Bmi1Override;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @param \System\UInt32 $left
	 * @param \System\UInt32 $right
	 * @return \System\UInt32
	 */
	public static function AndNot($left, $right){}
	/**
	 * @uses Bmi1Override::BitFieldExtract_1 <br>public , args: ($value, $start, $length)<br>
	 * @uses Bmi1Override::BitFieldExtract_2 <br>public , args: ($value, $control)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt32|mixed|\override
	 */
	#[MethodOverridePublic]function BitFieldExtract (\override ...$args){}
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