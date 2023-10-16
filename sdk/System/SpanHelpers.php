<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SpanHelpersMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function BinarySearch_1($span, $comparable){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function BinarySearch_2($spanStart, $length, $comparable){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function IndexOf_1($searchSpace, $searchSpaceLength, $value, $valueLength){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function IndexOf_2($searchSpace, $searchSpaceLength, $value, $valueLength){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function IndexOf_3($searchSpace, $searchSpaceLength, $value, $valueLength){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function IndexOf_4($searchSpace, $value, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LastIndexOf_1($searchSpace, $searchSpaceLength, $value, $valueLength){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LastIndexOf_2($searchSpace, $searchSpaceLength, $value, $valueLength){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LastIndexOf_3($searchSpace, $searchSpaceLength, $value, $valueLength){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LastIndexOf_4($searchSpace, $value, $length){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function SequenceEqual_1($first, $second, $length){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function SequenceEqual_2($first, $second, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function LocateFirstFoundByte_1($match){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function LocateFirstFoundByte_2($match){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function SequenceCompareTo_1($first, $firstLength, $second, $secondLength){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function SequenceCompareTo_2($first, $firstLength, $second, $secondLength){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function SequenceCompareTo_3($first, $firstLength, $second, $secondLength){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] private static function LoadUInt_1($start){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] private static function LoadUInt_2($start, $offset){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] private static function LoadNUInt_1($start){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] private static function LoadNUInt_2($start, $offset){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] private static function LoadVector_1($start, $offset){}
	/**
	 * @return \System\Numerics\Vector_1
	 */
	#[MethodOverride] private static function LoadVector_2($start, $offset){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] private static function UnalignedCountVector_1($searchSpace){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private static function UnalignedCountVector_2($searchSpace){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] private static function UnalignedCountVector128_1($searchSpace){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private static function UnalignedCountVector128_2($searchSpace){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Reverse_1($buf, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Reverse_2($buf, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Reverse_3($buf, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Reverse_4($buf, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Reverse_5($elements, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function LocateFirstFoundChar_1($match){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function LocateFirstFoundChar_2($match){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function IndexOfAny_1($searchSpace, $value0, $value1, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function IndexOfAny_2($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function IndexOfAny_3($searchSpace, $searchSpaceLength, $value, $valueLength){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LastIndexOfAny_1($searchSpace, $value0, $value1, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LastIndexOfAny_2($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function LastIndexOfAny_3($searchSpace, $searchSpaceLength, $value, $valueLength){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function IndexOfAnyExcept_1($searchSpace, $value0, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function IndexOfAnyExcept_2($searchSpace, $value0, $value1, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function IndexOfAnyExcept_3($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function IndexOfAnyExcept_4($searchSpace, $value0, $value1, $value2, $value3, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function LastIndexOfAnyExcept_1($searchSpace, $value0, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function LastIndexOfAnyExcept_2($searchSpace, $value0, $value1, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function LastIndexOfAnyExcept_3($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function LastIndexOfAnyExcept_4($searchSpace, $value0, $value1, $value2, $value3, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function IndexOfValueType_1($searchSpace, $value, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function IndexOfValueType_2($searchSpace, $value, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function IndexOfAnyExceptValueType_1($searchSpace, $value, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function IndexOfAnyExceptValueType_2($searchSpace, $value0, $value1, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function IndexOfAnyExceptValueType_3($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function IndexOfAnyExceptValueType_4($searchSpace, $value0, $value1, $value2, $value3, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function IndexOfAnyValueType_1($searchSpace, $value0, $value1, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function IndexOfAnyValueType_2($searchSpace, $value0, $value1, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function IndexOfAnyValueType_3($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function IndexOfAnyValueType_4($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function IndexOfAnyValueType_5($searchSpace, $value0, $value1, $value2, $value3, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function IndexOfAnyValueType_6($searchSpace, $value0, $value1, $value2, $value3, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function IndexOfAnyValueType_7($searchSpace, $value0, $value1, $value2, $value3, $value4, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function LastIndexOfValueType_1($searchSpace, $value, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function LastIndexOfValueType_2($searchSpace, $value, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function LastIndexOfAnyExceptValueType_1($searchSpace, $value, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function LastIndexOfAnyExceptValueType_2($searchSpace, $value0, $value1, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function LastIndexOfAnyExceptValueType_3($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function LastIndexOfAnyExceptValueType_4($searchSpace, $value0, $value1, $value2, $value3, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function LastIndexOfAnyValueType_1($searchSpace, $value0, $value1, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function LastIndexOfAnyValueType_2($searchSpace, $value0, $value1, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function LastIndexOfAnyValueType_3($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function LastIndexOfAnyValueType_4($searchSpace, $value0, $value1, $value2, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function LastIndexOfAnyValueType_5($searchSpace, $value0, $value1, $value2, $value3, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function LastIndexOfAnyValueType_6($searchSpace, $value0, $value1, $value2, $value3, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function ComputeFirstIndex_1($searchSpace, $current, $equals){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function ComputeFirstIndex_2($searchSpace, $current, $equals){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function ComputeLastIndex_1($offset, $equals){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function ComputeLastIndex_2($offset, $equals){}
}
/**
 */
class SpanHelpers extends \System\Object
{
	/**
	 * @uses SpanHelpersMethodsOverride::BinarySearch_1 ($span, $comparable)
	 * @uses SpanHelpersMethodsOverride::BinarySearch_2 ($spanStart, $length, $comparable)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function BinarySearch(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::IndexOf_1 ($searchSpace, $searchSpaceLength, $value, $valueLength)
	 * @uses SpanHelpersMethodsOverride::IndexOf_2 ($searchSpace, $searchSpaceLength, $value, $valueLength)
	 * @uses SpanHelpersMethodsOverride::IndexOf_3 ($searchSpace, $searchSpaceLength, $value, $valueLength)
	 * @uses SpanHelpersMethodsOverride::IndexOf_4 ($searchSpace, $value, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IndexOf(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::LastIndexOf_1 ($searchSpace, $searchSpaceLength, $value, $valueLength)
	 * @uses SpanHelpersMethodsOverride::LastIndexOf_2 ($searchSpace, $searchSpaceLength, $value, $valueLength)
	 * @uses SpanHelpersMethodsOverride::LastIndexOf_3 ($searchSpace, $searchSpaceLength, $value, $valueLength)
	 * @uses SpanHelpersMethodsOverride::LastIndexOf_4 ($searchSpace, $value, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LastIndexOf(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowMustBeNullTerminatedString(){}
	/**
	 * @param \System\Byte& $searchSpace
	 * @return \System\Int32|int
	 */
	protected static function IndexOfNullByte($searchSpace){}
	/**
	 * @uses SpanHelpersMethodsOverride::SequenceEqual_1 ($first, $second, $length)
	 * @uses SpanHelpersMethodsOverride::SequenceEqual_2 ($first, $second, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SequenceEqual(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::LocateFirstFoundByte_1 ($match)
	 * @uses SpanHelpersMethodsOverride::LocateFirstFoundByte_2 ($match)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LocateFirstFoundByte(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::SequenceCompareTo_1 ($first, $firstLength, $second, $secondLength)
	 * @uses SpanHelpersMethodsOverride::SequenceCompareTo_2 ($first, $firstLength, $second, $secondLength)
	 * @uses SpanHelpersMethodsOverride::SequenceCompareTo_3 ($first, $firstLength, $second, $secondLength)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SequenceCompareTo(mixed ...$args){}
	/**
	 * @param \System\Byte& $first
	 * @param \System\Byte& $second
	 * @param \System\UIntPtr $length
	 * @return \System\UIntPtr
	 */
	public static function CommonPrefixLength($first, $second, $length){}
	/**
	 * @param \System\Byte& $start
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LoadUShort($start){}
	/**
	 * @uses SpanHelpersMethodsOverride::LoadUInt_1 ($start)
	 * @uses SpanHelpersMethodsOverride::LoadUInt_2 ($start, $offset)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LoadUInt(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::LoadNUInt_1 ($start)
	 * @uses SpanHelpersMethodsOverride::LoadNUInt_2 ($start, $offset)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LoadNUInt(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::LoadVector_1 ($start, $offset)
	 * @uses SpanHelpersMethodsOverride::LoadVector_2 ($start, $offset)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LoadVector(mixed ...$args){}
	/**
	 * @param \System\Byte& $start
	 * @param \System\UIntPtr $offset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LoadVector128($start, $offset){}
	/**
	 * @param \System\Byte& $start
	 * @param \System\UIntPtr $offset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LoadVector256($start, $offset){}
	/**
	 * @param \System\UIntPtr $offset
	 * @param \System\Int32|int $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetByteVectorSpanLength($offset, $length){}
	/**
	 * @param \System\UIntPtr $offset
	 * @param \System\Int32|int $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetByteVector128SpanLength($offset, $length){}
	/**
	 * @param \System\UIntPtr $offset
	 * @param \System\Int32|int $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetByteVector256SpanLength($offset, $length){}
	/**
	 * @uses SpanHelpersMethodsOverride::UnalignedCountVector_1 ($searchSpace)
	 * @uses SpanHelpersMethodsOverride::UnalignedCountVector_2 ($searchSpace)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UnalignedCountVector(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::UnalignedCountVector128_1 ($searchSpace)
	 * @uses SpanHelpersMethodsOverride::UnalignedCountVector128_2 ($searchSpace)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UnalignedCountVector128(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::Reverse_1 ($buf, $length)
	 * @uses SpanHelpersMethodsOverride::Reverse_2 ($buf, $length)
	 * @uses SpanHelpersMethodsOverride::Reverse_3 ($buf, $length)
	 * @uses SpanHelpersMethodsOverride::Reverse_4 ($buf, $length)
	 * @uses SpanHelpersMethodsOverride::Reverse_5 ($elements, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Reverse(mixed ...$args){}
	/**
	 * @param \System\Char& $searchSpace
	 * @return \System\Int32|int
	 */
	public static function IndexOfNullCharacter($searchSpace){}
	/**
	 * @uses SpanHelpersMethodsOverride::LocateFirstFoundChar_1 ($match)
	 * @uses SpanHelpersMethodsOverride::LocateFirstFoundChar_2 ($match)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LocateFirstFoundChar(mixed ...$args){}
	/**
	 * @param \System\IntPtr $offset
	 * @param \System\IntPtr $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCharVectorSpanLength($offset, $length){}
	/**
	 * @param \System\IntPtr $offset
	 * @param \System\IntPtr $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCharVector128SpanLength($offset, $length){}
	/**
	 * @param \System\IntPtr $offset
	 * @param \System\IntPtr $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCharVector256SpanLength($offset, $length){}
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
	/**
	 * @param \System\T& $elements
	 * @param \System\UIntPtr $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReverseInner($elements, $length){}
	/**
	 * @param \System\T& $refData
	 * @param \System\UIntPtr $numElements
	 * @param \System\T $value
	 * @return \System\Void|void
	 */
	public static function Fill($refData, $numElements, $value){}
	/**
	 * @param \System\T& $searchSpace
	 * @param \System\T $value
	 * @param \System\Int32|int $length
	 * @return \System\Boolean
	 */
	public static function Contains($searchSpace, $value, $length){}
	/**
	 * @uses SpanHelpersMethodsOverride::IndexOfAny_1 ($searchSpace, $value0, $value1, $length)
	 * @uses SpanHelpersMethodsOverride::IndexOfAny_2 ($searchSpace, $value0, $value1, $value2, $length)
	 * @uses SpanHelpersMethodsOverride::IndexOfAny_3 ($searchSpace, $searchSpaceLength, $value, $valueLength)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IndexOfAny(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAny_1 ($searchSpace, $value0, $value1, $length)
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAny_2 ($searchSpace, $value0, $value1, $value2, $length)
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAny_3 ($searchSpace, $searchSpaceLength, $value, $valueLength)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LastIndexOfAny(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::IndexOfAnyExcept_1 ($searchSpace, $value0, $length)
	 * @uses SpanHelpersMethodsOverride::IndexOfAnyExcept_2 ($searchSpace, $value0, $value1, $length)
	 * @uses SpanHelpersMethodsOverride::IndexOfAnyExcept_3 ($searchSpace, $value0, $value1, $value2, $length)
	 * @uses SpanHelpersMethodsOverride::IndexOfAnyExcept_4 ($searchSpace, $value0, $value1, $value2, $value3, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IndexOfAnyExcept(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAnyExcept_1 ($searchSpace, $value0, $length)
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAnyExcept_2 ($searchSpace, $value0, $value1, $length)
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAnyExcept_3 ($searchSpace, $value0, $value1, $value2, $length)
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAnyExcept_4 ($searchSpace, $value0, $value1, $value2, $value3, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LastIndexOfAnyExcept(mixed ...$args){}
	/**
	 * @param \System\Int32|int $length
	 * @return \System\Boolean
	 */
	protected static function CanVectorizeAndBenefit($length){}
	/**
	 * @param \System\T& $searchSpace
	 * @param \System\T $value
	 * @param \System\Int32|int $length
	 * @return \System\Boolean
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
	 * @uses SpanHelpersMethodsOverride::IndexOfValueType_1 ($searchSpace, $value, $length)
	 * @uses SpanHelpersMethodsOverride::IndexOfValueType_2 ($searchSpace, $value, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IndexOfValueType(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::IndexOfAnyExceptValueType_1 ($searchSpace, $value, $length)
	 * @uses SpanHelpersMethodsOverride::IndexOfAnyExceptValueType_2 ($searchSpace, $value0, $value1, $length)
	 * @uses SpanHelpersMethodsOverride::IndexOfAnyExceptValueType_3 ($searchSpace, $value0, $value1, $value2, $length)
	 * @uses SpanHelpersMethodsOverride::IndexOfAnyExceptValueType_4 ($searchSpace, $value0, $value1, $value2, $value3, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IndexOfAnyExceptValueType(mixed ...$args){}
	/**
	 * @param \System\Char& $searchSpace
	 * @param \System\Char $value0
	 * @param \System\Char $value1
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	protected static function IndexOfAnyChar($searchSpace, $value0, $value1, $length){}
	/**
	 * @uses SpanHelpersMethodsOverride::IndexOfAnyValueType_1 ($searchSpace, $value0, $value1, $length)
	 * @uses SpanHelpersMethodsOverride::IndexOfAnyValueType_2 ($searchSpace, $value0, $value1, $length)
	 * @uses SpanHelpersMethodsOverride::IndexOfAnyValueType_3 ($searchSpace, $value0, $value1, $value2, $length)
	 * @uses SpanHelpersMethodsOverride::IndexOfAnyValueType_4 ($searchSpace, $value0, $value1, $value2, $length)
	 * @uses SpanHelpersMethodsOverride::IndexOfAnyValueType_5 ($searchSpace, $value0, $value1, $value2, $value3, $length)
	 * @uses SpanHelpersMethodsOverride::IndexOfAnyValueType_6 ($searchSpace, $value0, $value1, $value2, $value3, $length)
	 * @uses SpanHelpersMethodsOverride::IndexOfAnyValueType_7 ($searchSpace, $value0, $value1, $value2, $value3, $value4, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IndexOfAnyValueType(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::LastIndexOfValueType_1 ($searchSpace, $value, $length)
	 * @uses SpanHelpersMethodsOverride::LastIndexOfValueType_2 ($searchSpace, $value, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LastIndexOfValueType(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAnyExceptValueType_1 ($searchSpace, $value, $length)
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAnyExceptValueType_2 ($searchSpace, $value0, $value1, $length)
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAnyExceptValueType_3 ($searchSpace, $value0, $value1, $value2, $length)
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAnyExceptValueType_4 ($searchSpace, $value0, $value1, $value2, $value3, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LastIndexOfAnyExceptValueType(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAnyValueType_1 ($searchSpace, $value0, $value1, $length)
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAnyValueType_2 ($searchSpace, $value0, $value1, $length)
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAnyValueType_3 ($searchSpace, $value0, $value1, $value2, $length)
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAnyValueType_4 ($searchSpace, $value0, $value1, $value2, $length)
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAnyValueType_5 ($searchSpace, $value0, $value1, $value2, $value3, $length)
	 * @uses SpanHelpersMethodsOverride::LastIndexOfAnyValueType_6 ($searchSpace, $value0, $value1, $value2, $value3, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LastIndexOfAnyValueType(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::ComputeFirstIndex_1 ($searchSpace, $current, $equals)
	 * @uses SpanHelpersMethodsOverride::ComputeFirstIndex_2 ($searchSpace, $current, $equals)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ComputeFirstIndex(mixed ...$args){}
	/**
	 * @uses SpanHelpersMethodsOverride::ComputeLastIndex_1 ($offset, $equals)
	 * @uses SpanHelpersMethodsOverride::ComputeLastIndex_2 ($offset, $equals)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ComputeLastIndex(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
