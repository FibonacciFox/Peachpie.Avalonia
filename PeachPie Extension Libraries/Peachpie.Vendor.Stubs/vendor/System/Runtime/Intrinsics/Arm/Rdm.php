<?php
namespace System\Runtime\Intrinsics\Arm;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RdmOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $addend [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingAndAddSaturateHigh_1 ($addend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingAndAddSaturateHigh_2 ($addend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $addend [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingAndAddSaturateHigh_3 ($addend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingAndAddSaturateHigh_4 ($addend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $minuend [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingAndSubtractSaturateHigh_1 ($minuend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $minuend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingAndSubtractSaturateHigh_2 ($minuend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $minuend [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingAndSubtractSaturateHigh_3 ($minuend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $minuend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingAndSubtractSaturateHigh_4 ($minuend, $left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $addend [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\Int16]
	 * @param \System\Byte $rightIndex
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_1 ($addend, $left, $right, $rightIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $addend [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @param \System\Byte $rightIndex
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_2 ($addend, $left, $right, $rightIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\Int32]
	 * @param \System\Byte $rightIndex
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_3 ($addend, $left, $right, $rightIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int32]
	 * @param \System\Byte $rightIndex
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_4 ($addend, $left, $right, $rightIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $addend [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\Int16]
	 * @param \System\Byte $rightIndex
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_5 ($addend, $left, $right, $rightIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $addend [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @param \System\Byte $rightIndex
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_6 ($addend, $left, $right, $rightIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\Int32]
	 * @param \System\Byte $rightIndex
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_7 ($addend, $left, $right, $rightIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $addend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int32]
	 * @param \System\Byte $rightIndex
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_8 ($addend, $left, $right, $rightIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $minuend [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\Int16]
	 * @param \System\Byte $rightIndex
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_1 ($minuend, $left, $right, $rightIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $minuend [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @param \System\Byte $rightIndex
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_2 ($minuend, $left, $right, $rightIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $minuend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\Int32]
	 * @param \System\Byte $rightIndex
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_3 ($minuend, $left, $right, $rightIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $minuend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int32]
	 * @param \System\Byte $rightIndex
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_4 ($minuend, $left, $right, $rightIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $minuend [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\Int16]
	 * @param \System\Byte $rightIndex
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_5 ($minuend, $left, $right, $rightIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $minuend [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @param \System\Byte $rightIndex
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_6 ($minuend, $left, $right, $rightIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $minuend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: System\Int32]
	 * @param \System\Byte $rightIndex
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_7 ($minuend, $left, $right, $rightIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $minuend [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int32]
	 * @param \System\Byte $rightIndex
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_8 ($minuend, $left, $right, $rightIndex){}
}
class Rdm extends \System\Runtime\Intrinsics\Arm\AdvSimd
{
	use RdmOverride;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @uses RdmOverride::MultiplyRoundedDoublingAndAddSaturateHigh_1 <br>public , args: ($addend, $left, $right)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingAndAddSaturateHigh_2 <br>public , args: ($addend, $left, $right)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingAndAddSaturateHigh_3 <br>public , args: ($addend, $left, $right)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingAndAddSaturateHigh_4 <br>public , args: ($addend, $left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|\System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplyRoundedDoublingAndAddSaturateHigh (\override ...$args){}
	/**
	 * @uses RdmOverride::MultiplyRoundedDoublingAndSubtractSaturateHigh_1 <br>public , args: ($minuend, $left, $right)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingAndSubtractSaturateHigh_2 <br>public , args: ($minuend, $left, $right)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingAndSubtractSaturateHigh_3 <br>public , args: ($minuend, $left, $right)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingAndSubtractSaturateHigh_4 <br>public , args: ($minuend, $left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|\System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplyRoundedDoublingAndSubtractSaturateHigh (\override ...$args){}
	/**
	 * @uses RdmOverride::MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_1 <br>public , args: ($addend, $left, $right, $rightIndex)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_2 <br>public , args: ($addend, $left, $right, $rightIndex)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_3 <br>public , args: ($addend, $left, $right, $rightIndex)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_4 <br>public , args: ($addend, $left, $right, $rightIndex)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_5 <br>public , args: ($addend, $left, $right, $rightIndex)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_6 <br>public , args: ($addend, $left, $right, $rightIndex)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_7 <br>public , args: ($addend, $left, $right, $rightIndex)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh_8 <br>public , args: ($addend, $left, $right, $rightIndex)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|\System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplyRoundedDoublingBySelectedScalarAndAddSaturateHigh (\override ...$args){}
	/**
	 * @uses RdmOverride::MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_1 <br>public , args: ($minuend, $left, $right, $rightIndex)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_2 <br>public , args: ($minuend, $left, $right, $rightIndex)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_3 <br>public , args: ($minuend, $left, $right, $rightIndex)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_4 <br>public , args: ($minuend, $left, $right, $rightIndex)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_5 <br>public , args: ($minuend, $left, $right, $rightIndex)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_6 <br>public , args: ($minuend, $left, $right, $rightIndex)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_7 <br>public , args: ($minuend, $left, $right, $rightIndex)<br>
	 * @uses RdmOverride::MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh_8 <br>public , args: ($minuend, $left, $right, $rightIndex)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|\System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplyRoundedDoublingBySelectedScalarAndSubtractSaturateHigh (\override ...$args){}
}