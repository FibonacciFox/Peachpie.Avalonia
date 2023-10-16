<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompareInfoMethodsOverride
{
	/**
	 * @return \System\Globalization\CompareInfo
	 */
	#[MethodOverride] public static function GetCompareInfo_1($culture, $assembly){}
	/**
	 * @return \System\Globalization\CompareInfo
	 */
	#[MethodOverride] public static function GetCompareInfo_2($name, $assembly){}
	/**
	 * @return \System\Globalization\CompareInfo
	 */
	#[MethodOverride] public static function GetCompareInfo_3($culture){}
	/**
	 * @return \System\Globalization\CompareInfo
	 */
	#[MethodOverride] public static function GetCompareInfo_4($name){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsSortable_1($ch){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsSortable_2($text){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsSortable_3($text){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsSortable_4($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnDeserialized_1($ctx){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnDeserialized_2(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_1($string1, $string2){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_2($string1, $string2, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_3($string1, $offset1, $length1, $string2, $offset2, $length2){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_4($string1, $offset1, $string2, $offset2, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_5($string1, $offset1, $string2, $offset2){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_6($string1, $offset1, $length1, $string2, $offset2, $length2, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_7($string1, $string2, $options){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsPrefix_1($source, $prefix, $options){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsPrefix_2($source, $prefix, $options){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsPrefix_3($source, $prefix, $options, $matchLength){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsPrefix_4($source, $prefix){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsSuffix_1($source, $suffix, $options){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsSuffix_2($source, $suffix, $options){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsSuffix_3($source, $suffix, $options, $matchLength){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsSuffix_4($source, $suffix){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_1($source, $value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_2($source, $value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_3($source, $value, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_4($source, $value, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_5($source, $value, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_6($source, $value, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_7($source, $value, $startIndex, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_8($source, $value, $startIndex, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_9($source, $value, $startIndex, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_10($source, $value, $startIndex, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_11($source, $value, $startIndex, $count, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_12($source, $value, $startIndex, $count, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_13($source, $value, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_14($source, $value, $options, $matchLength){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_15($source, $value, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function IndexOf_16($source, $value, $matchLengthPtr, $options, $fromBeginning){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_1($source, $value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_2($source, $value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_3($source, $value, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_4($source, $value, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_5($source, $value, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_6($source, $value, $startIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_7($source, $value, $startIndex, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_8($source, $value, $startIndex, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_9($source, $value, $startIndex, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_10($source, $value, $startIndex, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_11($source, $value, $startIndex, $count, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_12($source, $value, $startIndex, $count, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_13($source, $value, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_14($source, $value, $options, $matchLength){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_15($source, $value, $options){}
	/**
	 * @return \System\Globalization\SortKey
	 */
	#[MethodOverride] public  function GetSortKey_1($source, $options){}
	/**
	 * @return \System\Globalization\SortKey
	 */
	#[MethodOverride] public  function GetSortKey_2($source){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetSortKey_3($source, $destination, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_2($source, $options){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_3($source, $options){}
}
/**
 */
