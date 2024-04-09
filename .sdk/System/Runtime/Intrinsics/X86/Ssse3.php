<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Ssse3Override {
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Abs_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Abs_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Abs_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\SByte]
	 * @param \System\Byte $mask
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function AlignRight_1 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Byte]
	 * @param \System\Byte $mask
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function AlignRight_2 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @param \System\Byte $mask
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function AlignRight_3 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt16]
	 * @param \System\Byte $mask
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function AlignRight_4 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int32]
	 * @param \System\Byte $mask
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function AlignRight_5 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt32]
	 * @param \System\Byte $mask
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function AlignRight_6 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int64]
	 * @param \System\Byte $mask
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function AlignRight_7 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt64]
	 * @param \System\Byte $mask
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function AlignRight_8 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Sign_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Sign_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Sign_3 ($left, $right){}
}
class Ssse3 extends \System\Runtime\Intrinsics\X86\Sse3
{
	use Ssse3Override;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @uses Ssse3Override::Abs_1 <br>public , args: ($value)<br>
	 * @uses Ssse3Override::Abs_2 <br>public , args: ($value)<br>
	 * @uses Ssse3Override::Abs_3 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function Abs (\override ...$args){}
	/**
	 * @uses Ssse3Override::AlignRight_1 <br>public , args: ($left, $right, $mask)<br>
	 * @uses Ssse3Override::AlignRight_2 <br>public , args: ($left, $right, $mask)<br>
	 * @uses Ssse3Override::AlignRight_3 <br>public , args: ($left, $right, $mask)<br>
	 * @uses Ssse3Override::AlignRight_4 <br>public , args: ($left, $right, $mask)<br>
	 * @uses Ssse3Override::AlignRight_5 <br>public , args: ($left, $right, $mask)<br>
	 * @uses Ssse3Override::AlignRight_6 <br>public , args: ($left, $right, $mask)<br>
	 * @uses Ssse3Override::AlignRight_7 <br>public , args: ($left, $right, $mask)<br>
	 * @uses Ssse3Override::AlignRight_8 <br>public , args: ($left, $right, $mask)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function AlignRight (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Int16]
	 */
	public static function HorizontalAddSaturate($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Int16]
	 */
	public static function HorizontalSubtractSaturate($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Int16]
	 */
	public static function MultiplyHighRoundScale($left, $right){}
	/**
	 * @uses Ssse3Override::Sign_1 <br>public , args: ($left, $right)<br>
	 * @uses Ssse3Override::Sign_2 <br>public , args: ($left, $right)<br>
	 * @uses Ssse3Override::Sign_3 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function Sign (\override ...$args){}
}