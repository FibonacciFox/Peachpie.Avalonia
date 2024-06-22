<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Sse41Override {
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Blend_1 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt16]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Blend_2 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Blend_3 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Double]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Blend_4 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function BlendVariable_1 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function BlendVariable_2 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function BlendVariable_3 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\UInt16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function BlendVariable_4 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function BlendVariable_5 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function BlendVariable_6 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Int64]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function BlendVariable_7 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\UInt64]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function BlendVariable_8 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function BlendVariable_9 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function BlendVariable_10 ($left, $right, $mask){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Ceiling_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Ceiling_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function CeilingScalar_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function CeilingScalar_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function CeilingScalar_3 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function CeilingScalar_4 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int16_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int16_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\SByte* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int16_3 ($address){}
	/**
	 * @deprecated
	 * @param \System\Byte* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int16_4 ($address){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int64_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int64_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int64_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int64_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int64_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int64_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\SByte* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int64_7 ($address){}
	/**
	 * @deprecated
	 * @param \System\Byte* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int64_8 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int16* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int64_9 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt16* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int64_10 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int32* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int64_11 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt32* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int64_12 ($address){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function DotProduct_1 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Double]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function DotProduct_2 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Floor_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Floor_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function FloorScalar_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function FloorScalar_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function FloorScalar_3 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function FloorScalar_4 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToNearestInteger_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToNearestInteger_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToNegativeInfinity_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToNegativeInfinity_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToPositiveInfinity_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToPositiveInfinity_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToZero_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToZero_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundCurrentDirection_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundCurrentDirection_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundCurrentDirectionScalar_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundCurrentDirectionScalar_2 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundCurrentDirectionScalar_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundCurrentDirectionScalar_4 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToNearestIntegerScalar_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToNearestIntegerScalar_2 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToNearestIntegerScalar_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToNearestIntegerScalar_4 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToNegativeInfinityScalar_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToNegativeInfinityScalar_2 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToNegativeInfinityScalar_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToNegativeInfinityScalar_4 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToPositiveInfinityScalar_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToPositiveInfinityScalar_2 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToPositiveInfinityScalar_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToPositiveInfinityScalar_4 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToZeroScalar_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToZeroScalar_2 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToZeroScalar_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function RoundToZeroScalar_4 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\SByte* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function LoadAlignedVector128NonTemporal_1 ($address){}
	/**
	 * @deprecated
	 * @param \System\Byte* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function LoadAlignedVector128NonTemporal_2 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int16* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function LoadAlignedVector128NonTemporal_3 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt16* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function LoadAlignedVector128NonTemporal_4 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int32* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function LoadAlignedVector128NonTemporal_5 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt32* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function LoadAlignedVector128NonTemporal_6 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int64* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function LoadAlignedVector128NonTemporal_7 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt64* $address
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function LoadAlignedVector128NonTemporal_8 ($address){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\SByte]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestC_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Byte]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestC_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestC_3 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt16]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestC_4 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int32]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestC_5 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt32]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestC_6 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int64]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestC_7 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt64]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestC_8 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\SByte]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestNotZAndNotC_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Byte]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestNotZAndNotC_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestNotZAndNotC_3 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt16]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestNotZAndNotC_4 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int32]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestNotZAndNotC_5 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt32]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestNotZAndNotC_6 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int64]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestNotZAndNotC_7 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt64]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestNotZAndNotC_8 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\SByte]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestZ_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Byte]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestZ_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestZ_3 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt16]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestZ_4 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int32]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestZ_5 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt32]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestZ_6 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int64]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestZ_7 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt64]
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TestZ_8 ($left, $right){}
}
class Sse41 extends \System\Runtime\Intrinsics\X86\Ssse3
{
	use Sse41Override;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @uses Sse41Override::Blend_1 <br>public , args: ($left, $right, $control)<br>
	 * @uses Sse41Override::Blend_2 <br>public , args: ($left, $right, $control)<br>
	 * @uses Sse41Override::Blend_3 <br>public , args: ($left, $right, $control)<br>
	 * @uses Sse41Override::Blend_4 <br>public , args: ($left, $right, $control)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function Blend (\override ...$args){}
	/**
	 * @uses Sse41Override::BlendVariable_1 <br>public , args: ($left, $right, $mask)<br>
	 * @uses Sse41Override::BlendVariable_2 <br>public , args: ($left, $right, $mask)<br>
	 * @uses Sse41Override::BlendVariable_3 <br>public , args: ($left, $right, $mask)<br>
	 * @uses Sse41Override::BlendVariable_4 <br>public , args: ($left, $right, $mask)<br>
	 * @uses Sse41Override::BlendVariable_5 <br>public , args: ($left, $right, $mask)<br>
	 * @uses Sse41Override::BlendVariable_6 <br>public , args: ($left, $right, $mask)<br>
	 * @uses Sse41Override::BlendVariable_7 <br>public , args: ($left, $right, $mask)<br>
	 * @uses Sse41Override::BlendVariable_8 <br>public , args: ($left, $right, $mask)<br>
	 * @uses Sse41Override::BlendVariable_9 <br>public , args: ($left, $right, $mask)<br>
	 * @uses Sse41Override::BlendVariable_10 <br>public , args: ($left, $right, $mask)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function BlendVariable (\override ...$args){}
	/**
	 * @uses Sse41Override::Ceiling_1 <br>public , args: ($value)<br>
	 * @uses Sse41Override::Ceiling_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function Ceiling (\override ...$args){}
	/**
	 * @uses Sse41Override::CeilingScalar_1 <br>public , args: ($value)<br>
	 * @uses Sse41Override::CeilingScalar_2 <br>public , args: ($value)<br>
	 * @uses Sse41Override::CeilingScalar_3 <br>public , args: ($upper, $value)<br>
	 * @uses Sse41Override::CeilingScalar_4 <br>public , args: ($upper, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function CeilingScalar (\override ...$args){}
	/**
	 * @uses Sse41Override::ConvertToVector128Int16_1 <br>public , args: ($value)<br>
	 * @uses Sse41Override::ConvertToVector128Int16_2 <br>public , args: ($value)<br>
	 * @uses Sse41Override::ConvertToVector128Int16_3 <br>public , args: ($address)<br>
	 * @uses Sse41Override::ConvertToVector128Int16_4 <br>public , args: ($address)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ConvertToVector128Int16 (\override ...$args){}
	/**
	 * @uses Sse41Override::ConvertToVector128Int64_1 <br>public , args: ($value)<br>
	 * @uses Sse41Override::ConvertToVector128Int64_2 <br>public , args: ($value)<br>
	 * @uses Sse41Override::ConvertToVector128Int64_3 <br>public , args: ($value)<br>
	 * @uses Sse41Override::ConvertToVector128Int64_4 <br>public , args: ($value)<br>
	 * @uses Sse41Override::ConvertToVector128Int64_5 <br>public , args: ($value)<br>
	 * @uses Sse41Override::ConvertToVector128Int64_6 <br>public , args: ($value)<br>
	 * @uses Sse41Override::ConvertToVector128Int64_7 <br>public , args: ($address)<br>
	 * @uses Sse41Override::ConvertToVector128Int64_8 <br>public , args: ($address)<br>
	 * @uses Sse41Override::ConvertToVector128Int64_9 <br>public , args: ($address)<br>
	 * @uses Sse41Override::ConvertToVector128Int64_10 <br>public , args: ($address)<br>
	 * @uses Sse41Override::ConvertToVector128Int64_11 <br>public , args: ($address)<br>
	 * @uses Sse41Override::ConvertToVector128Int64_12 <br>public , args: ($address)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ConvertToVector128Int64 (\override ...$args){}
	/**
	 * @uses Sse41Override::DotProduct_1 <br>public , args: ($left, $right, $control)<br>
	 * @uses Sse41Override::DotProduct_2 <br>public , args: ($left, $right, $control)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function DotProduct (\override ...$args){}
	/**
	 * @uses Sse41Override::Floor_1 <br>public , args: ($value)<br>
	 * @uses Sse41Override::Floor_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function Floor (\override ...$args){}
	/**
	 * @uses Sse41Override::FloorScalar_1 <br>public , args: ($value)<br>
	 * @uses Sse41Override::FloorScalar_2 <br>public , args: ($value)<br>
	 * @uses Sse41Override::FloorScalar_3 <br>public , args: ($upper, $value)<br>
	 * @uses Sse41Override::FloorScalar_4 <br>public , args: ($upper, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function FloorScalar (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt16]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\UInt16]
	 */
	public static function MinHorizontal($value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Byte]
	 * @param \System\Byte $mask
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\UInt16]
	 */
	public static function MultipleSumAbsoluteDifferences($left, $right, $mask){}
	/**
	 * @uses Sse41Override::RoundToNearestInteger_1 <br>public , args: ($value)<br>
	 * @uses Sse41Override::RoundToNearestInteger_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function RoundToNearestInteger (\override ...$args){}
	/**
	 * @uses Sse41Override::RoundToNegativeInfinity_1 <br>public , args: ($value)<br>
	 * @uses Sse41Override::RoundToNegativeInfinity_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function RoundToNegativeInfinity (\override ...$args){}
	/**
	 * @uses Sse41Override::RoundToPositiveInfinity_1 <br>public , args: ($value)<br>
	 * @uses Sse41Override::RoundToPositiveInfinity_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function RoundToPositiveInfinity (\override ...$args){}
	/**
	 * @uses Sse41Override::RoundToZero_1 <br>public , args: ($value)<br>
	 * @uses Sse41Override::RoundToZero_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function RoundToZero (\override ...$args){}
	/**
	 * @uses Sse41Override::RoundCurrentDirection_1 <br>public , args: ($value)<br>
	 * @uses Sse41Override::RoundCurrentDirection_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function RoundCurrentDirection (\override ...$args){}
	/**
	 * @uses Sse41Override::RoundCurrentDirectionScalar_1 <br>public , args: ($value)<br>
	 * @uses Sse41Override::RoundCurrentDirectionScalar_2 <br>public , args: ($upper, $value)<br>
	 * @uses Sse41Override::RoundCurrentDirectionScalar_3 <br>public , args: ($value)<br>
	 * @uses Sse41Override::RoundCurrentDirectionScalar_4 <br>public , args: ($upper, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function RoundCurrentDirectionScalar (\override ...$args){}
	/**
	 * @uses Sse41Override::RoundToNearestIntegerScalar_1 <br>public , args: ($value)<br>
	 * @uses Sse41Override::RoundToNearestIntegerScalar_2 <br>public , args: ($upper, $value)<br>
	 * @uses Sse41Override::RoundToNearestIntegerScalar_3 <br>public , args: ($value)<br>
	 * @uses Sse41Override::RoundToNearestIntegerScalar_4 <br>public , args: ($upper, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function RoundToNearestIntegerScalar (\override ...$args){}
	/**
	 * @uses Sse41Override::RoundToNegativeInfinityScalar_1 <br>public , args: ($value)<br>
	 * @uses Sse41Override::RoundToNegativeInfinityScalar_2 <br>public , args: ($upper, $value)<br>
	 * @uses Sse41Override::RoundToNegativeInfinityScalar_3 <br>public , args: ($value)<br>
	 * @uses Sse41Override::RoundToNegativeInfinityScalar_4 <br>public , args: ($upper, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function RoundToNegativeInfinityScalar (\override ...$args){}
	/**
	 * @uses Sse41Override::RoundToPositiveInfinityScalar_1 <br>public , args: ($value)<br>
	 * @uses Sse41Override::RoundToPositiveInfinityScalar_2 <br>public , args: ($upper, $value)<br>
	 * @uses Sse41Override::RoundToPositiveInfinityScalar_3 <br>public , args: ($value)<br>
	 * @uses Sse41Override::RoundToPositiveInfinityScalar_4 <br>public , args: ($upper, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function RoundToPositiveInfinityScalar (\override ...$args){}
	/**
	 * @uses Sse41Override::RoundToZeroScalar_1 <br>public , args: ($value)<br>
	 * @uses Sse41Override::RoundToZeroScalar_2 <br>public , args: ($upper, $value)<br>
	 * @uses Sse41Override::RoundToZeroScalar_3 <br>public , args: ($value)<br>
	 * @uses Sse41Override::RoundToZeroScalar_4 <br>public , args: ($upper, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function RoundToZeroScalar (\override ...$args){}
	/**
	 * @uses Sse41Override::LoadAlignedVector128NonTemporal_1 <br>public , args: ($address)<br>
	 * @uses Sse41Override::LoadAlignedVector128NonTemporal_2 <br>public , args: ($address)<br>
	 * @uses Sse41Override::LoadAlignedVector128NonTemporal_3 <br>public , args: ($address)<br>
	 * @uses Sse41Override::LoadAlignedVector128NonTemporal_4 <br>public , args: ($address)<br>
	 * @uses Sse41Override::LoadAlignedVector128NonTemporal_5 <br>public , args: ($address)<br>
	 * @uses Sse41Override::LoadAlignedVector128NonTemporal_6 <br>public , args: ($address)<br>
	 * @uses Sse41Override::LoadAlignedVector128NonTemporal_7 <br>public , args: ($address)<br>
	 * @uses Sse41Override::LoadAlignedVector128NonTemporal_8 <br>public , args: ($address)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function LoadAlignedVector128NonTemporal (\override ...$args){}
	/**
	 * @uses Sse41Override::TestC_1 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestC_2 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestC_3 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestC_4 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestC_5 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestC_6 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestC_7 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestC_8 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TestC (\override ...$args){}
	/**
	 * @uses Sse41Override::TestNotZAndNotC_1 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestNotZAndNotC_2 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestNotZAndNotC_3 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestNotZAndNotC_4 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestNotZAndNotC_5 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestNotZAndNotC_6 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestNotZAndNotC_7 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestNotZAndNotC_8 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TestNotZAndNotC (\override ...$args){}
	/**
	 * @uses Sse41Override::TestZ_1 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestZ_2 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestZ_3 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestZ_4 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestZ_5 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestZ_6 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestZ_7 <br>public , args: ($left, $right)<br>
	 * @uses Sse41Override::TestZ_8 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TestZ (\override ...$args){}
}