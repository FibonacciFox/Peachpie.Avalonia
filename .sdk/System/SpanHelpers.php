<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SpanHelpersOverride {
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $span [generic: T]
	 * @param \TComparable $comparable
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function BinarySearch_1 ($span, $comparable){}
	/**
	 * @deprecated
	 * @param \T& $spanStart
	 * @param \System\Int32|int $length
	 * @param \TComparable $comparable
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function BinarySearch_2 ($spanStart, $length, $comparable){}
	/**
	 * @deprecated
	 * @param \System\Byte& $searchSpace
	 * @param \System\Int32|int $searchSpaceLength
	 * @param \System\Byte& $value
	 * @param \System\Int32|int $valueLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function IndexOf_1 ($searchSpace, $searchSpaceLength, $value, $valueLength){}
	/**
	 * @deprecated
	 * @param \System\Char& $searchSpace
	 * @param \System\Int32|int $searchSpaceLength
	 * @param \System\Char& $value
	 * @param \System\Int32|int $valueLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function IndexOf_2 ($searchSpace, $searchSpaceLength, $value, $valueLength){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \System\Int32|int $searchSpaceLength
	 * @param \T& $value
	 * @param \System\Int32|int $valueLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function IndexOf_3 ($searchSpace, $searchSpaceLength, $value, $valueLength){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function IndexOf_4 ($searchSpace, $value, $length){}
	/**
	 * @deprecated
	 * @param \System\Byte& $searchSpace
	 * @param \System\Int32|int $searchSpaceLength
	 * @param \System\Byte& $value
	 * @param \System\Int32|int $valueLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function LastIndexOf_1 ($searchSpace, $searchSpaceLength, $value, $valueLength){}
	/**
	 * @deprecated
	 * @param \System\Char& $searchSpace
	 * @param \System\Int32|int $searchSpaceLength
	 * @param \System\Char& $value
	 * @param \System\Int32|int $valueLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function LastIndexOf_2 ($searchSpace, $searchSpaceLength, $value, $valueLength){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \System\Int32|int $searchSpaceLength
	 * @param \T& $value
	 * @param \System\Int32|int $valueLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function LastIndexOf_3 ($searchSpace, $searchSpaceLength, $value, $valueLength){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function LastIndexOf_4 ($searchSpace, $value, $length){}
	/**
	 * @deprecated
	 * @param \System\Byte& $first
	 * @param \System\Byte& $second
	 * @param \System\UIntPtr $length
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function SequenceEqual_1 ($first, $second, $length){}
	/**
	 * @deprecated
	 * @param \T& $first
	 * @param \T& $second
	 * @param \System\Int32|int $length
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function SequenceEqual_2 ($first, $second, $length){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector_1 $match [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function LocateFirstFoundByte_1 ($match){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $match
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function LocateFirstFoundByte_2 ($match){}
	/**
	 * @deprecated
	 * @param \System\Byte& $first
	 * @param \System\Int32|int $firstLength
	 * @param \System\Byte& $second
	 * @param \System\Int32|int $secondLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function SequenceCompareTo_1 ($first, $firstLength, $second, $secondLength){}
	/**
	 * @deprecated
	 * @param \System\Char& $first
	 * @param \System\Int32|int $firstLength
	 * @param \System\Char& $second
	 * @param \System\Int32|int $secondLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function SequenceCompareTo_2 ($first, $firstLength, $second, $secondLength){}
	/**
	 * @deprecated
	 * @param \T& $first
	 * @param \System\Int32|int $firstLength
	 * @param \T& $second
	 * @param \System\Int32|int $secondLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function SequenceCompareTo_3 ($first, $firstLength, $second, $secondLength){}
	/**
	 * @deprecated
	 * @param \System\Byte& $start
	 * @return \System\UInt32
	 */
	#[MethodOverride]private static function LoadUInt_1 ($start){}
	/**
	 * @deprecated
	 * @param \System\Byte& $start
	 * @param \System\UIntPtr $offset
	 * @return \System\UInt32
	 */
	#[MethodOverride]private static function LoadUInt_2 ($start, $offset){}
	/**
	 * @deprecated
	 * @param \System\Byte& $start
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]private static function LoadNUInt_1 ($start){}
	/**
	 * @deprecated
	 * @param \System\Byte& $start
	 * @param \System\UIntPtr $offset
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]private static function LoadNUInt_2 ($start, $offset){}
	/**
	 * @deprecated
	 * @param \System\Byte& $start
	 * @param \System\UIntPtr $offset
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]private static function LoadVector_1 ($start, $offset){}
	/**
	 * @deprecated
	 * @param \System\Char& $start
	 * @param \System\IntPtr $offset
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride]private static function LoadVector_2 ($start, $offset){}
	/**
	 * @deprecated
	 * @param \System\Byte& $searchSpace
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]private static function UnalignedCountVector_1 ($searchSpace){}
	/**
	 * @deprecated
	 * @param \System\Char& $searchSpace
	 * @return \System\IntPtr
	 */
	#[MethodOverride]private static function UnalignedCountVector_2 ($searchSpace){}
	/**
	 * @deprecated
	 * @param \System\Byte& $searchSpace
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]private static function UnalignedCountVector128_1 ($searchSpace){}
	/**
	 * @deprecated
	 * @param \System\Char& $searchSpace
	 * @return \System\IntPtr
	 */
	#[MethodOverride]private static function UnalignedCountVector128_2 ($searchSpace){}
	/**
	 * @deprecated
	 * @param \System\Byte& $buf
	 * @param \System\UIntPtr $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Reverse_1 ($buf, $length){}
	/**
	 * @deprecated
	 * @param \System\Char& $buf
	 * @param \System\UIntPtr $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Reverse_2 ($buf, $length){}
	/**
	 * @deprecated
	 * @param \System\Int32& $buf
	 * @param \System\UIntPtr $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Reverse_3 ($buf, $length){}
	/**
	 * @deprecated
	 * @param \System\Int64& $buf
	 * @param \System\UIntPtr $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Reverse_4 ($buf, $length){}
	/**
	 * @deprecated
	 * @param \T& $elements
	 * @param \System\UIntPtr $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Reverse_5 ($elements, $length){}
	/**
	 * @deprecated
	 * @param \System\Numerics\Vector_1 $match [generic: System\UInt16]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function LocateFirstFoundChar_1 ($match){}
	/**
	 * @deprecated
	 * @param \System\UInt64 $match
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function LocateFirstFoundChar_2 ($match){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function IndexOfAny_1 ($searchSpace, $value0, $value1, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function IndexOfAny_2 ($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \System\Int32|int $searchSpaceLength
	 * @param \T& $value
	 * @param \System\Int32|int $valueLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function IndexOfAny_3 ($searchSpace, $searchSpaceLength, $value, $valueLength){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function LastIndexOfAny_1 ($searchSpace, $value0, $value1, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function LastIndexOfAny_2 ($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \System\Int32|int $searchSpaceLength
	 * @param \T& $value
	 * @param \System\Int32|int $valueLength
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function LastIndexOfAny_3 ($searchSpace, $searchSpaceLength, $value, $valueLength){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function IndexOfAnyExcept_1 ($searchSpace, $value0, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function IndexOfAnyExcept_2 ($searchSpace, $value0, $value1, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function IndexOfAnyExcept_3 ($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @param \T|object $value3
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function IndexOfAnyExcept_4 ($searchSpace, $value0, $value1, $value2, $value3, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function LastIndexOfAnyExcept_1 ($searchSpace, $value0, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function LastIndexOfAnyExcept_2 ($searchSpace, $value0, $value1, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function LastIndexOfAnyExcept_3 ($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @param \T|object $value3
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function LastIndexOfAnyExcept_4 ($searchSpace, $value0, $value1, $value2, $value3, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function IndexOfValueType_1 ($searchSpace, $value, $length){}
	/**
	 * @deprecated
	 * @param \TValue& $searchSpace
	 * @param \TValue $value
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function IndexOfValueType_2 ($searchSpace, $value, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function IndexOfAnyExceptValueType_1 ($searchSpace, $value, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function IndexOfAnyExceptValueType_2 ($searchSpace, $value0, $value1, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function IndexOfAnyExceptValueType_3 ($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @param \T|object $value3
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function IndexOfAnyExceptValueType_4 ($searchSpace, $value0, $value1, $value2, $value3, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function IndexOfAnyValueType_1 ($searchSpace, $value0, $value1, $length){}
	/**
	 * @deprecated
	 * @param \TValue& $searchSpace
	 * @param \TValue $value0
	 * @param \TValue $value1
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function IndexOfAnyValueType_2 ($searchSpace, $value0, $value1, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function IndexOfAnyValueType_3 ($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @deprecated
	 * @param \TValue& $searchSpace
	 * @param \TValue $value0
	 * @param \TValue $value1
	 * @param \TValue $value2
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function IndexOfAnyValueType_4 ($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @param \T|object $value3
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function IndexOfAnyValueType_5 ($searchSpace, $value0, $value1, $value2, $value3, $length){}
	/**
	 * @deprecated
	 * @param \TValue& $searchSpace
	 * @param \TValue $value0
	 * @param \TValue $value1
	 * @param \TValue $value2
	 * @param \TValue $value3
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function IndexOfAnyValueType_6 ($searchSpace, $value0, $value1, $value2, $value3, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @param \T|object $value3
	 * @param \T|object $value4
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function IndexOfAnyValueType_7 ($searchSpace, $value0, $value1, $value2, $value3, $value4, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function LastIndexOfValueType_1 ($searchSpace, $value, $length){}
	/**
	 * @deprecated
	 * @param \TValue& $searchSpace
	 * @param \TValue $value
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function LastIndexOfValueType_2 ($searchSpace, $value, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function LastIndexOfAnyExceptValueType_1 ($searchSpace, $value, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function LastIndexOfAnyExceptValueType_2 ($searchSpace, $value0, $value1, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function LastIndexOfAnyExceptValueType_3 ($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @param \T|object $value3
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function LastIndexOfAnyExceptValueType_4 ($searchSpace, $value0, $value1, $value2, $value3, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function LastIndexOfAnyValueType_1 ($searchSpace, $value0, $value1, $length){}
	/**
	 * @deprecated
	 * @param \TValue& $searchSpace
	 * @param \TValue $value0
	 * @param \TValue $value1
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function LastIndexOfAnyValueType_2 ($searchSpace, $value0, $value1, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function LastIndexOfAnyValueType_3 ($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @deprecated
	 * @param \TValue& $searchSpace
	 * @param \TValue $value0
	 * @param \TValue $value1
	 * @param \TValue $value2
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function LastIndexOfAnyValueType_4 ($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T|object $value0
	 * @param \T|object $value1
	 * @param \T|object $value2
	 * @param \T|object $value3
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function LastIndexOfAnyValueType_5 ($searchSpace, $value0, $value1, $value2, $value3, $length){}
	/**
	 * @deprecated
	 * @param \TValue& $searchSpace
	 * @param \TValue $value0
	 * @param \TValue $value1
	 * @param \TValue $value2
	 * @param \TValue $value3
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function LastIndexOfAnyValueType_6 ($searchSpace, $value0, $value1, $value2, $value3, $length){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T& $current
	 * @param \System\Runtime\Intrinsics\Vector128_1 $equals [generic: T]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function ComputeFirstIndex_1 ($searchSpace, $current, $equals){}
	/**
	 * @deprecated
	 * @param \T& $searchSpace
	 * @param \T& $current
	 * @param \System\Runtime\Intrinsics\Vector256_1 $equals [generic: T]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function ComputeFirstIndex_2 ($searchSpace, $current, $equals){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $offset
	 * @param \System\Runtime\Intrinsics\Vector128_1 $equals [generic: T]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function ComputeLastIndex_1 ($offset, $equals){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $offset
	 * @param \System\Runtime\Intrinsics\Vector256_1 $equals [generic: T]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function ComputeLastIndex_2 ($offset, $equals){}
}
class SpanHelpers extends \System\Object
{
	use SpanHelpersOverride;


	/**
	 * @uses SpanHelpersOverride::BinarySearch_1 <br>public , args: ($span, $comparable)<br>
	 * @uses SpanHelpersOverride::BinarySearch_2 <br>public , args: ($spanStart, $length, $comparable)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function BinarySearch (\override ...$args){}
	/**
	 * @uses SpanHelpersOverride::IndexOf_1 <br>public , args: ($searchSpace, $searchSpaceLength, $value, $valueLength)<br>
	 * @uses SpanHelpersOverride::IndexOf_2 <br>public , args: ($searchSpace, $searchSpaceLength, $value, $valueLength)<br>
	 * @uses SpanHelpersOverride::IndexOf_3 <br>public , args: ($searchSpace, $searchSpaceLength, $value, $valueLength)<br>
	 * @uses SpanHelpersOverride::IndexOf_4 <br>public , args: ($searchSpace, $value, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function IndexOf (\override ...$args){}
	/**
	 * @uses SpanHelpersOverride::LastIndexOf_1 <br>public , args: ($searchSpace, $searchSpaceLength, $value, $valueLength)<br>
	 * @uses SpanHelpersOverride::LastIndexOf_2 <br>public , args: ($searchSpace, $searchSpaceLength, $value, $valueLength)<br>
	 * @uses SpanHelpersOverride::LastIndexOf_3 <br>public , args: ($searchSpace, $searchSpaceLength, $value, $valueLength)<br>
	 * @uses SpanHelpersOverride::LastIndexOf_4 <br>public , args: ($searchSpace, $value, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function LastIndexOf (\override ...$args){}
	private static function ThrowMustBeNullTerminatedString(){}
	/**
	 * @param \System\Byte& $searchSpace
	 * @return \System\Int32|int
	 */
	protected static function IndexOfNullByte($searchSpace){}
	/**
	 * @uses SpanHelpersOverride::SequenceEqual_1 <br>public , args: ($first, $second, $length)<br>
	 * @uses SpanHelpersOverride::SequenceEqual_2 <br>public , args: ($first, $second, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function SequenceEqual (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SpanHelpersOverride::LocateFirstFoundByte_1 <br>private , args: ($match)<br>
	 * @uses SpanHelpersOverride::LocateFirstFoundByte_2 <br>private , args: ($match)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function LocateFirstFoundByte (\override ...$args){}
	/**
	 * @uses SpanHelpersOverride::SequenceCompareTo_1 <br>public , args: ($first, $firstLength, $second, $secondLength)<br>
	 * @uses SpanHelpersOverride::SequenceCompareTo_2 <br>public , args: ($first, $firstLength, $second, $secondLength)<br>
	 * @uses SpanHelpersOverride::SequenceCompareTo_3 <br>public , args: ($first, $firstLength, $second, $secondLength)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function SequenceCompareTo (\override ...$args){}
	/**
	 * @param \System\Byte& $first
	 * @param \System\Byte& $second
	 * @param \System\UIntPtr $length
	 * @return \System\UIntPtr
	 */
	public static function CommonPrefixLength($first, $second, $length){}
	private static function LoadUShort($start){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SpanHelpersOverride::LoadUInt_1 <br>private , args: ($start)<br>
	 * @uses SpanHelpersOverride::LoadUInt_2 <br>private , args: ($start, $offset)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt32|mixed|\override
	 */
	#[MethodOverridePrivate]function LoadUInt (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SpanHelpersOverride::LoadNUInt_1 <br>private , args: ($start)<br>
	 * @uses SpanHelpersOverride::LoadNUInt_2 <br>private , args: ($start, $offset)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UIntPtr|mixed|\override
	 */
	#[MethodOverridePrivate]function LoadNUInt (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SpanHelpersOverride::LoadVector_1 <br>private , args: ($start, $offset)<br>
	 * @uses SpanHelpersOverride::LoadVector_2 <br>private , args: ($start, $offset)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Numerics\Vector_1|mixed|\override
	 */
	#[MethodOverridePrivate]function LoadVector (\override ...$args){}
	private static function LoadVector128($start, $offset){}
	private static function LoadVector256($start, $offset){}
	private static function GetByteVectorSpanLength($offset, $length){}
	private static function GetByteVector128SpanLength($offset, $length){}
	private static function GetByteVector256SpanLength($offset, $length){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SpanHelpersOverride::UnalignedCountVector_1 <br>private , args: ($searchSpace)<br>
	 * @uses SpanHelpersOverride::UnalignedCountVector_2 <br>private , args: ($searchSpace)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UIntPtr|\System\IntPtr|mixed|\override
	 */
	#[MethodOverridePrivate]function UnalignedCountVector (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SpanHelpersOverride::UnalignedCountVector128_1 <br>private , args: ($searchSpace)<br>
	 * @uses SpanHelpersOverride::UnalignedCountVector128_2 <br>private , args: ($searchSpace)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UIntPtr|\System\IntPtr|mixed|\override
	 */
	#[MethodOverridePrivate]function UnalignedCountVector128 (\override ...$args){}
	/**
	 * @uses SpanHelpersOverride::Reverse_1 <br>public , args: ($buf, $length)<br>
	 * @uses SpanHelpersOverride::Reverse_2 <br>public , args: ($buf, $length)<br>
	 * @uses SpanHelpersOverride::Reverse_3 <br>public , args: ($buf, $length)<br>
	 * @uses SpanHelpersOverride::Reverse_4 <br>public , args: ($buf, $length)<br>
	 * @uses SpanHelpersOverride::Reverse_5 <br>public , args: ($elements, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Reverse (\override ...$args){}
	/**
	 * @param \System\Char& $searchSpace
	 * @return \System\Int32|int
	 */
	public static function IndexOfNullCharacter($searchSpace){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SpanHelpersOverride::LocateFirstFoundChar_1 <br>private , args: ($match)<br>
	 * @uses SpanHelpersOverride::LocateFirstFoundChar_2 <br>private , args: ($match)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function LocateFirstFoundChar (\override ...$args){}
	private static function GetCharVectorSpanLength($offset, $length){}
	private static function GetCharVector128SpanLength($offset, $length){}
	private static function GetCharVector256SpanLength($offset, $length){}
	/**
	 * @param \System\Byte& $b
	 * @param \System\UIntPtr $byteLength
	 * @return \System\Void|void
	 */
	public static function ClearWithoutReferences($b, $byteLength){}
	/**
	 * @param \System\IntPtr& $ip
	 * @param \System\UIntPtr $pointerSizeLength
	 * @return \System\Void|void
	 */
	public static function ClearWithReferences($ip, $pointerSizeLength){}
	private static function ReverseInner($elements, $length){}
	/**
	 * @param \T& $refData
	 * @param \System\UIntPtr $numElements
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	public static function Fill($refData, $numElements, $value){}
	/**
	 * @param \T& $searchSpace
	 * @param \T|object $value
	 * @param \System\Int32|int $length
	 * @return \System\Boolean|bool
	 */
	public static function Contains($searchSpace, $value, $length){}
	/**
	 * @uses SpanHelpersOverride::IndexOfAny_1 <br>public , args: ($searchSpace, $value0, $value1, $length)<br>
	 * @uses SpanHelpersOverride::IndexOfAny_2 <br>public , args: ($searchSpace, $value0, $value1, $value2, $length)<br>
	 * @uses SpanHelpersOverride::IndexOfAny_3 <br>public , args: ($searchSpace, $searchSpaceLength, $value, $valueLength)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function IndexOfAny (\override ...$args){}
	/**
	 * @uses SpanHelpersOverride::LastIndexOfAny_1 <br>public , args: ($searchSpace, $value0, $value1, $length)<br>
	 * @uses SpanHelpersOverride::LastIndexOfAny_2 <br>public , args: ($searchSpace, $value0, $value1, $value2, $length)<br>
	 * @uses SpanHelpersOverride::LastIndexOfAny_3 <br>public , args: ($searchSpace, $searchSpaceLength, $value, $valueLength)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function LastIndexOfAny (\override ...$args){}
	/**
	 * @uses SpanHelpersOverride::IndexOfAnyExcept_1 <br>protected , args: ($searchSpace, $value0, $length)<br>
	 * @uses SpanHelpersOverride::IndexOfAnyExcept_2 <br>protected , args: ($searchSpace, $value0, $value1, $length)<br>
	 * @uses SpanHelpersOverride::IndexOfAnyExcept_3 <br>protected , args: ($searchSpace, $value0, $value1, $value2, $length)<br>
	 * @uses SpanHelpersOverride::IndexOfAnyExcept_4 <br>protected , args: ($searchSpace, $value0, $value1, $value2, $value3, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function IndexOfAnyExcept (\override ...$args){}
	/**
	 * @uses SpanHelpersOverride::LastIndexOfAnyExcept_1 <br>protected , args: ($searchSpace, $value0, $length)<br>
	 * @uses SpanHelpersOverride::LastIndexOfAnyExcept_2 <br>protected , args: ($searchSpace, $value0, $value1, $length)<br>
	 * @uses SpanHelpersOverride::LastIndexOfAnyExcept_3 <br>protected , args: ($searchSpace, $value0, $value1, $value2, $length)<br>
	 * @uses SpanHelpersOverride::LastIndexOfAnyExcept_4 <br>protected , args: ($searchSpace, $value0, $value1, $value2, $value3, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function LastIndexOfAnyExcept (\override ...$args){}
	/**
	 * @param \System\Int32|int $length
	 * @return \System\Boolean|bool
	 */
	protected static function CanVectorizeAndBenefit($length){}
	/**
	 * @param \T& $searchSpace
	 * @param \T|object $value
	 * @param \System\Int32|int $length
	 * @return \System\Boolean|bool
	 */
	protected static function ContainsValueType($searchSpace, $value, $length){}
	/**
	 * @param \System\Char& $searchSpace
	 * @param \System\Char $value
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	protected static function IndexOfChar($searchSpace, $value, $length){}
	/**
	 * @uses SpanHelpersOverride::IndexOfValueType_1 <br>protected , args: ($searchSpace, $value, $length)<br>
	 * @uses SpanHelpersOverride::IndexOfValueType_2 <br>private , args: ($searchSpace, $value, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function IndexOfValueType (\override ...$args){}
	/**
	 * @uses SpanHelpersOverride::IndexOfAnyExceptValueType_1 <br>protected , args: ($searchSpace, $value, $length)<br>
	 * @uses SpanHelpersOverride::IndexOfAnyExceptValueType_2 <br>protected , args: ($searchSpace, $value0, $value1, $length)<br>
	 * @uses SpanHelpersOverride::IndexOfAnyExceptValueType_3 <br>protected , args: ($searchSpace, $value0, $value1, $value2, $length)<br>
	 * @uses SpanHelpersOverride::IndexOfAnyExceptValueType_4 <br>protected , args: ($searchSpace, $value0, $value1, $value2, $value3, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function IndexOfAnyExceptValueType (\override ...$args){}
	/**
	 * @param \System\Char& $searchSpace
	 * @param \System\Char $value0
	 * @param \System\Char $value1
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	protected static function IndexOfAnyChar($searchSpace, $value0, $value1, $length){}
	/**
	 * @uses SpanHelpersOverride::IndexOfAnyValueType_1 <br>protected , args: ($searchSpace, $value0, $value1, $length)<br>
	 * @uses SpanHelpersOverride::IndexOfAnyValueType_2 <br>private , args: ($searchSpace, $value0, $value1, $length)<br>
	 * @uses SpanHelpersOverride::IndexOfAnyValueType_3 <br>protected , args: ($searchSpace, $value0, $value1, $value2, $length)<br>
	 * @uses SpanHelpersOverride::IndexOfAnyValueType_4 <br>private , args: ($searchSpace, $value0, $value1, $value2, $length)<br>
	 * @uses SpanHelpersOverride::IndexOfAnyValueType_5 <br>protected , args: ($searchSpace, $value0, $value1, $value2, $value3, $length)<br>
	 * @uses SpanHelpersOverride::IndexOfAnyValueType_6 <br>private , args: ($searchSpace, $value0, $value1, $value2, $value3, $length)<br>
	 * @uses SpanHelpersOverride::IndexOfAnyValueType_7 <br>protected , args: ($searchSpace, $value0, $value1, $value2, $value3, $value4, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function IndexOfAnyValueType (\override ...$args){}
	/**
	 * @uses SpanHelpersOverride::LastIndexOfValueType_1 <br>protected , args: ($searchSpace, $value, $length)<br>
	 * @uses SpanHelpersOverride::LastIndexOfValueType_2 <br>private , args: ($searchSpace, $value, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function LastIndexOfValueType (\override ...$args){}
	/**
	 * @uses SpanHelpersOverride::LastIndexOfAnyExceptValueType_1 <br>protected , args: ($searchSpace, $value, $length)<br>
	 * @uses SpanHelpersOverride::LastIndexOfAnyExceptValueType_2 <br>protected , args: ($searchSpace, $value0, $value1, $length)<br>
	 * @uses SpanHelpersOverride::LastIndexOfAnyExceptValueType_3 <br>protected , args: ($searchSpace, $value0, $value1, $value2, $length)<br>
	 * @uses SpanHelpersOverride::LastIndexOfAnyExceptValueType_4 <br>protected , args: ($searchSpace, $value0, $value1, $value2, $value3, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function LastIndexOfAnyExceptValueType (\override ...$args){}
	/**
	 * @uses SpanHelpersOverride::LastIndexOfAnyValueType_1 <br>protected , args: ($searchSpace, $value0, $value1, $length)<br>
	 * @uses SpanHelpersOverride::LastIndexOfAnyValueType_2 <br>private , args: ($searchSpace, $value0, $value1, $length)<br>
	 * @uses SpanHelpersOverride::LastIndexOfAnyValueType_3 <br>protected , args: ($searchSpace, $value0, $value1, $value2, $length)<br>
	 * @uses SpanHelpersOverride::LastIndexOfAnyValueType_4 <br>private , args: ($searchSpace, $value0, $value1, $value2, $length)<br>
	 * @uses SpanHelpersOverride::LastIndexOfAnyValueType_5 <br>protected , args: ($searchSpace, $value0, $value1, $value2, $value3, $length)<br>
	 * @uses SpanHelpersOverride::LastIndexOfAnyValueType_6 <br>private , args: ($searchSpace, $value0, $value1, $value2, $value3, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function LastIndexOfAnyValueType (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SpanHelpersOverride::ComputeFirstIndex_1 <br>private , args: ($searchSpace, $current, $equals)<br>
	 * @uses SpanHelpersOverride::ComputeFirstIndex_2 <br>private , args: ($searchSpace, $current, $equals)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function ComputeFirstIndex (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses SpanHelpersOverride::ComputeLastIndex_1 <br>private , args: ($offset, $equals)<br>
	 * @uses SpanHelpersOverride::ComputeLastIndex_2 <br>private , args: ($offset, $equals)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function ComputeLastIndex (\override ...$args){}
}