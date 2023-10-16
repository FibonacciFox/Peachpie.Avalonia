<?php
namespace System\Runtime\Intrinsics\X86;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvxMethodsOverride
{
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Add_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Add_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function AddSubtract_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function AddSubtract_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function And_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function And_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function AndNot_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function AndNot_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Blend_1($left, $right, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Blend_2($left, $right, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function BlendVariable_1($left, $right, $mask){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function BlendVariable_2($left, $right, $mask){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function BroadcastScalarToVector256_1($source){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function BroadcastScalarToVector256_2($source){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function BroadcastVector128ToVector256_1($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function BroadcastVector128ToVector256_2($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Ceiling_1($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Ceiling_2($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function Compare_1($left, $right, $mode){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function Compare_2($left, $right, $mode){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Compare_3($left, $right, $mode){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Compare_4($left, $right, $mode){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareEqual_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareEqual_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareGreaterThan_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareGreaterThan_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareGreaterThanOrEqual_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareGreaterThanOrEqual_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareLessThan_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareLessThan_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareLessThanOrEqual_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareLessThanOrEqual_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareNotEqual_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareNotEqual_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareNotGreaterThan_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareNotGreaterThan_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareNotGreaterThanOrEqual_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareNotGreaterThanOrEqual_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareNotLessThan_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareNotLessThan_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareNotLessThanOrEqual_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareNotLessThanOrEqual_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareOrdered_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareOrdered_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function CompareScalar_1($left, $right, $mode){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function CompareScalar_2($left, $right, $mode){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareUnordered_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function CompareUnordered_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function ConvertToVector256Double_1($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function ConvertToVector256Double_2($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Divide_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Divide_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function DuplicateEvenIndexed_1($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function DuplicateEvenIndexed_2($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function ExtractVector128_1($value, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function ExtractVector128_2($value, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function ExtractVector128_3($value, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function ExtractVector128_4($value, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function ExtractVector128_5($value, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function ExtractVector128_6($value, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function ExtractVector128_7($value, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function ExtractVector128_8($value, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function ExtractVector128_9($value, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function ExtractVector128_10($value, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Floor_1($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Floor_2($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function HorizontalAdd_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function HorizontalAdd_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function HorizontalSubtract_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function HorizontalSubtract_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function InsertVector128_1($value, $data, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function InsertVector128_2($value, $data, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function InsertVector128_3($value, $data, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function InsertVector128_4($value, $data, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function InsertVector128_5($value, $data, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function InsertVector128_6($value, $data, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function InsertVector128_7($value, $data, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function InsertVector128_8($value, $data, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function InsertVector128_9($value, $data, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function InsertVector128_10($value, $data, $index){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadVector256_1($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadVector256_2($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadVector256_3($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadVector256_4($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadVector256_5($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadVector256_6($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadVector256_7($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadVector256_8($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadVector256_9($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadVector256_10($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadAlignedVector256_1($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadAlignedVector256_2($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadAlignedVector256_3($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadAlignedVector256_4($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadAlignedVector256_5($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadAlignedVector256_6($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadAlignedVector256_7($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadAlignedVector256_8($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadAlignedVector256_9($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadAlignedVector256_10($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadDquVector256_1($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadDquVector256_2($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadDquVector256_3($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadDquVector256_4($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadDquVector256_5($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadDquVector256_6($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadDquVector256_7($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function LoadDquVector256_8($address){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MaskLoad_1($address, $mask){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function MaskLoad_2($address, $mask){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MaskLoad_3($address, $mask){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function MaskLoad_4($address, $mask){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function MaskStore_1($address, $mask, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function MaskStore_2($address, $mask, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function MaskStore_3($address, $mask, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function MaskStore_4($address, $mask, $source){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Max_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Max_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Min_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Min_2($left, $right){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function MoveMask_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function MoveMask_2($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Multiply_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Multiply_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Or_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Or_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function Permute_1($value, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function Permute_2($value, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Permute_3($value, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Permute_4($value, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Permute2x128_1($left, $right, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Permute2x128_2($left, $right, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Permute2x128_3($left, $right, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Permute2x128_4($left, $right, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Permute2x128_5($left, $right, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Permute2x128_6($left, $right, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Permute2x128_7($left, $right, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Permute2x128_8($left, $right, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Permute2x128_9($left, $right, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Permute2x128_10($left, $right, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function PermuteVar_1($left, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	#[MethodOverride] public static function PermuteVar_2($left, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function PermuteVar_3($left, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function PermuteVar_4($left, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function RoundToNearestInteger_1($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function RoundToNearestInteger_2($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function RoundToNegativeInfinity_1($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function RoundToNegativeInfinity_2($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function RoundToPositiveInfinity_1($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function RoundToPositiveInfinity_2($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function RoundToZero_1($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function RoundToZero_2($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function RoundCurrentDirection_1($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function RoundCurrentDirection_2($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Shuffle_1($value, $right, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Shuffle_2($value, $right, $control){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Sqrt_1($value){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Sqrt_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAligned_1($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAligned_2($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAligned_3($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAligned_4($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAligned_5($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAligned_6($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAligned_7($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAligned_8($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAligned_9($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAligned_10($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAlignedNonTemporal_1($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAlignedNonTemporal_2($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAlignedNonTemporal_3($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAlignedNonTemporal_4($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAlignedNonTemporal_5($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAlignedNonTemporal_6($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAlignedNonTemporal_7($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAlignedNonTemporal_8($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAlignedNonTemporal_9($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StoreAlignedNonTemporal_10($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Store_1($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Store_2($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Store_3($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Store_4($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Store_5($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Store_6($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Store_7($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Store_8($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Store_9($address, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Store_10($address, $source){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Subtract_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Subtract_2($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestC_1($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestC_2($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestC_3($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestC_4($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestC_5($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestC_6($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestC_7($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestC_8($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestC_9($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestC_10($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestC_11($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestC_12($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestNotZAndNotC_1($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestNotZAndNotC_2($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestNotZAndNotC_3($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestNotZAndNotC_4($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestNotZAndNotC_5($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestNotZAndNotC_6($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestNotZAndNotC_7($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestNotZAndNotC_8($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestNotZAndNotC_9($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestNotZAndNotC_10($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestNotZAndNotC_11($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestNotZAndNotC_12($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestZ_1($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestZ_2($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestZ_3($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestZ_4($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestZ_5($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestZ_6($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestZ_7($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestZ_8($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestZ_9($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestZ_10($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestZ_11($left, $right){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TestZ_12($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function UnpackHigh_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function UnpackHigh_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function UnpackLow_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function UnpackLow_2($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Xor_1($left, $right){}
	/**
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	#[MethodOverride] public static function Xor_2($left, $right){}
}
/**
 */
class Avx extends \System\Runtime\Intrinsics\X86\Sse42
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSupported;
	/**
	 * @uses AvxMethodsOverride::Add_1 ($left, $right)
	 * @uses AvxMethodsOverride::Add_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Add(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::AddSubtract_1 ($left, $right)
	 * @uses AvxMethodsOverride::AddSubtract_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AddSubtract(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::And_1 ($left, $right)
	 * @uses AvxMethodsOverride::And_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function And(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::AndNot_1 ($left, $right)
	 * @uses AvxMethodsOverride::AndNot_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AndNot(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::Blend_1 ($left, $right, $control)
	 * @uses AvxMethodsOverride::Blend_2 ($left, $right, $control)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Blend(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::BlendVariable_1 ($left, $right, $mask)
	 * @uses AvxMethodsOverride::BlendVariable_2 ($left, $right, $mask)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function BlendVariable(mixed ...$args){}
	/**
	 * @param \System\Single* $source
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function BroadcastScalarToVector128($source){}
	/**
	 * @uses AvxMethodsOverride::BroadcastScalarToVector256_1 ($source)
	 * @uses AvxMethodsOverride::BroadcastScalarToVector256_2 ($source)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function BroadcastScalarToVector256(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::BroadcastVector128ToVector256_1 ($address)
	 * @uses AvxMethodsOverride::BroadcastVector128ToVector256_2 ($address)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function BroadcastVector128ToVector256(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::Ceiling_1 ($value)
	 * @uses AvxMethodsOverride::Ceiling_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Ceiling(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::Compare_1 ($left, $right, $mode)
	 * @uses AvxMethodsOverride::Compare_2 ($left, $right, $mode)
	 * @uses AvxMethodsOverride::Compare_3 ($left, $right, $mode)
	 * @uses AvxMethodsOverride::Compare_4 ($left, $right, $mode)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Compare(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::CompareEqual_1 ($left, $right)
	 * @uses AvxMethodsOverride::CompareEqual_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareEqual(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::CompareGreaterThan_1 ($left, $right)
	 * @uses AvxMethodsOverride::CompareGreaterThan_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareGreaterThan(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::CompareGreaterThanOrEqual_1 ($left, $right)
	 * @uses AvxMethodsOverride::CompareGreaterThanOrEqual_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareGreaterThanOrEqual(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::CompareLessThan_1 ($left, $right)
	 * @uses AvxMethodsOverride::CompareLessThan_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareLessThan(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::CompareLessThanOrEqual_1 ($left, $right)
	 * @uses AvxMethodsOverride::CompareLessThanOrEqual_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareLessThanOrEqual(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::CompareNotEqual_1 ($left, $right)
	 * @uses AvxMethodsOverride::CompareNotEqual_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareNotEqual(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::CompareNotGreaterThan_1 ($left, $right)
	 * @uses AvxMethodsOverride::CompareNotGreaterThan_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareNotGreaterThan(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::CompareNotGreaterThanOrEqual_1 ($left, $right)
	 * @uses AvxMethodsOverride::CompareNotGreaterThanOrEqual_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareNotGreaterThanOrEqual(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::CompareNotLessThan_1 ($left, $right)
	 * @uses AvxMethodsOverride::CompareNotLessThan_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareNotLessThan(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::CompareNotLessThanOrEqual_1 ($left, $right)
	 * @uses AvxMethodsOverride::CompareNotLessThanOrEqual_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareNotLessThanOrEqual(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::CompareOrdered_1 ($left, $right)
	 * @uses AvxMethodsOverride::CompareOrdered_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareOrdered(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::CompareScalar_1 ($left, $right, $mode)
	 * @uses AvxMethodsOverride::CompareScalar_2 ($left, $right, $mode)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareScalar(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::CompareUnordered_1 ($left, $right)
	 * @uses AvxMethodsOverride::CompareUnordered_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareUnordered(mixed ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function ConvertToVector128Int32($value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function ConvertToVector128Single($value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function ConvertToVector256Int32($value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function ConvertToVector256Single($value){}
	/**
	 * @uses AvxMethodsOverride::ConvertToVector256Double_1 ($value)
	 * @uses AvxMethodsOverride::ConvertToVector256Double_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ConvertToVector256Double(mixed ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value
	 * @return \System\Runtime\Intrinsics\Vector128_1
	 */
	public static function ConvertToVector128Int32WithTruncation($value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function ConvertToVector256Int32WithTruncation($value){}
	/**
	 * @uses AvxMethodsOverride::Divide_1 ($left, $right)
	 * @uses AvxMethodsOverride::Divide_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Divide(mixed ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $left
	 * @param \System\Runtime\Intrinsics\Vector256_1 $right
	 * @param \System\Byte $control
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function DotProduct($left, $right, $control){}
	/**
	 * @uses AvxMethodsOverride::DuplicateEvenIndexed_1 ($value)
	 * @uses AvxMethodsOverride::DuplicateEvenIndexed_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function DuplicateEvenIndexed(mixed ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function DuplicateOddIndexed($value){}
	/**
	 * @uses AvxMethodsOverride::ExtractVector128_1 ($value, $index)
	 * @uses AvxMethodsOverride::ExtractVector128_2 ($value, $index)
	 * @uses AvxMethodsOverride::ExtractVector128_3 ($value, $index)
	 * @uses AvxMethodsOverride::ExtractVector128_4 ($value, $index)
	 * @uses AvxMethodsOverride::ExtractVector128_5 ($value, $index)
	 * @uses AvxMethodsOverride::ExtractVector128_6 ($value, $index)
	 * @uses AvxMethodsOverride::ExtractVector128_7 ($value, $index)
	 * @uses AvxMethodsOverride::ExtractVector128_8 ($value, $index)
	 * @uses AvxMethodsOverride::ExtractVector128_9 ($value, $index)
	 * @uses AvxMethodsOverride::ExtractVector128_10 ($value, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ExtractVector128(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::Floor_1 ($value)
	 * @uses AvxMethodsOverride::Floor_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Floor(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::HorizontalAdd_1 ($left, $right)
	 * @uses AvxMethodsOverride::HorizontalAdd_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function HorizontalAdd(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::HorizontalSubtract_1 ($left, $right)
	 * @uses AvxMethodsOverride::HorizontalSubtract_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function HorizontalSubtract(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::InsertVector128_1 ($value, $data, $index)
	 * @uses AvxMethodsOverride::InsertVector128_2 ($value, $data, $index)
	 * @uses AvxMethodsOverride::InsertVector128_3 ($value, $data, $index)
	 * @uses AvxMethodsOverride::InsertVector128_4 ($value, $data, $index)
	 * @uses AvxMethodsOverride::InsertVector128_5 ($value, $data, $index)
	 * @uses AvxMethodsOverride::InsertVector128_6 ($value, $data, $index)
	 * @uses AvxMethodsOverride::InsertVector128_7 ($value, $data, $index)
	 * @uses AvxMethodsOverride::InsertVector128_8 ($value, $data, $index)
	 * @uses AvxMethodsOverride::InsertVector128_9 ($value, $data, $index)
	 * @uses AvxMethodsOverride::InsertVector128_10 ($value, $data, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function InsertVector128(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::LoadVector256_1 ($address)
	 * @uses AvxMethodsOverride::LoadVector256_2 ($address)
	 * @uses AvxMethodsOverride::LoadVector256_3 ($address)
	 * @uses AvxMethodsOverride::LoadVector256_4 ($address)
	 * @uses AvxMethodsOverride::LoadVector256_5 ($address)
	 * @uses AvxMethodsOverride::LoadVector256_6 ($address)
	 * @uses AvxMethodsOverride::LoadVector256_7 ($address)
	 * @uses AvxMethodsOverride::LoadVector256_8 ($address)
	 * @uses AvxMethodsOverride::LoadVector256_9 ($address)
	 * @uses AvxMethodsOverride::LoadVector256_10 ($address)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LoadVector256(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::LoadAlignedVector256_1 ($address)
	 * @uses AvxMethodsOverride::LoadAlignedVector256_2 ($address)
	 * @uses AvxMethodsOverride::LoadAlignedVector256_3 ($address)
	 * @uses AvxMethodsOverride::LoadAlignedVector256_4 ($address)
	 * @uses AvxMethodsOverride::LoadAlignedVector256_5 ($address)
	 * @uses AvxMethodsOverride::LoadAlignedVector256_6 ($address)
	 * @uses AvxMethodsOverride::LoadAlignedVector256_7 ($address)
	 * @uses AvxMethodsOverride::LoadAlignedVector256_8 ($address)
	 * @uses AvxMethodsOverride::LoadAlignedVector256_9 ($address)
	 * @uses AvxMethodsOverride::LoadAlignedVector256_10 ($address)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LoadAlignedVector256(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::LoadDquVector256_1 ($address)
	 * @uses AvxMethodsOverride::LoadDquVector256_2 ($address)
	 * @uses AvxMethodsOverride::LoadDquVector256_3 ($address)
	 * @uses AvxMethodsOverride::LoadDquVector256_4 ($address)
	 * @uses AvxMethodsOverride::LoadDquVector256_5 ($address)
	 * @uses AvxMethodsOverride::LoadDquVector256_6 ($address)
	 * @uses AvxMethodsOverride::LoadDquVector256_7 ($address)
	 * @uses AvxMethodsOverride::LoadDquVector256_8 ($address)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LoadDquVector256(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::MaskLoad_1 ($address, $mask)
	 * @uses AvxMethodsOverride::MaskLoad_2 ($address, $mask)
	 * @uses AvxMethodsOverride::MaskLoad_3 ($address, $mask)
	 * @uses AvxMethodsOverride::MaskLoad_4 ($address, $mask)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MaskLoad(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::MaskStore_1 ($address, $mask, $source)
	 * @uses AvxMethodsOverride::MaskStore_2 ($address, $mask, $source)
	 * @uses AvxMethodsOverride::MaskStore_3 ($address, $mask, $source)
	 * @uses AvxMethodsOverride::MaskStore_4 ($address, $mask, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MaskStore(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::Max_1 ($left, $right)
	 * @uses AvxMethodsOverride::Max_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Max(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::Min_1 ($left, $right)
	 * @uses AvxMethodsOverride::Min_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Min(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::MoveMask_1 ($value)
	 * @uses AvxMethodsOverride::MoveMask_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function MoveMask(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::Multiply_1 ($left, $right)
	 * @uses AvxMethodsOverride::Multiply_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Multiply(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::Or_1 ($left, $right)
	 * @uses AvxMethodsOverride::Or_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Or(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::Permute_1 ($value, $control)
	 * @uses AvxMethodsOverride::Permute_2 ($value, $control)
	 * @uses AvxMethodsOverride::Permute_3 ($value, $control)
	 * @uses AvxMethodsOverride::Permute_4 ($value, $control)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Permute(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::Permute2x128_1 ($left, $right, $control)
	 * @uses AvxMethodsOverride::Permute2x128_2 ($left, $right, $control)
	 * @uses AvxMethodsOverride::Permute2x128_3 ($left, $right, $control)
	 * @uses AvxMethodsOverride::Permute2x128_4 ($left, $right, $control)
	 * @uses AvxMethodsOverride::Permute2x128_5 ($left, $right, $control)
	 * @uses AvxMethodsOverride::Permute2x128_6 ($left, $right, $control)
	 * @uses AvxMethodsOverride::Permute2x128_7 ($left, $right, $control)
	 * @uses AvxMethodsOverride::Permute2x128_8 ($left, $right, $control)
	 * @uses AvxMethodsOverride::Permute2x128_9 ($left, $right, $control)
	 * @uses AvxMethodsOverride::Permute2x128_10 ($left, $right, $control)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Permute2x128(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::PermuteVar_1 ($left, $control)
	 * @uses AvxMethodsOverride::PermuteVar_2 ($left, $control)
	 * @uses AvxMethodsOverride::PermuteVar_3 ($left, $control)
	 * @uses AvxMethodsOverride::PermuteVar_4 ($left, $control)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function PermuteVar(mixed ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function Reciprocal($value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector256_1 $value
	 * @return \System\Runtime\Intrinsics\Vector256_1
	 */
	public static function ReciprocalSqrt($value){}
	/**
	 * @uses AvxMethodsOverride::RoundToNearestInteger_1 ($value)
	 * @uses AvxMethodsOverride::RoundToNearestInteger_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RoundToNearestInteger(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::RoundToNegativeInfinity_1 ($value)
	 * @uses AvxMethodsOverride::RoundToNegativeInfinity_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RoundToNegativeInfinity(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::RoundToPositiveInfinity_1 ($value)
	 * @uses AvxMethodsOverride::RoundToPositiveInfinity_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RoundToPositiveInfinity(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::RoundToZero_1 ($value)
	 * @uses AvxMethodsOverride::RoundToZero_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RoundToZero(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::RoundCurrentDirection_1 ($value)
	 * @uses AvxMethodsOverride::RoundCurrentDirection_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function RoundCurrentDirection(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::Shuffle_1 ($value, $right, $control)
	 * @uses AvxMethodsOverride::Shuffle_2 ($value, $right, $control)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Shuffle(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::Sqrt_1 ($value)
	 * @uses AvxMethodsOverride::Sqrt_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Sqrt(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::StoreAligned_1 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAligned_2 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAligned_3 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAligned_4 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAligned_5 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAligned_6 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAligned_7 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAligned_8 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAligned_9 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAligned_10 ($address, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function StoreAligned(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::StoreAlignedNonTemporal_1 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAlignedNonTemporal_2 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAlignedNonTemporal_3 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAlignedNonTemporal_4 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAlignedNonTemporal_5 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAlignedNonTemporal_6 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAlignedNonTemporal_7 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAlignedNonTemporal_8 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAlignedNonTemporal_9 ($address, $source)
	 * @uses AvxMethodsOverride::StoreAlignedNonTemporal_10 ($address, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function StoreAlignedNonTemporal(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::Store_1 ($address, $source)
	 * @uses AvxMethodsOverride::Store_2 ($address, $source)
	 * @uses AvxMethodsOverride::Store_3 ($address, $source)
	 * @uses AvxMethodsOverride::Store_4 ($address, $source)
	 * @uses AvxMethodsOverride::Store_5 ($address, $source)
	 * @uses AvxMethodsOverride::Store_6 ($address, $source)
	 * @uses AvxMethodsOverride::Store_7 ($address, $source)
	 * @uses AvxMethodsOverride::Store_8 ($address, $source)
	 * @uses AvxMethodsOverride::Store_9 ($address, $source)
	 * @uses AvxMethodsOverride::Store_10 ($address, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Store(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::Subtract_1 ($left, $right)
	 * @uses AvxMethodsOverride::Subtract_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Subtract(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::TestC_1 ($left, $right)
	 * @uses AvxMethodsOverride::TestC_2 ($left, $right)
	 * @uses AvxMethodsOverride::TestC_3 ($left, $right)
	 * @uses AvxMethodsOverride::TestC_4 ($left, $right)
	 * @uses AvxMethodsOverride::TestC_5 ($left, $right)
	 * @uses AvxMethodsOverride::TestC_6 ($left, $right)
	 * @uses AvxMethodsOverride::TestC_7 ($left, $right)
	 * @uses AvxMethodsOverride::TestC_8 ($left, $right)
	 * @uses AvxMethodsOverride::TestC_9 ($left, $right)
	 * @uses AvxMethodsOverride::TestC_10 ($left, $right)
	 * @uses AvxMethodsOverride::TestC_11 ($left, $right)
	 * @uses AvxMethodsOverride::TestC_12 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TestC(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::TestNotZAndNotC_1 ($left, $right)
	 * @uses AvxMethodsOverride::TestNotZAndNotC_2 ($left, $right)
	 * @uses AvxMethodsOverride::TestNotZAndNotC_3 ($left, $right)
	 * @uses AvxMethodsOverride::TestNotZAndNotC_4 ($left, $right)
	 * @uses AvxMethodsOverride::TestNotZAndNotC_5 ($left, $right)
	 * @uses AvxMethodsOverride::TestNotZAndNotC_6 ($left, $right)
	 * @uses AvxMethodsOverride::TestNotZAndNotC_7 ($left, $right)
	 * @uses AvxMethodsOverride::TestNotZAndNotC_8 ($left, $right)
	 * @uses AvxMethodsOverride::TestNotZAndNotC_9 ($left, $right)
	 * @uses AvxMethodsOverride::TestNotZAndNotC_10 ($left, $right)
	 * @uses AvxMethodsOverride::TestNotZAndNotC_11 ($left, $right)
	 * @uses AvxMethodsOverride::TestNotZAndNotC_12 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TestNotZAndNotC(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::TestZ_1 ($left, $right)
	 * @uses AvxMethodsOverride::TestZ_2 ($left, $right)
	 * @uses AvxMethodsOverride::TestZ_3 ($left, $right)
	 * @uses AvxMethodsOverride::TestZ_4 ($left, $right)
	 * @uses AvxMethodsOverride::TestZ_5 ($left, $right)
	 * @uses AvxMethodsOverride::TestZ_6 ($left, $right)
	 * @uses AvxMethodsOverride::TestZ_7 ($left, $right)
	 * @uses AvxMethodsOverride::TestZ_8 ($left, $right)
	 * @uses AvxMethodsOverride::TestZ_9 ($left, $right)
	 * @uses AvxMethodsOverride::TestZ_10 ($left, $right)
	 * @uses AvxMethodsOverride::TestZ_11 ($left, $right)
	 * @uses AvxMethodsOverride::TestZ_12 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TestZ(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::UnpackHigh_1 ($left, $right)
	 * @uses AvxMethodsOverride::UnpackHigh_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UnpackHigh(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::UnpackLow_1 ($left, $right)
	 * @uses AvxMethodsOverride::UnpackLow_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UnpackLow(mixed ...$args){}
	/**
	 * @uses AvxMethodsOverride::Xor_1 ($left, $right)
	 * @uses AvxMethodsOverride::Xor_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Xor(mixed ...$args){}
}