class CompareInfo extends \System\Object implements 
	\System\Runtime\Serialization\IDeserializationCallback
{
	/**
	 * @var \System\Globalization\CompareInfo
	 * @field
	 */
	protected readonly $Invariant;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\Globalization\SortVersion
	 * @property
	 */
	public readonly $Version;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $LCID;
	/**
	 * @uses CompareInfoMethodsOverride::GetCompareInfo_1 ($culture, $assembly)
	 * @uses CompareInfoMethodsOverride::GetCompareInfo_2 ($name, $assembly)
	 * @uses CompareInfoMethodsOverride::GetCompareInfo_3 ($culture)
	 * @uses CompareInfoMethodsOverride::GetCompareInfo_4 ($name)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetCompareInfo(mixed ...$args){}
	/**
	 * @uses CompareInfoMethodsOverride::IsSortable_1 ($ch)
	 * @uses CompareInfoMethodsOverride::IsSortable_2 ($text)
	 * @uses CompareInfoMethodsOverride::IsSortable_3 ($text)
	 * @uses CompareInfoMethodsOverride::IsSortable_4 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsSortable(mixed ...$args){}
	/**
	 * @param \System\Globalization\CultureInfo $culture
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitSort($culture){}
	/**
	 * @param \System\Runtime\Serialization\StreamingContext $ctx
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDeserializing($ctx){}
	/**
	 * @param \System\Object|object $sender
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDeserialization($sender){}
	/**
	 * @uses CompareInfoMethodsOverride::OnDeserialized_1 ($ctx)
	 * @uses CompareInfoMethodsOverride::OnDeserialized_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnDeserialized(mixed ...$args){}
	/**
	 * @param \System\Runtime\Serialization\StreamingContext $ctx
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSerializing($ctx){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @uses CompareInfoMethodsOverride::Compare_1 ($string1, $string2)
	 * @uses CompareInfoMethodsOverride::Compare_2 ($string1, $string2, $options)
	 * @uses CompareInfoMethodsOverride::Compare_3 ($string1, $offset1, $length1, $string2, $offset2, $length2)
	 * @uses CompareInfoMethodsOverride::Compare_4 ($string1, $offset1, $string2, $offset2, $options)
	 * @uses CompareInfoMethodsOverride::Compare_5 ($string1, $offset1, $string2, $offset2)
	 * @uses CompareInfoMethodsOverride::Compare_6 ($string1, $offset1, $length1, $string2, $offset2, $length2, $options)
	 * @uses CompareInfoMethodsOverride::Compare_7 ($string1, $string2, $options)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Compare(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $string1
	 * @param \System\ReadOnlySpan_1 $string2
	 * @return \System\Int32|int
	 */
	protected  function CompareOptionIgnoreCase($string1, $string2){}
	/**
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckCompareOptionsForCompare($options){}
	/**
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowCompareOptionsCheckFailed($options){}
	/**
	 * @param \System\ReadOnlySpan_1 $string1
	 * @param \System\ReadOnlySpan_1 $string2
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CompareStringCore($string1, $string2, $options){}
	/**
	 * @uses CompareInfoMethodsOverride::IsPrefix_1 ($source, $prefix, $options)
	 * @uses CompareInfoMethodsOverride::IsPrefix_2 ($source, $prefix, $options)
	 * @uses CompareInfoMethodsOverride::IsPrefix_3 ($source, $prefix, $options, $matchLength)
	 * @uses CompareInfoMethodsOverride::IsPrefix_4 ($source, $prefix)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsPrefix(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $prefix
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StartsWithCore($source, $prefix, $options, $matchLengthPtr){}
	/**
	 * @uses CompareInfoMethodsOverride::IsSuffix_1 ($source, $suffix, $options)
	 * @uses CompareInfoMethodsOverride::IsSuffix_2 ($source, $suffix, $options)
	 * @uses CompareInfoMethodsOverride::IsSuffix_3 ($source, $suffix, $options, $matchLength)
	 * @uses CompareInfoMethodsOverride::IsSuffix_4 ($source, $suffix)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsSuffix(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $suffix
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EndsWithCore($source, $suffix, $options, $matchLengthPtr){}
	/**
	 * @uses CompareInfoMethodsOverride::IndexOf_1 ($source, $value)
	 * @uses CompareInfoMethodsOverride::IndexOf_2 ($source, $value)
	 * @uses CompareInfoMethodsOverride::IndexOf_3 ($source, $value, $options)
	 * @uses CompareInfoMethodsOverride::IndexOf_4 ($source, $value, $options)
	 * @uses CompareInfoMethodsOverride::IndexOf_5 ($source, $value, $startIndex)
	 * @uses CompareInfoMethodsOverride::IndexOf_6 ($source, $value, $startIndex)
	 * @uses CompareInfoMethodsOverride::IndexOf_7 ($source, $value, $startIndex, $options)
	 * @uses CompareInfoMethodsOverride::IndexOf_8 ($source, $value, $startIndex, $options)
	 * @uses CompareInfoMethodsOverride::IndexOf_9 ($source, $value, $startIndex, $count)
	 * @uses CompareInfoMethodsOverride::IndexOf_10 ($source, $value, $startIndex, $count)
	 * @uses CompareInfoMethodsOverride::IndexOf_11 ($source, $value, $startIndex, $count, $options)
	 * @uses CompareInfoMethodsOverride::IndexOf_12 ($source, $value, $startIndex, $count, $options)
	 * @uses CompareInfoMethodsOverride::IndexOf_13 ($source, $value, $options)
	 * @uses CompareInfoMethodsOverride::IndexOf_14 ($source, $value, $options, $matchLength)
	 * @uses CompareInfoMethodsOverride::IndexOf_15 ($source, $value, $options)
	 * @uses CompareInfoMethodsOverride::IndexOf_16 ($source, $value, $matchLengthPtr, $options, $fromBeginning)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOf(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $target
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @param \System\Boolean $fromBeginning
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IndexOfCore($source, $target, $options, $matchLengthPtr, $fromBeginning){}
	/**
	 * @uses CompareInfoMethodsOverride::LastIndexOf_1 ($source, $value)
	 * @uses CompareInfoMethodsOverride::LastIndexOf_2 ($source, $value)
	 * @uses CompareInfoMethodsOverride::LastIndexOf_3 ($source, $value, $options)
	 * @uses CompareInfoMethodsOverride::LastIndexOf_4 ($source, $value, $options)
	 * @uses CompareInfoMethodsOverride::LastIndexOf_5 ($source, $value, $startIndex)
	 * @uses CompareInfoMethodsOverride::LastIndexOf_6 ($source, $value, $startIndex)
	 * @uses CompareInfoMethodsOverride::LastIndexOf_7 ($source, $value, $startIndex, $options)
	 * @uses CompareInfoMethodsOverride::LastIndexOf_8 ($source, $value, $startIndex, $options)
	 * @uses CompareInfoMethodsOverride::LastIndexOf_9 ($source, $value, $startIndex, $count)
	 * @uses CompareInfoMethodsOverride::LastIndexOf_10 ($source, $value, $startIndex, $count)
	 * @uses CompareInfoMethodsOverride::LastIndexOf_11 ($source, $value, $startIndex, $count, $options)
	 * @uses CompareInfoMethodsOverride::LastIndexOf_12 ($source, $value, $startIndex, $count, $options)
	 * @uses CompareInfoMethodsOverride::LastIndexOf_13 ($source, $value, $options)
	 * @uses CompareInfoMethodsOverride::LastIndexOf_14 ($source, $value, $options, $matchLength)
	 * @uses CompareInfoMethodsOverride::LastIndexOf_15 ($source, $value, $options)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LastIndexOf(mixed ...$args){}
	/**
	 * @uses CompareInfoMethodsOverride::GetSortKey_1 ($source, $options)
	 * @uses CompareInfoMethodsOverride::GetSortKey_2 ($source)
	 * @uses CompareInfoMethodsOverride::GetSortKey_3 ($source, $destination, $options)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetSortKey(mixed ...$args){}
	/**
	 * @param \System\String|string $source
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateSortKeyCore($source, $options){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Span_1 $destination
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetSortKeyCore($source, $destination, $options){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Globalization\CompareOptions $options
	 * @return \System\Int32|int
	 */
	public  function GetSortKeyLength($source, $options){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetSortKeyLengthCore($source, $options){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean
	 */
	public  function Equals($value){}
	/**
	 * @uses CompareInfoMethodsOverride::GetHashCode_1 ()
	 * @uses CompareInfoMethodsOverride::GetHashCode_2 ($source, $options)
	 * @uses CompareInfoMethodsOverride::GetHashCode_3 ($source, $options)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetHashCodeOfStringCore($source, $options){}
	/**
	 * @return \System\Globalization\SortVersion
	 */
	public  function get_Version(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_LCID(){}
	/**
	 * @param \System\String|string $interopCultureName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IcuInitSortHandle($interopCultureName){}
	/**
	 * @param \System\ReadOnlySpan_1 $string1
	 * @param \System\ReadOnlySpan_1 $string2
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IcuCompareString($string1, $string2, $options){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $target
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @param \System\Boolean $fromBeginning
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IcuIndexOfCore($source, $target, $options, $matchLengthPtr, $fromBeginning){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $target
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @param \System\Boolean $fromBeginning
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IndexOfOrdinalIgnoreCaseHelper($source, $target, $options, $matchLengthPtr, $fromBeginning){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $target
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @param \System\Boolean $fromBeginning
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IndexOfOrdinalHelper($source, $target, $options, $matchLengthPtr, $fromBeginning){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $prefix
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IcuStartsWith($source, $prefix, $options, $matchLengthPtr){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $prefix
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StartsWithOrdinalIgnoreCaseHelper($source, $prefix, $options, $matchLengthPtr){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $prefix
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StartsWithOrdinalHelper($source, $prefix, $options, $matchLengthPtr){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $suffix
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IcuEndsWith($source, $suffix, $options, $matchLengthPtr){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $suffix
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EndsWithOrdinalIgnoreCaseHelper($source, $suffix, $options, $matchLengthPtr){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $suffix
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EndsWithOrdinalHelper($source, $suffix, $options, $matchLengthPtr){}
	/**
	 * @param \System\String|string $source
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IcuCreateSortKey($source, $options){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Span_1 $destination
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IcuGetSortKey($source, $destination, $options){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IcuGetSortKeyLength($source, $options){}
	/**
	 * @param \System\ReadOnlySpan_1 $text
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IcuIsSortable($text){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IcuGetHashCodeOfString($source, $options){}
	/**
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CanUseAsciiOrdinalForOptions($options){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IcuGetSortVersion(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_HighCharTable(){}
	/**
	 * @param \System\String|string $source
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InvariantCreateSortKey($source, $options){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Span_1 $sortKey
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InvariantCreateSortKeyOrdinal($source, $sortKey){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Span_1 $sortKey
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InvariantCreateSortKeyOrdinalIgnoreCase($source, $sortKey){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Span_1 $destination
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InvariantGetSortKey($source, $destination, $options){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InvariantGetSortKeyLength($source, $options){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsInitSortHandle(){}
	/**
	 * @param \System\String|string $cultureName
	 * @return \System\IntPtr
	 */
	protected static function NlsGetSortHandle($cultureName){}
	/**
	 * @param \System\UInt32 $dwFindStringOrdinalFlags
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Boolean $bIgnoreCase
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindStringOrdinal($dwFindStringOrdinalFlags, $source, $value, $bIgnoreCase){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Boolean $ignoreCase
	 * @param \System\Boolean $fromBeginning
	 * @return \System\Int32|int
	 */
	protected static function NlsIndexOfOrdinalCore($source, $value, $ignoreCase, $fromBeginning){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsGetHashCodeOfString($source, $options){}
	/**
	 * @param \System\Char& $string1
	 * @param \System\Int32|int $count1
	 * @param \System\Char& $string2
	 * @param \System\Int32|int $count2
	 * @return \System\Int32|int
	 */
	protected static function NlsCompareStringOrdinalIgnoreCase($string1, $count1, $string2, $count2){}
	/**
	 * @param \System\ReadOnlySpan_1 $string1
	 * @param \System\ReadOnlySpan_1 $string2
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsCompareString($string1, $string2, $options){}
	/**
	 * @param \System\UInt32 $dwFindNLSStringFlags
	 * @param \System\ReadOnlySpan_1 $lpStringSource
	 * @param \System\ReadOnlySpan_1 $lpStringValue
	 * @param \System\Int32* $pcchFound
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FindString($dwFindNLSStringFlags, $lpStringSource, $lpStringValue, $pcchFound){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $target
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @param \System\Boolean $fromBeginning
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsIndexOfCore($source, $target, $options, $matchLengthPtr, $fromBeginning){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $prefix
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsStartsWith($source, $prefix, $options, $matchLengthPtr){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\ReadOnlySpan_1 $suffix
	 * @param \System\Globalization\CompareOptions $options
	 * @param \System\Int32* $matchLengthPtr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsEndsWith($source, $suffix, $options, $matchLengthPtr){}
	/**
	 * @param \System\String|string $source
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsCreateSortKey($source, $options){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Span_1 $destination
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsGetSortKey($source, $destination, $options){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsGetSortKeyLength($source, $options){}
	/**
	 * @param \System\ReadOnlySpan_1 $text
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NlsIsSortable($text){}
	/**
	 * @param \System\Globalization\CompareOptions $options
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNativeCompareFlags($options){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsGetSortVersion(){}
}
