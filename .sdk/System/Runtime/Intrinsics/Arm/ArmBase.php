<?php
namespace System\Runtime\Intrinsics\Arm;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ArmBaseOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function LeadingZeroCount_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function LeadingZeroCount_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function ReverseElementBits_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function ReverseElementBits_2 ($value){}
}
class ArmBase extends \System\Object
{
	use ArmBaseOverride;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @uses ArmBaseOverride::LeadingZeroCount_1 <br>public , args: ($value)<br>
	 * @uses ArmBaseOverride::LeadingZeroCount_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function LeadingZeroCount (\override ...$args){}
	/**
	 * @uses ArmBaseOverride::ReverseElementBits_1 <br>public , args: ($value)<br>
	 * @uses ArmBaseOverride::ReverseElementBits_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\UInt32|mixed|\override
	 */
	#[MethodOverridePublic]function ReverseElementBits (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public static function Yield(){}
}