<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StringOverride {
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]private function Intern_1 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $str
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Intern_2 ($str){}
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]private function IsInterned_1 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $str
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function IsInterned_2 ($str){}
	/**
	 * @deprecated
	 * @param \System\String|string $strA
	 * @param \System\Int32|int $indexA
	 * @param \System\Int32|int $countA
	 * @param \System\String|string $strB
	 * @param \System\Int32|int $indexB
	 * @param \System\Int32|int $countB
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function CompareOrdinalHelper_1 ($strA, $indexA, $countA, $strB, $indexB, $countB){}
	/**
	 * @deprecated
	 * @param \System\String|string $strA
	 * @param \System\String|string $strB
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function CompareOrdinalHelper_2 ($strA, $strB){}
	/**
	 * @deprecated
	 * @param \System\String|string $strA
	 * @param \System\String|string $strB
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Compare_1 ($strA, $strB){}
	/**
	 * @deprecated
	 * @param \System\String|string $strA
	 * @param \System\String|string $strB
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Compare_2 ($strA, $strB, $ignoreCase){}
	/**
	 * @deprecated
	 * @param \System\String|string $strA
	 * @param \System\String|string $strB
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Compare_3 ($strA, $strB, $comparisonType){}
	/**
	 * @deprecated
	 * @param \System\String|string $strA
	 * @param \System\String|string $strB
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Compare_4 ($strA, $strB, $culture, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $strA
	 * @param \System\String|string $strB
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Compare_5 ($strA, $strB, $ignoreCase, $culture){}
	/**
	 * @deprecated
	 * @param \System\String|string $strA
	 * @param \System\Int32|int $indexA
	 * @param \System\String|string $strB
	 * @param \System\Int32|int $indexB
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Compare_6 ($strA, $indexA, $strB, $indexB, $length){}
	/**
	 * @deprecated
	 * @param \System\String|string $strA
	 * @param \System\Int32|int $indexA
	 * @param \System\String|string $strB
	 * @param \System\Int32|int $indexB
	 * @param \System\Int32|int $length
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Compare_7 ($strA, $indexA, $strB, $indexB, $length, $ignoreCase){}
	/**
	 * @deprecated
	 * @param \System\String|string $strA
	 * @param \System\Int32|int $indexA
	 * @param \System\String|string $strB
	 * @param \System\Int32|int $indexB
	 * @param \System\Int32|int $length
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Compare_8 ($strA, $indexA, $strB, $indexB, $length, $ignoreCase, $culture){}
	/**
	 * @deprecated
	 * @param \System\String|string $strA
	 * @param \System\Int32|int $indexA
	 * @param \System\String|string $strB
	 * @param \System\Int32|int $indexB
	 * @param \System\Int32|int $length
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Compare_9 ($strA, $indexA, $strB, $indexB, $length, $culture, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $strA
	 * @param \System\Int32|int $indexA
	 * @param \System\String|string $strB
	 * @param \System\Int32|int $indexB
	 * @param \System\Int32|int $length
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Compare_10 ($strA, $indexA, $strB, $indexB, $length, $comparisonType){}
	/**
	 * @deprecated
	 * @param \System\String|string $strA
	 * @param \System\String|string $strB
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function CompareOrdinal_1 ($strA, $strB){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $strA [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $strB [generic: System\Char]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function CompareOrdinal_2 ($strA, $strB){}
	/**
	 * @deprecated
	 * @param \System\String|string $strA
	 * @param \System\Int32|int $indexA
	 * @param \System\String|string $strB
	 * @param \System\Int32|int $indexB
	 * @param \System\Int32|int $length
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function CompareOrdinal_3 ($strA, $indexA, $strB, $indexB, $length){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $strB
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_2 ($strB){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function EndsWith_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function EndsWith_2 ($value, $comparisonType){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function EndsWith_3 ($value, $ignoreCase, $culture){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function EndsWith_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function GetHashCode_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function GetHashCode_2 ($value, $comparisonType){}
	/**
	 * @deprecated
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetHashCodeOrdinalIgnoreCase_1 (){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected static function GetHashCodeOrdinalIgnoreCase_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function StartsWith_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function StartsWith_2 ($value, $comparisonType){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function StartsWith_3 ($value, $ignoreCase, $culture){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function StartsWith_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function Ctor_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function Ctor_2 ($value, $startIndex, $length){}
	/**
	 * @deprecated
	 * @param \System\Char* $ptr
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function Ctor_3 ($ptr){}
	/**
	 * @deprecated
	 * @param \System\Char* $ptr
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function Ctor_4 ($ptr, $startIndex, $length){}
	/**
	 * @deprecated
	 * @param \System\SByte* $value
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function Ctor_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\SByte* $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function Ctor_6 ($value, $startIndex, $length){}
	/**
	 * @deprecated
	 * @param \System\SByte* $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @param \System\Text\Encoding $enc
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function Ctor_7 ($value, $startIndex, $length, $enc){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @param \System\Int32|int $count
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function Ctor_8 ($c, $count){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function Ctor_9 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $length
	 * @param \TState $state
	 * @param \System\Buffers\SpanAction_2 $action [generic: System\Char,TState]
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Create_1 ($length, $state, $action){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @param \System\Runtime\CompilerServices\DefaultInterpolatedStringHandler& $handler
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Create_2 ($provider, $handler){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @param \System\Span_1 $initialBuffer [generic: System\Char]
	 * @param \System\Runtime\CompilerServices\DefaultInterpolatedStringHandler& $handler
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Create_3 ($provider, $initialBuffer, $handler){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $sourceIndex
	 * @param \System\Char $destination
	 * @param \System\Int32|int $destinationIndex
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($sourceIndex, $destination, $destinationIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_2 ($destination){}
	/**
	 * @deprecated
	 * @return \System\Char
	 */
	#[MethodOverride]public function ToCharArray_1 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @return \System\Char
	 */
	#[MethodOverride]public function ToCharArray_2 ($startIndex, $length){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function CreateFromChar_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\Char $c1
	 * @param \System\Char $c2
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function CreateFromChar_2 ($c1, $c2){}
	/**
	 * @deprecated
	 * @return \System\CharEnumerator
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_3 (){}
	/**
	 * @deprecated
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsNormalized_1 (){}
	/**
	 * @deprecated
	 * @param \System\Text\NormalizationForm $normalizationForm
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsNormalized_2 ($normalizationForm){}
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]public function Normalize_1 (){}
	/**
	 * @deprecated
	 * @param \System\Text\NormalizationForm $normalizationForm
	 * @return \System\String|string
	 */
	#[MethodOverride]public function Normalize_2 ($normalizationForm){}
	/**
	 * @deprecated
	 * @param \System\Object|object $arg0
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Concat_1 ($arg0){}
	/**
	 * @deprecated
	 * @param \System\Object|object $arg0
	 * @param \System\Object|object $arg1
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Concat_2 ($arg0, $arg1){}
	/**
	 * @deprecated
	 * @param \System\Object|object $arg0
	 * @param \System\Object|object $arg1
	 * @param \System\Object|object $arg2
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Concat_3 ($arg0, $arg1, $arg2){}
	/**
	 * @deprecated
	 * @param \System\Object ...$args
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Concat_4 (...$args){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $values [generic: T]
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Concat_5 ($values){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IEnumerable_1 $values [generic: System\String]
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Concat_6 ($values){}
	/**
	 * @deprecated
	 * @param \System\String|string $str0
	 * @param \System\String|string $str1
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Concat_7 ($str0, $str1){}
	/**
	 * @deprecated
	 * @param \System\String|string $str0
	 * @param \System\String|string $str1
	 * @param \System\String|string $str2
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Concat_8 ($str0, $str1, $str2){}
	/**
	 * @deprecated
	 * @param \System\String|string $str0
	 * @param \System\String|string $str1
	 * @param \System\String|string $str2
	 * @param \System\String|string $str3
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Concat_9 ($str0, $str1, $str2, $str3){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $str0 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $str1 [generic: System\Char]
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Concat_10 ($str0, $str1){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $str0 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $str1 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $str2 [generic: System\Char]
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Concat_11 ($str0, $str1, $str2){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $str0 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $str1 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $str2 [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $str3 [generic: System\Char]
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Concat_12 ($str0, $str1, $str2, $str3){}
	/**
	 * @deprecated
	 * @param \System\String ...$values
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Concat_13 (...$values){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Format_1 ($format, $arg0){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @param \System\Object|object $arg1
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Format_2 ($format, $arg0, $arg1){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @param \System\Object|object $arg1
	 * @param \System\Object|object $arg2
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Format_3 ($format, $arg0, $arg1, $arg2){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\Object ...$args
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Format_4 ($format, ...$args){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Format_5 ($provider, $format, $arg0){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @param \System\Object|object $arg1
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Format_6 ($provider, $format, $arg0, $arg1){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg0
	 * @param \System\Object|object $arg1
	 * @param \System\Object|object $arg2
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Format_7 ($provider, $format, $arg0, $arg1, $arg2){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @param \System\String|string $format
	 * @param \System\Object ...$args
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Format_8 ($provider, $format, ...$args){}
	/**
	 * @deprecated
	 * @param \System\Char $separator
	 * @param \System\String ...$value
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Join_1 ($separator, ...$value){}
	/**
	 * @deprecated
	 * @param \System\String|string $separator
	 * @param \System\String ...$value
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Join_2 ($separator, ...$value){}
	/**
	 * @deprecated
	 * @param \System\Char $separator
	 * @param \System\String $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Join_3 ($separator, $value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\String|string $separator
	 * @param \System\String $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Join_4 ($separator, $value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\String|string $separator
	 * @param \System\Collections\Generic\IEnumerable_1 $values [generic: System\String]
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Join_5 ($separator, $values){}
	/**
	 * @deprecated
	 * @param \System\Char $separator
	 * @param \System\Object ...$values
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Join_6 ($separator, ...$values){}
	/**
	 * @deprecated
	 * @param \System\String|string $separator
	 * @param \System\Object ...$values
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Join_7 ($separator, ...$values){}
	/**
	 * @deprecated
	 * @param \System\Char $separator
	 * @param \System\Collections\Generic\IEnumerable_1 $values [generic: T]
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Join_8 ($separator, $values){}
	/**
	 * @deprecated
	 * @param \System\String|string $separator
	 * @param \System\Collections\Generic\IEnumerable_1 $values [generic: T]
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Join_9 ($separator, $values){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $separator [generic: System\Char]
	 * @param \System\String $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function JoinCore_1 ($separator, $value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $separator [generic: System\Char]
	 * @param \System\Object $values
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function JoinCore_2 ($separator, $values){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $separator [generic: System\Char]
	 * @param \System\Collections\Generic\IEnumerable_1 $values [generic: T]
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function JoinCore_3 ($separator, $values){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $separator [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $values [generic: System\String]
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function JoinCore_4 ($separator, $values){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $totalWidth
	 * @return \System\String|string
	 */
	#[MethodOverride]public function PadLeft_1 ($totalWidth){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $totalWidth
	 * @param \System\Char $paddingChar
	 * @return \System\String|string
	 */
	#[MethodOverride]public function PadLeft_2 ($totalWidth, $paddingChar){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $totalWidth
	 * @return \System\String|string
	 */
	#[MethodOverride]public function PadRight_1 ($totalWidth){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $totalWidth
	 * @param \System\Char $paddingChar
	 * @return \System\String|string
	 */
	#[MethodOverride]public function PadRight_2 ($totalWidth, $paddingChar){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\String|string
	 */
	#[MethodOverride]public function Remove_1 ($startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $startIndex
	 * @return \System\String|string
	 */
	#[MethodOverride]public function Remove_2 ($startIndex){}
	/**
	 * @deprecated
	 * @param \System\String|string $oldValue
	 * @param \System\String|string $newValue
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\String|string
	 */
	#[MethodOverride]public function Replace_1 ($oldValue, $newValue, $ignoreCase, $culture){}
	/**
	 * @deprecated
	 * @param \System\String|string $oldValue
	 * @param \System\String|string $newValue
	 * @param \System\StringComparison $comparisonType
	 * @return \System\String|string
	 */
	#[MethodOverride]public function Replace_2 ($oldValue, $newValue, $comparisonType){}
	/**
	 * @deprecated
	 * @param \System\Char $oldChar
	 * @param \System\Char $newChar
	 * @return \System\String|string
	 */
	#[MethodOverride]public function Replace_3 ($oldChar, $newChar){}
	/**
	 * @deprecated
	 * @param \System\String|string $oldValue
	 * @param \System\String|string $newValue
	 * @return \System\String|string
	 */
	#[MethodOverride]public function Replace_4 ($oldValue, $newValue){}
	/**
	 * @deprecated
	 * @param \System\String|string $oldValue
	 * @param \System\String|string $newValue
	 * @param \System\Globalization\CompareInfo $ci
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\String|string
	 */
	#[MethodOverride]private function ReplaceCore_1 ($oldValue, $newValue, $ci, $options){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $searchSpace [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $oldValue [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $newValue [generic: System\Char]
	 * @param \System\Globalization\CompareInfo $compareInfo
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function ReplaceCore_2 ($searchSpace, $oldValue, $newValue, $compareInfo, $options){}
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]public function ReplaceLineEndings_1 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $replacementText
	 * @return \System\String|string
	 */
	#[MethodOverride]public function ReplaceLineEndings_2 ($replacementText){}
	/**
	 * @deprecated
	 * @param \System\Char $separator
	 * @param \System\StringSplitOptions $options
	 * @return \System\String
	 */
	#[MethodOverride]public function Split_1 ($separator, $options){}
	/**
	 * @deprecated
	 * @param \System\Char $separator
	 * @param \System\Int32|int $count
	 * @param \System\StringSplitOptions $options
	 * @return \System\String
	 */
	#[MethodOverride]public function Split_2 ($separator, $count, $options){}
	/**
	 * @deprecated
	 * @param \System\Char ...$separator
	 * @return \System\String
	 */
	#[MethodOverride]public function Split_3 (...$separator){}
	/**
	 * @deprecated
	 * @param \System\Char $separator
	 * @param \System\Int32|int $count
	 * @return \System\String
	 */
	#[MethodOverride]public function Split_4 ($separator, $count){}
	/**
	 * @deprecated
	 * @param \System\Char $separator
	 * @param \System\StringSplitOptions $options
	 * @return \System\String
	 */
	#[MethodOverride]public function Split_5 ($separator, $options){}
	/**
	 * @deprecated
	 * @param \System\Char $separator
	 * @param \System\Int32|int $count
	 * @param \System\StringSplitOptions $options
	 * @return \System\String
	 */
	#[MethodOverride]public function Split_6 ($separator, $count, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $separator
	 * @param \System\StringSplitOptions $options
	 * @return \System\String
	 */
	#[MethodOverride]public function Split_7 ($separator, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $separator
	 * @param \System\Int32|int $count
	 * @param \System\StringSplitOptions $options
	 * @return \System\String
	 */
	#[MethodOverride]public function Split_8 ($separator, $count, $options){}
	/**
	 * @deprecated
	 * @param \System\String $separator
	 * @param \System\StringSplitOptions $options
	 * @return \System\String
	 */
	#[MethodOverride]public function Split_9 ($separator, $options){}
	/**
	 * @deprecated
	 * @param \System\String $separator
	 * @param \System\Int32|int $count
	 * @param \System\StringSplitOptions $options
	 * @return \System\String
	 */
	#[MethodOverride]public function Split_10 ($separator, $count, $options){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $separators [generic: System\Char]
	 * @param \System\Int32|int $count
	 * @param \System\StringSplitOptions $options
	 * @return \System\String
	 */
	#[MethodOverride]private function SplitInternal_1 ($separators, $count, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $separator
	 * @param \System\String $separators
	 * @param \System\Int32|int $count
	 * @param \System\StringSplitOptions $options
	 * @return \System\String
	 */
	#[MethodOverride]private function SplitInternal_2 ($separator, $separators, $count, $options){}
	/**
	 * @deprecated
	 * @param \System\String|string $separator
	 * @param \System\Int32|int $count
	 * @param \System\StringSplitOptions $options
	 * @return \System\String
	 */
	#[MethodOverride]private function SplitInternal_3 ($separator, $count, $options){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $separators [generic: System\Char]
	 * @param \System\Collections\Generic\ValueListBuilder_1 $sepListBuilder [generic: System\Int32]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function MakeSeparatorList_1 ($separators, $sepListBuilder){}
	/**
	 * @deprecated
	 * @param \System\String|string $separator
	 * @param \System\Collections\Generic\ValueListBuilder_1 $sepListBuilder [generic: System\Int32]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function MakeSeparatorList_2 ($separator, $sepListBuilder){}
	/**
	 * @deprecated
	 * @param \System\String $separators
	 * @param \System\Collections\Generic\ValueListBuilder_1 $sepListBuilder [generic: System\Int32]
	 * @param \System\Collections\Generic\ValueListBuilder_1 $lengthListBuilder [generic: System\Int32]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function MakeSeparatorList_3 ($separators, $sepListBuilder, $lengthListBuilder){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $startIndex
	 * @return \System\String|string
	 */
	#[MethodOverride]public function Substring_1 ($startIndex){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @return \System\String|string
	 */
	#[MethodOverride]public function Substring_2 ($startIndex, $length){}
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]public function ToLower_1 (){}
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\String|string
	 */
	#[MethodOverride]public function ToLower_2 ($culture){}
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]public function ToUpper_1 (){}
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\String|string
	 */
	#[MethodOverride]public function ToUpper_2 ($culture){}
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]public function Trim_1 (){}
	/**
	 * @deprecated
	 * @param \System\Char $trimChar
	 * @return \System\String|string
	 */
	#[MethodOverride]public function Trim_2 ($trimChar){}
	/**
	 * @deprecated
	 * @param \System\Char ...$trimChars
	 * @return \System\String|string
	 */
	#[MethodOverride]public function Trim_3 (...$trimChars){}
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]public function TrimStart_1 (){}
	/**
	 * @deprecated
	 * @param \System\Char $trimChar
	 * @return \System\String|string
	 */
	#[MethodOverride]public function TrimStart_2 ($trimChar){}
	/**
	 * @deprecated
	 * @param \System\Char ...$trimChars
	 * @return \System\String|string
	 */
	#[MethodOverride]public function TrimStart_3 (...$trimChars){}
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]public function TrimEnd_1 (){}
	/**
	 * @deprecated
	 * @param \System\Char $trimChar
	 * @return \System\String|string
	 */
	#[MethodOverride]public function TrimEnd_2 ($trimChar){}
	/**
	 * @deprecated
	 * @param \System\Char ...$trimChars
	 * @return \System\String|string
	 */
	#[MethodOverride]public function TrimEnd_3 (...$trimChars){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Contains_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Contains_2 ($value, $comparisonType){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Contains_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Contains_4 ($value, $comparisonType){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_2 ($value, $startIndex){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_3 ($value, $comparisonType){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_4 ($value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_6 ($value, $startIndex){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_7 ($value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_8 ($value, $comparisonType){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_9 ($value, $startIndex, $comparisonType){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOf_10 ($value, $startIndex, $count, $comparisonType){}
	/**
	 * @deprecated
	 * @param \System\Char $anyOf
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOfAny_1 ($anyOf){}
	/**
	 * @deprecated
	 * @param \System\Char $anyOf
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOfAny_2 ($anyOf, $startIndex){}
	/**
	 * @deprecated
	 * @param \System\Char $anyOf
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function IndexOfAny_3 ($anyOf, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_2 ($value, $startIndex){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_3 ($value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_4 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_5 ($value, $startIndex){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_6 ($value, $startIndex, $count){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_7 ($value, $comparisonType){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_8 ($value, $startIndex, $comparisonType){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOf_9 ($value, $startIndex, $count, $comparisonType){}
	/**
	 * @deprecated
	 * @param \System\Char $anyOf
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOfAny_1 ($anyOf){}
	/**
	 * @deprecated
	 * @param \System\Char $anyOf
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOfAny_2 ($anyOf, $startIndex){}
	/**
	 * @deprecated
	 * @param \System\Char $anyOf
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function LastIndexOfAny_3 ($anyOf, $startIndex, $count){}
	/**
	 * @param \System\Char $value
	 */
	#[MethodOverride]public function __construct_1 ($value){}
	/**
	 * @param \System\Char $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 */
	#[MethodOverride]public function __construct_2 ($value, $startIndex, $length){}
	/**
	 * @param \System\Char* $value
	 */
	#[MethodOverride]public function __construct_3 ($value){}
	/**
	 * @param \System\Char* $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 */
	#[MethodOverride]public function __construct_4 ($value, $startIndex, $length){}
	/**
	 * @param \System\SByte* $value
	 */
	#[MethodOverride]public function __construct_5 ($value){}
	/**
	 * @param \System\SByte* $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 */
	#[MethodOverride]public function __construct_6 ($value, $startIndex, $length){}
	/**
	 * @param \System\SByte* $value
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @param \System\Text\Encoding $enc
	 */
	#[MethodOverride]public function __construct_7 ($value, $startIndex, $length, $enc){}
	/**
	 * @param \System\Char $c
	 * @param \System\Int32|int $count
	 */
	#[MethodOverride]public function __construct_8 ($c, $count){}
	/**
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 */
	#[MethodOverride]public function __construct_9 ($value){}
}
final class String extends \System\Object implements
	\System\IComparable,
	\System\Collections\IEnumerable,
	\System\IConvertible,
	\System\Collections\Generic\IEnumerable_1,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\ICloneable
{
	use StringOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\String|string
	 */
	public static $Empty;
	/**
	 * @property
	 * @var \System\Char
	 * @since readonly
	 */
	public $Chars;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @param \System\Int32|int $length
	 * @return \System\String|string
	 */
	protected static function FastAllocateString($length){}
	/**
	 * @param \System\Byte $data
	 * @return \System\Void|void
	 */
	protected function SetTrailByte($data){}
	/**
	 * @param \System\Byte& &$data
	 * @return \System\Boolean|bool
	 */
	protected function TryGetTrailByte(&$data){}
	/**
	 * @uses StringOverride::Intern_1 <br>private , args: ()<br>
	 * @uses StringOverride::Intern_2 <br>public , args: ($str)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function Intern (\override ...$args){}
	/**
	 * @uses StringOverride::IsInterned_1 <br>private , args: ()<br>
	 * @uses StringOverride::IsInterned_2 <br>public , args: ($str)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function IsInterned (\override ...$args){}
	/**
	 * @param \System\String|string $src
	 * @param \System\IntPtr $dest
	 * @param \System\Int32|int $len
	 * @return \System\Void|void
	 */
	protected static function InternalCopy($src, $dest, $len){}
	/**
	 * @param \System\Byte* $pbNativeBuffer
	 * @param \System\Int32|int $cbNativeBuffer
	 * @param \System\Text\Encoding $encoding
	 * @return \System\Int32|int
	 */
	protected function GetBytesFromEncoding($pbNativeBuffer, $cbNativeBuffer, $encoding){}
	private static function EqualsHelper($strA, $strB){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses StringOverride::CompareOrdinalHelper_1 <br>private , args: ($strA, $indexA, $countA, $strB, $indexB, $countB)<br>
	 * @uses StringOverride::CompareOrdinalHelper_2 <br>private , args: ($strA, $strB)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePrivate]function CompareOrdinalHelper (\override ...$args){}
	/**
	 * @param \System\String|string $strA
	 * @param \System\String|string $strB
	 * @return \System\Boolean|bool
	 */
	protected static function EqualsOrdinalIgnoreCase($strA, $strB){}
	private static function EqualsOrdinalIgnoreCaseNoLengthCheck($strA, $strB){}
	/**
	 * @uses StringOverride::Compare_1 <br>public , args: ($strA, $strB)<br>
	 * @uses StringOverride::Compare_2 <br>public , args: ($strA, $strB, $ignoreCase)<br>
	 * @uses StringOverride::Compare_3 <br>public , args: ($strA, $strB, $comparisonType)<br>
	 * @uses StringOverride::Compare_4 <br>public , args: ($strA, $strB, $culture, $options)<br>
	 * @uses StringOverride::Compare_5 <br>public , args: ($strA, $strB, $ignoreCase, $culture)<br>
	 * @uses StringOverride::Compare_6 <br>public , args: ($strA, $indexA, $strB, $indexB, $length)<br>
	 * @uses StringOverride::Compare_7 <br>public , args: ($strA, $indexA, $strB, $indexB, $length, $ignoreCase)<br>
	 * @uses StringOverride::Compare_8 <br>public , args: ($strA, $indexA, $strB, $indexB, $length, $ignoreCase, $culture)<br>
	 * @uses StringOverride::Compare_9 <br>public , args: ($strA, $indexA, $strB, $indexB, $length, $culture, $options)<br>
	 * @uses StringOverride::Compare_10 <br>public , args: ($strA, $indexA, $strB, $indexB, $length, $comparisonType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function Compare (\override ...$args){}
	/**
	 * @uses StringOverride::CompareOrdinal_1 <br>public , args: ($strA, $strB)<br>
	 * @uses StringOverride::CompareOrdinal_2 <br>protected , args: ($strA, $strB)<br>
	 * @uses StringOverride::CompareOrdinal_3 <br>public , args: ($strA, $indexA, $strB, $indexB, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareOrdinal (\override ...$args){}
	/**
	 * @uses StringOverride::CompareTo_1 <br>public , args: ($value)<br>
	 * @uses StringOverride::CompareTo_2 <br>public , args: ($strB)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	/**
	 * @uses StringOverride::EndsWith_1 <br>public , args: ($value)<br>
	 * @uses StringOverride::EndsWith_2 <br>public , args: ($value, $comparisonType)<br>
	 * @uses StringOverride::EndsWith_3 <br>public , args: ($value, $ignoreCase, $culture)<br>
	 * @uses StringOverride::EndsWith_4 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function EndsWith (\override ...$args){}
	/**
	 * @param \System\String|string $a
	 * @param \System\String|string $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\String|string $a
	 * @param \System\String|string $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @uses StringOverride::GetHashCode_1 <br>public , args: ($value)<br>
	 * @uses StringOverride::GetHashCode_2 <br>public , args: ($value, $comparisonType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetHashCode (\override ...$args){}
	/**
	 * @uses StringOverride::GetHashCodeOrdinalIgnoreCase_1 <br>protected , args: ()<br>
	 * @uses StringOverride::GetHashCodeOrdinalIgnoreCase_2 <br>protected , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverrideProtected]function GetHashCodeOrdinalIgnoreCase (\override ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	protected function GetNonRandomizedHashCode(){}
	/**
	 * @return \System\Int32|int
	 */
	protected function GetNonRandomizedHashCodeOrdinalIgnoreCase(){}
	/**
	 * @uses StringOverride::StartsWith_1 <br>public , args: ($value)<br>
	 * @uses StringOverride::StartsWith_2 <br>public , args: ($value, $comparisonType)<br>
	 * @uses StringOverride::StartsWith_3 <br>public , args: ($value, $ignoreCase, $culture)<br>
	 * @uses StringOverride::StartsWith_4 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function StartsWith (\override ...$args){}
	/**
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Void|void
	 */
	protected static function CheckStringComparison($comparisonType){}
	/**
	 * @param \System\StringComparison $comparisonType
	 * @return \System\Globalization\CompareOptions
	 */
	protected static function GetCaseCompareOfComparisonCulture($comparisonType){}
	private static function GetCompareOptionsFromOrdinalStringComparison($comparisonType){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses StringOverride::Ctor_1 <br>private , args: ($value)<br>
	 * @uses StringOverride::Ctor_2 <br>private , args: ($value, $startIndex, $length)<br>
	 * @uses StringOverride::Ctor_3 <br>private , args: ($ptr)<br>
	 * @uses StringOverride::Ctor_4 <br>private , args: ($ptr, $startIndex, $length)<br>
	 * @uses StringOverride::Ctor_5 <br>private , args: ($value)<br>
	 * @uses StringOverride::Ctor_6 <br>private , args: ($value, $startIndex, $length)<br>
	 * @uses StringOverride::Ctor_7 <br>private , args: ($value, $startIndex, $length, $enc)<br>
	 * @uses StringOverride::Ctor_8 <br>private , args: ($c, $count)<br>
	 * @uses StringOverride::Ctor_9 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function Ctor (\override ...$args){}
	private static function CreateStringForSByteConstructor($pb, $numBytes){}
	/**
	 * @uses StringOverride::Create_1 <br>public , args: ($length, $state, $action)<br>
	 * @uses StringOverride::Create_2 <br>public , args: ($provider, $handler)<br>
	 * @uses StringOverride::Create_3 <br>public , args: ($provider, $initialBuffer, $handler)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function Create (\override ...$args){}
	/**
	 * @param \System\String|string $value
	 * @return \System\ReadOnlySpan_1[System\Char]
	 */
	public static function op_Implicit($value){}
	/**
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @param \System\ReadOnlySpan_1 &$slice [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	protected function TryGetSpan($startIndex, $count, &$slice){}
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	/**
	 * @param \System\String|string $str
	 * @return \System\String|string
	 */
	public static function Copy($str){}
	/**
	 * @uses StringOverride::CopyTo_1 <br>public , args: ($sourceIndex, $destination, $destinationIndex, $count)<br>
	 * @uses StringOverride::CopyTo_2 <br>public , args: ($destination)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @return \System\Boolean|bool
	 */
	public function TryCopyTo($destination){}
	/**
	 * @uses StringOverride::ToCharArray_1 <br>public , args: ()<br>
	 * @uses StringOverride::ToCharArray_2 <br>public , args: ($startIndex, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Char|mixed|\override
	 */
	#[MethodOverridePublic]function ToCharArray (\override ...$args){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	public static function IsNullOrEmpty($value){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	public static function IsNullOrWhiteSpace($value){}
	/**
	 * @return \System\Char&
	 */
	public function GetPinnableReference(){}
	/**
	 * @return \System\Char&
	 */
	protected function GetRawStringData(){}
	/**
	 * @return \System\UInt16&
	 */
	protected function GetRawStringDataAsUInt16(){}
	/**
	 * @param \System\Byte* $bytes
	 * @param \System\Int32|int $byteLength
	 * @param \System\Text\Encoding $encoding
	 * @return \System\String|string
	 */
	protected static function CreateStringFromEncoding($bytes, $byteLength, $encoding){}
	/**
	 * @uses StringOverride::CreateFromChar_1 <br>protected , args: ($c)<br>
	 * @uses StringOverride::CreateFromChar_2 <br>protected , args: ($c1, $c2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function CreateFromChar (\override ...$args){}
	/**
	 * @uses StringOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses StringOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses StringOverride::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\CharEnumerator|\System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @return \System\Text\StringRuneEnumerator
	 */
	public function EnumerateRunes(){}
	/**
	 * @param \System\Char* $ptr
	 * @return \System\Int32|int
	 */
	protected static function wcslen($ptr){}
	/**
	 * @param \System\Byte* $ptr
	 * @return \System\Int32|int
	 */
	protected static function strlen($ptr){}
	/**
	 * @return \System\TypeCode
	 */
	public function GetTypeCode(){}
	private function ToBoolean($provider){}
	private function ToChar($provider){}
	private function ToSByte($provider){}
	private function ToByte($provider){}
	private function ToInt16($provider){}
	private function ToUInt16($provider){}
	private function ToInt32($provider){}
	private function ToUInt32($provider){}
	private function ToInt64($provider){}
	private function ToUInt64($provider){}
	private function ToSingle($provider){}
	private function ToDouble($provider){}
	private function ToDecimal($provider){}
	private function ToDateTime($provider){}
	private function ToType($type, $provider){}
	/**
	 * @uses StringOverride::IsNormalized_1 <br>public , args: ()<br>
	 * @uses StringOverride::IsNormalized_2 <br>public , args: ($normalizationForm)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsNormalized (\override ...$args){}
	/**
	 * @uses StringOverride::Normalize_1 <br>public , args: ()<br>
	 * @uses StringOverride::Normalize_2 <br>public , args: ($normalizationForm)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function Normalize (\override ...$args){}
	private function IsAscii(){}
	private static function FillStringChecked($dest, $destPos, $src){}
	/**
	 * @uses StringOverride::Concat_1 <br>public , args: ($arg0)<br>
	 * @uses StringOverride::Concat_2 <br>public , args: ($arg0, $arg1)<br>
	 * @uses StringOverride::Concat_3 <br>public , args: ($arg0, $arg1, $arg2)<br>
	 * @uses StringOverride::Concat_4 <br>public , args: (...$args)<br>
	 * @uses StringOverride::Concat_5 <br>public , args: ($values)<br>
	 * @uses StringOverride::Concat_6 <br>public , args: ($values)<br>
	 * @uses StringOverride::Concat_7 <br>public , args: ($str0, $str1)<br>
	 * @uses StringOverride::Concat_8 <br>public , args: ($str0, $str1, $str2)<br>
	 * @uses StringOverride::Concat_9 <br>public , args: ($str0, $str1, $str2, $str3)<br>
	 * @uses StringOverride::Concat_10 <br>public , args: ($str0, $str1)<br>
	 * @uses StringOverride::Concat_11 <br>public , args: ($str0, $str1, $str2)<br>
	 * @uses StringOverride::Concat_12 <br>public , args: ($str0, $str1, $str2, $str3)<br>
	 * @uses StringOverride::Concat_13 <br>public , args: (...$values)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function Concat (\override ...$args){}
	/**
	 * @uses StringOverride::Format_1 <br>public , args: ($format, $arg0)<br>
	 * @uses StringOverride::Format_2 <br>public , args: ($format, $arg0, $arg1)<br>
	 * @uses StringOverride::Format_3 <br>public , args: ($format, $arg0, $arg1, $arg2)<br>
	 * @uses StringOverride::Format_4 <br>public , args: ($format, ...$args)<br>
	 * @uses StringOverride::Format_5 <br>public , args: ($provider, $format, $arg0)<br>
	 * @uses StringOverride::Format_6 <br>public , args: ($provider, $format, $arg0, $arg1)<br>
	 * @uses StringOverride::Format_7 <br>public , args: ($provider, $format, $arg0, $arg1, $arg2)<br>
	 * @uses StringOverride::Format_8 <br>public , args: ($provider, $format, ...$args)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function Format (\override ...$args){}
	private static function FormatHelper($provider, $format, $args){}
	/**
	 * @param \System\Int32|int $startIndex
	 * @param \System\String|string $value
	 * @return \System\String|string
	 */
	public function Insert($startIndex, $value){}
	/**
	 * @uses StringOverride::Join_1 <br>public , args: ($separator, ...$value)<br>
	 * @uses StringOverride::Join_2 <br>public , args: ($separator, ...$value)<br>
	 * @uses StringOverride::Join_3 <br>public , args: ($separator, $value, $startIndex, $count)<br>
	 * @uses StringOverride::Join_4 <br>public , args: ($separator, $value, $startIndex, $count)<br>
	 * @uses StringOverride::Join_5 <br>public , args: ($separator, $values)<br>
	 * @uses StringOverride::Join_6 <br>public , args: ($separator, ...$values)<br>
	 * @uses StringOverride::Join_7 <br>public , args: ($separator, ...$values)<br>
	 * @uses StringOverride::Join_8 <br>public , args: ($separator, $values)<br>
	 * @uses StringOverride::Join_9 <br>public , args: ($separator, $values)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function Join (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses StringOverride::JoinCore_1 <br>private , args: ($separator, $value, $startIndex, $count)<br>
	 * @uses StringOverride::JoinCore_2 <br>private , args: ($separator, $values)<br>
	 * @uses StringOverride::JoinCore_3 <br>private , args: ($separator, $values)<br>
	 * @uses StringOverride::JoinCore_4 <br>private , args: ($separator, $values)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function JoinCore (\override ...$args){}
	/**
	 * @uses StringOverride::PadLeft_1 <br>public , args: ($totalWidth)<br>
	 * @uses StringOverride::PadLeft_2 <br>public , args: ($totalWidth, $paddingChar)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function PadLeft (\override ...$args){}
	/**
	 * @uses StringOverride::PadRight_1 <br>public , args: ($totalWidth)<br>
	 * @uses StringOverride::PadRight_2 <br>public , args: ($totalWidth, $paddingChar)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function PadRight (\override ...$args){}
	/**
	 * @uses StringOverride::Remove_1 <br>public , args: ($startIndex, $count)<br>
	 * @uses StringOverride::Remove_2 <br>public , args: ($startIndex)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function Remove (\override ...$args){}
	/**
	 * @uses StringOverride::Replace_1 <br>public , args: ($oldValue, $newValue, $ignoreCase, $culture)<br>
	 * @uses StringOverride::Replace_2 <br>public , args: ($oldValue, $newValue, $comparisonType)<br>
	 * @uses StringOverride::Replace_3 <br>public , args: ($oldChar, $newChar)<br>
	 * @uses StringOverride::Replace_4 <br>public , args: ($oldValue, $newValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function Replace (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses StringOverride::ReplaceCore_1 <br>private , args: ($oldValue, $newValue, $ci, $options)<br>
	 * @uses StringOverride::ReplaceCore_2 <br>private , args: ($searchSpace, $oldValue, $newValue, $compareInfo, $options)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function ReplaceCore (\override ...$args){}
	private function ReplaceHelper($oldValueLength, $newValue, $indices){}
	/**
	 * @uses StringOverride::ReplaceLineEndings_1 <br>public , args: ()<br>
	 * @uses StringOverride::ReplaceLineEndings_2 <br>public , args: ($replacementText)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function ReplaceLineEndings (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $text [generic: System\Char]
	 * @param \System\Int32& &$stride
	 * @return \System\Int32|int
	 */
	protected static function IndexOfNewlineChar($text, &$stride){}
	/**
	 * @uses StringOverride::Split_1 <br>public , args: ($separator, $options)<br>
	 * @uses StringOverride::Split_2 <br>public , args: ($separator, $count, $options)<br>
	 * @uses StringOverride::Split_3 <br>public , args: (...$separator)<br>
	 * @uses StringOverride::Split_4 <br>public , args: ($separator, $count)<br>
	 * @uses StringOverride::Split_5 <br>public , args: ($separator, $options)<br>
	 * @uses StringOverride::Split_6 <br>public , args: ($separator, $count, $options)<br>
	 * @uses StringOverride::Split_7 <br>public , args: ($separator, $options)<br>
	 * @uses StringOverride::Split_8 <br>public , args: ($separator, $count, $options)<br>
	 * @uses StringOverride::Split_9 <br>public , args: ($separator, $options)<br>
	 * @uses StringOverride::Split_10 <br>public , args: ($separator, $count, $options)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|mixed|\override
	 */
	#[MethodOverridePublic]function Split (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses StringOverride::SplitInternal_1 <br>private , args: ($separators, $count, $options)<br>
	 * @uses StringOverride::SplitInternal_2 <br>private , args: ($separator, $separators, $count, $options)<br>
	 * @uses StringOverride::SplitInternal_3 <br>private , args: ($separator, $count, $options)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|mixed|\override
	 */
	#[MethodOverridePrivate]function SplitInternal (\override ...$args){}
	private function CreateSplitArrayOfThisAsSoleValue($options, $count){}
	private function SplitWithoutPostProcessing($sepList, $lengthList, $defaultLength, $count){}
	private function SplitWithPostProcessing($sepList, $lengthList, $defaultLength, $count, $options){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses StringOverride::MakeSeparatorList_1 <br>private , args: ($separators, $sepListBuilder)<br>
	 * @uses StringOverride::MakeSeparatorList_2 <br>private , args: ($separator, $sepListBuilder)<br>
	 * @uses StringOverride::MakeSeparatorList_3 <br>private , args: ($separators, $sepListBuilder, $lengthListBuilder)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function MakeSeparatorList (\override ...$args){}
	private function MakeSeparatorListVectorized($sepListBuilder, $c, $c2, $c3){}
	private static function CheckStringSplitOptions($options){}
	/**
	 * @uses StringOverride::Substring_1 <br>public , args: ($startIndex)<br>
	 * @uses StringOverride::Substring_2 <br>public , args: ($startIndex, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function Substring (\override ...$args){}
	private function ThrowSubstringArgumentOutOfRange($startIndex, $length){}
	private function InternalSubString($startIndex, $length){}
	/**
	 * @uses StringOverride::ToLower_1 <br>public , args: ()<br>
	 * @uses StringOverride::ToLower_2 <br>public , args: ($culture)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function ToLower (\override ...$args){}
	/**
	 * @return \System\String|string
	 */
	public function ToLowerInvariant(){}
	/**
	 * @uses StringOverride::ToUpper_1 <br>public , args: ()<br>
	 * @uses StringOverride::ToUpper_2 <br>public , args: ($culture)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function ToUpper (\override ...$args){}
	/**
	 * @return \System\String|string
	 */
	public function ToUpperInvariant(){}
	/**
	 * @uses StringOverride::Trim_1 <br>public , args: ()<br>
	 * @uses StringOverride::Trim_2 <br>public , args: ($trimChar)<br>
	 * @uses StringOverride::Trim_3 <br>public , args: (...$trimChars)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function Trim (\override ...$args){}
	/**
	 * @uses StringOverride::TrimStart_1 <br>public , args: ()<br>
	 * @uses StringOverride::TrimStart_2 <br>public , args: ($trimChar)<br>
	 * @uses StringOverride::TrimStart_3 <br>public , args: (...$trimChars)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function TrimStart (\override ...$args){}
	/**
	 * @uses StringOverride::TrimEnd_1 <br>public , args: ()<br>
	 * @uses StringOverride::TrimEnd_2 <br>public , args: ($trimChar)<br>
	 * @uses StringOverride::TrimEnd_3 <br>public , args: (...$trimChars)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function TrimEnd (\override ...$args){}
	private function TrimWhiteSpaceHelper($trimType){}
	private function TrimHelper($trimChars, $trimCharsLength, $trimType){}
	private function CreateTrimmedString($start, $end){}
	/**
	 * @uses StringOverride::Contains_1 <br>public , args: ($value)<br>
	 * @uses StringOverride::Contains_2 <br>public , args: ($value, $comparisonType)<br>
	 * @uses StringOverride::Contains_3 <br>public , args: ($value)<br>
	 * @uses StringOverride::Contains_4 <br>public , args: ($value, $comparisonType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Contains (\override ...$args){}
	/**
	 * @uses StringOverride::IndexOf_1 <br>public , args: ($value)<br>
	 * @uses StringOverride::IndexOf_2 <br>public , args: ($value, $startIndex)<br>
	 * @uses StringOverride::IndexOf_3 <br>public , args: ($value, $comparisonType)<br>
	 * @uses StringOverride::IndexOf_4 <br>public , args: ($value, $startIndex, $count)<br>
	 * @uses StringOverride::IndexOf_5 <br>public , args: ($value)<br>
	 * @uses StringOverride::IndexOf_6 <br>public , args: ($value, $startIndex)<br>
	 * @uses StringOverride::IndexOf_7 <br>public , args: ($value, $startIndex, $count)<br>
	 * @uses StringOverride::IndexOf_8 <br>public , args: ($value, $comparisonType)<br>
	 * @uses StringOverride::IndexOf_9 <br>public , args: ($value, $startIndex, $comparisonType)<br>
	 * @uses StringOverride::IndexOf_10 <br>public , args: ($value, $startIndex, $count, $comparisonType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function IndexOf (\override ...$args){}
	private function IndexOfCharOrdinalIgnoreCase($value){}
	/**
	 * @uses StringOverride::IndexOfAny_1 <br>public , args: ($anyOf)<br>
	 * @uses StringOverride::IndexOfAny_2 <br>public , args: ($anyOf, $startIndex)<br>
	 * @uses StringOverride::IndexOfAny_3 <br>public , args: ($anyOf, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function IndexOfAny (\override ...$args){}
	/**
	 * @uses StringOverride::LastIndexOf_1 <br>public , args: ($value)<br>
	 * @uses StringOverride::LastIndexOf_2 <br>public , args: ($value, $startIndex)<br>
	 * @uses StringOverride::LastIndexOf_3 <br>public , args: ($value, $startIndex, $count)<br>
	 * @uses StringOverride::LastIndexOf_4 <br>public , args: ($value)<br>
	 * @uses StringOverride::LastIndexOf_5 <br>public , args: ($value, $startIndex)<br>
	 * @uses StringOverride::LastIndexOf_6 <br>public , args: ($value, $startIndex, $count)<br>
	 * @uses StringOverride::LastIndexOf_7 <br>public , args: ($value, $comparisonType)<br>
	 * @uses StringOverride::LastIndexOf_8 <br>public , args: ($value, $startIndex, $comparisonType)<br>
	 * @uses StringOverride::LastIndexOf_9 <br>public , args: ($value, $startIndex, $count, $comparisonType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function LastIndexOf (\override ...$args){}
	/**
	 * @uses StringOverride::LastIndexOfAny_1 <br>public , args: ($anyOf)<br>
	 * @uses StringOverride::LastIndexOfAny_2 <br>public , args: ($anyOf, $startIndex)<br>
	 * @uses StringOverride::LastIndexOfAny_3 <br>public , args: ($anyOf, $startIndex, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function LastIndexOfAny (\override ...$args){}
	/**
	 * @uses StringOverride::__construct_1 <br>public , args: ($value)<br>
	 * @uses StringOverride::__construct_2 <br>public , args: ($value, $startIndex, $length)<br>
	 * @uses StringOverride::__construct_3 <br>public , args: ($value)<br>
	 * @uses StringOverride::__construct_4 <br>public , args: ($value, $startIndex, $length)<br>
	 * @uses StringOverride::__construct_5 <br>public , args: ($value)<br>
	 * @uses StringOverride::__construct_6 <br>public , args: ($value, $startIndex, $length)<br>
	 * @uses StringOverride::__construct_7 <br>public , args: ($value, $startIndex, $length, $enc)<br>
	 * @uses StringOverride::__construct_8 <br>public , args: ($c, $count)<br>
	 * @uses StringOverride::__construct_9 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}