<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EnumMethodsOverride
{
	/**
	 * @return \System\Reflection\CorElementType
	 */
	#[MethodOverride] private static function InternalGetCorElementType_1($pMT){}
	/**
	 * @return \System\Reflection\CorElementType
	 */
	#[MethodOverride] private  function InternalGetCorElementType_2(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function ValueToHexString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function ValueToHexString_2($value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function GetEnumName_1($enumType, $ulValue){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function GetEnumName_2($enumInfo, $ulValue){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function InternalFlagsFormat_1($enumType, $result){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function InternalFlagsFormat_2($enumInfo, $resultValue){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] protected static function ToUInt64_1($value){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] private static function ToUInt64_2($value){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] private  function ToUInt64_3(){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] private  function ToUInt64_4($provider){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetName_1($value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function GetName_2($enumType, $value){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public static function GetNames_1(){}
	/**
	 * @return \System\String[]
	 */
	#[MethodOverride] public static function GetNames_2($enumType){}
	/**
	 * @return \System\TEnum[]
	 */
	#[MethodOverride] public static function GetValues_1(){}
	/**
	 * @return \System\Array|array
	 */
	#[MethodOverride] public static function GetValues_2($enumType){}
	/**
	 * @return \System\Array|array
	 */
	#[MethodOverride] public static function GetValuesAsUnderlyingType_1(){}
	/**
	 * @return \System\Array|array
	 */
	#[MethodOverride] public static function GetValuesAsUnderlyingType_2($enumType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsDefined_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsDefined_2($enumType, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function Parse_1($enumType, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function Parse_2($enumType, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function Parse_3($enumType, $value, $ignoreCase){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function Parse_4($enumType, $value, $ignoreCase){}
	/**
	 * @return \System\TEnum
	 */
	#[MethodOverride] public static function Parse_5($value){}
	/**
	 * @return \System\TEnum
	 */
	#[MethodOverride] public static function Parse_6($value){}
	/**
	 * @return \System\TEnum
	 */
	#[MethodOverride] public static function Parse_7($value, $ignoreCase){}
	/**
	 * @return \System\TEnum
	 */
	#[MethodOverride] public static function Parse_8($value, $ignoreCase){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_1($enumType, $value, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_2($enumType, $value, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_3($enumType, $value, $ignoreCase, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_4($enumType, $value, $ignoreCase, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryParse_5($enumType, $value, $ignoreCase, $throwOnFailure, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryParse_6($enumType, $value, $ignoreCase, $throwOnFailure, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_7($value, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_8($value, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_9($value, $ignoreCase, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_10($value, $ignoreCase, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryParse_11($value, $ignoreCase, $throwOnFailure, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryParse_12($value, $ignoreCase, $throwOnFailure, $result){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function ToObject_1($enumType, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function ToObject_2($enumType, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function ToObject_3($enumType, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function ToObject_4($enumType, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function ToObject_5($enumType, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function ToObject_6($enumType, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function ToObject_7($enumType, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function ToObject_8($enumType, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function ToObject_9($enumType, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private static function ToObject_10($enumType, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private static function ToObject_11($enumType, $value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2($format, $provider){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_3($format){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_4($provider){}
}
/**
 */
