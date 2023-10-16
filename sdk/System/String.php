<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StringMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function Intern_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Intern_2($str){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function IsInterned_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function IsInterned_2($str){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function CompareOrdinalHelper_1($strA, $indexA, $countA, $strB, $indexB, $countB){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function CompareOrdinalHelper_2($strA, $strB){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Compare_1($strA, $strB){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Compare_2($strA, $strB, $ignoreCase){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Compare_3($strA, $strB, $comparisonType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Compare_4($strA, $strB, $culture, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Compare_5($strA, $strB, $ignoreCase, $culture){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Compare_6($strA, $indexA, $strB, $indexB, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Compare_7($strA, $indexA, $strB, $indexB, $length, $ignoreCase){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Compare_8($strA, $indexA, $strB, $indexB, $length, $ignoreCase, $culture){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Compare_9($strA, $indexA, $strB, $indexB, $length, $culture, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Compare_10($strA, $indexA, $strB, $indexB, $length, $comparisonType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function CompareOrdinal_1($strA, $strB){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function CompareOrdinal_2($strA, $strB){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function CompareOrdinal_3($strA, $indexA, $strB, $indexB, $length){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_2($strB){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function EndsWith_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function EndsWith_2($value, $comparisonType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function EndsWith_3($value, $ignoreCase, $culture){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function EndsWith_4($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_3($value, $comparisonType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Equals_4($a, $b){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Equals_5($a, $b, $comparisonType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_2($comparisonType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function GetHashCode_3($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function GetHashCode_4($value, $comparisonType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetHashCodeOrdinalIgnoreCase_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected static function GetHashCodeOrdinalIgnoreCase_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function StartsWith_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function StartsWith_2($value, $comparisonType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function StartsWith_3($value, $ignoreCase, $culture){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function StartsWith_4($value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function Ctor_1($value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function Ctor_2($value, $startIndex, $length){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function Ctor_3($ptr){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function Ctor_4($ptr, $startIndex, $length){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function Ctor_5($value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function Ctor_6($value, $startIndex, $length){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function Ctor_7($value, $startIndex, $length, $enc){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function Ctor_8($c, $count){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function Ctor_9($value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Create_1($length, $state, $action){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Create_2($provider, $handler){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Create_3($provider, $initialBuffer, $handler){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($sourceIndex, $destination, $destinationIndex, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_2($destination){}
	/**
	 * @return \System\Char[]
	 */
	#[MethodOverride] public  function ToCharArray_1(){}
	/**
	 * @return \System\Char[]
	 */
	#[MethodOverride] public  function ToCharArray_2($startIndex, $length){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function CreateFromChar_1($c){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function CreateFromChar_2($c1, $c2){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2($provider){}
	/**
	 * @return \System\CharEnumerator
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsNormalized_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsNormalized_2($normalizationForm){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function Normalize_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function Normalize_2($normalizationForm){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Concat_1($arg0){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Concat_2($arg0, $arg1){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Concat_3($arg0, $arg1, $arg2){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Concat_4($args){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Concat_5($values){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Concat_6($values){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Concat_7($str0, $str1){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Concat_8($str0, $str1, $str2){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Concat_9($str0, $str1, $str2, $str3){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Concat_10($str0, $str1){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Concat_11($str0, $str1, $str2){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Concat_12($str0, $str1, $str2, $str3){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Concat_13($values){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Format_1($format, $arg0){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Format_2($format, $arg0, $arg1){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Format_3($format, $arg0, $arg1, $arg2){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Format_4($format, $args){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Format_5($provider, $format, $arg0){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Format_6($provider, $format, $arg0, $arg1){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Format_7($provider, $format, $arg0, $arg1, $arg2){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Format_8($provider, $format, $args){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Join_1($separator, $value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Join_2($separator, $value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Join_3($separator, $value, $startIndex, $count){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Join_4($separator, $value, $startIndex, $count){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Join_5($separator, $values){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Join_6($separator, $values){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Join_7($separator, $values){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Join_8($separator, $values){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Join_9($separator, $values){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function JoinCore_1($separator, $value, $startIndex, $count){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function JoinCore_2($separator, $values){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function JoinCore_3($separator, $values){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function JoinCore_4($separator, $values){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function PadLeft_1($totalWidth){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function PadLeft_2($totalWidth, $paddingChar){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function PadRight_1($totalWidth){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function PadRight_2($totalWidth, $paddingChar){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function Remove_1($startIndex, $count){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function Remove_2($startIndex){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function Replace_1($oldValue, $newValue, $ignoreCase, $culture){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function Replace_2($oldValue, $newValue, $comparisonType){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function Replace_3($oldChar, $newChar){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function Replace_4($oldValue, $newValue){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function ReplaceCore_1($oldValue, $newValue, $ci, $options){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function ReplaceCore_2($searchSpace, $oldValue, $newValue, $compareInfo, $options){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ReplaceLineEndings_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ReplaceLineEndings_2($replacementText){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function Split_1($separator, $options){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function Split_2($separator, $count, $options){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function Split_3($separator){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function Split_4($separator, $count){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function Split_5($separator, $options){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function Split_6($separator, $count, $options){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function Split_7($separator, $options){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function Split_8($separator, $count, $options){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function Split_9($separator, $options){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public  function Split_10($separator, $count, $options){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] private  function SplitInternal_1($separators, $count, $options){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] private  function SplitInternal_2($separator, $separators, $count, $options){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] private  function SplitInternal_3($separator, $count, $options){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function MakeSeparatorList_1($separators, $sepListBuilder){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function MakeSeparatorList_2($separator, $sepListBuilder){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function MakeSeparatorList_3($separators, $sepListBuilder, $lengthListBuilder){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function Substring_1($startIndex){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function Substring_2($startIndex, $length){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToLower_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToLower_2($culture){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToUpper_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToUpper_2($culture){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function Trim_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function Trim_2($trimChar){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function Trim_3($trimChars){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function TrimStart_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function TrimStart_2($trimChar){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function TrimStart_3($trimChars){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function TrimEnd_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function TrimEnd_2($trimChar){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function TrimEnd_3($trimChars){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_2($value, $comparisonType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_3($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_4($value, $comparisonType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_2($value, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_3($value, $comparisonType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_4($value, $startIndex, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_5($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_6($value, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_7($value, $startIndex, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_8($value, $comparisonType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_9($value, $startIndex, $comparisonType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_10($value, $startIndex, $count, $comparisonType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOfAny_1($anyOf){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOfAny_2($anyOf, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOfAny_3($anyOf, $startIndex, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_2($value, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_3($value, $startIndex, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_4($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_5($value, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_6($value, $startIndex, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_7($value, $comparisonType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_8($value, $startIndex, $comparisonType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_9($value, $startIndex, $count, $comparisonType){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOfAny_1($anyOf){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOfAny_2($anyOf, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOfAny_3($anyOf, $startIndex, $count){}
}
/**
 */
class String extends \System\Object implements 
	\System\IComparable,
	\System\Collections\IEnumerable,
	\System\IConvertible,
	\System\Collections\Generic\IEnumerable_1,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\ICloneable
{
	/**
	 * @var \System\String
	 * @field
	 */
	public readonly $Empty;
	/**
	 * @var \System\Char
	 * @property
	 */
	public readonly $Chars;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Length;
	/**
	 * @param \System\Int32|int $length
	 * @return \System\String|string
	 */
	protected static function FastAllocateString($length){}
	/**
	 * @param \System\Byte $data
	 * @return \System\Void|void
	 */
	protected  function SetTrailByte($data){}
	/**
	 * @param \System\Byte& $data
	 * @return \System\Boolean
	 */
	protected  function TryGetTrailByte($data){}
	/**
	 * @uses StringMethodsOverride::Intern_1 ()
	 * @uses StringMethodsOverride::Intern_2 ($str)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Intern(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::IsInterned_1 ()
	 * @uses StringMethodsOverride::IsInterned_2 ($str)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsInterned(mixed ...$args){}
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
	protected  function GetBytesFromEncoding($pbNativeBuffer, $cbNativeBuffer, $encoding){}
	/**
	 * @param \System\String|string $strA
	 * @param \System\String|string $strB
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EqualsHelper($strA, $strB){}
	/**
	 * @uses StringMethodsOverride::CompareOrdinalHelper_1 ($strA, $indexA, $countA, $strB, $indexB, $countB)
	 * @uses StringMethodsOverride::CompareOrdinalHelper_2 ($strA, $strB)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareOrdinalHelper(mixed ...$args){}
	/**
	 * @param \System\String|string $strA
	 * @param \System\String|string $strB
	 * @return \System\Boolean
	 */
	protected static function EqualsOrdinalIgnoreCase($strA, $strB){}
	/**
	 * @param \System\String|string $strA
	 * @param \System\String|string $strB
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EqualsOrdinalIgnoreCaseNoLengthCheck($strA, $strB){}
	/**
	 * @uses StringMethodsOverride::Compare_1 ($strA, $strB)
	 * @uses StringMethodsOverride::Compare_2 ($strA, $strB, $ignoreCase)
	 * @uses StringMethodsOverride::Compare_3 ($strA, $strB, $comparisonType)
	 * @uses StringMethodsOverride::Compare_4 ($strA, $strB, $culture, $options)
	 * @uses StringMethodsOverride::Compare_5 ($strA, $strB, $ignoreCase, $culture)
	 * @uses StringMethodsOverride::Compare_6 ($strA, $indexA, $strB, $indexB, $length)
	 * @uses StringMethodsOverride::Compare_7 ($strA, $indexA, $strB, $indexB, $length, $ignoreCase)
	 * @uses StringMethodsOverride::Compare_8 ($strA, $indexA, $strB, $indexB, $length, $ignoreCase, $culture)
	 * @uses StringMethodsOverride::Compare_9 ($strA, $indexA, $strB, $indexB, $length, $culture, $options)
	 * @uses StringMethodsOverride::Compare_10 ($strA, $indexA, $strB, $indexB, $length, $comparisonType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Compare(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::CompareOrdinal_1 ($strA, $strB)
	 * @uses StringMethodsOverride::CompareOrdinal_2 ($strA, $strB)
	 * @uses StringMethodsOverride::CompareOrdinal_3 ($strA, $indexA, $strB, $indexB, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CompareOrdinal(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::CompareTo_1 ($value)
	 * @uses StringMethodsOverride::CompareTo_2 ($strB)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::EndsWith_1 ($value)
	 * @uses StringMethodsOverride::EndsWith_2 ($value, $comparisonType)
	 * @uses StringMethodsOverride::EndsWith_3 ($value, $ignoreCase, $culture)
	 * @uses StringMethodsOverride::EndsWith_4 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function EndsWith(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::Equals_1 ($obj)
	 * @uses StringMethodsOverride::Equals_2 ($value)
	 * @uses StringMethodsOverride::Equals_3 ($value, $comparisonType)
	 * @uses StringMethodsOverride::Equals_4 ($a, $b)
	 * @uses StringMethodsOverride::Equals_5 ($a, $b, $comparisonType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Equals(mixed ...$args){}
	/**
	 * @param \System\String|string $a
	 * @param \System\String|string $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\String|string $a
	 * @param \System\String|string $b
	 * @return \System\Boolean
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @uses StringMethodsOverride::GetHashCode_1 ()
	 * @uses StringMethodsOverride::GetHashCode_2 ($comparisonType)
	 * @uses StringMethodsOverride::GetHashCode_3 ($value)
	 * @uses StringMethodsOverride::GetHashCode_4 ($value, $comparisonType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetHashCode(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::GetHashCodeOrdinalIgnoreCase_1 ()
	 * @uses StringMethodsOverride::GetHashCodeOrdinalIgnoreCase_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetHashCodeOrdinalIgnoreCase(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function GetNonRandomizedHashCode(){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function GetNonRandomizedHashCodeOrdinalIgnoreCase(){}
	/**
	 * @uses StringMethodsOverride::StartsWith_1 ($value)
	 * @uses StringMethodsOverride::StartsWith_2 ($value, $comparisonType)
	 * @uses StringMethodsOverride::StartsWith_3 ($value, $ignoreCase, $culture)
	 * @uses StringMethodsOverride::StartsWith_4 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartsWith(mixed ...$args){}
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
	/**
	 * @param \System\StringComparison $comparisonType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCompareOptionsFromOrdinalStringComparison($comparisonType){}
	/**
	 * @uses StringMethodsOverride::Ctor_1 ($value)
	 * @uses StringMethodsOverride::Ctor_2 ($value, $startIndex, $length)
	 * @uses StringMethodsOverride::Ctor_3 ($ptr)
	 * @uses StringMethodsOverride::Ctor_4 ($ptr, $startIndex, $length)
	 * @uses StringMethodsOverride::Ctor_5 ($value)
	 * @uses StringMethodsOverride::Ctor_6 ($value, $startIndex, $length)
	 * @uses StringMethodsOverride::Ctor_7 ($value, $startIndex, $length, $enc)
	 * @uses StringMethodsOverride::Ctor_8 ($c, $count)
	 * @uses StringMethodsOverride::Ctor_9 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Ctor(mixed ...$args){}
	/**
	 * @param \System\Byte* $pb
	 * @param \System\Int32|int $numBytes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateStringForSByteConstructor($pb, $numBytes){}
	/**
	 * @uses StringMethodsOverride::Create_1 ($length, $state, $action)
	 * @uses StringMethodsOverride::Create_2 ($provider, $handler)
	 * @uses StringMethodsOverride::Create_3 ($provider, $initialBuffer, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Create(mixed ...$args){}
	/**
	 * @param \System\String|string $value
	 * @return \System\ReadOnlySpan_1
	 */
	public static function op_Implicit($value){}
	/**
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $count
	 * @param \System\ReadOnlySpan_1& $slice
	 * @return \System\Boolean
	 */
	protected  function TryGetSpan($startIndex, $count, $slice){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @param \System\String|string $str
	 * @return \System\String|string
	 */
	public static function Copy($str){}
	/**
	 * @uses StringMethodsOverride::CopyTo_1 ($sourceIndex, $destination, $destinationIndex, $count)
	 * @uses StringMethodsOverride::CopyTo_2 ($destination)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @param \System\Span_1 $destination
	 * @return \System\Boolean
	 */
	public  function TryCopyTo($destination){}
	/**
	 * @uses StringMethodsOverride::ToCharArray_1 ()
	 * @uses StringMethodsOverride::ToCharArray_2 ($startIndex, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToCharArray(mixed ...$args){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Boolean
	 */
	public static function IsNullOrEmpty($value){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Boolean
	 */
	public static function IsNullOrWhiteSpace($value){}
	/**
	 * @return \System\Char&
	 */
	public  function GetPinnableReference(){}
	/**
	 * @return \System\Char&
	 */
	protected  function GetRawStringData(){}
	/**
	 * @return \System\UInt16&
	 */
	protected  function GetRawStringDataAsUInt16(){}
	/**
	 * @param \System\Byte* $bytes
	 * @param \System\Int32|int $byteLength
	 * @param \System\Text\Encoding $encoding
	 * @return \System\String|string
	 */
	protected static function CreateStringFromEncoding($bytes, $byteLength, $encoding){}
	/**
	 * @uses StringMethodsOverride::CreateFromChar_1 ($c)
	 * @uses StringMethodsOverride::CreateFromChar_2 ($c1, $c2)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateFromChar(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::ToString_1 ()
	 * @uses StringMethodsOverride::ToString_2 ($provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::GetEnumerator_1 ()
	 * @uses StringMethodsOverride::GetEnumerator_2 ()
	 * @uses StringMethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @return \System\Text\StringRuneEnumerator
	 */
	public  function EnumerateRunes(){}
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
	public  function GetTypeCode(){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToBoolean($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToChar($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToSByte($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToByte($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToInt16($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToUInt16($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToInt32($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToUInt32($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToInt64($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToUInt64($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToSingle($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToDouble($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToDecimal($provider){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToDateTime($provider){}
	/**
	 * @param \System\Type $type
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ToType($type, $provider){}
	/**
	 * @uses StringMethodsOverride::IsNormalized_1 ()
	 * @uses StringMethodsOverride::IsNormalized_2 ($normalizationForm)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsNormalized(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::Normalize_1 ()
	 * @uses StringMethodsOverride::Normalize_2 ($normalizationForm)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Normalize(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsAscii(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Char
	 */
	public  function get_Chars($index){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @param \System\String|string $dest
	 * @param \System\Int32|int $destPos
	 * @param \System\String|string $src
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FillStringChecked($dest, $destPos, $src){}
	/**
	 * @uses StringMethodsOverride::Concat_1 ($arg0)
	 * @uses StringMethodsOverride::Concat_2 ($arg0, $arg1)
	 * @uses StringMethodsOverride::Concat_3 ($arg0, $arg1, $arg2)
	 * @uses StringMethodsOverride::Concat_4 ($args)
	 * @uses StringMethodsOverride::Concat_5 ($values)
	 * @uses StringMethodsOverride::Concat_6 ($values)
	 * @uses StringMethodsOverride::Concat_7 ($str0, $str1)
	 * @uses StringMethodsOverride::Concat_8 ($str0, $str1, $str2)
	 * @uses StringMethodsOverride::Concat_9 ($str0, $str1, $str2, $str3)
	 * @uses StringMethodsOverride::Concat_10 ($str0, $str1)
	 * @uses StringMethodsOverride::Concat_11 ($str0, $str1, $str2)
	 * @uses StringMethodsOverride::Concat_12 ($str0, $str1, $str2, $str3)
	 * @uses StringMethodsOverride::Concat_13 ($values)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Concat(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::Format_1 ($format, $arg0)
	 * @uses StringMethodsOverride::Format_2 ($format, $arg0, $arg1)
	 * @uses StringMethodsOverride::Format_3 ($format, $arg0, $arg1, $arg2)
	 * @uses StringMethodsOverride::Format_4 ($format, $args)
	 * @uses StringMethodsOverride::Format_5 ($provider, $format, $arg0)
	 * @uses StringMethodsOverride::Format_6 ($provider, $format, $arg0, $arg1)
	 * @uses StringMethodsOverride::Format_7 ($provider, $format, $arg0, $arg1, $arg2)
	 * @uses StringMethodsOverride::Format_8 ($provider, $format, $args)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Format(mixed ...$args){}
	/**
	 * @param \System\IFormatProvider $provider
	 * @param \System\String|string $format
	 * @param \System\ReadOnlySpan_1 $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FormatHelper($provider, $format, $args){}
	/**
	 * @param \System\Int32|int $startIndex
	 * @param \System\String|string $value
	 * @return \System\String|string
	 */
	public  function Insert($startIndex, $value){}
	/**
	 * @uses StringMethodsOverride::Join_1 ($separator, $value)
	 * @uses StringMethodsOverride::Join_2 ($separator, $value)
	 * @uses StringMethodsOverride::Join_3 ($separator, $value, $startIndex, $count)
	 * @uses StringMethodsOverride::Join_4 ($separator, $value, $startIndex, $count)
	 * @uses StringMethodsOverride::Join_5 ($separator, $values)
	 * @uses StringMethodsOverride::Join_6 ($separator, $values)
	 * @uses StringMethodsOverride::Join_7 ($separator, $values)
	 * @uses StringMethodsOverride::Join_8 ($separator, $values)
	 * @uses StringMethodsOverride::Join_9 ($separator, $values)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Join(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::JoinCore_1 ($separator, $value, $startIndex, $count)
	 * @uses StringMethodsOverride::JoinCore_2 ($separator, $values)
	 * @uses StringMethodsOverride::JoinCore_3 ($separator, $values)
	 * @uses StringMethodsOverride::JoinCore_4 ($separator, $values)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function JoinCore(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::PadLeft_1 ($totalWidth)
	 * @uses StringMethodsOverride::PadLeft_2 ($totalWidth, $paddingChar)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PadLeft(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::PadRight_1 ($totalWidth)
	 * @uses StringMethodsOverride::PadRight_2 ($totalWidth, $paddingChar)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function PadRight(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::Remove_1 ($startIndex, $count)
	 * @uses StringMethodsOverride::Remove_2 ($startIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::Replace_1 ($oldValue, $newValue, $ignoreCase, $culture)
	 * @uses StringMethodsOverride::Replace_2 ($oldValue, $newValue, $comparisonType)
	 * @uses StringMethodsOverride::Replace_3 ($oldChar, $newChar)
	 * @uses StringMethodsOverride::Replace_4 ($oldValue, $newValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Replace(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::ReplaceCore_1 ($oldValue, $newValue, $ci, $options)
	 * @uses StringMethodsOverride::ReplaceCore_2 ($searchSpace, $oldValue, $newValue, $compareInfo, $options)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReplaceCore(mixed ...$args){}
	/**
	 * @param \System\Int32|int $oldValueLength
	 * @param \System\String|string $newValue
	 * @param \System\ReadOnlySpan_1 $indices
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ReplaceHelper($oldValueLength, $newValue, $indices){}
	/**
	 * @uses StringMethodsOverride::ReplaceLineEndings_1 ()
	 * @uses StringMethodsOverride::ReplaceLineEndings_2 ($replacementText)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ReplaceLineEndings(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $text
	 * @param \System\Int32& $stride
	 * @return \System\Int32|int
	 */
	protected static function IndexOfNewlineChar($text, $stride){}
	/**
	 * @uses StringMethodsOverride::Split_1 ($separator, $options)
	 * @uses StringMethodsOverride::Split_2 ($separator, $count, $options)
	 * @uses StringMethodsOverride::Split_3 ($separator)
	 * @uses StringMethodsOverride::Split_4 ($separator, $count)
	 * @uses StringMethodsOverride::Split_5 ($separator, $options)
	 * @uses StringMethodsOverride::Split_6 ($separator, $count, $options)
	 * @uses StringMethodsOverride::Split_7 ($separator, $options)
	 * @uses StringMethodsOverride::Split_8 ($separator, $count, $options)
	 * @uses StringMethodsOverride::Split_9 ($separator, $options)
	 * @uses StringMethodsOverride::Split_10 ($separator, $count, $options)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Split(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::SplitInternal_1 ($separators, $count, $options)
	 * @uses StringMethodsOverride::SplitInternal_2 ($separator, $separators, $count, $options)
	 * @uses StringMethodsOverride::SplitInternal_3 ($separator, $count, $options)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SplitInternal(mixed ...$args){}
	/**
	 * @param \System\StringSplitOptions $options
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateSplitArrayOfThisAsSoleValue($options, $count){}
	/**
	 * @param \System\ReadOnlySpan_1 $sepList
	 * @param \System\ReadOnlySpan_1 $lengthList
	 * @param \System\Int32|int $defaultLength
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SplitWithoutPostProcessing($sepList, $lengthList, $defaultLength, $count){}
	/**
	 * @param \System\ReadOnlySpan_1 $sepList
	 * @param \System\ReadOnlySpan_1 $lengthList
	 * @param \System\Int32|int $defaultLength
	 * @param \System\Int32|int $count
	 * @param \System\StringSplitOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SplitWithPostProcessing($sepList, $lengthList, $defaultLength, $count, $options){}
	/**
	 * @uses StringMethodsOverride::MakeSeparatorList_1 ($separators, $sepListBuilder)
	 * @uses StringMethodsOverride::MakeSeparatorList_2 ($separator, $sepListBuilder)
	 * @uses StringMethodsOverride::MakeSeparatorList_3 ($separators, $sepListBuilder, $lengthListBuilder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MakeSeparatorList(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\ValueListBuilder_1& $sepListBuilder
	 * @param \System\Char $c
	 * @param \System\Char $c2
	 * @param \System\Char $c3
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MakeSeparatorListVectorized($sepListBuilder, $c, $c2, $c3){}
	/**
	 * @param \System\StringSplitOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckStringSplitOptions($options){}
	/**
	 * @uses StringMethodsOverride::Substring_1 ($startIndex)
	 * @uses StringMethodsOverride::Substring_2 ($startIndex, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Substring(mixed ...$args){}
	/**
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThrowSubstringArgumentOutOfRange($startIndex, $length){}
	/**
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalSubString($startIndex, $length){}
	/**
	 * @uses StringMethodsOverride::ToLower_1 ()
	 * @uses StringMethodsOverride::ToLower_2 ($culture)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToLower(mixed ...$args){}
	/**
	 * @return \System\String|string
	 */
	public  function ToLowerInvariant(){}
	/**
	 * @uses StringMethodsOverride::ToUpper_1 ()
	 * @uses StringMethodsOverride::ToUpper_2 ($culture)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToUpper(mixed ...$args){}
	/**
	 * @return \System\String|string
	 */
	public  function ToUpperInvariant(){}
	/**
	 * @uses StringMethodsOverride::Trim_1 ()
	 * @uses StringMethodsOverride::Trim_2 ($trimChar)
	 * @uses StringMethodsOverride::Trim_3 ($trimChars)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Trim(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::TrimStart_1 ()
	 * @uses StringMethodsOverride::TrimStart_2 ($trimChar)
	 * @uses StringMethodsOverride::TrimStart_3 ($trimChars)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TrimStart(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::TrimEnd_1 ()
	 * @uses StringMethodsOverride::TrimEnd_2 ($trimChar)
	 * @uses StringMethodsOverride::TrimEnd_3 ($trimChars)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TrimEnd(mixed ...$args){}
	/**
	 * @param \System\Text\TrimType $trimType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TrimWhiteSpaceHelper($trimType){}
	/**
	 * @param \System\Char* $trimChars
	 * @param \System\Int32|int $trimCharsLength
	 * @param \System\Text\TrimType $trimType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TrimHelper($trimChars, $trimCharsLength, $trimType){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateTrimmedString($start, $end){}
	/**
	 * @uses StringMethodsOverride::Contains_1 ($value)
	 * @uses StringMethodsOverride::Contains_2 ($value, $comparisonType)
	 * @uses StringMethodsOverride::Contains_3 ($value)
	 * @uses StringMethodsOverride::Contains_4 ($value, $comparisonType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::IndexOf_1 ($value)
	 * @uses StringMethodsOverride::IndexOf_2 ($value, $startIndex)
	 * @uses StringMethodsOverride::IndexOf_3 ($value, $comparisonType)
	 * @uses StringMethodsOverride::IndexOf_4 ($value, $startIndex, $count)
	 * @uses StringMethodsOverride::IndexOf_5 ($value)
	 * @uses StringMethodsOverride::IndexOf_6 ($value, $startIndex)
	 * @uses StringMethodsOverride::IndexOf_7 ($value, $startIndex, $count)
	 * @uses StringMethodsOverride::IndexOf_8 ($value, $comparisonType)
	 * @uses StringMethodsOverride::IndexOf_9 ($value, $startIndex, $comparisonType)
	 * @uses StringMethodsOverride::IndexOf_10 ($value, $startIndex, $count, $comparisonType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOf(mixed ...$args){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IndexOfCharOrdinalIgnoreCase($value){}
	/**
	 * @uses StringMethodsOverride::IndexOfAny_1 ($anyOf)
	 * @uses StringMethodsOverride::IndexOfAny_2 ($anyOf, $startIndex)
	 * @uses StringMethodsOverride::IndexOfAny_3 ($anyOf, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOfAny(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::LastIndexOf_1 ($value)
	 * @uses StringMethodsOverride::LastIndexOf_2 ($value, $startIndex)
	 * @uses StringMethodsOverride::LastIndexOf_3 ($value, $startIndex, $count)
	 * @uses StringMethodsOverride::LastIndexOf_4 ($value)
	 * @uses StringMethodsOverride::LastIndexOf_5 ($value, $startIndex)
	 * @uses StringMethodsOverride::LastIndexOf_6 ($value, $startIndex, $count)
	 * @uses StringMethodsOverride::LastIndexOf_7 ($value, $comparisonType)
	 * @uses StringMethodsOverride::LastIndexOf_8 ($value, $startIndex, $comparisonType)
	 * @uses StringMethodsOverride::LastIndexOf_9 ($value, $startIndex, $count, $comparisonType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LastIndexOf(mixed ...$args){}
	/**
	 * @uses StringMethodsOverride::LastIndexOfAny_1 ($anyOf)
	 * @uses StringMethodsOverride::LastIndexOfAny_2 ($anyOf, $startIndex)
	 * @uses StringMethodsOverride::LastIndexOfAny_3 ($anyOf, $startIndex, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LastIndexOfAny(mixed ...$args){}
}
