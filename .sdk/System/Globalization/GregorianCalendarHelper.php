<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GregorianCalendarHelperOverride {
	/**
	 * @deprecated
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetYear_1 ($time){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public function GetYear_2 ($year, $time){}
}
final class GregorianCalendarHelper extends \System\Object
{
	use GregorianCalendarHelperOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32[]|array
	 */
	protected static $DaysToMonth365;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32[]|array
	 */
	protected static $DaysToMonth366;
	/**
	 * @property
	 * @var \System\Int32[]|array
	 * @since readonly
	 */
	public $Eras;
	private function GetYearOffset($year, $era, $throwOnError){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	protected function GetGregorianYear($year, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Boolean|bool
	 */
	protected function IsValidYear($year, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @return \System\Int64|int
	 */
	protected static function GetAbsoluteDate($year, $month, $day){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @return \System\Int64|int
	 */
	protected static function DateToTicks($year, $month, $day){}
	/**
	 * @param \System\Int64|int $ticks
	 * @return \System\Void|void
	 */
	protected function CheckTicksRange($ticks){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $months
	 * @return \System\DateTime
	 */
	public function AddMonths($time, $months){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $years
	 * @return \System\DateTime
	 */
	public function AddYears($time, $years){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public function GetDayOfMonth($time){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\DayOfWeek
	 */
	public function GetDayOfWeek($time){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public function GetDayOfYear($time){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	public function GetDaysInMonth($year, $month, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	public function GetDaysInYear($year, $era){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public function GetEra($time){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public function GetMonth($time){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	public function GetMonthsInYear($year, $era){}
	/**
	 * @uses GregorianCalendarHelperOverride::GetYear_1 <br>public , args: ($time)<br>
	 * @uses GregorianCalendarHelperOverride::GetYear_2 <br>public , args: ($year, $time)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function GetYear (\override ...$args){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $era
	 * @return \System\Boolean|bool
	 */
	public function IsLeapDay($year, $month, $day, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Void|void
	 */
	public function ValidateYearInEra($year, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	public function GetLeapMonth($year, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $era
	 * @return \System\Boolean|bool
	 */
	public function IsLeapMonth($year, $month, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Boolean|bool
	 */
	public function IsLeapYear($year, $era){}
	/**
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
	public function ToDateTime($year, $month, $day, $hour, $minute, $second, $millisecond, $era){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Globalization\CalendarWeekRule $rule
	 * @param \System\DayOfWeek $firstDayOfWeek
	 * @return \System\Int32|int
	 */
	public function GetWeekOfYear($time, $rule, $firstDayOfWeek){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $twoDigitYearMax
	 * @return \System\Int32|int
	 */
	public function ToFourDigitYear($year, $twoDigitYearMax){}
}