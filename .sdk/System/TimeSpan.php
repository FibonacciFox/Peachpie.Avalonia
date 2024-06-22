<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TimeSpanOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function CompareTo_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Double|double $divisor
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public function Divide_1 ($divisor){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $ts
	 * @return \System\Double|double
	 */
	#[MethodOverride]public function Divide_2 ($ts){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public static function Parse_1 ($s){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public static function Parse_2 ($input, $formatProvider){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public static function Parse_3 ($input, $formatProvider){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public static function ParseExact_1 ($input, $format, $formatProvider){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public static function ParseExact_2 ($input, $formats, $formatProvider){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public static function ParseExact_3 ($input, $format, $formatProvider, $styles){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public static function ParseExact_4 ($input, $format, $formatProvider, $styles){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public static function ParseExact_5 ($input, $formats, $formatProvider, $styles){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public static function ParseExact_6 ($input, $formats, $formatProvider, $styles){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\TimeSpan& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_1 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\TimeSpan& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_2 ($s, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\TimeSpan& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_3 ($input, $formatProvider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\TimeSpan& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParse_4 ($input, $formatProvider, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\TimeSpan& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_1 ($input, $format, $formatProvider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\TimeSpan& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_2 ($input, $format, $formatProvider, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\TimeSpan& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_3 ($input, $formats, $formatProvider, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\TimeSpan& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_4 ($input, $formats, $formatProvider, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @param \System\TimeSpan& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_5 ($input, $format, $formatProvider, $styles, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @param \System\TimeSpan& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_6 ($input, $format, $formatProvider, $styles, &$result){}
	/**
	 * @deprecated
	 * @param \System\String|string $input
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @param \System\TimeSpan& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_7 ($input, $formats, $formatProvider, $styles, &$result){}
	/**
	 * @deprecated
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\String $formats
	 * @param \System\IFormatProvider $formatProvider
	 * @param \System\Globalization\TimeSpanStyles $styles
	 * @param \System\TimeSpan& &$result
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function TryParseExact_8 ($input, $formats, $formatProvider, $styles, &$result){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeSpan
	 * @param \System\Double|double $factor
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public static function op_Multiply_1 ($timeSpan, $factor){}
	/**
	 * @deprecated
	 * @param \System\Double|double $factor
	 * @param \System\TimeSpan $timeSpan
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public static function op_Multiply_2 ($factor, $timeSpan){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeSpan
	 * @param \System\Double|double $divisor
	 * @return \System\TimeSpan
	 */
	#[MethodOverride]public static function op_Division_1 ($timeSpan, $divisor){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function op_Division_2 ($t1, $t2){}
	/**
	 * @param \System\Int64|int $ticks
	 */
	#[MethodOverride]public function __construct_1 ($ticks){}
	/**
	 * @param \System\Int32|int $hours
	 * @param \System\Int32|int $minutes
	 * @param \System\Int32|int $seconds
	 */
	#[MethodOverride]public function __construct_2 ($hours, $minutes, $seconds){}
	/**
	 * @param \System\Int32|int $days
	 * @param \System\Int32|int $hours
	 * @param \System\Int32|int $minutes
	 * @param \System\Int32|int $seconds
	 */
	#[MethodOverride]public function __construct_3 ($days, $hours, $minutes, $seconds){}
	/**
	 * @param \System\Int32|int $days
	 * @param \System\Int32|int $hours
	 * @param \System\Int32|int $minutes
	 * @param \System\Int32|int $seconds
	 * @param \System\Int32|int $milliseconds
	 */
	#[MethodOverride]public function __construct_4 ($days, $hours, $minutes, $seconds, $milliseconds){}
	/**
	 * @param \System\Int32|int $days
	 * @param \System\Int32|int $hours
	 * @param \System\Int32|int $minutes
	 * @param \System\Int32|int $seconds
	 * @param \System\Int32|int $milliseconds
	 * @param \System\Int32|int $microseconds
	 */
	#[MethodOverride]public function __construct_5 ($days, $hours, $minutes, $seconds, $milliseconds, $microseconds){}
}
final class TimeSpan extends \System\ValueType implements
	\System\IComparable,
	\System\IComparable_1,
	\System\IEquatable_1,
	\System\ISpanFormattable,
	\System\IFormattable,
	\System\ISpanParsable_1,
	\System\IParsable_1
{
	use TimeSpanOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Int64|int
	 */
	protected $_ticks;
	/**
	 * @field
	 * @since readonly
	 * @var \System\TimeSpan
	 */
	public static $Zero;
	/**
	 * @field
	 * @since readonly
	 * @var \System\TimeSpan
	 */
	public static $MaxValue;
	/**
	 * @field
	 * @since readonly
	 * @var \System\TimeSpan
	 */
	public static $MinValue;
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	const NanosecondsPerTick = '100';
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	const TicksPerMicrosecond = '10';
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	const TicksPerMillisecond = '10000';
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	const TicksPerSecond = '10000000';
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	const TicksPerMinute = '600000000';
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	const TicksPerHour = '36000000000';
	/**
	 * @field
	 * @var \System\Int64|int
	 */
	const TicksPerDay = '864000000000';
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Ticks;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Days;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Hours;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Milliseconds;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Microseconds;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Nanoseconds;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Minutes;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Seconds;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $TotalDays;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $TotalHours;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $TotalMilliseconds;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $TotalMicroseconds;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $TotalNanoseconds;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $TotalMinutes;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $TotalSeconds;
	/**
	 * @param \System\TimeSpan $ts
	 * @return \System\TimeSpan
	 */
	public function Add($ts){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\Int32|int
	 */
	public static function Compare($t1, $t2){}
	/**
	 * @uses TimeSpanOverride::CompareTo_1 <br>public , args: ($value)<br>
	 * @uses TimeSpanOverride::CompareTo_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function CompareTo (\override ...$args){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\TimeSpan
	 */
	public static function FromDays($value){}
	/**
	 * @return \System\TimeSpan
	 */
	public function Duration(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\TimeSpan
	 */
	public static function FromHours($value){}
	private static function Interval($value, $scale){}
	private static function IntervalFromDoubleTicks($ticks){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\TimeSpan
	 */
	public static function FromMilliseconds($value){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\TimeSpan
	 */
	public static function FromMicroseconds($value){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\TimeSpan
	 */
	public static function FromMinutes($value){}
	/**
	 * @return \System\TimeSpan
	 */
	public function Negate(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\TimeSpan
	 */
	public static function FromSeconds($value){}
	/**
	 * @param \System\TimeSpan $ts
	 * @return \System\TimeSpan
	 */
	public function Subtract($ts){}
	/**
	 * @param \System\Double|double $factor
	 * @return \System\TimeSpan
	 */
	public function Multiply($factor){}
	/**
	 * @uses TimeSpanOverride::Divide_1 <br>public , args: ($divisor)<br>
	 * @uses TimeSpanOverride::Divide_2 <br>public , args: ($ts)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeSpan|\System\Double|double|mixed|\override
	 */
	#[MethodOverridePublic]function Divide (\override ...$args){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\TimeSpan
	 */
	public static function FromTicks($value){}
	/**
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @return \System\Int64|int
	 */
	protected static function TimeToTicks($hour, $minute, $second){}
	private static function ValidateStyles($style, $parameterName){}
	/**
	 * @uses TimeSpanOverride::Parse_1 <br>public , args: ($s)<br>
	 * @uses TimeSpanOverride::Parse_2 <br>public , args: ($input, $formatProvider)<br>
	 * @uses TimeSpanOverride::Parse_3 <br>public , args: ($input, $formatProvider)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeSpan|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @uses TimeSpanOverride::ParseExact_1 <br>public , args: ($input, $format, $formatProvider)<br>
	 * @uses TimeSpanOverride::ParseExact_2 <br>public , args: ($input, $formats, $formatProvider)<br>
	 * @uses TimeSpanOverride::ParseExact_3 <br>public , args: ($input, $format, $formatProvider, $styles)<br>
	 * @uses TimeSpanOverride::ParseExact_4 <br>public , args: ($input, $format, $formatProvider, $styles)<br>
	 * @uses TimeSpanOverride::ParseExact_5 <br>public , args: ($input, $formats, $formatProvider, $styles)<br>
	 * @uses TimeSpanOverride::ParseExact_6 <br>public , args: ($input, $formats, $formatProvider, $styles)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeSpan|mixed|\override
	 */
	#[MethodOverridePublic]function ParseExact (\override ...$args){}
	/**
	 * @uses TimeSpanOverride::TryParse_1 <br>public , args: ($s, &$result)<br>
	 * @uses TimeSpanOverride::TryParse_2 <br>public , args: ($s, &$result)<br>
	 * @uses TimeSpanOverride::TryParse_3 <br>public , args: ($input, $formatProvider, &$result)<br>
	 * @uses TimeSpanOverride::TryParse_4 <br>public , args: ($input, $formatProvider, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParse (\override ...$args){}
	/**
	 * @uses TimeSpanOverride::TryParseExact_1 <br>public , args: ($input, $format, $formatProvider, &$result)<br>
	 * @uses TimeSpanOverride::TryParseExact_2 <br>public , args: ($input, $format, $formatProvider, &$result)<br>
	 * @uses TimeSpanOverride::TryParseExact_3 <br>public , args: ($input, $formats, $formatProvider, &$result)<br>
	 * @uses TimeSpanOverride::TryParseExact_4 <br>public , args: ($input, $formats, $formatProvider, &$result)<br>
	 * @uses TimeSpanOverride::TryParseExact_5 <br>public , args: ($input, $format, $formatProvider, $styles, &$result)<br>
	 * @uses TimeSpanOverride::TryParseExact_6 <br>public , args: ($input, $format, $formatProvider, $styles, &$result)<br>
	 * @uses TimeSpanOverride::TryParseExact_7 <br>public , args: ($input, $formats, $formatProvider, $styles, &$result)<br>
	 * @uses TimeSpanOverride::TryParseExact_8 <br>public , args: ($input, $formats, $formatProvider, $styles, &$result)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function TryParseExact (\override ...$args){}
	/**
	 * @param \System\Span_1 $destination [generic: System\Char]
	 * @param \System\Int32& &$charsWritten
	 * @param \System\ReadOnlySpan_1 $format [generic: System\Char]
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\Boolean|bool
	 */
	public function TryFormat($destination, &$charsWritten, $format, $formatProvider){}
	/**
	 * @param \System\TimeSpan $t
	 * @return \System\TimeSpan
	 */
	public static function op_UnaryNegation($t){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\TimeSpan
	 */
	public static function op_Subtraction($t1, $t2){}
	/**
	 * @param \System\TimeSpan $t
	 * @return \System\TimeSpan
	 */
	public static function op_UnaryPlus($t){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\TimeSpan
	 */
	public static function op_Addition($t1, $t2){}
	/**
	 * @uses TimeSpanOverride::op_Multiply_1 <br>public , args: ($timeSpan, $factor)<br>
	 * @uses TimeSpanOverride::op_Multiply_2 <br>public , args: ($factor, $timeSpan)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeSpan|mixed|\override
	 */
	#[MethodOverridePublic]function op_Multiply (\override ...$args){}
	/**
	 * @uses TimeSpanOverride::op_Division_1 <br>public , args: ($timeSpan, $divisor)<br>
	 * @uses TimeSpanOverride::op_Division_2 <br>public , args: ($t1, $t2)<br>
	 * @var mixed|\override ...$args
	 * @return \System\TimeSpan|\System\Double|double|mixed|\override
	 */
	#[MethodOverridePublic]function op_Division (\override ...$args){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($t1, $t2){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($t1, $t2){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThan($t1, $t2){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\Boolean|bool
	 */
	public static function op_LessThanOrEqual($t1, $t2){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThan($t1, $t2){}
	/**
	 * @param \System\TimeSpan $t1
	 * @param \System\TimeSpan $t2
	 * @return \System\Boolean|bool
	 */
	public static function op_GreaterThanOrEqual($t1, $t2){}
	/**
	 * @uses TimeSpanOverride::__construct_1 <br>public , args: ($ticks)<br>
	 * @uses TimeSpanOverride::__construct_2 <br>public , args: ($hours, $minutes, $seconds)<br>
	 * @uses TimeSpanOverride::__construct_3 <br>public , args: ($days, $hours, $minutes, $seconds)<br>
	 * @uses TimeSpanOverride::__construct_4 <br>public , args: ($days, $hours, $minutes, $seconds, $milliseconds)<br>
	 * @uses TimeSpanOverride::__construct_5 <br>public , args: ($days, $hours, $minutes, $seconds, $milliseconds, $microseconds)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}