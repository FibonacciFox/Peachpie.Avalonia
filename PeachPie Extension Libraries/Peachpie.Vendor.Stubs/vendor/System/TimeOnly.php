<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TimeOnlyOverride {
	/**
	 * @deprecated
	 * @param \System\Int64|int $ticks
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]private function AddTicks_1 ($ticks){}
	/**
	 * @deprecated
	 * @param \System\Int64|int $ticks
	 * @param \System\Int32& &$wrappedDays
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]private function AddTicks_2 ($ticks, &$wrappedDays){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $value
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public function Add_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $value
	 * @param \System\Int32& &$wrappedDays
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public function Add_2 ($value, &$wrappedDays){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public function AddHours_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @param \System\Int32& &$wrappedDays
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public function AddHours_2 ($value, &$wrappedDays){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public function AddMinutes_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $value
	 * @param \System\Int32& &$wrappedDays
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public function AddMinutes_2 ($value, &$wrappedDays){}
	/**
	 * @deprecated
	 * @param \System\TimeOnly $value
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
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public static function Parse_1 ($s, $provider, $style){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public static function Parse_2 ($s){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public static function Parse_3 ($s, $provider, $style){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public static function Parse_4 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public static function Parse_5 ($s, $provider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public static function ParseExact_1 ($s, $format, $provider, $style){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public static function ParseExact_2 ($s, $formats){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public static function ParseExact_3 ($s, $formats, $provider, $style){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String|string $format
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public static function ParseExact_4 ($s, $format){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public static function ParseExact_5 ($s, $format, $provider, $style){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String $formats
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public static function ParseExact_6 ($s, $formats){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @return \System\TimeOnly
	 */
	#[MethodOverride]public static function ParseExact_7 ($s, $formats, $provider, $style){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\TimeOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\TimeOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($s, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\TimeOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_3 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\TimeOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_4 ($s, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\TimeOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_5 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\TimeOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_6 ($s, $provider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\TimeOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_1 ($s, $format, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\TimeOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_2 ($s, $format, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\TimeOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_3 ($s, $formats, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\TimeOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_4 ($s, $formats, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String|string $format
	 * @param \System\TimeOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_5 ($s, $format, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\TimeOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_6 ($s, $format, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String $formats
	 * @param \System\TimeOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_7 ($s, $formats, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\TimeOnly& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_8 ($s, $formats, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\TimeOnly& &$result
	 * @return \System\ParseFailureKind
	 */
	#[MethodOverride]private static function TryParseExactInternal_1 ($s, $format, $provider, $style, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $provider
	 * @param \System\Globalization\DateTimeStyles $style
	 * @param \System\TimeOnly& &$result
	 * @return \System\ParseFailureKind
	 */
	#[MethodOverride]private static function TryParseExactInternal_2 ($s, $formats, $provider, $style, &$result){}
	/**
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 */
	#[MethodOverride]public function __construct_1 ($hour, $minute){}
	/**
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 */
	#[MethodOverride]public function __construct_2 ($hour, $minute, $second){}
	/**
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 */
	#[MethodOverride]public function __construct_3 ($hour, $minute, $second, $millisecond){}
	/**
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\Int32|int $microsecond
	 */
	#[MethodOverride]public function __construct_4 ($hour, $minute, $second, $millisecond, $microsecond){}
	/**
	 * @param \System\Int64|int $ticks
	 */
	#[MethodOverride]public function __construct_5 ($ticks){}
}
final class TimeOnly extends \System\ValueType implements
	\System\IComparable,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\ISpanFormattable,
	\System\IFormattable,
	\System\ISpanParsable_1,
	\System\IParsable_1
{
	use TimeOnlyOverride;
	/**
	 * @property
	 * @var \System\TimeOnly
	 * @since readonly
	 */
	public $MinValue;
	/**
	 * @property
	 * @var \System\TimeOnly
	 * @since readonly
	 */
	public $MaxValue;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Hour;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Minute;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Second;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Millisecond;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Microsecond;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Nanosecond;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Ticks;
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses TimeOnlyOverride::AddTicks_1 <br>private , args: ($ticks)<br>
	 * @uses TimeOnlyOverride::AddTicks_2 <br>private , args: ($ticks, &$wrappedDays)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeOnly|mixed|\override
	 */
	#[MethodOverridePrivate]function AddTicks (\override ...$args){}
	/**
	 * @uses TimeOnlyOverride::Add_1 <br>public , args: ($value)<br>
	 * @uses TimeOnlyOverride::Add_2 <br>public , args: ($value, &$wrappedDays)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeOnly|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 * @uses TimeOnlyOverride::AddHours_1 <br>public , args: ($value)<br>
	 * @uses TimeOnlyOverride::AddHours_2 <br>public , args: ($value, &$wrappedDays)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeOnly|mixed|\override
	 */
	#[MethodOverridePublic]function AddHours (\override ...$args){}
	/**
	 * @uses TimeOnlyOverride::AddMinutes_1 <br>public , args: ($value)<br>
	 * @uses TimeOnlyOverride::AddMinutes_2 <br>public , args: ($value, &$wrappedDays)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeOnly|mixed|\override
	 */
	#[MethodOverridePublic]function AddMinutes (\override ...$args){}
	/**
	 * @param \System\TimeOnly $start
	 * @param \System\TimeOnly $end
	 * @return \System\Boolean|bool
	 */
	public function IsBetween($start, $end){}
	/**
	 * @param \System\TimeOnly $left
	 * @param \System\TimeOnly $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\TimeOnly $left
	 * @param \System\TimeOnly $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\TimeOnly $left
	 * @param \System\TimeOnly $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThan($left, $right){}
	/**
	 * @param \System\TimeOnly $left
	 * @param \System\TimeOnly $right
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThanOrEqual($left, $right){}
	/**
	 * @param \System\TimeOnly $left
	 * @param \System\TimeOnly $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThan($left, $right){}
	/**
	 * @param \System\TimeOnly $left
	 * @param \System\TimeOnly $right
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThanOrEqual($left, $right){}
	/**
	 * @param \System\TimeOnly $t1
	 * @param \System\TimeOnly $t2
	 * @return \System\TimeSpan
	 */
	public static function op_Subtraction($t1, $t2){}
	/**
	 * @param \System\TimeSpan $timeSpan
	 * @return \System\TimeOnly
	 */
	public static function FromTimeSpan($timeSpan){}
	/**
	 * @param \System\DateTime $dateTime
	 * @return \System\TimeOnly
	 */
	public static function FromDateTime($dateTime){}
	/**
	 * @return \System\TimeSpan
	 */
	public function ToTimeSpan(){}
	/**
	 * @return \System\DateTime
	 */
	protected function ToDateTime(){}
	/**
	 * @uses TimeOnlyOverride::CompareTo_1 <br>public , args: ($value)<br>
	 * @uses TimeOnlyOverride::CompareTo_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	/**
	 * @uses TimeOnlyOverride::Parse_1 <br>public , args: ($s, $provider, $style)<br>
	 * @uses TimeOnlyOverride::Parse_2 <br>public , args: ($s)<br>
	 * @uses TimeOnlyOverride::Parse_3 <br>public , args: ($s, $provider, $style)<br>
	 * @uses TimeOnlyOverride::Parse_4 <br>public , args: ($s, $provider)<br>
	 * @uses TimeOnlyOverride::Parse_5 <br>public , args: ($s, $provider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeOnly|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses TimeOnlyOverride::ParseExact_1 <br>public , args: ($s, $format, $provider, $style)<br>
	 * @uses TimeOnlyOverride::ParseExact_2 <br>public , args: ($s, $formats)<br>
	 * @uses TimeOnlyOverride::ParseExact_3 <br>public , args: ($s, $formats, $provider, $style)<br>
	 * @uses TimeOnlyOverride::ParseExact_4 <br>public , args: ($s, $format)<br>
	 * @uses TimeOnlyOverride::ParseExact_5 <br>public , args: ($s, $format, $provider, $style)<br>
	 * @uses TimeOnlyOverride::ParseExact_6 <br>public , args: ($s, $formats)<br>
	 * @uses TimeOnlyOverride::ParseExact_7 <br>public , args: ($s, $formats, $provider, $style)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeOnly|mixed|\override
	 */
	#[MethodOverridePublic]function ParseExact (\override ...$args){}
	/**
	 * @uses TimeOnlyOverride::TryParse_1 <br>public , args: ($s, &$result)<br>
	 * @uses TimeOnlyOverride::TryParse_2 <br>public , args: ($s, $provider, $style, &$result)<br>
	 * @uses TimeOnlyOverride::TryParse_3 <br>public , args: ($s, &$result)<br>
	 * @uses TimeOnlyOverride::TryParse_4 <br>public , args: ($s, $provider, $style, &$result)<br>
	 * @uses TimeOnlyOverride::TryParse_5 <br>public , args: ($s, $provider, &$result)<br>
	 * @uses TimeOnlyOverride::TryParse_6 <br>public , args: ($s, $provider, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	private static function TryParseInternal($s, $provider, $style, &$result){}
	/**
	 * @uses TimeOnlyOverride::TryParseExact_1 <br>public , args: ($s, $format, &$result)<br>
	 * @uses TimeOnlyOverride::TryParseExact_2 <br>public , args: ($s, $format, $provider, $style, &$result)<br>
	 * @uses TimeOnlyOverride::TryParseExact_3 <br>public , args: ($s, $formats, &$result)<br>
	 * @uses TimeOnlyOverride::TryParseExact_4 <br>public , args: ($s, $formats, $provider, $style, &$result)<br>
	 * @uses TimeOnlyOverride::TryParseExact_5 <br>public , args: ($s, $format, &$result)<br>
	 * @uses TimeOnlyOverride::TryParseExact_6 <br>public , args: ($s, $format, $provider, $style, &$result)<br>
	 * @uses TimeOnlyOverride::TryParseExact_7 <br>public , args: ($s, $formats, &$result)<br>
	 * @uses TimeOnlyOverride::TryParseExact_8 <br>public , args: ($s, $formats, $provider, $style, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParseExact (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses TimeOnlyOverride::TryParseExactInternal_1 <br>private , args: ($s, $format, $provider, $style, &$result)<br>
	 * @uses TimeOnlyOverride::TryParseExactInternal_2 <br>private , args: ($s, $formats, $provider, $style, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\ParseFailureKind|mixed|\override
	 */
	#[MethodOverridePrivate]function TryParseExactInternal (\override ...$args){}
	private static function ThrowOnError($result, $s){}
	/**
	 * @return \System\String|string
	 */
	public function ToLongTimeString(){}
	/**
	 * @return \System\String|string
	 */
	public function ToShortTimeString(){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \System\Boolean|bool
	 */
	public function TryFormat($destination, &$charsWritten, $format, $provider){}
	/**
	 * @uses TimeOnlyOverride::__construct_1 <br>public , args: ($hour, $minute)<br>
	 * @uses TimeOnlyOverride::__construct_2 <br>public , args: ($hour, $minute, $second)<br>
	 * @uses TimeOnlyOverride::__construct_3 <br>public , args: ($hour, $minute, $second, $millisecond)<br>
	 * @uses TimeOnlyOverride::__construct_4 <br>public , args: ($hour, $minute, $second, $millisecond, $microsecond)<br>
	 * @uses TimeOnlyOverride::__construct_5 <br>public , args: ($ticks)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}