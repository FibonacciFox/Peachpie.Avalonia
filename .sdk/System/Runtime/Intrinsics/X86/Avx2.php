<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Avx2Override {
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Int16_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Int16_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\SByte* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Int16_3 ($address){}
	/**
	 * @deprecated
	 * @param \System\Byte* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Int16_4 ($address){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Int64_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Int64_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Int64_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt16]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Int64_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Int64_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Int64_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\SByte* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Int64_7 ($address){}
	/**
	 * @deprecated
	 * @param \System\Byte* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Int64_8 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int16* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Int64_9 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt16* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Int64_10 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int32* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Int64_11 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt32* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ConvertToVector256Int64_12 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int32* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherVector128_1 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\UInt32* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherVector128_2 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\Int64* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherVector128_3 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\UInt64* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherVector128_4 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\Single* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherVector128_5 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\Double* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherVector128_6 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\Int32* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherVector128_7 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\UInt32* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherVector128_8 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\Int64* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherVector128_9 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\UInt64* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherVector128_10 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\Single* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherVector128_11 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\Double* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherVector128_12 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\Int32* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherVector128_13 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\UInt32* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherVector128_14 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\Single* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherVector128_15 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\Int32* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherVector256_1 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\UInt32* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherVector256_2 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\Int64* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherVector256_3 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\UInt64* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherVector256_4 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\Single* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherVector256_5 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\Double* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherVector256_6 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\Int64* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherVector256_7 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\UInt64* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherVector256_8 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\Double* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherVector256_9 ($baseAddress, $index, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Int32]
	 * @param \System\Int32* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Int32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherMaskVector128_1 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\UInt32]
	 * @param \System\UInt32* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\UInt32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherMaskVector128_2 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Int64]
	 * @param \System\Int64* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Int64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherMaskVector128_3 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\UInt64]
	 * @param \System\UInt64* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\UInt64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherMaskVector128_4 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Single]
	 * @param \System\Single* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Single]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherMaskVector128_5 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Double]
	 * @param \System\Double* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Double]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherMaskVector128_6 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Int32]
	 * @param \System\Int32* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Int32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherMaskVector128_7 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\UInt32]
	 * @param \System\UInt32* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\UInt32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherMaskVector128_8 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Int64]
	 * @param \System\Int64* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Int64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherMaskVector128_9 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\UInt64]
	 * @param \System\UInt64* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\UInt64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherMaskVector128_10 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Single]
	 * @param \System\Single* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Single]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherMaskVector128_11 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Double]
	 * @param \System\Double* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Double]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherMaskVector128_12 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Int32]
	 * @param \System\Int32* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Int32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherMaskVector128_13 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\UInt32]
	 * @param \System\UInt32* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\UInt32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherMaskVector128_14 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $source [generic: System\Single]
	 * @param \System\Single* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $mask [generic: System\Single]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function GatherMaskVector128_15 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $source [generic: System\Int32]
	 * @param \System\Int32* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $mask [generic: System\Int32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherMaskVector256_1 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $source [generic: System\UInt32]
	 * @param \System\UInt32* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $mask [generic: System\UInt32]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherMaskVector256_2 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $source [generic: System\Int64]
	 * @param \System\Int64* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $mask [generic: System\Int64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherMaskVector256_3 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $source [generic: System\UInt64]
	 * @param \System\UInt64* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $mask [generic: System\UInt64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherMaskVector256_4 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $source [generic: System\Single]
	 * @param \System\Single* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $mask [generic: System\Single]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherMaskVector256_5 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $source [generic: System\Double]
	 * @param \System\Double* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector128_1 $index [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $mask [generic: System\Double]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherMaskVector256_6 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $source [generic: System\Int64]
	 * @param \System\Int64* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $mask [generic: System\Int64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherMaskVector256_7 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $source [generic: System\UInt64]
	 * @param \System\UInt64* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $mask [generic: System\UInt64]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherMaskVector256_8 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $source [generic: System\Double]
	 * @param \System\Double* $baseAddress
	 * @param \System\Runtime\Intrinsics\Vector256_1 $index [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $mask [generic: System\Double]
	 * @param \System\Byte $scale
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function GatherMaskVector256_9 ($source, $baseAddress, $index, $mask, $scale){}
	/**
	 * @deprecated
	 * @param \System\SByte* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256NonTemporal_1 ($address){}
	/**
	 * @deprecated
	 * @param \System\Byte* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256NonTemporal_2 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int16* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256NonTemporal_3 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt16* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256NonTemporal_4 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int32* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256NonTemporal_5 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt32* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256NonTemporal_6 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int64* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256NonTemporal_7 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt64* $address
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function LoadAlignedVector256NonTemporal_8 ($address){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Int64]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Permute4x64_1 ($value, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\UInt64]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Permute4x64_2 ($value, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Double]
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function Permute4x64_3 ($value, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $control [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function PermuteVar8x32_1 ($left, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $control [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function PermuteVar8x32_2 ($left, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $control [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function PermuteVar8x32_3 ($left, $control){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $count [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ShiftLeftLogicalVariable_1 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $count [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ShiftLeftLogicalVariable_2 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $count [generic: System\UInt64]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ShiftLeftLogicalVariable_3 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $count [generic: System\UInt64]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ShiftLeftLogicalVariable_4 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogicalVariable_5 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogicalVariable_6 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\UInt64]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogicalVariable_7 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\UInt64]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftLeftLogicalVariable_8 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $count [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ShiftRightArithmeticVariable_1 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightArithmeticVariable_2 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $count [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ShiftRightLogicalVariable_1 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $count [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ShiftRightLogicalVariable_2 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $count [generic: System\UInt64]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ShiftRightLogicalVariable_3 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector256_1 $count [generic: System\UInt64]
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride]public static function ShiftRightLogicalVariable_4 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogicalVariable_5 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogicalVariable_6 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\UInt64]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogicalVariable_7 ($value, $count){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector128_1 $value [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector128_1 $count [generic: System\UInt64]
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride]public static function ShiftRightLogicalVariable_8 ($value, $count){}
}
class Avx2 extends \System\Runtime\Intrinsics\X86\Avx
{
	use Avx2Override;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSupported;
	/**
	 * @uses Avx2Override::ConvertToVector256Int16_1 <br>public , args: ($value)<br>
	 * @uses Avx2Override::ConvertToVector256Int16_2 <br>public , args: ($value)<br>
	 * @uses Avx2Override::ConvertToVector256Int16_3 <br>public , args: ($address)<br>
	 * @uses Avx2Override::ConvertToVector256Int16_4 <br>public , args: ($address)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function ConvertToVector256Int16 (\override ...$args){}
	/**
	 * @uses Avx2Override::ConvertToVector256Int64_1 <br>public , args: ($value)<br>
	 * @uses Avx2Override::ConvertToVector256Int64_2 <br>public , args: ($value)<br>
	 * @uses Avx2Override::ConvertToVector256Int64_3 <br>public , args: ($value)<br>
	 * @uses Avx2Override::ConvertToVector256Int64_4 <br>public , args: ($value)<br>
	 * @uses Avx2Override::ConvertToVector256Int64_5 <br>public , args: ($value)<br>
	 * @uses Avx2Override::ConvertToVector256Int64_6 <br>public , args: ($value)<br>
	 * @uses Avx2Override::ConvertToVector256Int64_7 <br>public , args: ($address)<br>
	 * @uses Avx2Override::ConvertToVector256Int64_8 <br>public , args: ($address)<br>
	 * @uses Avx2Override::ConvertToVector256Int64_9 <br>public , args: ($address)<br>
	 * @uses Avx2Override::ConvertToVector256Int64_10 <br>public , args: ($address)<br>
	 * @uses Avx2Override::ConvertToVector256Int64_11 <br>public , args: ($address)<br>
	 * @uses Avx2Override::ConvertToVector256Int64_12 <br>public , args: ($address)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function ConvertToVector256Int64 (\override ...$args){}
	/**
	 * @uses Avx2Override::GatherVector128_1 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector128_2 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector128_3 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector128_4 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector128_5 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector128_6 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector128_7 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector128_8 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector128_9 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector128_10 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector128_11 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector128_12 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector128_13 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector128_14 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector128_15 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function GatherVector128 (\override ...$args){}
	/**
	 * @uses Avx2Override::GatherVector256_1 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector256_2 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector256_3 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector256_4 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector256_5 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector256_6 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector256_7 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector256_8 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @uses Avx2Override::GatherVector256_9 <br>public , args: ($baseAddress, $index, $scale)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function GatherVector256 (\override ...$args){}
	/**
	 * @uses Avx2Override::GatherMaskVector128_1 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector128_2 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector128_3 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector128_4 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector128_5 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector128_6 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector128_7 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector128_8 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector128_9 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector128_10 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector128_11 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector128_12 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector128_13 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector128_14 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector128_15 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function GatherMaskVector128 (\override ...$args){}
	/**
	 * @uses Avx2Override::GatherMaskVector256_1 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector256_2 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector256_3 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector256_4 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector256_5 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector256_6 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector256_7 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector256_8 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @uses Avx2Override::GatherMaskVector256_9 <br>public , args: ($source, $baseAddress, $index, $mask, $scale)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function GatherMaskVector256 (\override ...$args){}
	/**
	 * @uses Avx2Override::LoadAlignedVector256NonTemporal_1 <br>public , args: ($address)<br>
	 * @uses Avx2Override::LoadAlignedVector256NonTemporal_2 <br>public , args: ($address)<br>
	 * @uses Avx2Override::LoadAlignedVector256NonTemporal_3 <br>public , args: ($address)<br>
	 * @uses Avx2Override::LoadAlignedVector256NonTemporal_4 <br>public , args: ($address)<br>
	 * @uses Avx2Override::LoadAlignedVector256NonTemporal_5 <br>public , args: ($address)<br>
	 * @uses Avx2Override::LoadAlignedVector256NonTemporal_6 <br>public , args: ($address)<br>
	 * @uses Avx2Override::LoadAlignedVector256NonTemporal_7 <br>public , args: ($address)<br>
	 * @uses Avx2Override::LoadAlignedVector256NonTemporal_8 <br>public , args: ($address)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function LoadAlignedVector256NonTemporal (\override ...$args){}
	/**
	 * @uses Avx2Override::Permute4x64_1 <br>public , args: ($value, $control)<br>
	 * @uses Avx2Override::Permute4x64_2 <br>public , args: ($value, $control)<br>
	 * @uses Avx2Override::Permute4x64_3 <br>public , args: ($value, $control)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function Permute4x64 (\override ...$args){}
	/**
	 * @uses Avx2Override::PermuteVar8x32_1 <br>public , args: ($left, $control)<br>
	 * @uses Avx2Override::PermuteVar8x32_2 <br>public , args: ($left, $control)<br>
	 * @uses Avx2Override::PermuteVar8x32_3 <br>public , args: ($left, $control)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|mixed|\override
	 */
	#[MethodOverridePublic]function PermuteVar8x32 (\override ...$args){}
	/**
	 * @uses Avx2Override::ShiftLeftLogicalVariable_1 <br>public , args: ($value, $count)<br>
	 * @uses Avx2Override::ShiftLeftLogicalVariable_2 <br>public , args: ($value, $count)<br>
	 * @uses Avx2Override::ShiftLeftLogicalVariable_3 <br>public , args: ($value, $count)<br>
	 * @uses Avx2Override::ShiftLeftLogicalVariable_4 <br>public , args: ($value, $count)<br>
	 * @uses Avx2Override::ShiftLeftLogicalVariable_5 <br>public , args: ($value, $count)<br>
	 * @uses Avx2Override::ShiftLeftLogicalVariable_6 <br>public , args: ($value, $count)<br>
	 * @uses Avx2Override::ShiftLeftLogicalVariable_7 <br>public , args: ($value, $count)<br>
	 * @uses Avx2Override::ShiftLeftLogicalVariable_8 <br>public , args: ($value, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|\System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ShiftLeftLogicalVariable (\override ...$args){}
	/**
	 * @uses Avx2Override::ShiftRightArithmeticVariable_1 <br>public , args: ($value, $count)<br>
	 * @uses Avx2Override::ShiftRightArithmeticVariable_2 <br>public , args: ($value, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|\System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ShiftRightArithmeticVariable (\override ...$args){}
	/**
	 * @uses Avx2Override::ShiftRightLogicalVariable_1 <br>public , args: ($value, $count)<br>
	 * @uses Avx2Override::ShiftRightLogicalVariable_2 <br>public , args: ($value, $count)<br>
	 * @uses Avx2Override::ShiftRightLogicalVariable_3 <br>public , args: ($value, $count)<br>
	 * @uses Avx2Override::ShiftRightLogicalVariable_4 <br>public , args: ($value, $count)<br>
	 * @uses Avx2Override::ShiftRightLogicalVariable_5 <br>public , args: ($value, $count)<br>
	 * @uses Avx2Override::ShiftRightLogicalVariable_6 <br>public , args: ($value, $count)<br>
	 * @uses Avx2Override::ShiftRightLogicalVariable_7 <br>public , args: ($value, $count)<br>
	 * @uses Avx2Override::ShiftRightLogicalVariable_8 <br>public , args: ($value, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector256_1|\System\Runtime\Intrinsics\Vector128_1|mixed|\override
	 */
	#[MethodOverridePublic]function ShiftRightLogicalVariable (\override ...$args){}
}