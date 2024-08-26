<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CharOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Char $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function ToString_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\String|string
	 */
	#[MethodOverride]private function ToString_2 ($format, $formatProvider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\Char
	 */
	#[MethodOverride]public static function Parse_1 ($s){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @return \System\Char
	 */
	#[MethodOverride]private static function Parse_2 ($s, $style, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @return \System\Char
	 */
	#[MethodOverride]private static function Parse_3 ($s, $style, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @return \System\Char
	 */
	#[MethodOverride]private static function Parse_4 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\Char
	 */
	#[MethodOverride]private static function Parse_5 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Char& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\Char& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryParse_2 ($s, $style, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\Globalization\NumberStyles $style
	 * @param \System\IFormatProvider $provider
	 * @param \System\Char& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryParse_3 ($s, $style, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\Char& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryParse_4 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Char& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryParse_5 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsDigit_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsDigit_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @param \System\Char $minInclusive
	 * @param \System\Char $maxInclusive
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsBetween_1 ($c, $minInclusive, $maxInclusive){}
	/**
	 * @deprecated
	 * @param \System\Globalization\UnicodeCategory $c
	 * @param \System\Globalization\UnicodeCategory $min
	 * @param \System\Globalization\UnicodeCategory $max
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function IsBetween_2 ($c, $min, $max){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsLetter_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsLetter_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsWhiteSpace_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsWhiteSpace_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsUpper_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsUpper_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsLower_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsLower_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsPunctuation_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsPunctuation_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsLetterOrDigit_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsLetterOrDigit_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Char
	 */
	#[MethodOverride]public static function ToUpper_1 ($c, $culture){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	#[MethodOverride]public static function ToUpper_2 ($c){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Char
	 */
	#[MethodOverride]public static function ToLower_1 ($c, $culture){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	#[MethodOverride]public static function ToLower_2 ($c){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsControl_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsControl_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsNumber_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsNumber_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsSeparator_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsSeparator_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsSurrogate_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsSurrogate_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsSymbol_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsSymbol_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Globalization\UnicodeCategory
	 */
	#[MethodOverride]public static function GetUnicodeCategory_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Globalization\UnicodeCategory
	 */
	#[MethodOverride]public static function GetUnicodeCategory_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function GetNumericValue_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function GetNumericValue_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsHighSurrogate_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsHighSurrogate_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsLowSurrogate_1 ($c){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsLowSurrogate_2 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsSurrogatePair_1 ($s, $index){}
	/**
	 * @deprecated
	 * @param \System\Char $highSurrogate
	 * @param \System\Char $lowSurrogate
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsSurrogatePair_2 ($highSurrogate, $lowSurrogate){}
	/**
	 * @deprecated
	 * @param \System\Char $highSurrogate
	 * @param \System\Char $lowSurrogate
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function ConvertToUtf32_1 ($highSurrogate, $lowSurrogate){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Int32|int $index
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function ConvertToUtf32_2 ($s, $index){}
}
final class Char extends \System\ValueType implements
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
	use CharOverride;
	/**
	 * @field
	 * @var \System\Char
	 */
	const MaxValue = '￿';
	/**
	 * @field
	 * @var \System\Char
	 */
	const MinValue = ' ';
	private static function IsLatin1($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	public static function IsAscii($c){}
	private static function GetLatin1UnicodeCategory($c){}
	/**
	 * @uses CharOverride::CompareTo_1 <br>public , args: ($value)<br>
	 * @uses CharOverride::CompareTo_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	/**
	 * @uses CharOverride::ToString_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::ToString_2 <br>private , args: ($format, $formatProvider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function ToString (\override ...$args){}
	private function TryFormat($destination, &$charsWritten, $format, $provider){}
	/**
	 * @uses CharOverride::Parse_1 <br>public , args: ($s)<br>
	 * @uses CharOverride::Parse_2 <br>private , args: ($s, $style, $provider)<br>
	 * @uses CharOverride::Parse_3 <br>private , args: ($s, $style, $provider)<br>
	 * @uses CharOverride::Parse_4 <br>private , args: ($s, $provider)<br>
	 * @uses CharOverride::Parse_5 <br>private , args: ($s, $provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Char|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses CharOverride::TryParse_1 <br>public , args: ($s, &$result)<br>
	 * @uses CharOverride::TryParse_2 <br>private , args: ($s, $style, $provider, &$result)<br>
	 * @uses CharOverride::TryParse_3 <br>private , args: ($s, $style, $provider, &$result)<br>
	 * @uses CharOverride::TryParse_4 <br>private , args: ($s, $provider, &$result)<br>
	 * @uses CharOverride::TryParse_5 <br>private , args: ($s, $provider, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	public static function IsAsciiLetter($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	public static function IsAsciiLetterLower($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	public static function IsAsciiLetterUpper($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	public static function IsAsciiDigit($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	public static function IsAsciiLetterOrDigit($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	public static function IsAsciiHexDigit($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	public static function IsAsciiHexDigitUpper($c){}
	/**
	 * @param \System\Char $c
	 * @return \System\Boolean|bool
	 */
	public static function IsAsciiHexDigitLower($c){}
	/**
	 * @uses CharOverride::IsDigit_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::IsDigit_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsDigit (\override ...$args){}
	/**
	 * @uses CharOverride::IsBetween_1 <br>public , args: ($c, $minInclusive, $maxInclusive)<br>
	 * @uses CharOverride::IsBetween_2 <br>private , args: ($c, $min, $max)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsBetween (\override ...$args){}
	/**
	 * @param \System\Globalization\UnicodeCategory $uc
	 * @return \System\Boolean|bool
	 */
	protected static function CheckLetter($uc){}
	/**
	 * @uses CharOverride::IsLetter_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::IsLetter_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsLetter (\override ...$args){}
	private static function IsWhiteSpaceLatin1($c){}
	/**
	 * @uses CharOverride::IsWhiteSpace_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::IsWhiteSpace_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsWhiteSpace (\override ...$args){}
	/**
	 * @uses CharOverride::IsUpper_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::IsUpper_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsUpper (\override ...$args){}
	/**
	 * @uses CharOverride::IsLower_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::IsLower_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsLower (\override ...$args){}
	/**
	 * @param \System\Globalization\UnicodeCategory $uc
	 * @return \System\Boolean|bool
	 */
	protected static function CheckPunctuation($uc){}
	/**
	 * @uses CharOverride::IsPunctuation_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::IsPunctuation_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsPunctuation (\override ...$args){}
	/**
	 * @param \System\Globalization\UnicodeCategory $uc
	 * @return \System\Boolean|bool
	 */
	protected static function CheckLetterOrDigit($uc){}
	/**
	 * @uses CharOverride::IsLetterOrDigit_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::IsLetterOrDigit_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsLetterOrDigit (\override ...$args){}
	/**
	 * @uses CharOverride::ToUpper_1 <br>public , args: ($c, $culture)<br>
	 * @uses CharOverride::ToUpper_2 <br>public , args: ($c)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Char|mixed|\override
	 */
	#[MethodOverridePublic]function ToUpper (\override ...$args){}
	/**
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	public static function ToUpperInvariant($c){}
	/**
	 * @uses CharOverride::ToLower_1 <br>public , args: ($c, $culture)<br>
	 * @uses CharOverride::ToLower_2 <br>public , args: ($c)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Char|mixed|\override
	 */
	#[MethodOverridePublic]function ToLower (\override ...$args){}
	/**
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	public static function ToLowerInvariant($c){}
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
	 * @uses CharOverride::IsControl_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::IsControl_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsControl (\override ...$args){}
	/**
	 * @param \System\Globalization\UnicodeCategory $uc
	 * @return \System\Boolean|bool
	 */
	protected static function CheckNumber($uc){}
	/**
	 * @uses CharOverride::IsNumber_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::IsNumber_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsNumber (\override ...$args){}
	/**
	 * @param \System\Globalization\UnicodeCategory $uc
	 * @return \System\Boolean|bool
	 */
	protected static function CheckSeparator($uc){}
	private static function IsSeparatorLatin1($c){}
	/**
	 * @uses CharOverride::IsSeparator_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::IsSeparator_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsSeparator (\override ...$args){}
	/**
	 * @uses CharOverride::IsSurrogate_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::IsSurrogate_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsSurrogate (\override ...$args){}
	/**
	 * @param \System\Globalization\UnicodeCategory $uc
	 * @return \System\Boolean|bool
	 */
	protected static function CheckSymbol($uc){}
	/**
	 * @uses CharOverride::IsSymbol_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::IsSymbol_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsSymbol (\override ...$args){}
	/**
	 * @uses CharOverride::GetUnicodeCategory_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::GetUnicodeCategory_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Globalization\UnicodeCategory|mixed|\override
	 */
	#[MethodOverridePublic]function GetUnicodeCategory (\override ...$args){}
	/**
	 * @uses CharOverride::GetNumericValue_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::GetNumericValue_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Double|double|mixed|\override
	 */
	#[MethodOverridePublic]function GetNumericValue (\override ...$args){}
	/**
	 * @uses CharOverride::IsHighSurrogate_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::IsHighSurrogate_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsHighSurrogate (\override ...$args){}
	/**
	 * @uses CharOverride::IsLowSurrogate_1 <br>public , args: ($c)<br>
	 * @uses CharOverride::IsLowSurrogate_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsLowSurrogate (\override ...$args){}
	/**
	 * @uses CharOverride::IsSurrogatePair_1 <br>public , args: ($s, $index)<br>
	 * @uses CharOverride::IsSurrogatePair_2 <br>public , args: ($highSurrogate, $lowSurrogate)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsSurrogatePair (\override ...$args){}
	/**
	 * @param \System\Int32|int $utf32
	 * @return \System\String|string
	 */
	public static function ConvertFromUtf32($utf32){}
	/**
	 * @uses CharOverride::ConvertToUtf32_1 <br>public , args: ($highSurrogate, $lowSurrogate)<br>
	 * @uses CharOverride::ConvertToUtf32_2 <br>public , args: ($s, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function ConvertToUtf32 (\override ...$args){}
	private static function ConvertToUtf32_ThrowInvalidArgs($highSurrogateOffset){}
	private static function op_Addition($left, $right){}
	private static function op_CheckedAddition($left, $right){}
	private static function get_AdditiveIdentity(){}
	private static function LeadingZeroCount($value){}
	private static function PopCount($value){}
	private static function RotateLeft($value, $rotateAmount){}
	private static function RotateRight($value, $rotateAmount){}
	private static function TrailingZeroCount($value){}
	private static function TryReadBigEndian($source, $isUnsigned, &$value){}
	private static function TryReadLittleEndian($source, $isUnsigned, &$value){}
	private function GetShortestBitLength(){}
	private function GetByteCount(){}
	private function TryWriteBigEndian($destination, &$bytesWritten){}
	private function TryWriteLittleEndian($destination, &$bytesWritten){}
	private static function get_AllBitsSet(){}
	private static function IsPow2($value){}
	private static function Log2($value){}
	private static function op_BitwiseAnd($left, $right){}
	private static function op_BitwiseOr($left, $right){}
	private static function op_ExclusiveOr($left, $right){}
	private static function op_OnesComplement($value){}
	private static function op_LessThan($left, $right){}
	private static function op_LessThanOrEqual($left, $right){}
	private static function op_GreaterThan($left, $right){}
	private static function op_GreaterThanOrEqual($left, $right){}
	private static function op_Decrement($value){}
	private static function op_CheckedDecrement($value){}
	private static function op_Division($left, $right){}
	private static function op_Equality($left, $right){}
	private static function op_Inequality($left, $right){}
	private static function op_Increment($value){}
	private static function op_CheckedIncrement($value){}
	private static function get_MinValue(){}
	private static function get_MaxValue(){}
	private static function op_Modulus($left, $right){}
	private static function get_MultiplicativeIdentity(){}
	private static function op_Multiply($left, $right){}
	private static function op_CheckedMultiply($left, $right){}
	private static function get_One(){}
	private static function get_Radix(){}
	private static function get_Zero(){}
	private static function Abs($value){}
	private static function IsCanonical($value){}
	private static function IsComplexNumber($value){}
	private static function IsEvenInteger($value){}
	private static function IsFinite($value){}
	private static function IsImaginaryNumber($value){}
	private static function IsInfinity($value){}
	private static function IsInteger($value){}
	private static function IsNaN($value){}
	private static function IsNegative($value){}
	private static function IsNegativeInfinity($value){}
	private static function IsNormal($value){}
	private static function IsOddInteger($value){}
	private static function IsPositive($value){}
	private static function IsPositiveInfinity($value){}
	private static function IsRealNumber($value){}
	private static function IsSubnormal($value){}
	private static function IsZero($value){}
	private static function MaxMagnitude($x, $y){}
	private static function MaxMagnitudeNumber($x, $y){}
	private static function MinMagnitude($x, $y){}
	private static function MinMagnitudeNumber($x, $y){}
	private static function TryConvertFromChecked($value, &$result){}
	private static function TryConvertFromSaturating($value, &$result){}
	private static function TryConvertFromTruncating($value, &$result){}
	private static function TryConvertToChecked($value, &$result){}
	private static function TryConvertToSaturating($value, &$result){}
	private static function TryConvertToTruncating($value, &$result){}
	private static function op_LeftShift($value, $shiftAmount){}
	private static function op_RightShift($value, $shiftAmount){}
	private static function op_UnsignedRightShift($value, $shiftAmount){}
	private static function op_Subtraction($left, $right){}
	private static function op_CheckedSubtraction($left, $right){}
	private static function op_UnaryNegation($value){}
	private static function op_CheckedUnaryNegation($value){}
	private static function op_UnaryPlus($value){}
}