class Enum extends \System\ValueType implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	/**
	 * @param \System\Runtime\CompilerServices\QCallTypeHandle $enumType
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $values
	 * @param \System\Runtime\CompilerServices\ObjectHandleOnStack $names
	 * @param \\BOOL $getNames
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEnumValuesAndNames($enumType, $values, $names, $getNames){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @param \System\Int64|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalBoxEnum($enumType, $value){}
	/**
	 * @uses EnumMethodsOverride::InternalGetCorElementType_1 ($pMT)
	 * @uses EnumMethodsOverride::InternalGetCorElementType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InternalGetCorElementType(mixed ...$args){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @return \System\RuntimeType
	 */
	protected static function InternalGetUnderlyingType($enumType){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @param \System\Boolean $getNames
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEnumInfo($enumType, $getNames){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ValueToString(){}
	/**
	 * @uses EnumMethodsOverride::ValueToHexString_1 ()
	 * @uses EnumMethodsOverride::ValueToHexString_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ValueToHexString(mixed ...$args){}
	/**
	 * @uses EnumMethodsOverride::GetEnumName_1 ($enumType, $ulValue)
	 * @uses EnumMethodsOverride::GetEnumName_2 ($enumInfo, $ulValue)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetEnumName(mixed ...$args){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @param \System\UInt64 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalFormat($enumType, $value){}
	/**
	 * @uses EnumMethodsOverride::InternalFlagsFormat_1 ($enumType, $result)
	 * @uses EnumMethodsOverride::InternalFlagsFormat_2 ($enumInfo, $resultValue)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function InternalFlagsFormat(mixed ...$args){}
	/**
	 * @uses EnumMethodsOverride::ToUInt64_1 ($value)
	 * @uses EnumMethodsOverride::ToUInt64_2 ($value)
	 * @uses EnumMethodsOverride::ToUInt64_3 ()
	 * @uses EnumMethodsOverride::ToUInt64_4 ($provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToUInt64(mixed ...$args){}
	/**
	 * @uses EnumMethodsOverride::GetName_1 ($value)
	 * @uses EnumMethodsOverride::GetName_2 ($enumType, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetName(mixed ...$args){}
	/**
	 * @uses EnumMethodsOverride::GetNames_1 ()
	 * @uses EnumMethodsOverride::GetNames_2 ($enumType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetNames(mixed ...$args){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @return \System\String[]
	 */
	protected static function InternalGetNames($enumType){}
	/**
	 * @param \System\Type $enumType
	 * @return \System\Type
	 */
	public static function GetUnderlyingType($enumType){}
	/**
	 * @uses EnumMethodsOverride::GetValues_1 ()
	 * @uses EnumMethodsOverride::GetValues_2 ($enumType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetValues(mixed ...$args){}
	/**
	 * @uses EnumMethodsOverride::GetValuesAsUnderlyingType_1 ()
	 * @uses EnumMethodsOverride::GetValuesAsUnderlyingType_2 ($enumType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetValuesAsUnderlyingType(mixed ...$args){}
	/**
	 * @param \System\Enum $flag
	 * @return \System\Boolean
	 */
	public  function HasFlag($flag){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @return \System\UInt64[]
	 */
	protected static function InternalGetValues($enumType){}
	/**
	 * @uses EnumMethodsOverride::IsDefined_1 ($value)
	 * @uses EnumMethodsOverride::IsDefined_2 ($enumType, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsDefined(mixed ...$args){}
	/**
	 * @param \System\UInt64[] $ulValues
	 * @param \System\UInt64 $ulValue
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindDefinedIndex($ulValues, $ulValue){}
	/**
	 * @uses EnumMethodsOverride::Parse_1 ($enumType, $value)
	 * @uses EnumMethodsOverride::Parse_2 ($enumType, $value)
	 * @uses EnumMethodsOverride::Parse_3 ($enumType, $value, $ignoreCase)
	 * @uses EnumMethodsOverride::Parse_4 ($enumType, $value, $ignoreCase)
	 * @uses EnumMethodsOverride::Parse_5 ($value)
	 * @uses EnumMethodsOverride::Parse_6 ($value)
	 * @uses EnumMethodsOverride::Parse_7 ($value, $ignoreCase)
	 * @uses EnumMethodsOverride::Parse_8 ($value, $ignoreCase)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses EnumMethodsOverride::TryParse_1 ($enumType, $value, $result)
	 * @uses EnumMethodsOverride::TryParse_2 ($enumType, $value, $result)
	 * @uses EnumMethodsOverride::TryParse_3 ($enumType, $value, $ignoreCase, $result)
	 * @uses EnumMethodsOverride::TryParse_4 ($enumType, $value, $ignoreCase, $result)
	 * @uses EnumMethodsOverride::TryParse_5 ($enumType, $value, $ignoreCase, $throwOnFailure, $result)
	 * @uses EnumMethodsOverride::TryParse_6 ($enumType, $value, $ignoreCase, $throwOnFailure, $result)
	 * @uses EnumMethodsOverride::TryParse_7 ($value, $result)
	 * @uses EnumMethodsOverride::TryParse_8 ($value, $result)
	 * @uses EnumMethodsOverride::TryParse_9 ($value, $ignoreCase, $result)
	 * @uses EnumMethodsOverride::TryParse_10 ($value, $ignoreCase, $result)
	 * @uses EnumMethodsOverride::TryParse_11 ($value, $ignoreCase, $throwOnFailure, $result)
	 * @uses EnumMethodsOverride::TryParse_12 ($value, $ignoreCase, $throwOnFailure, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Int32|int $minInclusive
	 * @param \System\Int32|int $maxInclusive
	 * @param \System\Boolean $ignoreCase
	 * @param \System\Boolean $throwOnFailure
	 * @param \System\TypeCode $type
	 * @param \System\Int32& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseInt32Enum($enumType, $value, $minInclusive, $maxInclusive, $ignoreCase, $throwOnFailure, $type, $result){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\UInt32 $maxInclusive
	 * @param \System\Boolean $ignoreCase
	 * @param \System\Boolean $throwOnFailure
	 * @param \System\TypeCode $type
	 * @param \System\UInt32& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseUInt32Enum($enumType, $value, $maxInclusive, $ignoreCase, $throwOnFailure, $type, $result){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Boolean $ignoreCase
	 * @param \System\Boolean $throwOnFailure
	 * @param \System\Int64& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseInt64Enum($enumType, $value, $ignoreCase, $throwOnFailure, $result){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Boolean $ignoreCase
	 * @param \System\Boolean $throwOnFailure
	 * @param \System\UInt64& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseUInt64Enum($enumType, $value, $ignoreCase, $throwOnFailure, $result){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Boolean $ignoreCase
	 * @param \System\Boolean $throwOnFailure
	 * @param \System\Object& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseRareEnum($enumType, $value, $ignoreCase, $throwOnFailure, $result){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @param \System\ReadOnlySpan_1 $value
	 * @param \System\Boolean $ignoreCase
	 * @param \System\Boolean $throwOnFailure
	 * @param \System\UInt64& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryParseByName($enumType, $value, $ignoreCase, $throwOnFailure, $result){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function StartsNumber($c){}
	/**
	 * @uses EnumMethodsOverride::ToObject_1 ($enumType, $value)
	 * @uses EnumMethodsOverride::ToObject_2 ($enumType, $value)
	 * @uses EnumMethodsOverride::ToObject_3 ($enumType, $value)
	 * @uses EnumMethodsOverride::ToObject_4 ($enumType, $value)
	 * @uses EnumMethodsOverride::ToObject_5 ($enumType, $value)
	 * @uses EnumMethodsOverride::ToObject_6 ($enumType, $value)
	 * @uses EnumMethodsOverride::ToObject_7 ($enumType, $value)
	 * @uses EnumMethodsOverride::ToObject_8 ($enumType, $value)
	 * @uses EnumMethodsOverride::ToObject_9 ($enumType, $value)
	 * @uses EnumMethodsOverride::ToObject_10 ($enumType, $value)
	 * @uses EnumMethodsOverride::ToObject_11 ($enumType, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToObject(mixed ...$args){}
	/**
	 * @param \System\Type $enumType
	 * @param \System\Object|object $value
	 * @param \System\String|string $format
	 * @return \System\String|string
	 */
	public static function Format($enumType, $value, $format){}
	/**
	 * @return \System\Object|object
	 */
	protected  function GetValue(){}
	/**
	 * @uses EnumMethodsOverride::ToString_1 ()
	 * @uses EnumMethodsOverride::ToString_2 ($format, $provider)
	 * @uses EnumMethodsOverride::ToString_3 ($format)
	 * @uses EnumMethodsOverride::ToString_4 ($provider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @param \System\Object|object $target
	 * @return \System\Int32|int
	 */
	public  function CompareTo($target){}
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
	 * @param \System\Type $enumType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateRuntimeType($enumType){}
}
