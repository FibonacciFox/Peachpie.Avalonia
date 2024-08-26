<?php
namespace System\Runtime\Intrinsics;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait Vector64Override {
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Ceiling_1 ($vector){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Ceiling_2 ($vector){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Int64]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ConvertToDouble_1 ($vector){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\UInt64]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ConvertToDouble_2 ($vector){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ConvertToSingle_1 ($vector){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ConvertToSingle_2 ($vector){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @param \T $destination
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function CopyTo_1 ($vector, $destination){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @param \T $destination
	 * @param \System\Int32|int $startIndex
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function CopyTo_2 ($vector, $destination, $startIndex){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @param \System\Span_1 $destination [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function CopyTo_3 ($vector, $destination){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Byte $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int16 $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\SByte $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_9 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_10 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt16 $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_11 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_12 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_13 ($value){}
	/**
	 * @deprecated
	 * @param \T $values
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_14 ($values){}
	/**
	 * @deprecated
	 * @param \T $values
	 * @param \System\Int32|int $index
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_15 ($values, $index){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $values [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_16 ($values){}
	/**
	 * @deprecated
	 * @param \System\Byte $e0
	 * @param \System\Byte $e1
	 * @param \System\Byte $e2
	 * @param \System\Byte $e3
	 * @param \System\Byte $e4
	 * @param \System\Byte $e5
	 * @param \System\Byte $e6
	 * @param \System\Byte $e7
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_17 ($e0, $e1, $e2, $e3, $e4, $e5, $e6, $e7){}
	/**
	 * @deprecated
	 * @param \System\Int16 $e0
	 * @param \System\Int16 $e1
	 * @param \System\Int16 $e2
	 * @param \System\Int16 $e3
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_18 ($e0, $e1, $e2, $e3){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $e0
	 * @param \System\Int32|int $e1
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_19 ($e0, $e1){}
	/**
	 * @deprecated
	 * @param \System\SByte $e0
	 * @param \System\SByte $e1
	 * @param \System\SByte $e2
	 * @param \System\SByte $e3
	 * @param \System\SByte $e4
	 * @param \System\SByte $e5
	 * @param \System\SByte $e6
	 * @param \System\SByte $e7
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_20 ($e0, $e1, $e2, $e3, $e4, $e5, $e6, $e7){}
	/**
	 * @deprecated
	 * @param \System\Single $e0
	 * @param \System\Single $e1
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_21 ($e0, $e1){}
	/**
	 * @deprecated
	 * @param \System\UInt16 $e0
	 * @param \System\UInt16 $e1
	 * @param \System\UInt16 $e2
	 * @param \System\UInt16 $e3
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_22 ($e0, $e1, $e2, $e3){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $e0
	 * @param \System\UInt32 $e1
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Create_23 ($e0, $e1){}
	/**
	 * @deprecated
	 * @param \System\Byte $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalar_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalar_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int16 $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalar_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalar_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalar_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalar_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalar_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\SByte $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalar_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalar_9 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt16 $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalar_10 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalar_11 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalar_12 ($value){}
	/**
	 * @deprecated
	 * @param \System\Byte $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalarUnsafe_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int16 $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalarUnsafe_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalarUnsafe_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalarUnsafe_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalarUnsafe_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\SByte $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalarUnsafe_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\Single $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalarUnsafe_7 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt16 $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalarUnsafe_8 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function CreateScalarUnsafe_9 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Floor_1 ($vector){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Floor_2 ($vector){}
	/**
	 * @deprecated
	 * @param \T& $source
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function LoadUnsafe_1 ($source){}
	/**
	 * @deprecated
	 * @param \T& $source
	 * @param \System\UIntPtr $elementOffset
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function LoadUnsafe_2 ($source, $elementOffset){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Multiply_1 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \T|object $right
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Multiply_2 ($left, $right){}
	/**
	 * @deprecated
	 * @param \T|object $left
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Multiply_3 ($left, $right){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $lower [generic: System\Double]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $upper [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Narrow_1 ($lower, $upper){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $lower [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $upper [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Narrow_2 ($lower, $upper){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $lower [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $upper [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Narrow_3 ($lower, $upper){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $lower [generic: System\Int64]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $upper [generic: System\Int64]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Narrow_4 ($lower, $upper){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $lower [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $upper [generic: System\UInt16]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Narrow_5 ($lower, $upper){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $lower [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $upper [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Narrow_6 ($lower, $upper){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $lower [generic: System\UInt64]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $upper [generic: System\UInt64]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Narrow_7 ($lower, $upper){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Byte]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftLeft_1 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Int16]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftLeft_2 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Int32]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftLeft_3 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Int64]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftLeft_4 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\IntPtr]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftLeft_5 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\UIntPtr]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftLeft_6 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\SByte]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftLeft_7 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\UInt16]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftLeft_8 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\UInt32]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftLeft_9 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\UInt64]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftLeft_10 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Int16]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftRightArithmetic_1 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Int32]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftRightArithmetic_2 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Int64]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftRightArithmetic_3 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\IntPtr]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftRightArithmetic_4 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\SByte]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftRightArithmetic_5 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Byte]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_1 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Int16]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_2 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Int32]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_3 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Int64]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_4 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\IntPtr]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_5 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\UIntPtr]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_6 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\SByte]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_7 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\UInt16]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_8 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\UInt32]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_9 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\UInt64]
	 * @param \System\Int32|int $shiftCount
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function ShiftRightLogical_10 ($vector, $shiftCount){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Byte]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $indices [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Shuffle_1 ($vector, $indices){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\SByte]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $indices [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Shuffle_2 ($vector, $indices){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Int16]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $indices [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Shuffle_3 ($vector, $indices){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\UInt16]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $indices [generic: System\UInt16]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Shuffle_4 ($vector, $indices){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Int32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $indices [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Shuffle_5 ($vector, $indices){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\UInt32]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $indices [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Shuffle_6 ($vector, $indices){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Single]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $indices [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]public static function Shuffle_7 ($vector, $indices){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: T]
	 * @param \T& $destination
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function StoreUnsafe_1 ($source, $destination){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: T]
	 * @param \T& $destination
	 * @param \System\UIntPtr $elementOffset
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function StoreUnsafe_2 ($source, $destination, $elementOffset){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\Byte]
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function Widen_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\Int16]
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function Widen_2 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\Int32]
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function Widen_3 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\SByte]
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function Widen_4 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\Single]
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function Widen_5 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\UInt16]
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function Widen_6 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\UInt32]
	 * @return \System\ValueTuple_2
	 */
	#[MethodOverride]public static function Widen_7 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]protected static function WidenLower_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]protected static function WidenLower_2 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]protected static function WidenLower_3 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]protected static function WidenLower_4 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]protected static function WidenLower_5 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\UInt16]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]protected static function WidenLower_6 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]protected static function WidenLower_7 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\Byte]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]protected static function WidenUpper_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\Int16]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]protected static function WidenUpper_2 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\Int32]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]protected static function WidenUpper_3 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\SByte]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]protected static function WidenUpper_4 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]protected static function WidenUpper_5 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\UInt16]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]protected static function WidenUpper_6 ($source){}
	/**
	 * @deprecated
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: System\UInt32]
	 * @return \System\Runtime\Intrinsics\Vector64_1
	 */
	#[MethodOverride]protected static function WidenUpper_7 ($source){}
}
class Vector64 extends \System\Object
{
	use Vector64Override;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsHardwareAccelerated;
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function Abs($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function Add($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function AndNot($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: TFrom]
	 * @return \System\Runtime\Intrinsics\Vector64_1[TTo]
	 */
	public static function As($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\Byte]
	 */
	public static function AsByte($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\Double]
	 */
	public static function AsDouble($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\Int16]
	 */
	public static function AsInt16($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\Int32]
	 */
	public static function AsInt32($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\Int64]
	 */
	public static function AsInt64($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\IntPtr]
	 */
	public static function AsNInt($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\UIntPtr]
	 */
	public static function AsNUInt($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\SByte]
	 */
	public static function AsSByte($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\Single]
	 */
	public static function AsSingle($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\UInt16]
	 */
	public static function AsUInt16($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\UInt32]
	 */
	public static function AsUInt32($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\UInt64]
	 */
	public static function AsUInt64($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function BitwiseAnd($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function BitwiseOr($left, $right){}
	/**
	 * @uses Vector64Override::Ceiling_1 <br>public , args: ($vector)<br>
	 * @uses Vector64Override::Ceiling_2 <br>public , args: ($vector)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|mixed|\override
	 */
	#[MethodOverridePublic]function Ceiling (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $condition [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function ConditionalSelect($condition, $left, $right){}
	/**
	 * @uses Vector64Override::ConvertToDouble_1 <br>public , args: ($vector)<br>
	 * @uses Vector64Override::ConvertToDouble_2 <br>public , args: ($vector)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|mixed|\override
	 */
	#[MethodOverridePublic]function ConvertToDouble (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\Int32]
	 */
	public static function ConvertToInt32($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\Int64]
	 */
	public static function ConvertToInt64($vector){}
	/**
	 * @uses Vector64Override::ConvertToSingle_1 <br>public , args: ($vector)<br>
	 * @uses Vector64Override::ConvertToSingle_2 <br>public , args: ($vector)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|mixed|\override
	 */
	#[MethodOverridePublic]function ConvertToSingle (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Single]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\UInt32]
	 */
	public static function ConvertToUInt32($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: System\Double]
	 * @return \System\Runtime\Intrinsics\Vector64_1[System\UInt64]
	 */
	public static function ConvertToUInt64($vector){}
	/**
	 * @uses Vector64Override::CopyTo_1 <br>public , args: ($vector, $destination)<br>
	 * @uses Vector64Override::CopyTo_2 <br>public , args: ($vector, $destination, $startIndex)<br>
	 * @uses Vector64Override::CopyTo_3 <br>public , args: ($vector, $destination)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @uses Vector64Override::Create_1 <br>public , args: ($value)<br>
	 * @uses Vector64Override::Create_2 <br>public , args: ($value)<br>
	 * @uses Vector64Override::Create_3 <br>public , args: ($value)<br>
	 * @uses Vector64Override::Create_4 <br>public , args: ($value)<br>
	 * @uses Vector64Override::Create_5 <br>public , args: ($value)<br>
	 * @uses Vector64Override::Create_6 <br>public , args: ($value)<br>
	 * @uses Vector64Override::Create_7 <br>public , args: ($value)<br>
	 * @uses Vector64Override::Create_8 <br>public , args: ($value)<br>
	 * @uses Vector64Override::Create_9 <br>public , args: ($value)<br>
	 * @uses Vector64Override::Create_10 <br>public , args: ($value)<br>
	 * @uses Vector64Override::Create_11 <br>public , args: ($value)<br>
	 * @uses Vector64Override::Create_12 <br>public , args: ($value)<br>
	 * @uses Vector64Override::Create_13 <br>public , args: ($value)<br>
	 * @uses Vector64Override::Create_14 <br>public , args: ($values)<br>
	 * @uses Vector64Override::Create_15 <br>public , args: ($values, $index)<br>
	 * @uses Vector64Override::Create_16 <br>public , args: ($values)<br>
	 * @uses Vector64Override::Create_17 <br>public , args: ($e0, $e1, $e2, $e3, $e4, $e5, $e6, $e7)<br>
	 * @uses Vector64Override::Create_18 <br>public , args: ($e0, $e1, $e2, $e3)<br>
	 * @uses Vector64Override::Create_19 <br>public , args: ($e0, $e1)<br>
	 * @uses Vector64Override::Create_20 <br>public , args: ($e0, $e1, $e2, $e3, $e4, $e5, $e6, $e7)<br>
	 * @uses Vector64Override::Create_21 <br>public , args: ($e0, $e1)<br>
	 * @uses Vector64Override::Create_22 <br>public , args: ($e0, $e1, $e2, $e3)<br>
	 * @uses Vector64Override::Create_23 <br>public , args: ($e0, $e1)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|mixed|\override
	 */
	#[MethodOverridePublic]function Create (\override ...$args){}
	/**
	 * @uses Vector64Override::CreateScalar_1 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalar_2 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalar_3 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalar_4 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalar_5 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalar_6 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalar_7 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalar_8 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalar_9 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalar_10 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalar_11 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalar_12 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|mixed|\override
	 */
	#[MethodOverridePublic]function CreateScalar (\override ...$args){}
	/**
	 * @uses Vector64Override::CreateScalarUnsafe_1 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalarUnsafe_2 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalarUnsafe_3 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalarUnsafe_4 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalarUnsafe_5 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalarUnsafe_6 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalarUnsafe_7 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalarUnsafe_8 <br>public , args: ($value)<br>
	 * @uses Vector64Override::CreateScalarUnsafe_9 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|mixed|\override
	 */
	#[MethodOverridePublic]function CreateScalarUnsafe (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function Divide($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \T|object
	 */
	public static function Dot($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function EqualsAll($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function EqualsAny($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\UInt32
	 */
	public static function ExtractMostSignificantBits($vector){}
	/**
	 * @uses Vector64Override::Floor_1 <br>public , args: ($vector)<br>
	 * @uses Vector64Override::Floor_2 <br>public , args: ($vector)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|mixed|\override
	 */
	#[MethodOverridePublic]function Floor (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @param \System\Int32|int $index
	 * @return \T|object
	 */
	public static function GetElement($vector, $index){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function GreaterThan($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function GreaterThanAll($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function GreaterThanAny($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function GreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function GreaterThanOrEqualAll($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function GreaterThanOrEqualAny($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function LessThan($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function LessThanAll($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function LessThanAny($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function LessThanOrEqual($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function LessThanOrEqualAll($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function LessThanOrEqualAny($left, $right){}
	/**
	 * @param \T* $source
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function Load($source){}
	/**
	 * @param \T* $source
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function LoadAligned($source){}
	/**
	 * @param \T* $source
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function LoadAlignedNonTemporal($source){}
	/**
	 * @uses Vector64Override::LoadUnsafe_1 <br>public , args: ($source)<br>
	 * @uses Vector64Override::LoadUnsafe_2 <br>public , args: ($source, $elementOffset)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|mixed|\override
	 */
	#[MethodOverridePublic]function LoadUnsafe (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function Max($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function Min($left, $right){}
	/**
	 * @uses Vector64Override::Multiply_1 <br>public , args: ($left, $right)<br>
	 * @uses Vector64Override::Multiply_2 <br>public , args: ($left, $right)<br>
	 * @uses Vector64Override::Multiply_3 <br>public , args: ($left, $right)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|mixed|\override
	 */
	#[MethodOverridePublic]function Multiply (\override ...$args){}
	/**
	 * @uses Vector64Override::Narrow_1 <br>public , args: ($lower, $upper)<br>
	 * @uses Vector64Override::Narrow_2 <br>public , args: ($lower, $upper)<br>
	 * @uses Vector64Override::Narrow_3 <br>public , args: ($lower, $upper)<br>
	 * @uses Vector64Override::Narrow_4 <br>public , args: ($lower, $upper)<br>
	 * @uses Vector64Override::Narrow_5 <br>public , args: ($lower, $upper)<br>
	 * @uses Vector64Override::Narrow_6 <br>public , args: ($lower, $upper)<br>
	 * @uses Vector64Override::Narrow_7 <br>public , args: ($lower, $upper)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|mixed|\override
	 */
	#[MethodOverridePublic]function Narrow (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function Negate($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function OnesComplement($vector){}
	/**
	 * @uses Vector64Override::ShiftLeft_1 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftLeft_2 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftLeft_3 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftLeft_4 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftLeft_5 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftLeft_6 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftLeft_7 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftLeft_8 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftLeft_9 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftLeft_10 <br>public , args: ($vector, $shiftCount)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|mixed|\override
	 */
	#[MethodOverridePublic]function ShiftLeft (\override ...$args){}
	/**
	 * @uses Vector64Override::ShiftRightArithmetic_1 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftRightArithmetic_2 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftRightArithmetic_3 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftRightArithmetic_4 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftRightArithmetic_5 <br>public , args: ($vector, $shiftCount)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|mixed|\override
	 */
	#[MethodOverridePublic]function ShiftRightArithmetic (\override ...$args){}
	/**
	 * @uses Vector64Override::ShiftRightLogical_1 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftRightLogical_2 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftRightLogical_3 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftRightLogical_4 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftRightLogical_5 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftRightLogical_6 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftRightLogical_7 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftRightLogical_8 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftRightLogical_9 <br>public , args: ($vector, $shiftCount)<br>
	 * @uses Vector64Override::ShiftRightLogical_10 <br>public , args: ($vector, $shiftCount)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|mixed|\override
	 */
	#[MethodOverridePublic]function ShiftRightLogical (\override ...$args){}
	/**
	 * @uses Vector64Override::Shuffle_1 <br>public , args: ($vector, $indices)<br>
	 * @uses Vector64Override::Shuffle_2 <br>public , args: ($vector, $indices)<br>
	 * @uses Vector64Override::Shuffle_3 <br>public , args: ($vector, $indices)<br>
	 * @uses Vector64Override::Shuffle_4 <br>public , args: ($vector, $indices)<br>
	 * @uses Vector64Override::Shuffle_5 <br>public , args: ($vector, $indices)<br>
	 * @uses Vector64Override::Shuffle_6 <br>public , args: ($vector, $indices)<br>
	 * @uses Vector64Override::Shuffle_7 <br>public , args: ($vector, $indices)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|mixed|\override
	 */
	#[MethodOverridePublic]function Shuffle (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function Sqrt($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: T]
	 * @param \T* $destination
	 * @return \System\Void|void
	 */
	public static function Store($source, $destination){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: T]
	 * @param \T* $destination
	 * @return \System\Void|void
	 */
	public static function StoreAligned($source, $destination){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $source [generic: T]
	 * @param \T* $destination
	 * @return \System\Void|void
	 */
	public static function StoreAlignedNonTemporal($source, $destination){}
	/**
	 * @uses Vector64Override::StoreUnsafe_1 <br>public , args: ($source, $destination)<br>
	 * @uses Vector64Override::StoreUnsafe_2 <br>public , args: ($source, $destination, $elementOffset)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function StoreUnsafe (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function Subtract($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \T|object
	 */
	public static function Sum($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \T|object
	 */
	public static function ToScalar($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector128_1[T]
	 */
	public static function ToVector128($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector128_1[T]
	 */
	public static function ToVector128Unsafe($vector){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @param \System\Span_1 $destination [generic: T]
	 * @return \System\Boolean|bool
	 */
	public static function TryCopyTo($vector, $destination){}
	/**
	 * @uses Vector64Override::Widen_1 <br>public , args: ($source)<br>
	 * @uses Vector64Override::Widen_2 <br>public , args: ($source)<br>
	 * @uses Vector64Override::Widen_3 <br>public , args: ($source)<br>
	 * @uses Vector64Override::Widen_4 <br>public , args: ($source)<br>
	 * @uses Vector64Override::Widen_5 <br>public , args: ($source)<br>
	 * @uses Vector64Override::Widen_6 <br>public , args: ($source)<br>
	 * @uses Vector64Override::Widen_7 <br>public , args: ($source)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ValueTuple_2|mixed|\override
	 */
	#[MethodOverridePublic]function Widen (\override ...$args){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $vector [generic: T]
	 * @param \System\Int32|int $index
	 * @param \T|object $value
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function WithElement($vector, $index, $value){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 $left [generic: T]
	 * @param \System\Runtime\Intrinsics\Vector64_1 $right [generic: T]
	 * @return \System\Runtime\Intrinsics\Vector64_1[T]
	 */
	public static function Xor($left, $right){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 &$vector [generic: T]
	 * @param \System\Int32|int $index
	 * @return \T|object
	 */
	protected static function GetElementUnsafe(&$vector, $index){}
	/**
	 * @param \System\Runtime\Intrinsics\Vector64_1 &$vector [generic: T]
	 * @param \System\Int32|int $index
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	protected static function SetElementUnsafe(&$vector, $index, $value){}
	/**
	 * @uses Vector64Override::WidenLower_1 <br>protected , args: ($source)<br>
	 * @uses Vector64Override::WidenLower_2 <br>protected , args: ($source)<br>
	 * @uses Vector64Override::WidenLower_3 <br>protected , args: ($source)<br>
	 * @uses Vector64Override::WidenLower_4 <br>protected , args: ($source)<br>
	 * @uses Vector64Override::WidenLower_5 <br>protected , args: ($source)<br>
	 * @uses Vector64Override::WidenLower_6 <br>protected , args: ($source)<br>
	 * @uses Vector64Override::WidenLower_7 <br>protected , args: ($source)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|mixed|\override
	 */
	#[MethodOverrideProtected]function WidenLower (\override ...$args){}
	/**
	 * @uses Vector64Override::WidenUpper_1 <br>protected , args: ($source)<br>
	 * @uses Vector64Override::WidenUpper_2 <br>protected , args: ($source)<br>
	 * @uses Vector64Override::WidenUpper_3 <br>protected , args: ($source)<br>
	 * @uses Vector64Override::WidenUpper_4 <br>protected , args: ($source)<br>
	 * @uses Vector64Override::WidenUpper_5 <br>protected , args: ($source)<br>
	 * @uses Vector64Override::WidenUpper_6 <br>protected , args: ($source)<br>
	 * @uses Vector64Override::WidenUpper_7 <br>protected , args: ($source)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\Intrinsics\Vector64_1|mixed|\override
	 */
	#[MethodOverrideProtected]function WidenUpper (\override ...$args){}
}