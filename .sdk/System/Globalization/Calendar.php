<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CalendarOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetDaysInMonth_1 ($year, $month){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetDaysInMonth_2 ($year, $month, $era){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetDaysInYear_1 ($year){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetDaysInYear_2 ($year, $era){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetMonthsInYear_1 ($year){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetMonthsInYear_2 ($year, $era){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsLeapDay_1 ($year, $month, $day){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $era
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsLeapDay_2 ($year, $month, $day, $era){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsLeapMonth_1 ($year, $month){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $era
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsLeapMonth_2 ($year, $month, $era){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetLeapMonth_1 ($year){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetLeapMonth_2 ($year, $era){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsLeapYear_1 ($year){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function IsLeapYear_2 ($year, $era){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @return \System\DateTime
	 */
	#[MethodOverride]public function ToDateTime_1 ($year, $month, $day, $hour, $minute, $second, $millisecond){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\Int32|int $era
	 * @return \System\DateTime
	 */
	#[MethodOverride]public function ToDateTime_2 ($year, $month, $day, $hour, $minute, $second, $millisecond, $era){}
}
class Calendar extends \System\Object implements
	\System\ICloneable
{
	use CalendarOverride;

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_twoDigitYearMax;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const CurrentEra = '0';
	/**
	 * @property
	 * @var \System\DateTime
	 * @since readonly
	 */
	public $MinSupportedDateTime;
	/**
	 * @property
	 * @var \System\DateTime
	 * @since readonly
	 */
	public $MaxSupportedDateTime;
	/**
	 * @property
	 * @var \System\Globalization\CalendarAlgorithmType
	 * @since readonly
	 */
	public $AlgorithmType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\Int32[]|array
	 * @since readonly
	 */
	public $Eras;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $TwoDigitYearMax;
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	/**
	 * @param \System\Globalization\Calendar $calendar
	 * @return \System\Globalization\Calendar
	 */
	public static function ReadOnly($calendar){}
	/**
	 * @return \System\Void|void
	 */
	protected function VerifyWritable(){}
	/**
	 * @param \System\Boolean|bool $readOnly
	 * @return \System\Void|void
	 */
	protected function SetReadOnlyState($readOnly){}
	/**
	 * @param \System\Int64|int $ticks
	 * @param \System\DateTime $minValue
	 * @param \System\DateTime $maxValue
	 * @return \System\Void|void
	 */
	protected static function CheckAddResult($ticks, $minValue, $maxValue){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Double|double $value
	 * @param \System\Int32|int $scale
	 * @return \System\DateTime
	 */
	protected function Add($time, $value, $scale){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Double|double $milliseconds
	 * @return \System\DateTime
	 */
	public function AddMilliseconds($time, $milliseconds){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $days
	 * @return \System\DateTime
	 */
	public function AddDays($time, $days){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $hours
	 * @return \System\DateTime
	 */
	public function AddHours($time, $hours){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $minutes
	 * @return \System\DateTime
	 */
	public function AddMinutes($time, $minutes){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $months
	 * @return \System\DateTime
	 */
	abstract public function AddMonths($time, $months);
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $seconds
	 * @return \System\DateTime
	 */
	public function AddSeconds($time, $seconds){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $weeks
	 * @return \System\DateTime
	 */
	public function AddWeeks($time, $weeks){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $years
	 * @return \System\DateTime
	 */
	abstract public function AddYears($time, $years);
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	abstract public function GetDayOfMonth($time);
	/**
	 * @param \System\DateTime $time
	 * @return \System\DayOfWeek
	 */
	abstract public function GetDayOfWeek($time);
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	abstract public function GetDayOfYear($time);
	/**
	 * @uses CalendarOverride::GetDaysInMonth_1 <br>public , args: ($year, $month)<br>
	 * @uses CalendarOverride::GetDaysInMonth_2 <br>public , args: ($year, $month, $era)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetDaysInMonth (\override ...$args){}
	/**
	 * @uses CalendarOverride::GetDaysInYear_1 <br>public , args: ($year)<br>
	 * @uses CalendarOverride::GetDaysInYear_2 <br>public , args: ($year, $era)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetDaysInYear (\override ...$args){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	abstract public function GetEra($time);
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public function GetHour($time){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Double|double
	 */
	public function GetMilliseconds($time){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public function GetMinute($time){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	abstract public function GetMonth($time);
	/**
	 * @uses CalendarOverride::GetMonthsInYear_1 <br>public , args: ($year)<br>
	 * @uses CalendarOverride::GetMonthsInYear_2 <br>public , args: ($year, $era)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetMonthsInYear (\override ...$args){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public function GetSecond($time){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $firstDayOfWeek
	 * @return \System\Int32|int
	 */
	protected function GetFirstDayWeekOfYear($time, $firstDayOfWeek){}
	private function GetWeekOfYearFullDays($time, $firstDayOfWeek, $fullDays){}
	private function GetWeekOfYearOfMinSupportedDateTime($firstDayOfWeek, $minimumDaysInFirstWeek){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Globalization\CalendarWeekRule $rule
	 * @param \System\DayOfWeek $firstDayOfWeek
	 * @return \System\Int32|int
	 */
	public function GetWeekOfYear($time, $rule, $firstDayOfWeek){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	abstract public function GetYear($time);
	/**
	 * @uses CalendarOverride::IsLeapDay_1 <br>public , args: ($year, $month, $day)<br>
	 * @uses CalendarOverride::IsLeapDay_2 <br>public , args: ($year, $month, $day, $era)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsLeapDay (\override ...$args){}
	/**
	 * @uses CalendarOverride::IsLeapMonth_1 <br>public , args: ($year, $month)<br>
	 * @uses CalendarOverride::IsLeapMonth_2 <br>public , args: ($year, $month, $era)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsLeapMonth (\override ...$args){}
	/**
	 * @uses CalendarOverride::GetLeapMonth_1 <br>public , args: ($year)<br>
	 * @uses CalendarOverride::GetLeapMonth_2 <br>public , args: ($year, $era)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetLeapMonth (\override ...$args){}
	/**
	 * @uses CalendarOverride::IsLeapYear_1 <br>public , args: ($year)<br>
	 * @uses CalendarOverride::IsLeapYear_2 <br>public , args: ($year, $era)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsLeapYear (\override ...$args){}
	/**
	 * @uses CalendarOverride::ToDateTime_1 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $millisecond)<br>
	 * @uses CalendarOverride::ToDateTime_2 <br>public , args: ($year, $month, $day, $hour, $minute, $second, $millisecond, $era)<br>
	 * @var mixed|\override ...$args
	 * @return \System\DateTime|mixed|\override
	 */
	#[MethodOverridePublic]function ToDateTime (\override ...$args){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @param \System\Int32|int $era
	 * @param \System\DateTime& &$result
	 * @return \System\Boolean|bool
	 */
	protected function TryToDateTime($year, $month, $day, $hour, $minute, $second, $millisecond, $era, &$result){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Boolean|bool
	 */
	protected function IsValidYear($year, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $era
	 * @return \System\Boolean|bool
	 */
	protected function IsValidMonth($year, $month, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $era
	 * @return \System\Boolean|bool
	 */
	protected function IsValidDay($year, $month, $day, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @return \System\Int32|int
	 */
	public function ToFourDigitYear($year){}
	/**
	 * @param \System\Int32|int $hour
	 * @param \System\Int32|int $minute
	 * @param \System\Int32|int $second
	 * @param \System\Int32|int $millisecond
	 * @return \System\Int64|int
	 */
	protected static function TimeToTicks($hour, $minute, $second, $millisecond){}
	/**
	 * @param \System\Globalization\CalendarId $CalID
	 * @param \System\Int32|int $defaultYearValue
	 * @return \System\Int32|int
	 */
	protected static function GetSystemTwoDigitYearSetting($CalID, $defaultYearValue){}
}