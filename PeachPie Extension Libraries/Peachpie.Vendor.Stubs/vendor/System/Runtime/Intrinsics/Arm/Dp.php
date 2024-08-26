<?php
namespace System\Runtime\Intrinsics\Arm;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DpOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function DotProduct_1 ($addend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $addend [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function DotProduct_2 ($addend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function DotProduct_3 ($addend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $addend [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function DotProduct_4 ($addend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\SByte]
	 * @param \System\Byte $rightScaledIndex
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function DotProductBySelectedQuadruplet_1 ($addend, $left, $right, $rightScaledIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\SByte]
	 * @param \System\Byte $rightScaledIndex
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function DotProductBySelectedQuadruplet_2 ($addend, $left, $right, $rightScaledIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $addend [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\Byte]
	 * @param \System\Byte $rightScaledIndex
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function DotProductBySelectedQuadruplet_3 ($addend, $left, $right, $rightScaledIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $addend [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Byte]
	 * @param \System\Byte $rightScaledIndex
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function DotProductBySelectedQuadruplet_4 ($addend, $left, $right, $rightScaledIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\SByte]
	 * @param \System\Byte $rightScaledIndex
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function DotProductBySelectedQuadruplet_5 ($addend, $left, $right, $rightScaledIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\SByte]
	 * @param \System\Byte $rightScaledIndex
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function DotProductBySelectedQuadruplet_6 ($addend, $left, $right, $rightScaledIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $addend [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Byte]
	 * @param \System\Byte $rightScaledIndex
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function DotProductBySelectedQuadruplet_7 ($addend, $left, $right, $rightScaledIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $addend [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\Byte]
	 * @param \System\Byte $rightScaledIndex
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function DotProductBySelectedQuadruplet_8 ($addend, $left, $right, $rightScaledIndex){}
}
class Dp extends \System\Runtime\Intrinsics\Arm\AdvSimd
{
	use DpOverride;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @uses DpOverride::DotProduct_1 <br>public , args: ($addend, $left, $right)<br>
	 * @uses DpOverride::DotProduct_2 <br>public , args: ($addend, $left, $right)<br>
	 * @uses DpOverride::DotProduct_3 <br>public , args: ($addend, $left, $right)<br>
	 * @uses DpOverride::DotProduct_4 <br>public , args: ($addend, $left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|\System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function DotProduct (\override ...$args){}
	/**
	 * @uses DpOverride::DotProductBySelectedQuadruplet_1 <br>public , args: ($addend, $left, $right, $rightScaledIndex)<br>
	 * @uses DpOverride::DotProductBySelectedQuadruplet_2 <br>public , args: ($addend, $left, $right, $rightScaledIndex)<br>
	 * @uses DpOverride::DotProductBySelectedQuadruplet_3 <br>public , args: ($addend, $left, $right, $rightScaledIndex)<br>
	 * @uses DpOverride::DotProductBySelectedQuadruplet_4 <br>public , args: ($addend, $left, $right, $rightScaledIndex)<br>
	 * @uses DpOverride::DotProductBySelectedQuadruplet_5 <br>public , args: ($addend, $left, $right, $rightScaledIndex)<br>
	 * @uses DpOverride::DotProductBySelectedQuadruplet_6 <br>public , args: ($addend, $left, $right, $rightScaledIndex)<br>
	 * @uses DpOverride::DotProductBySelectedQuadruplet_7 <br>public , args: ($addend, $left, $right, $rightScaledIndex)<br>
	 * @uses DpOverride::DotProductBySelectedQuadruplet_8 <br>public , args: ($addend, $left, $right, $rightScaledIndex)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|\System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function DotProductBySelectedQuadruplet (\override ...$args){}
}