<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Sse2Override {
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function AddSaturate_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function AddSaturate_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function AddSaturate_3 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function AddSaturate_4 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Average_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Average_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int32_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int32_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Single_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Single_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Double_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Double_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Double]
	 * @param \System\Int32|int $value
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertScalarToVector128Double_1 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $upper [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertScalarToVector128Double_2 ($upper, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int32WithTruncation_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ConvertToVector128Int32WithTruncation_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int16]
	 * @param \System\Int16 $data
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Insert_1 ($value, $data, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt16]
	 * @param \System\UInt16 $data
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Insert_2 ($value, $data, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\SByte]
	 * @param \System\SByte* $address
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function MaskMove_1 ($source, $mask, $address){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Byte]
	 * @param \System\Byte* $address
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function MaskMove_2 ($source, $mask, $address){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyHigh_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyHigh_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyLow_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MultiplyLow_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function PackSignedSaturate_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function PackSignedSaturate_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int16]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShuffleHigh_1 ($value, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt16]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShuffleHigh_2 ($value, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int16]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShuffleLow_1 ($value, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt16]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShuffleLow_2 ($value, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical_1 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\UInt16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical_2 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical_3 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical_4 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\Int64]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical_5 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\UInt64]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical_6 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int16]
	 * @param \System\Byte $count
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical_7 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt16]
	 * @param \System\Byte $count
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical_8 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @param \System\Byte $count
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical_9 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt32]
	 * @param \System\Byte $count
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical_10 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int64]
	 * @param \System\Byte $count
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical_11 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt64]
	 * @param \System\Byte $count
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical_12 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\SByte]
	 * @param \System\Byte $numBytes
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical128BitLane_1 ($value, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Byte]
	 * @param \System\Byte $numBytes
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical128BitLane_2 ($value, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int16]
	 * @param \System\Byte $numBytes
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical128BitLane_3 ($value, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt16]
	 * @param \System\Byte $numBytes
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical128BitLane_4 ($value, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @param \System\Byte $numBytes
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical128BitLane_5 ($value, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt32]
	 * @param \System\Byte $numBytes
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical128BitLane_6 ($value, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int64]
	 * @param \System\Byte $numBytes
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical128BitLane_7 ($value, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt64]
	 * @param \System\Byte $numBytes
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogical128BitLane_8 ($value, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightArithmetic_1 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightArithmetic_2 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int16]
	 * @param \System\Byte $count
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightArithmetic_3 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @param \System\Byte $count
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightArithmetic_4 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_1 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\UInt16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_2 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_3 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_4 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\Int64]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_5 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\UInt64]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_6 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int16]
	 * @param \System\Byte $count
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_7 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt16]
	 * @param \System\Byte $count
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_8 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @param \System\Byte $count
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_9 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt32]
	 * @param \System\Byte $count
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_10 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int64]
	 * @param \System\Byte $count
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_11 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt64]
	 * @param \System\Byte $count
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_12 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\SByte]
	 * @param \System\Byte $numBytes
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical128BitLane_1 ($value, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Byte]
	 * @param \System\Byte $numBytes
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical128BitLane_2 ($value, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int16]
	 * @param \System\Byte $numBytes
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical128BitLane_3 ($value, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt16]
	 * @param \System\Byte $numBytes
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical128BitLane_4 ($value, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @param \System\Byte $numBytes
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical128BitLane_5 ($value, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt32]
	 * @param \System\Byte $numBytes
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical128BitLane_6 ($value, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int64]
	 * @param \System\Byte $numBytes
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical128BitLane_7 ($value, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt64]
	 * @param \System\Byte $numBytes
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogical128BitLane_8 ($value, $numBytes){}
	/**
	 * @deprecated
	 * @param \System\Int32* $address
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function StoreNonTemporal_1 ($address, $value){}
	/**
	 * @deprecated
	 * @param \System\UInt32* $address
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function StoreNonTemporal_2 ($address, $value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function SubtractSaturate_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function SubtractSaturate_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function SubtractSaturate_3 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\UInt16]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function SubtractSaturate_4 ($left, $right){}
}
class Sse2 extends \System\Runtime\Intrinsics\X86\Sse
{
	use Sse2Override;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @uses Sse2Override::AddSaturate_1 <br>public , args: ($left, $right)<br>
	 * @uses Sse2Override::AddSaturate_2 <br>public , args: ($left, $right)<br>
	 * @uses Sse2Override::AddSaturate_3 <br>public , args: ($left, $right)<br>
	 * @uses Sse2Override::AddSaturate_4 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function AddSaturate (\override ...$args){}
	/**
	 * @uses Sse2Override::Average_1 <br>public , args: ($left, $right)<br>
	 * @uses Sse2Override::Average_2 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function Average (\override ...$args){}
	/**
	 * @uses Sse2Override::ConvertToVector128Int32_1 <br>public , args: ($value)<br>
	 * @uses Sse2Override::ConvertToVector128Int32_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ConvertToVector128Int32 (\override ...$args){}
	/**
	 * @uses Sse2Override::ConvertToVector128Single_1 <br>public , args: ($value)<br>
	 * @uses Sse2Override::ConvertToVector128Single_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ConvertToVector128Single (\override ...$args){}
	/**
	 * @uses Sse2Override::ConvertToVector128Double_1 <br>public , args: ($value)<br>
	 * @uses Sse2Override::ConvertToVector128Double_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ConvertToVector128Double (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt32]
	 * @return \System\UInt32
	 */
	public static function ConvertToUInt32($value){}
	/**
	 * @uses Sse2Override::ConvertScalarToVector128Double_1 <br>public , args: ($upper, $value)<br>
	 * @uses Sse2Override::ConvertScalarToVector128Double_2 <br>public , args: ($upper, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ConvertScalarToVector128Double (\override ...$args){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Int32]
	 */
	public static function ConvertScalarToVector128Int32($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\UInt32]
	 */
	public static function ConvertScalarToVector128UInt32($value){}
	/**
	 * @uses Sse2Override::ConvertToVector128Int32WithTruncation_1 <br>public , args: ($value)<br>
	 * @uses Sse2Override::ConvertToVector128Int32WithTruncation_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ConvertToVector128Int32WithTruncation (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt16]
	 * @param \System\Byte $index
	 * @return \System\UInt16
	 */
	public static function Extract($value, $index){}
	/**
	 * @uses Sse2Override::Insert_1 <br>public , args: ($value, $data, $index)<br>
	 * @uses Sse2Override::Insert_2 <br>public , args: ($value, $data, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function Insert (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public static function LoadFence(){}
	/**
	 * @uses Sse2Override::MaskMove_1 <br>public , args: ($source, $mask, $address)<br>
	 * @uses Sse2Override::MaskMove_2 <br>public , args: ($source, $mask, $address)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function MaskMove (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public static function MemoryFence(){}
	/**
	 * @uses Sse2Override::MultiplyHigh_1 <br>public , args: ($left, $right)<br>
	 * @uses Sse2Override::MultiplyHigh_2 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplyHigh (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Int32]
	 */
	public static function MultiplyAddAdjacent($left, $right){}
	/**
	 * @uses Sse2Override::MultiplyLow_1 <br>public , args: ($left, $right)<br>
	 * @uses Sse2Override::MultiplyLow_2 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function MultiplyLow (\override ...$args){}
	/**
	 * @uses Sse2Override::PackSignedSaturate_1 <br>public , args: ($left, $right)<br>
	 * @uses Sse2Override::PackSignedSaturate_2 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function PackSignedSaturate (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Byte]
	 */
	public static function PackUnsignedSaturate($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\UInt16]
	 */
	public static function SumAbsoluteDifferences($left, $right){}
	/**
	 * @uses Sse2Override::ShuffleHigh_1 <br>public , args: ($value, $control)<br>
	 * @uses Sse2Override::ShuffleHigh_2 <br>public , args: ($value, $control)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ShuffleHigh (\override ...$args){}
	/**
	 * @uses Sse2Override::ShuffleLow_1 <br>public , args: ($value, $control)<br>
	 * @uses Sse2Override::ShuffleLow_2 <br>public , args: ($value, $control)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ShuffleLow (\override ...$args){}
	/**
	 * @uses Sse2Override::ShiftLeftLogical_1 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftLeftLogical_2 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftLeftLogical_3 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftLeftLogical_4 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftLeftLogical_5 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftLeftLogical_6 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftLeftLogical_7 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftLeftLogical_8 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftLeftLogical_9 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftLeftLogical_10 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftLeftLogical_11 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftLeftLogical_12 <br>public , args: ($value, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ShiftLeftLogical (\override ...$args){}
	/**
	 * @uses Sse2Override::ShiftLeftLogical128BitLane_1 <br>public , args: ($value, $numBytes)<br>
	 * @uses Sse2Override::ShiftLeftLogical128BitLane_2 <br>public , args: ($value, $numBytes)<br>
	 * @uses Sse2Override::ShiftLeftLogical128BitLane_3 <br>public , args: ($value, $numBytes)<br>
	 * @uses Sse2Override::ShiftLeftLogical128BitLane_4 <br>public , args: ($value, $numBytes)<br>
	 * @uses Sse2Override::ShiftLeftLogical128BitLane_5 <br>public , args: ($value, $numBytes)<br>
	 * @uses Sse2Override::ShiftLeftLogical128BitLane_6 <br>public , args: ($value, $numBytes)<br>
	 * @uses Sse2Override::ShiftLeftLogical128BitLane_7 <br>public , args: ($value, $numBytes)<br>
	 * @uses Sse2Override::ShiftLeftLogical128BitLane_8 <br>public , args: ($value, $numBytes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ShiftLeftLogical128BitLane (\override ...$args){}
	/**
	 * @uses Sse2Override::ShiftRightArithmetic_1 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftRightArithmetic_2 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftRightArithmetic_3 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftRightArithmetic_4 <br>public , args: ($value, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ShiftRightArithmetic (\override ...$args){}
	/**
	 * @uses Sse2Override::ShiftRightLogical_1 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftRightLogical_2 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftRightLogical_3 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftRightLogical_4 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftRightLogical_5 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftRightLogical_6 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftRightLogical_7 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftRightLogical_8 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftRightLogical_9 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftRightLogical_10 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftRightLogical_11 <br>public , args: ($value, $count)<br>
	 * @uses Sse2Override::ShiftRightLogical_12 <br>public , args: ($value, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ShiftRightLogical (\override ...$args){}
	/**
	 * @uses Sse2Override::ShiftRightLogical128BitLane_1 <br>public , args: ($value, $numBytes)<br>
	 * @uses Sse2Override::ShiftRightLogical128BitLane_2 <br>public , args: ($value, $numBytes)<br>
	 * @uses Sse2Override::ShiftRightLogical128BitLane_3 <br>public , args: ($value, $numBytes)<br>
	 * @uses Sse2Override::ShiftRightLogical128BitLane_4 <br>public , args: ($value, $numBytes)<br>
	 * @uses Sse2Override::ShiftRightLogical128BitLane_5 <br>public , args: ($value, $numBytes)<br>
	 * @uses Sse2Override::ShiftRightLogical128BitLane_6 <br>public , args: ($value, $numBytes)<br>
	 * @uses Sse2Override::ShiftRightLogical128BitLane_7 <br>public , args: ($value, $numBytes)<br>
	 * @uses Sse2Override::ShiftRightLogical128BitLane_8 <br>public , args: ($value, $numBytes)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ShiftRightLogical128BitLane (\override ...$args){}
	/**
	 * @uses Sse2Override::StoreNonTemporal_1 <br>public , args: ($address, $value)<br>
	 * @uses Sse2Override::StoreNonTemporal_2 <br>public , args: ($address, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function StoreNonTemporal (\override ...$args){}
	/**
	 * @uses Sse2Override::SubtractSaturate_1 <br>public , args: ($left, $right)<br>
	 * @uses Sse2Override::SubtractSaturate_2 <br>public , args: ($left, $right)<br>
	 * @uses Sse2Override::SubtractSaturate_3 <br>public , args: ($left, $right)<br>
	 * @uses Sse2Override::SubtractSaturate_4 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function SubtractSaturate (\override ...$args){}
}