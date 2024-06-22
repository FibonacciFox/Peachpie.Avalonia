<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RuneOverride {
	/**
	 * @deprecated
	 * @param \System\Char $ch
	 * @return \System\Text\Rune
	 */
	#[MethodOverride]public static function op_Explicit_1 ($ch){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\Text\Rune
	 */
	#[MethodOverride]public static function op_Explicit_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Text\Rune
	 */
	#[MethodOverride]public static function op_Explicit_3 ($value){}
	/**
	 * @deprecated
	 * @param \System\Text\Rune $other
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_1 ($other){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private function CompareTo_2 ($obj){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsValid_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsValid_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\String|string
	 */
	#[MethodOverride]private function ToString_1 ($format, $formatProvider){}
	/**
	 * @deprecated
	 * @param \System\Char $ch
	 * @param \System\Text\Rune& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryCreate_1 ($ch, &$result){}
	/**
	 * @deprecated
	 * @param \System\Char $highSurrogate
	 * @param \System\Char $lowSurrogate
	 * @param \System\Text\Rune& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryCreate_2 ($highSurrogate, $lowSurrogate, &$result){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $value
	 * @param \System\Text\Rune& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryCreate_3 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $value
	 * @param \System\Text\Rune& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryCreate_4 ($value, &$result){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryEncodeToUtf16_1 ($destination, &$charsWritten){}
	/**
	 * @deprecated
	 * @param \System\Text\Rune $value
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryEncodeToUtf16_2 ($value, $destination, &$charsWritten){}
	/**
	 * @deprecated
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int32& &$bytesWritten
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function TryEncodeToUtf8_1 ($destination, &$bytesWritten){}
	/**
	 * @deprecated
	 * @param \System\Text\Rune $value
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @param \System\Int32& &$bytesWritten
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function TryEncodeToUtf8_2 ($value, $destination, &$bytesWritten){}
	/**
	 * @param \System\Char $ch
	 */
	#[MethodOverride]public function __construct_1 ($ch){}
	/**
	 * @param \System\Char $highSurrogate
	 * @param \System\Char $lowSurrogate
	 */
	#[MethodOverride]public function __construct_2 ($highSurrogate, $lowSurrogate){}
	/**
	 * @param \System\Int32|int $value
	 */
	#[MethodOverride]public function __construct_3 ($value){}
	/**
	 * @param \System\UInt32 $value
	 */
	#[MethodOverride]public function __construct_4 ($value){}
}
final class Rune extends \System\ValueType implements
	\System\IComparable,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\ISpanFormattable,
	\System\IFormattable
{
	use RuneOverride;

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAscii;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsBmp;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Plane;
	/**
	 * @property
	 * @var \System\Text\Rune
	 * @since readonly
	 */
	public $ReplacementChar;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Utf16SequenceLength;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Utf8SequenceLength;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Value;
	/**
	 * @param \System\Text\Rune $left
	 * @param \System\Text\Rune $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Text\Rune $left
	 * @param \System\Text\Rune $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\Text\Rune $left
	 * @param \System\Text\Rune $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \System\Text\Rune $left
	 * @param \System\Text\Rune $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \System\Text\Rune $left
	 * @param \System\Text\Rune $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\Text\Rune $left
	 * @param \System\Text\Rune $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @uses RuneOverride::op_Explicit_1 <br>public , args: ($ch)<br>
	 * @uses RuneOverride::op_Explicit_2 <br>public , args: ($value)<br>
	 * @uses RuneOverride::op_Explicit_3 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Text\Rune|mixed|\override
	 */
	#[MethodOverridePublic]function op_Explicit (\override ...$args){}
	private static function ChangeCaseCultureAware($rune, $textInfo, $toUpper){}
	/**
	 * @uses RuneOverride::CompareTo_1 <br>public , args: ($other)<br>
	 * @uses RuneOverride::CompareTo_2 <br>private , args: ($obj)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\Text\Rune& &$result
	 * @param \System\Int32& &$charsConsumed
	 * @return \System\Buffers\OperationStatus
	 */
	public static function DecodeFromUtf16($source, &$result, &$charsConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Text\Rune& &$result
	 * @param \System\Int32& &$bytesConsumed
	 * @return \System\Buffers\OperationStatus
	 */
	public static function DecodeFromUtf8($source, &$result, &$bytesConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Char]
	 * @param \System\Text\Rune& &$result
	 * @param \System\Int32& &$charsConsumed
	 * @return \System\Buffers\OperationStatus
	 */
	public static function DecodeLastFromUtf16($source, &$result, &$charsConsumed){}
	/**
	 * @param \System\ReadOnlySpan_1 $source [generic: System\Byte]
	 * @param \System\Text\Rune& &$value
	 * @param \System\Int32& &$bytesConsumed
	 * @return \System\Buffers\OperationStatus
	 */
	public static function DecodeLastFromUtf8($source, &$value, &$bytesConsumed){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @return \System\Int32|int
	 */
	public function EncodeToUtf16($destination){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Byte]
	 * @return \System\Int32|int
	 */
	public function EncodeToUtf8($destination){}
	/**
	 * @param \System\String|string $input
	 * @param \System\Int32|int $index
	 * @return \System\Text\Rune
	 */
	public static function GetRuneAt($input, $index){}
	/**
	 * @uses RuneOverride::IsValid_1 <br>public , args: ($value)<br>
	 * @uses RuneOverride::IsValid_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsValid (\override ...$args){}
	/**
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @return \System\Int32|int
	 */
	protected static function ReadFirstRuneFromUtf16Buffer($input){}
	private static function ReadRuneFromString($input, $index){}
	private function TryFormat($destination, &$charsWritten, $format, $provider){}
	/**
	 * @uses RuneOverride::TryCreate_1 <br>public , args: ($ch, &$result)<br>
	 * @uses RuneOverride::TryCreate_2 <br>public , args: ($highSurrogate, $lowSurrogate, &$result)<br>
	 * @uses RuneOverride::TryCreate_3 <br>public , args: ($value, &$result)<br>
	 * @uses RuneOverride::TryCreate_4 <br>public , args: ($value, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryCreate (\override ...$args){}
	/**
	 * @uses RuneOverride::TryEncodeToUtf16_1 <br>public , args: ($destination, &$charsWritten)<br>
	 * @uses RuneOverride::TryEncodeToUtf16_2 <br>private , args: ($value, $destination, &$charsWritten)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryEncodeToUtf16 (\override ...$args){}
	/**
	 * @uses RuneOverride::TryEncodeToUtf8_1 <br>public , args: ($destination, &$bytesWritten)<br>
	 * @uses RuneOverride::TryEncodeToUtf8_2 <br>private , args: ($value, $destination, &$bytesWritten)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryEncodeToUtf8 (\override ...$args){}
	/**
	 * @param \System\String|string $input
	 * @param \System\Int32|int $index
	 * @param \System\Text\Rune& &$value
	 * @return \System\Boolean|bool
	 */
	public static function TryGetRuneAt($input, $index, &$value){}
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
	private static function GetUnicodeCategoryNonAscii($value){}
	private static function IsCategoryLetter($category){}
	private static function IsCategoryLetterOrDecimalDigit($category){}
	private static function IsCategoryNumber($category){}
	private static function IsCategoryPunctuation($category){}
	private static function IsCategorySeparator($category){}
	private static function IsCategorySymbol($category){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean|bool
	 */
	public static function IsControl($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean|bool
	 */
	public static function IsDigit($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean|bool
	 */
	public static function IsLetter($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean|bool
	 */
	public static function IsLetterOrDigit($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean|bool
	 */
	public static function IsLower($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean|bool
	 */
	public static function IsNumber($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean|bool
	 */
	public static function IsPunctuation($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean|bool
	 */
	public static function IsSeparator($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean|bool
	 */
	public static function IsSymbol($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean|bool
	 */
	public static function IsUpper($value){}
	/**
	 * @param \System\Text\Rune $value
	 * @return \System\Boolean|bool
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
	/**
	 * @uses RuneOverride::__construct_1 <br>public , args: ($ch)<br>
	 * @uses RuneOverride::__construct_2 <br>public , args: ($highSurrogate, $lowSurrogate)<br>
	 * @uses RuneOverride::__construct_3 <br>public , args: ($value)<br>
	 * @uses RuneOverride::__construct_4 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}