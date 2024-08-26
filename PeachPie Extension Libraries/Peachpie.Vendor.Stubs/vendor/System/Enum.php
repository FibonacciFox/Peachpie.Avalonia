<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EnumOverride {
	/**
	 * @deprecated
	 * @param \System\Runtime\CompilerServices\MethodTable* $pMT
	 * @return \System\Reflection\CorElementType
	 */
	#[MethodOverride]private static function InternalGetCorElementType_1 ($pMT){}
	/**
	 * @deprecated
	 * @return \System\Reflection\CorElementType
	 */
	#[MethodOverride]private function InternalGetCorElementType_2 (){}
	/**
	 * @deprecated
	 * @return \System\String|string
	 */
	#[MethodOverride]private function ValueToHexString_1 (){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function ValueToHexString_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $enumType
	 * @param \System\UInt64 $ulValue
	 * @return \System\String|string
	 */
	#[MethodOverride]protected static function GetEnumName_1 ($enumType, $ulValue){}
	/**
	 * @deprecated
	 * @param \System\Enum+EnumInfo $enumInfo
	 * @param \System\UInt64 $ulValue
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function GetEnumName_2 ($enumInfo, $ulValue){}
	/**
	 * @deprecated
	 * @param \System\RuntimeType $enumType
	 * @param \System\UInt64 $result
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function InternalFlagsFormat_1 ($enumType, $result){}
	/**
	 * @deprecated
	 * @param \System\Enum+EnumInfo $enumInfo
	 * @param \System\UInt64 $resultValue
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function InternalFlagsFormat_2 ($enumInfo, $resultValue){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\UInt64
	 */
	#[MethodOverride]protected static function ToUInt64_1 ($value){}
	/**
	 * @deprecated
	 * @param \TEnum $value
	 * @return \System\UInt64
	 */
	#[MethodOverride]private static function ToUInt64_2 ($value){}
	/**
	 * @deprecated
	 * @return \System\UInt64
	 */
	#[MethodOverride]private function ToUInt64_3 (){}
	/**
	 * @deprecated
	 * @param \System\IFormatProvider $provider
	 * @return \System\UInt64
	 */
	#[MethodOverride]private function ToUInt64_4 ($provider){}
	/**
	 * @deprecated
	 * @param \TEnum $value
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetName_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\Object|object $value
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function GetName_2 ($enumType, $value){}
	/**
	 * @deprecated
	 * @return \System\String
	 */
	#[MethodOverride]public static function GetNames_1 (){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @return \System\String
	 */
	#[MethodOverride]public static function GetNames_2 ($enumType){}
	/**
	 * @deprecated
	 * @return \TEnum
	 */
	#[MethodOverride]public static function GetValues_1 (){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @return \System\Array|array
	 */
	#[MethodOverride]public static function GetValues_2 ($enumType){}
	/**
	 * @deprecated
	 * @return \System\Array|array
	 */
	#[MethodOverride]public static function GetValuesAsUnderlyingType_1 (){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @return \System\Array|array
	 */
	#[MethodOverride]public static function GetValuesAsUnderlyingType_2 ($enumType){}
	/**
	 * @deprecated
	 * @param \TEnum $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsDefined_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\Object|object $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsDefined_2 ($enumType, $value){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\String|string $value
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function Parse_1 ($enumType, $value){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function Parse_2 ($enumType, $value){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\String|string $value
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function Parse_3 ($enumType, $value, $ignoreCase){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function Parse_4 ($enumType, $value, $ignoreCase){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @return \TEnum
	 */
	#[MethodOverride]public static function Parse_5 ($value){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @return \TEnum
	 */
	#[MethodOverride]public static function Parse_6 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \TEnum
	 */
	#[MethodOverride]public static function Parse_7 ($value, $ignoreCase){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Boolean|bool $ignoreCase
	 * @return \TEnum
	 */
	#[MethodOverride]public static function Parse_8 ($value, $ignoreCase){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\String|string $value
	 * @param \System\Object& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($enumType, $value, &$result){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Object& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($enumType, $value, &$result){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\String|string $value
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Object& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_3 ($enumType, $value, $ignoreCase, &$result){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Object& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_4 ($enumType, $value, $ignoreCase, &$result){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\String|string $value
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Boolean|bool $throwOnFailure
	 * @param \System\Object& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryParse_5 ($enumType, $value, $ignoreCase, $throwOnFailure, &$result){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Boolean|bool $throwOnFailure
	 * @param \System\Object& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryParse_6 ($enumType, $value, $ignoreCase, $throwOnFailure, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \TEnum& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_7 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \TEnum& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_8 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \TEnum& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_9 ($value, $ignoreCase, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \TEnum& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_10 ($value, $ignoreCase, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $value
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Boolean|bool $throwOnFailure
	 * @param \TEnum& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryParse_11 ($value, $ignoreCase, $throwOnFailure, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $value [generic: System\Char]
	 * @param \System\Boolean|bool $ignoreCase
	 * @param \System\Boolean|bool $throwOnFailure
	 * @param \TEnum& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryParse_12 ($value, $ignoreCase, $throwOnFailure, &$result){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\Object|object $value
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function ToObject_1 ($enumType, $value){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\SByte $value
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function ToObject_2 ($enumType, $value){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\Int16 $value
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function ToObject_3 ($enumType, $value){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\Int32|int $value
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function ToObject_4 ($enumType, $value){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\Byte $value
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function ToObject_5 ($enumType, $value){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\UInt16 $value
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function ToObject_6 ($enumType, $value){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\UInt32 $value
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function ToObject_7 ($enumType, $value){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\Int64|int $value
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function ToObject_8 ($enumType, $value){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\UInt64 $value
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function ToObject_9 ($enumType, $value){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\Char $value
	 * @return \System\Object|object
	 */
	#[MethodOverride]private static function ToObject_10 ($enumType, $value){}
	/**
	 * @deprecated
	 * @param \System\Type $enumType
	 * @param \System\Boolean|bool $value
	 * @return \System\Object|object
	 */
	#[MethodOverride]private static function ToObject_11 ($enumType, $value){}
}
class Enum extends \System\ValueType implements
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	use EnumOverride;

	private static function GetEnumValuesAndNames($enumType, $values, $names, $getNames){}
	private static function InternalBoxEnum($enumType, $value){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EnumOverride::InternalGetCorElementType_1 <br>private , args: ($pMT)<br>
	 * @uses EnumOverride::InternalGetCorElementType_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Reflection\CorElementType|mixed|\override
	 */
	#[MethodOverridePrivate]function InternalGetCorElementType (\override ...$args){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @return \System\RuntimeType
	 */
	protected static function InternalGetUnderlyingType($enumType){}
	private static function GetEnumInfo($enumType, $getNames){}
	private function ValueToString(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EnumOverride::ValueToHexString_1 <br>private , args: ()<br>
	 * @uses EnumOverride::ValueToHexString_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function ValueToHexString (\override ...$args){}
	/**
	 * @uses EnumOverride::GetEnumName_1 <br>protected , args: ($enumType, $ulValue)<br>
	 * @uses EnumOverride::GetEnumName_2 <br>private , args: ($enumInfo, $ulValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverrideProtected]function GetEnumName (\override ...$args){}
	private static function InternalFormat($enumType, $value){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses EnumOverride::InternalFlagsFormat_1 <br>private , args: ($enumType, $result)<br>
	 * @uses EnumOverride::InternalFlagsFormat_2 <br>private , args: ($enumInfo, $resultValue)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function InternalFlagsFormat (\override ...$args){}
	/**
	 * @uses EnumOverride::ToUInt64_1 <br>protected , args: ($value)<br>
	 * @uses EnumOverride::ToUInt64_2 <br>private , args: ($value)<br>
	 * @uses EnumOverride::ToUInt64_3 <br>private , args: ()<br>
	 * @uses EnumOverride::ToUInt64_4 <br>private , args: ($provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt64|mixed|\override
	 */
	#[MethodOverrideProtected]function ToUInt64 (\override ...$args){}
	/**
	 * @uses EnumOverride::GetName_1 <br>public , args: ($value)<br>
	 * @uses EnumOverride::GetName_2 <br>public , args: ($enumType, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function GetName (\override ...$args){}
	/**
	 * @uses EnumOverride::GetNames_1 <br>public , args: ()<br>
	 * @uses EnumOverride::GetNames_2 <br>public , args: ($enumType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|mixed|\override
	 */
	#[MethodOverridePublic]function GetNames (\override ...$args){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @return \System\String[]|array
	 */
	protected static function InternalGetNames($enumType){}
	/**
	 * @param \System\Type $enumType
	 * @return \System\Type
	 */
	public static function GetUnderlyingType($enumType){}
	/**
	 * @uses EnumOverride::GetValues_1 <br>public , args: ()<br>
	 * @uses EnumOverride::GetValues_2 <br>public , args: ($enumType)<br>
	 * @var mixed|\override ...$args
	 * @return \TEnum|\System\Array|array|mixed|\override
	 */
	#[MethodOverridePublic]function GetValues (\override ...$args){}
	/**
	 * @uses EnumOverride::GetValuesAsUnderlyingType_1 <br>public , args: ()<br>
	 * @uses EnumOverride::GetValuesAsUnderlyingType_2 <br>public , args: ($enumType)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Array|array|mixed|\override
	 */
	#[MethodOverridePublic]function GetValuesAsUnderlyingType (\override ...$args){}
	/**
	 * @param \System\Enum $flag
	 * @return \System\Boolean|bool
	 */
	public function HasFlag($flag){}
	/**
	 * @param \System\RuntimeType $enumType
	 * @return \System\UInt64[]
	 */
	protected static function InternalGetValues($enumType){}
	/**
	 * @uses EnumOverride::IsDefined_1 <br>public , args: ($value)<br>
	 * @uses EnumOverride::IsDefined_2 <br>public , args: ($enumType, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsDefined (\override ...$args){}
	private static function FindDefinedIndex($ulValues, $ulValue){}
	/**
	 * @uses EnumOverride::Parse_1 <br>public , args: ($enumType, $value)<br>
	 * @uses EnumOverride::Parse_2 <br>public , args: ($enumType, $value)<br>
	 * @uses EnumOverride::Parse_3 <br>public , args: ($enumType, $value, $ignoreCase)<br>
	 * @uses EnumOverride::Parse_4 <br>public , args: ($enumType, $value, $ignoreCase)<br>
	 * @uses EnumOverride::Parse_5 <br>public , args: ($value)<br>
	 * @uses EnumOverride::Parse_6 <br>public , args: ($value)<br>
	 * @uses EnumOverride::Parse_7 <br>public , args: ($value, $ignoreCase)<br>
	 * @uses EnumOverride::Parse_8 <br>public , args: ($value, $ignoreCase)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|\TEnum|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses EnumOverride::TryParse_1 <br>public , args: ($enumType, $value, &$result)<br>
	 * @uses EnumOverride::TryParse_2 <br>public , args: ($enumType, $value, &$result)<br>
	 * @uses EnumOverride::TryParse_3 <br>public , args: ($enumType, $value, $ignoreCase, &$result)<br>
	 * @uses EnumOverride::TryParse_4 <br>public , args: ($enumType, $value, $ignoreCase, &$result)<br>
	 * @uses EnumOverride::TryParse_5 <br>private , args: ($enumType, $value, $ignoreCase, $throwOnFailure, &$result)<br>
	 * @uses EnumOverride::TryParse_6 <br>private , args: ($enumType, $value, $ignoreCase, $throwOnFailure, &$result)<br>
	 * @uses EnumOverride::TryParse_7 <br>public , args: ($value, &$result)<br>
	 * @uses EnumOverride::TryParse_8 <br>public , args: ($value, &$result)<br>
	 * @uses EnumOverride::TryParse_9 <br>public , args: ($value, $ignoreCase, &$result)<br>
	 * @uses EnumOverride::TryParse_10 <br>public , args: ($value, $ignoreCase, &$result)<br>
	 * @uses EnumOverride::TryParse_11 <br>private , args: ($value, $ignoreCase, $throwOnFailure, &$result)<br>
	 * @uses EnumOverride::TryParse_12 <br>private , args: ($value, $ignoreCase, $throwOnFailure, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	private static function TryParseInt32Enum($enumType, $value, $minInclusive, $maxInclusive, $ignoreCase, $throwOnFailure, $type, &$result){}
	private static function TryParseUInt32Enum($enumType, $value, $maxInclusive, $ignoreCase, $throwOnFailure, $type, &$result){}
	private static function TryParseInt64Enum($enumType, $value, $ignoreCase, $throwOnFailure, &$result){}
	private static function TryParseUInt64Enum($enumType, $value, $ignoreCase, $throwOnFailure, &$result){}
	private static function TryParseRareEnum($enumType, $value, $ignoreCase, $throwOnFailure, &$result){}
	private static function TryParseByName($enumType, $value, $ignoreCase, $throwOnFailure, &$result){}
	private static function StartsNumber($c){}
	/**
	 * @uses EnumOverride::ToObject_1 <br>public , args: ($enumType, $value)<br>
	 * @uses EnumOverride::ToObject_2 <br>public , args: ($enumType, $value)<br>
	 * @uses EnumOverride::ToObject_3 <br>public , args: ($enumType, $value)<br>
	 * @uses EnumOverride::ToObject_4 <br>public , args: ($enumType, $value)<br>
	 * @uses EnumOverride::ToObject_5 <br>public , args: ($enumType, $value)<br>
	 * @uses EnumOverride::ToObject_6 <br>public , args: ($enumType, $value)<br>
	 * @uses EnumOverride::ToObject_7 <br>public , args: ($enumType, $value)<br>
	 * @uses EnumOverride::ToObject_8 <br>public , args: ($enumType, $value)<br>
	 * @uses EnumOverride::ToObject_9 <br>public , args: ($enumType, $value)<br>
	 * @uses EnumOverride::ToObject_10 <br>private , args: ($enumType, $value)<br>
	 * @uses EnumOverride::ToObject_11 <br>private , args: ($enumType, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function ToObject (\override ...$args){}
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
	protected function GetValue(){}
	/**
	 * @param \System\Object|object $target
	 * @return \System\Int32|int
	 */
	public function CompareTo($target){}
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
	private function ToSingle($provider){}
	private function ToDouble($provider){}
	private function ToDecimal($provider){}
	private function ToDateTime($provider){}
	private function ToType($type, $provider){}
	private static function ValidateRuntimeType($enumType){}
}