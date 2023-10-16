<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CharMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_2($value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2($provider){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function ToString_3($c){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function ToString_4($format, $formatProvider){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] public static function Parse_1($s){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] private static function Parse_2($s, $style, $provider){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] private static function Parse_3($s, $style, $provider){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] private static function Parse_4($s, $provider){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] private static function Parse_5($s, $provider){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryParse_1($s, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryParse_2($s, $style, $provider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryParse_3($s, $style, $provider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryParse_4($s, $provider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryParse_5($s, $provider, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsDigit_1($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsDigit_2($s, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsBetween_1($c, $minInclusive, $maxInclusive){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function IsBetween_2($c, $min, $max){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsLetter_1($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsLetter_2($s, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsWhiteSpace_1($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsWhiteSpace_2($s, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsUpper_1($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsUpper_2($s, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsLower_1($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsLower_2($s, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsPunctuation_1($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsPunctuation_2($s, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsLetterOrDigit_1($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsLetterOrDigit_2($s, $index){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] public static function ToUpper_1($c, $culture){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] public static function ToUpper_2($c){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] public static function ToLower_1($c, $culture){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] public static function ToLower_2($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsControl_1($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsControl_2($s, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsNumber_1($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsNumber_2($s, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsSeparator_1($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsSeparator_2($s, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsSurrogate_1($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsSurrogate_2($s, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsSymbol_1($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsSymbol_2($s, $index){}
	/**
	 * @return \System\Globalization\UnicodeCategory
	 */
	#[MethodOverride] public static function GetUnicodeCategory_1($c){}
	/**
	 * @return \System\Globalization\UnicodeCategory
	 */
	#[MethodOverride] public static function GetUnicodeCategory_2($s, $index){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function GetNumericValue_1($c){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function GetNumericValue_2($s, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsHighSurrogate_1($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsHighSurrogate_2($s, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsLowSurrogate_1($c){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsLowSurrogate_2($s, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsSurrogatePair_1($s, $index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsSurrogatePair_2($highSurrogate, $lowSurrogate){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function ConvertToUtf32_1($highSurrogate, $lowSurrogate){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function ConvertToUtf32_2($s, $index){}
}
/**
 */
class Char extends \System\ValueType implements 
	\System\IComparable,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\IConvertible,
	\System\ISpanFormattable,
	\System\IFormattable,
	\System\Numerics\IBinaryInteger_1,
	\System\Numerics\IBinaryNumber_1,
	\System\Numerics\IBitwiseOperators_3,
	\System\Numerics\INumber_1,
	\System\Numerics\IComparisonOperators_3,
	\System\Numerics\IEqualityOperators_3,
	\System\Numerics\IModulusOperators_3,
	\System\Numerics\INumberBase_1,
	\System\Numerics\IAdditionOperators_3,
	\System\Numerics\IAdditiveIdentity_2,
	\System\Numerics\IDecrementOperators_1,
	\System\Numerics\IDivisionOperators_3,
	\System\Numerics\IIncrementOperators_1,
	\System\Numerics\IMultiplicativeIdentity_2,
	\System\Numerics\IMultiplyOperators_3,
	\System\ISpanParsable_1,
	\System\IParsable_1,
	\System\Numerics\ISubtractionOperators_3,
	\System\Numerics\IUnaryPlusOperators_2,
	\System\Numerics\IUnaryNegationOperators_2,
	\System\Numerics\IShiftOperators_3,
	\System\Numerics\IMinMaxValue_1,
	\System\Numerics\IUnsignedNumber_1
{
	/**
	 * @var \System\Char
	 * @field
	 */
	public $MaxValue;
	/**
	 * @var \System\Char
	 * @field
	 */
	public $MinValue;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_Latin1CharInfo(){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsLatin1($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean
	 */
	public static function IsAscii($c){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetLatin1UnicodeCategory($c){}
	/**
	 * @uses CharMethodsOverride::Equals_1 ($obj)
	 * @uses CharMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses CharMethodsOverride::CompareTo_1 ($value)
	 * @uses CharMethodsOverride::CompareTo_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @uses CharMethodsOverride::ToString_1 ()
	 * @uses CharMethodsOverride::ToString_2 ($provider)
	 * @uses CharMethodsOverride::ToString_3 ($c)
	 * @uses CharMethodsOverride::ToString_4 ($format, $formatProvider)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $charsWritten
	 * @param \System\ReadOnlySpan_1 $format
	 * @param \System\IFormatProvider $provider
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryFormat($destination, $charsWritten, $format, $provider){}
	/**
	 * @uses CharMethodsOverride::Parse_1 ($s)
	 * @uses CharMethodsOverride::Parse_2 ($s, $style, $provider)
	 * @uses CharMethodsOverride::Parse_3 ($s, $style, $provider)
	 * @uses CharMethodsOverride::Parse_4 ($s, $provider)
	 * @uses CharMethodsOverride::Parse_5 ($s, $provider)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Parse(mixed ...$args){}
	/**
	 * @uses CharMethodsOverride::TryParse_1 ($s, $result)
	 * @uses CharMethodsOverride::TryParse_2 ($s, $style, $provider, $result)
	 * @uses CharMethodsOverride::TryParse_3 ($s, $style, $provider, $result)
	 * @uses CharMethodsOverride::TryParse_4 ($s, $provider, $result)
	 * @uses CharMethodsOverride::TryParse_5 ($s, $provider, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryParse(mixed ...$args){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean
	 */
	public static function IsAsciiLetter($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean
	 */
	public static function IsAsciiLetterLower($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean
	 */
	public static function IsAsciiLetterUpper($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean
	 */
	public static function IsAsciiDigit($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean
	 */
	public static function IsAsciiLetterOrDigit($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean
	 */
	public static function IsAsciiHexDigit($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean
	 */
	public static function IsAsciiHexDigitUpper($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean
	 */
	public static function IsAsciiHexDigitLower($c){}
	/**
	 * @uses CharMethodsOverride::IsDigit_1 ($c)
	 * @uses CharMethodsOverride::IsDigit_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsDigit(mixed ...$args){}
	/**
	 * @uses CharMethodsOverride::IsBetween_1 ($c, $minInclusive, $maxInclusive)
	 * @uses CharMethodsOverride::IsBetween_2 ($c, $min, $max)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsBetween(mixed ...$args){}
	/**
	 * @param \System\Globalization\UnicodeCategory $uc
	 * @return \System\Boolean
	 */
	protected static function CheckLetter($uc){}
	/**
	 * @uses CharMethodsOverride::IsLetter_1 ($c)
	 * @uses CharMethodsOverride::IsLetter_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsLetter(mixed ...$args){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsWhiteSpaceLatin1($c){}
	/**
	 * @uses CharMethodsOverride::IsWhiteSpace_1 ($c)
	 * @uses CharMethodsOverride::IsWhiteSpace_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsWhiteSpace(mixed ...$args){}
	/**
	 * @uses CharMethodsOverride::IsUpper_1 ($c)
	 * @uses CharMethodsOverride::IsUpper_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsUpper(mixed ...$args){}
	/**
	 * @uses CharMethodsOverride::IsLower_1 ($c)
	 * @uses CharMethodsOverride::IsLower_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsLower(mixed ...$args){}
	/**
	 * @param \System\Globalization\UnicodeCategory $uc
	 * @return \System\Boolean
	 */
	protected static function CheckPunctuation($uc){}
	/**
	 * @uses CharMethodsOverride::IsPunctuation_1 ($c)
	 * @uses CharMethodsOverride::IsPunctuation_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsPunctuation(mixed ...$args){}
	/**
	 * @param \System\Globalization\UnicodeCategory $uc
	 * @return \System\Boolean
	 */
	protected static function CheckLetterOrDigit($uc){}
	/**
	 * @uses CharMethodsOverride::IsLetterOrDigit_1 ($c)
	 * @uses CharMethodsOverride::IsLetterOrDigit_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsLetterOrDigit(mixed ...$args){}
	/**
	 * @uses CharMethodsOverride::ToUpper_1 ($c, $culture)
	 * @uses CharMethodsOverride::ToUpper_2 ($c)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToUpper(mixed ...$args){}
	/**
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	public static function ToUpperInvariant($c){}
	/**
	 * @uses CharMethodsOverride::ToLower_1 ($c, $culture)
	 * @uses CharMethodsOverride::ToLower_2 ($c)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToLower(mixed ...$args){}
	/**
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	public static function ToLowerInvariant($c){}
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
	 * @uses CharMethodsOverride::IsControl_1 ($c)
	 * @uses CharMethodsOverride::IsControl_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsControl(mixed ...$args){}
	/**
	 * @param \System\Globalization\UnicodeCategory $uc
	 * @return \System\Boolean
	 */
	protected static function CheckNumber($uc){}
	/**
	 * @uses CharMethodsOverride::IsNumber_1 ($c)
	 * @uses CharMethodsOverride::IsNumber_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsNumber(mixed ...$args){}
	/**
	 * @param \System\Globalization\UnicodeCategory $uc
	 * @return \System\Boolean
	 */
	protected static function CheckSeparator($uc){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsSeparatorLatin1($c){}
	/**
	 * @uses CharMethodsOverride::IsSeparator_1 ($c)
	 * @uses CharMethodsOverride::IsSeparator_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsSeparator(mixed ...$args){}
	/**
	 * @uses CharMethodsOverride::IsSurrogate_1 ($c)
	 * @uses CharMethodsOverride::IsSurrogate_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsSurrogate(mixed ...$args){}
	/**
	 * @param \System\Globalization\UnicodeCategory $uc
	 * @return \System\Boolean
	 */
	protected static function CheckSymbol($uc){}
	/**
	 * @uses CharMethodsOverride::IsSymbol_1 ($c)
	 * @uses CharMethodsOverride::IsSymbol_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsSymbol(mixed ...$args){}
	/**
	 * @uses CharMethodsOverride::GetUnicodeCategory_1 ($c)
	 * @uses CharMethodsOverride::GetUnicodeCategory_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetUnicodeCategory(mixed ...$args){}
	/**
	 * @uses CharMethodsOverride::GetNumericValue_1 ($c)
	 * @uses CharMethodsOverride::GetNumericValue_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetNumericValue(mixed ...$args){}
	/**
	 * @uses CharMethodsOverride::IsHighSurrogate_1 ($c)
	 * @uses CharMethodsOverride::IsHighSurrogate_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsHighSurrogate(mixed ...$args){}
	/**
	 * @uses CharMethodsOverride::IsLowSurrogate_1 ($c)
	 * @uses CharMethodsOverride::IsLowSurrogate_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsLowSurrogate(mixed ...$args){}
	/**
	 * @uses CharMethodsOverride::IsSurrogatePair_1 ($s, $index)
	 * @uses CharMethodsOverride::IsSurrogatePair_2 ($highSurrogate, $lowSurrogate)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsSurrogatePair(mixed ...$args){}
	/**
	 * @param \System\Int32|int $utf32
	 * @return \System\String|string
	 */
	public static function ConvertFromUtf32($utf32){}
	/**
	 * @uses CharMethodsOverride::ConvertToUtf32_1 ($highSurrogate, $lowSurrogate)
	 * @uses CharMethodsOverride::ConvertToUtf32_2 ($s, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ConvertToUtf32(mixed ...$args){}
	/**
	 * @param \System\UInt32 $highSurrogateOffset
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ConvertToUtf32_ThrowInvalidArgs($highSurrogateOffset){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Addition($left, $right){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedAddition($left, $right){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_AdditiveIdentity(){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LeadingZeroCount($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PopCount($value){}
	/**
	 * @param \System\Char $value
	 * @param \System\Int32|int $rotateAmount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RotateLeft($value, $rotateAmount){}
	/**
	 * @param \System\Char $value
	 * @param \System\Int32|int $rotateAmount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RotateRight($value, $rotateAmount){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TrailingZeroCount($value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Boolean $isUnsigned
	 * @param \System\Char& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryReadBigEndian($source, $isUnsigned, $value){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Boolean $isUnsigned
	 * @param \System\Char& $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryReadLittleEndian($source, $isUnsigned, $value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetShortestBitLength(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetByteCount(){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $bytesWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryWriteBigEndian($destination, $bytesWritten){}
	/**
	 * @param \System\Span_1 $destination
	 * @param \System\Int32& $bytesWritten
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryWriteLittleEndian($destination, $bytesWritten){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_AllBitsSet(){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsPow2($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Log2($value){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_BitwiseAnd($left, $right){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_BitwiseOr($left, $right){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_ExclusiveOr($left, $right){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_OnesComplement($value){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_LessThan($left, $right){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Decrement($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedDecrement($value){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Division($left, $right){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Equality($left, $right){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Inequality($left, $right){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Increment($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedIncrement($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_MinValue(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_MaxValue(){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Modulus($left, $right){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_MultiplicativeIdentity(){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Multiply($left, $right){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedMultiply($left, $right){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_One(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_Radix(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_Zero(){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Abs($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsCanonical($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsComplexNumber($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsEvenInteger($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsFinite($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsImaginaryNumber($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInfinity($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInteger($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNaN($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNegative($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNegativeInfinity($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNormal($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsOddInteger($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsPositive($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsPositiveInfinity($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsRealNumber($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsSubnormal($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsZero($value){}
	/**
	 * @param \System\Char $x
	 * @param \System\Char $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MaxMagnitude($x, $y){}
	/**
	 * @param \System\Char $x
	 * @param \System\Char $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MaxMagnitudeNumber($x, $y){}
	/**
	 * @param \System\Char $x
	 * @param \System\Char $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MinMagnitude($x, $y){}
	/**
	 * @param \System\Char $x
	 * @param \System\Char $y
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MinMagnitudeNumber($x, $y){}
	/**
	 * @param \System\TOther $value
	 * @param \System\Char& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertFromChecked($value, $result){}
	/**
	 * @param \System\TOther $value
	 * @param \System\Char& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertFromSaturating($value, $result){}
	/**
	 * @param \System\TOther $value
	 * @param \System\Char& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertFromTruncating($value, $result){}
	/**
	 * @param \System\Char $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToChecked($value, $result){}
	/**
	 * @param \System\Char $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToSaturating($value, $result){}
	/**
	 * @param \System\Char $value
	 * @param \System\TOther& $result
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryConvertToTruncating($value, $result){}
	/**
	 * @param \System\Char $value
	 * @param \System\Int32|int $shiftAmount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_LeftShift($value, $shiftAmount){}
	/**
	 * @param \System\Char $value
	 * @param \System\Int32|int $shiftAmount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_RightShift($value, $shiftAmount){}
	/**
	 * @param \System\Char $value
	 * @param \System\Int32|int $shiftAmount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_UnsignedRightShift($value, $shiftAmount){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_Subtraction($left, $right){}
	/**
	 * @param \System\Char $left
	 * @param \System\Char $right
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedSubtraction($left, $right){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_UnaryNegation($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_CheckedUnaryNegation($value){}
	/**
	 * @param \System\Char $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function op_UnaryPlus($value){}
}
