<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DateOnlyOverride {
	/**
	 * @deprecated
	 * @param \System\TimeOnly $time
	 * @return \System\DateTime
	 */
	#[MethodOverride]public function ToDateTime_1 ($time){}
	/**
	 * @deprecated
	 * @param \System\TimeOnly $time
	 * @param \System\DateTimeKind $kind
	 * @return \System\DateTime
	 */
	#[MethodOverride]public function ToDateTime_2 ($time, $kind){}
	/**
	 * @deprecated
	 * @param \System\DateOnly $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\DateOnly
	 */
	#[MethodOverride]public static function Parse_1 ($s, $provider, $style){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\DateOnly
	 */
	#[MethodOverride]public static function Parse_2 ($s){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\DateOnly
	 */
	#[MethodOverride]public static function Parse_3 ($s, $provider, $style){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @return \System\DateOnly
	 */
	#[MethodOverride]public static function Parse_4 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\DateOnly
	 */
	#[MethodOverride]public static function Parse_5 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\DateOnly
	 */
	#[MethodOverride]public static function ParseExact_1 ($s, $format, $provider, $style){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @return \System\DateOnly
	 */
	#[MethodOverride]public static function ParseExact_2 ($s, $formats){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\DateOnly
	 */
	#[MethodOverride]public static function ParseExact_3 ($s, $formats, $provider, $style){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String|string $format
	 * @return \System\DateOnly
	 */
	#[MethodOverride]public static function ParseExact_4 ($s, $format){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\DateOnly
	 */
	#[MethodOverride]public static function ParseExact_5 ($s, $format, $provider, $style){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String $formats
	 * @return \System\DateOnly
	 */
	#[MethodOverride]public static function ParseExact_6 ($s, $formats){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\DateOnly
	 */
	#[MethodOverride]public static function ParseExact_7 ($s, $formats, $provider, $style){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\DateOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($s, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\DateOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_3 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_4 ($s, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\DateOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_5 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\DateOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_6 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\DateOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_1 ($s, $format, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_2 ($s, $format, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\DateOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_3 ($s, $formats, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_4 ($s, $formats, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String|string $format
	 * @param \System\DateOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_5 ($s, $format, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_6 ($s, $format, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String $formats
	 * @param \System\DateOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_7 ($s, $formats, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_8 ($s, $formats, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateOnly& &$result
	 * @return \System\ParseFailureKind
	 */
	#[MethodOverride]private static function TryParseExactInternal_1 ($s, $format, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\DateOnly& &$result
	 * @return \System\ParseFailureKind
	 */
	#[MethodOverride]private static function TryParseExactInternal_2 ($s, $formats, $provider, $style, &$result){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 */
	#[MethodOverride]public function __construct_1 ($year, $month, $day){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Globalization\Calendar $calendar
	 */
	#[MethodOverride]public function __construct_2 ($year, $month, $day, $calendar){}
}
final class DateOnly extends \System\ValueType implements
	\System\IComparable,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\ISpanFormattable,
	\System\IFormattable,
	\System\ISpanParsable_1,
	\System\IParsable_1
{
	use DateOnlyOverride;
	/**
	 * @property
	 * @var \System\DateOnly
	 * @since readonly
	 */
	public $MinValue;
	/**
	 * @property
	 * @var \System\DateOnly
	 * @since readonly
	 */
	public $MaxValue;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Year;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Month;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Day;
	/**
	 * @property
	 * @var \System\DayOfWeek
	 * @since readonly
	 */
	public $DayOfWeek;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $DayOfYear;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $DayNumber;
	private static function DayNumberFromDateTime($dt){}
	private function GetEquivalentDateTime(){}
	/**
	 * @param \System\Int32|int $dayNumber
	 * @return \System\DateOnly
	 */
	public static function FromDayNumber($dayNumber){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\DateOnly
	 */
	public function AddDays($value){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\DateOnly
	 */
	public function AddMonths($value){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\DateOnly
	 */
	public function AddYears($value){}
	/**
	 * @param \System\DateOnly $left
	 * @param \System\DateOnly $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\DateOnly $left
	 * @param \System\DateOnly $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\DateOnly $left
	 * @param \System\DateOnly $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\DateOnly $left
	 * @param \System\DateOnly $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\DateOnly $left
	 * @param \System\DateOnly $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \System\DateOnly $left
	 * @param \System\DateOnly $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThanOrEqual($left, $right){}
	/**
	 * @uses DateOnlyOverride::ToDateTime_1 <br>public , args: ($time)<br>
	 * @uses DateOnlyOverride::ToDateTime_2 <br>public , args: ($time, $kind)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTime|mixed|\override
	 */
	#[MethodOverridePublic]function ToDateTime (\override ...$args){}
	/**
	 * @param \System\DateTime $dateTime
	 * @return \System\DateOnly
	 */
	public static function FromDateTime($dateTime){}
	/**
	 * @uses DateOnlyOverride::CompareTo_1 <br>public , args: ($value)<br>
	 * @uses DateOnlyOverride::CompareTo_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	/**
	 * @uses DateOnlyOverride::Parse_1 <br>public , args: ($s, $provider, $style)<br>
	 * @uses DateOnlyOverride::Parse_2 <br>public , args: ($s)<br>
	 * @uses DateOnlyOverride::Parse_3 <br>public , args: ($s, $provider, $style)<br>
	 * @uses DateOnlyOverride::Parse_4 <br>public , args: ($s, $provider)<br>
	 * @uses DateOnlyOverride::Parse_5 <br>public , args: ($s, $provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateOnly|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses DateOnlyOverride::ParseExact_1 <br>public , args: ($s, $format, $provider, $style)<br>
	 * @uses DateOnlyOverride::ParseExact_2 <br>public , args: ($s, $formats)<br>
	 * @uses DateOnlyOverride::ParseExact_3 <br>public , args: ($s, $formats, $provider, $style)<br>
	 * @uses DateOnlyOverride::ParseExact_4 <br>public , args: ($s, $format)<br>
	 * @uses DateOnlyOverride::ParseExact_5 <br>public , args: ($s, $format, $provider, $style)<br>
	 * @uses DateOnlyOverride::ParseExact_6 <br>public , args: ($s, $formats)<br>
	 * @uses DateOnlyOverride::ParseExact_7 <br>public , args: ($s, $formats, $provider, $style)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateOnly|mixed|\override
	 */
	#[MethodOverridePublic]function ParseExact (\override ...$args){}
	/**
	 * @uses DateOnlyOverride::TryParse_1 <br>public , args: ($s, &$result)<br>
	 * @uses DateOnlyOverride::TryParse_2 <br>public , args: ($s, $provider, $style, &$result)<br>
	 * @uses DateOnlyOverride::TryParse_3 <br>public , args: ($s, &$result)<br>
	 * @uses DateOnlyOverride::TryParse_4 <br>public , args: ($s, $provider, $style, &$result)<br>
	 * @uses DateOnlyOverride::TryParse_5 <br>public , args: ($s, $provider, &$result)<br>
	 * @uses DateOnlyOverride::TryParse_6 <br>public , args: ($s, $provider, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	private static function TryParseInternal($s, $provider, $style, &$result){}
	/**
	 * @uses DateOnlyOverride::TryParseExact_1 <br>public , args: ($s, $format, &$result)<br>
	 * @uses DateOnlyOverride::TryParseExact_2 <br>public , args: ($s, $format, $provider, $style, &$result)<br>
	 * @uses DateOnlyOverride::TryParseExact_3 <br>public , args: ($s, $formats, &$result)<br>
	 * @uses DateOnlyOverride::TryParseExact_4 <br>public , args: ($s, $formats, $provider, $style, &$result)<br>
	 * @uses DateOnlyOverride::TryParseExact_5 <br>public , args: ($s, $format, &$result)<br>
	 * @uses DateOnlyOverride::TryParseExact_6 <br>public , args: ($s, $format, $provider, $style, &$result)<br>
	 * @uses DateOnlyOverride::TryParseExact_7 <br>public , args: ($s, $formats, &$result)<br>
	 * @uses DateOnlyOverride::TryParseExact_8 <br>public , args: ($s, $formats, $provider, $style, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParseExact (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses DateOnlyOverride::TryParseExactInternal_1 <br>private , args: ($s, $format, $provider, $style, &$result)<br>
	 * @uses DateOnlyOverride::TryParseExactInternal_2 <br>private , args: ($s, $formats, $provider, $style, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ParseFailureKind|mixed|\override
	 */
	#[MethodOverridePrivate]function TryParseExactInternal (\override ...$args){}
	private static function ThrowOnError($result, $s){}
	/**
	 * @return \System\String|string
	 */
	public function ToLongDateString(){}
	/**
	 * @return \System\String|string
	 */
	public function ToShortDateString(){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\Boolean|bool
	 */
	public function TryFormat($destination, &$charsWritten, $format, $provider){}
	/**
	 * @uses DateOnlyOverride::__construct_1 <br>public , args: ($year, $month, $day)<br>
	 * @uses DateOnlyOverride::__construct_2 <br>public , args: ($year, $month, $day, $calendar)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}