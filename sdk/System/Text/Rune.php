<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RuneMethodsOverride
{
	/**
	 * @return \System\Text\Rune
	 */
	#[MethodOverride] public static function op_Explicit_1($ch){}
	/**
	 * @return \System\Text\Rune
	 */
	#[MethodOverride] public static function op_Explicit_2($value){}
	/**
	 * @return \System\Text\Rune
	 */
	#[MethodOverride] public static function op_Explicit_3($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function CompareTo_1($other){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function CompareTo_2($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsValid_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsValid_2($value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function ToString_2($format, $formatProvider){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryCreate_1($ch, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryCreate_2($highSurrogate, $lowSurrogate, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryCreate_3($value, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function TryCreate_4($value, $result){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryEncodeToUtf16_1($destination, $charsWritten){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryEncodeToUtf16_2($value, $destination, $charsWritten){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function TryEncodeToUtf8_1($destination, $bytesWritten){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private static function TryEncodeToUtf8_2($value, $destination, $bytesWritten){}
}
/**
 */
class Rune extends \System\ValueType implements 
	\System\IComparable,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\ISpanFormattable,
	\System\IFormattable
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAscii;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsBmp;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Plane;
	/**
	 * @var \System\Text\Rune
	 * @property
	 */
	public readonly $ReplacementChar;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Utf16SequenceLength;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Utf8SequenceLength;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Value;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_AsciiCharInfo(){}
	/**
	 * @param \System\Text\Rune $left
	 * @param \System\Text\Rune $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Text\Rune $left
	 * @param \System\Text\Rune $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Text\Rune $left
	 * @param \System\Text\Rune $right
	 * @return \System\Boolean
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \System\Text\Rune $left
	 * @param \System\Text\Rune $right
	 * @return \System\Boolean
	 */
	public static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \System\Text\Rune $left
	 * @param \System\Text\Rune $right
	 * @return \System\Boolean
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\Text\Rune $left
	 * @param \System\Text\Rune $right
	 * @return \System\Boolean
	 */
	public static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @uses RuneMethodsOverride::op_Explicit_1 ($ch)
	 * @uses RuneMethodsOverride::op_Explicit_2 ($value)
	 * @uses RuneMethodsOverride::op_Explicit_3 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Explicit(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_DebuggerDisplay(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAscii(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsBmp(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Plane(){}
	/**
	 * @return \System\Text\Rune
	 */
	public static function get_ReplacementChar(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Utf16SequenceLength(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Utf8SequenceLength(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Value(){}
	/**
	 * @param \System\Text\Rune $rune
	 * @param \System\Globalization\TextInfo $textInfo
	 * @param \System\Boolean $toUpper
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ChangeCaseCultureAware($rune, $textInfo, $toUpper){}
	/**
	 * @uses RuneMethodsOverride::CompareTo_1 ($other)
	 * @uses RuneMethodsOverride::CompareTo_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CompareTo(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Text\Rune& $result
	 * @param \System\Int32& $charsConsumed
	 * @return \System\Buffers\OperationStatus
	 */
	public static function DecodeFromUtf16($source, $result, $charsConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Text\Rune& $result
	 * @param \System\Int32& $bytesConsumed
	 * @return \System\Buffers\OperationStatus
	 */
	public static function DecodeFromUtf8($source, $result, $bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Text\Rune& $result
	 * @param \System\Int32& $charsConsumed
	 * @return \System\Buffers\OperationStatus
	 */
	public static function DecodeLastFromUtf16($source, $result, $charsConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Text\Rune& $value
	 * @param \System\Int32& $bytesConsumed
	 * @return \System\Buffers\OperationStatus
	 */
	public static function DecodeLastFromUtf8($source, $value, $bytesConsumed){}
	/**
	 * @param \System\Span_1 $destination
	 * @return \System\Int32|int
	 */
	public  function EncodeToUtf16($destination){}
	/**
	 * @param \System\Span_1 $destination
	 * @return \System\Int32|int
	 */
	public  function EncodeToUtf8($destination){}
	/**
	 * @uses RuneMethodsOverride::Equals_1 ($obj)
	 * @uses RuneMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\String|string $input
	 * @param \System\Int32|int $index
	 * @return \System\Text\Rune
	 */
	public static function GetRuneAt($input, $index){}
	/**
	 * @uses RuneMethodsOverride::IsValid_1 ($value)
	 * @uses RuneMethodsOverride::IsValid_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsValid(mixed ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @return \System\Int32|int
	 */
	protected static function ReadFirstRuneFromUtf16Buffer($input){}
	/**
	 * @param \System\String|string $input
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadRuneFromString($input, $index){}
	/**
	 * @uses RuneMethodsOverride::ToString_1 ()
	 * @uses RuneMethodsOverride::ToString_2 ($format, $formatProvider)
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
	 * @uses RuneMethodsOverride::TryCreate_1 ($ch, $result)
	 * @uses RuneMethodsOverride::TryCreate_2 ($highSurrogate, $lowSurrogate, $result)
	 * @uses RuneMethodsOverride::TryCreate_3 ($value, $result)
	 * @uses RuneMethodsOverride::TryCreate_4 ($value, $result)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryCreate(mixed ...$args){}
	/**
	 * @uses RuneMethodsOverride::TryEncodeToUtf16_1 ($destination, $charsWritten)
	 * @uses RuneMethodsOverride::TryEncodeToUtf16_2 ($value, $destination, $charsWritten)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryEncodeToUtf16(mixed ...$args){}
	/**
	 * @uses RuneMethodsOverride::TryEncodeToUtf8_1 ($destination, $bytesWritten)
	 * @uses RuneMethodsOverride::TryEncodeToUtf8_2 ($value, $destination, $bytesWritten)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function TryEncodeToUtf8(mixed ...$args){}
	/**
	 * @param \System\String|string $input
	 * @param \System\Int32|int $index
	 * @param \System\Text\Rune& $value
	 * @return \System\Boolean
	 */
	public static function TryGetRuneAt($input, $index, $value){}
	/**
	 * @param \System\UInt32 $scalarValue
	 * @return \System\Text\Rune
	 */
	protected static function UnsafeCreate($scalarValue){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Double|double
	 */
	public static function GetNumericValue($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Globalization\UnicodeCategory
	 */
	public static function GetUnicodeCategory($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUnicodeCategoryNonAscii($value){}
	/**
	 * @param \System\Globalization\UnicodeCategory $category
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsCategoryLetter($category){}
	/**
	 * @param \System\Globalization\UnicodeCategory $category
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsCategoryLetterOrDecimalDigit($category){}
	/**
	 * @param \System\Globalization\UnicodeCategory $category
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsCategoryNumber($category){}
	/**
	 * @param \System\Globalization\UnicodeCategory $category
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsCategoryPunctuation($category){}
	/**
	 * @param \System\Globalization\UnicodeCategory $category
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsCategorySeparator($category){}
	/**
	 * @param \System\Globalization\UnicodeCategory $category
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsCategorySymbol($category){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean
	 */
	public static function IsControl($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean
	 */
	public static function IsDigit($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean
	 */
	public static function IsLetter($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean
	 */
	public static function IsLetterOrDigit($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean
	 */
	public static function IsLower($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean
	 */
	public static function IsNumber($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean
	 */
	public static function IsPunctuation($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean
	 */
	public static function IsSeparator($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean
	 */
	public static function IsSymbol($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean
	 */
	public static function IsUpper($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean
	 */
	public static function IsWhiteSpace($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Text\Rune
	 */
	public static function ToLower($value, $culture){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Text\Rune
	 */
	public static function ToLowerInvariant($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Text\Rune
	 */
	public static function ToUpper($value, $culture){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Text\Rune
	 */
	public static function ToUpperInvariant($value){}
}
