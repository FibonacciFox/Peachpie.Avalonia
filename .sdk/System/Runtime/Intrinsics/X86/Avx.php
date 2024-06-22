<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AvxOverride {
	/**
	 * @deprecated
	 * @param \System\Single* $source
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function BroadcastScalarToVector256_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Double* $source
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function BroadcastScalarToVector256_2 ($source){}
	/**
	 * @deprecated
	 * @param \System\Single* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function BroadcastVector128ToVector256_1 ($address){}
	/**
	 * @deprecated
	 * @param \System\Double* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function BroadcastVector128ToVector256_2 ($address){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\X86\FloatComparisonMode $mode
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Compare_1 ($left, $right, $mode){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\X86\FloatComparisonMode $mode
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Compare_2 ($left, $right, $mode){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\X86\FloatComparisonMode $mode
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Compare_3 ($left, $right, $mode){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\X86\FloatComparisonMode $mode
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Compare_4 ($left, $right, $mode){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\X86\FloatComparisonMode $mode
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function CompareScalar_1 ($left, $right, $mode){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $right [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\X86\FloatComparisonMode $mode
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function CompareScalar_2 ($left, $right, $mode){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Double_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Double_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function DuplicateEvenIndexed_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function DuplicateEvenIndexed_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Byte]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ExtractVector128_1 ($value, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\SByte]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ExtractVector128_2 ($value, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Int16]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ExtractVector128_3 ($value, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\UInt16]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ExtractVector128_4 ($value, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Int32]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ExtractVector128_5 ($value, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\UInt32]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ExtractVector128_6 ($value, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Int64]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ExtractVector128_7 ($value, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\UInt64]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ExtractVector128_8 ($value, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Single]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ExtractVector128_9 ($value, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Double]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ExtractVector128_10 ($value, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $data [generic: System\Byte]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function InsertVector128_1 ($value, $data, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $data [generic: System\SByte]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function InsertVector128_2 ($value, $data, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $data [generic: System\Int16]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function InsertVector128_3 ($value, $data, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $data [generic: System\UInt16]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function InsertVector128_4 ($value, $data, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $data [generic: System\Int32]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function InsertVector128_5 ($value, $data, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $data [generic: System\UInt32]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function InsertVector128_6 ($value, $data, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $data [generic: System\Int64]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function InsertVector128_7 ($value, $data, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $data [generic: System\UInt64]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function InsertVector128_8 ($value, $data, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $data [generic: System\Single]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function InsertVector128_9 ($value, $data, $index){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $data [generic: System\Double]
	 * @param \System\Byte $index
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function InsertVector128_10 ($value, $data, $index){}
	/**
	 * @deprecated
	 * @param \System\SByte* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadVector256_1 ($address){}
	/**
	 * @deprecated
	 * @param \System\Byte* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadVector256_2 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int16* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadVector256_3 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt16* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadVector256_4 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int32* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadVector256_5 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt32* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadVector256_6 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int64* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadVector256_7 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt64* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadVector256_8 ($address){}
	/**
	 * @deprecated
	 * @param \System\Single* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadVector256_9 ($address){}
	/**
	 * @deprecated
	 * @param \System\Double* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadVector256_10 ($address){}
	/**
	 * @deprecated
	 * @param \System\SByte* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256_1 ($address){}
	/**
	 * @deprecated
	 * @param \System\Byte* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256_2 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int16* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256_3 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt16* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256_4 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int32* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256_5 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt32* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256_6 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int64* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256_7 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt64* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256_8 ($address){}
	/**
	 * @deprecated
	 * @param \System\Single* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256_9 ($address){}
	/**
	 * @deprecated
	 * @param \System\Double* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256_10 ($address){}
	/**
	 * @deprecated
	 * @param \System\SByte* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadDquVector256_1 ($address){}
	/**
	 * @deprecated
	 * @param \System\Byte* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadDquVector256_2 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int16* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadDquVector256_3 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt16* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadDquVector256_4 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int32* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadDquVector256_5 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt32* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadDquVector256_6 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int64* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadDquVector256_7 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt64* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadDquVector256_8 ($address){}
	/**
	 * @deprecated
	 * @param \System\Single* $address
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MaskLoad_1 ($address, $mask){}
	/**
	 * @deprecated
	 * @param \System\Double* $address
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function MaskLoad_2 ($address, $mask){}
	/**
	 * @deprecated
	 * @param \System\Single* $address
	 * @param \System\Runtime\Intrinsics\Vector256_1 $mask [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MaskLoad_3 ($address, $mask){}
	/**
	 * @deprecated
	 * @param \System\Double* $address
	 * @param \System\Runtime\Intrinsics\Vector256_1 $mask [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function MaskLoad_4 ($address, $mask){}
	/**
	 * @deprecated
	 * @param \System\Single* $address
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Single]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function MaskStore_1 ($address, $mask, $source){}
	/**
	 * @deprecated
	 * @param \System\Double* $address
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Double]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function MaskStore_2 ($address, $mask, $source){}
	/**
	 * @deprecated
	 * @param \System\Single* $address
	 * @param \System\Runtime\Intrinsics\Vector256_1 $mask [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $source [generic: System\Single]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function MaskStore_3 ($address, $mask, $source){}
	/**
	 * @deprecated
	 * @param \System\Double* $address
	 * @param \System\Runtime\Intrinsics\Vector256_1 $mask [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $source [generic: System\Double]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function MaskStore_4 ($address, $mask, $source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Single]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Permute_1 ($value, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Double]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function Permute_2 ($value, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Single]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Permute_3 ($value, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Double]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Permute_4 ($value, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right [generic: System\Byte]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Permute2x128_1 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right [generic: System\SByte]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Permute2x128_2 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right [generic: System\Int16]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Permute2x128_3 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right [generic: System\UInt16]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Permute2x128_4 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right [generic: System\Int32]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Permute2x128_5 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right [generic: System\UInt32]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Permute2x128_6 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right [generic: System\Int64]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Permute2x128_7 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right [generic: System\UInt64]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Permute2x128_8 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right [generic: System\Single]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Permute2x128_9 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right [generic: System\Double]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Permute2x128_10 ($left, $right, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $control [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function PermuteVar_1 ($left, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $left [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $control [generic: System\Int64]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function PermuteVar_2 ($left, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $control [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function PermuteVar_3 ($left, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $control [generic: System\Int64]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function PermuteVar_4 ($left, $control){}
}
class Avx extends \System\Runtime\Intrinsics\X86\Sse42
{
	use AvxOverride;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @param \System\Single* $source
	 * @return \System\Runtime\Intrinsics\Vector128_1[System\Single]
	 */
	public static function BroadcastScalarToVector128($source){}
	/**
	 * @uses AvxOverride::BroadcastScalarToVector256_1 <br>public , args: ($source)<br>
	 * @uses AvxOverride::BroadcastScalarToVector256_2 <br>public , args: ($source)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function BroadcastScalarToVector256 (\override ...$args){}
	/**
	 * @uses AvxOverride::BroadcastVector128ToVector256_1 <br>public , args: ($address)<br>
	 * @uses AvxOverride::BroadcastVector128ToVector256_2 <br>public , args: ($address)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function BroadcastVector128ToVector256 (\override ...$args){}
	/**
	 * @uses AvxOverride::Compare_1 <br>public , args: ($left, $right, $mode)<br>
	 * @uses AvxOverride::Compare_2 <br>public , args: ($left, $right, $mode)<br>
	 * @uses AvxOverride::Compare_3 <br>public , args: ($left, $right, $mode)<br>
	 * @uses AvxOverride::Compare_4 <br>public , args: ($left, $right, $mode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|\System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function Compare (\override ...$args){}
	/**
	 * @uses AvxOverride::CompareScalar_1 <br>public , args: ($left, $right, $mode)<br>
	 * @uses AvxOverride::CompareScalar_2 <br>public , args: ($left, $right, $mode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function CompareScalar (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector256_1[System\Int32]
	 */
	public static function ConvertToVector256Int32($value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector256_1[System\Single]
	 */
	public static function ConvertToVector256Single($value){}
	/**
	 * @uses AvxOverride::ConvertToVector256Double_1 <br>public , args: ($value)<br>
	 * @uses AvxOverride::ConvertToVector256Double_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function ConvertToVector256Double (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector256_1[System\Int32]
	 */
	public static function ConvertToVector256Int32WithTruncation($value){}
	/**
	 * @uses AvxOverride::DuplicateEvenIndexed_1 <br>public , args: ($value)<br>
	 * @uses AvxOverride::DuplicateEvenIndexed_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function DuplicateEvenIndexed (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector256_1[System\Single]
	 */
	public static function DuplicateOddIndexed($value){}
	/**
	 * @uses AvxOverride::ExtractVector128_1 <br>public , args: ($value, $index)<br>
	 * @uses AvxOverride::ExtractVector128_2 <br>public , args: ($value, $index)<br>
	 * @uses AvxOverride::ExtractVector128_3 <br>public , args: ($value, $index)<br>
	 * @uses AvxOverride::ExtractVector128_4 <br>public , args: ($value, $index)<br>
	 * @uses AvxOverride::ExtractVector128_5 <br>public , args: ($value, $index)<br>
	 * @uses AvxOverride::ExtractVector128_6 <br>public , args: ($value, $index)<br>
	 * @uses AvxOverride::ExtractVector128_7 <br>public , args: ($value, $index)<br>
	 * @uses AvxOverride::ExtractVector128_8 <br>public , args: ($value, $index)<br>
	 * @uses AvxOverride::ExtractVector128_9 <br>public , args: ($value, $index)<br>
	 * @uses AvxOverride::ExtractVector128_10 <br>public , args: ($value, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ExtractVector128 (\override ...$args){}
	/**
	 * @uses AvxOverride::InsertVector128_1 <br>public , args: ($value, $data, $index)<br>
	 * @uses AvxOverride::InsertVector128_2 <br>public , args: ($value, $data, $index)<br>
	 * @uses AvxOverride::InsertVector128_3 <br>public , args: ($value, $data, $index)<br>
	 * @uses AvxOverride::InsertVector128_4 <br>public , args: ($value, $data, $index)<br>
	 * @uses AvxOverride::InsertVector128_5 <br>public , args: ($value, $data, $index)<br>
	 * @uses AvxOverride::InsertVector128_6 <br>public , args: ($value, $data, $index)<br>
	 * @uses AvxOverride::InsertVector128_7 <br>public , args: ($value, $data, $index)<br>
	 * @uses AvxOverride::InsertVector128_8 <br>public , args: ($value, $data, $index)<br>
	 * @uses AvxOverride::InsertVector128_9 <br>public , args: ($value, $data, $index)<br>
	 * @uses AvxOverride::InsertVector128_10 <br>public , args: ($value, $data, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function InsertVector128 (\override ...$args){}
	/**
	 * @uses AvxOverride::LoadVector256_1 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadVector256_2 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadVector256_3 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadVector256_4 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadVector256_5 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadVector256_6 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadVector256_7 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadVector256_8 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadVector256_9 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadVector256_10 <br>public , args: ($address)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function LoadVector256 (\override ...$args){}
	/**
	 * @uses AvxOverride::LoadAlignedVector256_1 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadAlignedVector256_2 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadAlignedVector256_3 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadAlignedVector256_4 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadAlignedVector256_5 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadAlignedVector256_6 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadAlignedVector256_7 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadAlignedVector256_8 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadAlignedVector256_9 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadAlignedVector256_10 <br>public , args: ($address)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function LoadAlignedVector256 (\override ...$args){}
	/**
	 * @uses AvxOverride::LoadDquVector256_1 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadDquVector256_2 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadDquVector256_3 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadDquVector256_4 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadDquVector256_5 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadDquVector256_6 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadDquVector256_7 <br>public , args: ($address)<br>
	 * @uses AvxOverride::LoadDquVector256_8 <br>public , args: ($address)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function LoadDquVector256 (\override ...$args){}
	/**
	 * @uses AvxOverride::MaskLoad_1 <br>public , args: ($address, $mask)<br>
	 * @uses AvxOverride::MaskLoad_2 <br>public , args: ($address, $mask)<br>
	 * @uses AvxOverride::MaskLoad_3 <br>public , args: ($address, $mask)<br>
	 * @uses AvxOverride::MaskLoad_4 <br>public , args: ($address, $mask)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|\System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function MaskLoad (\override ...$args){}
	/**
	 * @uses AvxOverride::MaskStore_1 <br>public , args: ($address, $mask, $source)<br>
	 * @uses AvxOverride::MaskStore_2 <br>public , args: ($address, $mask, $source)<br>
	 * @uses AvxOverride::MaskStore_3 <br>public , args: ($address, $mask, $source)<br>
	 * @uses AvxOverride::MaskStore_4 <br>public , args: ($address, $mask, $source)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function MaskStore (\override ...$args){}
	/**
	 * @uses AvxOverride::Permute_1 <br>public , args: ($value, $control)<br>
	 * @uses AvxOverride::Permute_2 <br>public , args: ($value, $control)<br>
	 * @uses AvxOverride::Permute_3 <br>public , args: ($value, $control)<br>
	 * @uses AvxOverride::Permute_4 <br>public , args: ($value, $control)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|\System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function Permute (\override ...$args){}
	/**
	 * @uses AvxOverride::Permute2x128_1 <br>public , args: ($left, $right, $control)<br>
	 * @uses AvxOverride::Permute2x128_2 <br>public , args: ($left, $right, $control)<br>
	 * @uses AvxOverride::Permute2x128_3 <br>public , args: ($left, $right, $control)<br>
	 * @uses AvxOverride::Permute2x128_4 <br>public , args: ($left, $right, $control)<br>
	 * @uses AvxOverride::Permute2x128_5 <br>public , args: ($left, $right, $control)<br>
	 * @uses AvxOverride::Permute2x128_6 <br>public , args: ($left, $right, $control)<br>
	 * @uses AvxOverride::Permute2x128_7 <br>public , args: ($left, $right, $control)<br>
	 * @uses AvxOverride::Permute2x128_8 <br>public , args: ($left, $right, $control)<br>
	 * @uses AvxOverride::Permute2x128_9 <br>public , args: ($left, $right, $control)<br>
	 * @uses AvxOverride::Permute2x128_10 <br>public , args: ($left, $right, $control)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function Permute2x128 (\override ...$args){}
	/**
	 * @uses AvxOverride::PermuteVar_1 <br>public , args: ($left, $control)<br>
	 * @uses AvxOverride::PermuteVar_2 <br>public , args: ($left, $control)<br>
	 * @uses AvxOverride::PermuteVar_3 <br>public , args: ($left, $control)<br>
	 * @uses AvxOverride::PermuteVar_4 <br>public , args: ($left, $control)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|\System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function PermuteVar (\override ...$args){}
}