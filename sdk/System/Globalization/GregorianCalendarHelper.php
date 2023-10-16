<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GregorianCalendarHelperMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetYear_1($time){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetYear_2($year, $time){}
}
/**
 */
class GregorianCalendarHelper extends \System\Object
{
	/**
	 * @var \System\Int32[]
	 * @field
	 */
	protected readonly $DaysToMonth365;
	/**
	 * @var \System\Int32[]
	 * @field
	 */
	protected readonly $DaysToMonth366;
	/**
	 * @var \System\Int32[]
	 * @property
	 */
	public readonly $Eras;
	/**
	 * @return \System\Int32|int
	 */
	protected  function get_MaxYear(){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @param \System\Boolean $throwOnError
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetYearOffset($year, $era, $throwOnError){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	protected  function GetGregorianYear($year, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Boolean
	 */
	protected  function IsValidYear($year, $era){}
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
	protected  function CheckTicksRange($ticks){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $months
	 * @return \System\DateTime
	 */
	public  function AddMonths($time, $months){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $years
	 * @return \System\DateTime
	 */
	public  function AddYears($time, $years){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public  function GetDayOfMonth($time){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\DayOfWeek
	 */
	public  function GetDayOfWeek($time){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public  function GetDayOfYear($time){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	public  function GetDaysInMonth($year, $month, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	public  function GetDaysInYear($year, $era){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public  function GetEra($time){}
	/**
	 * @return \System\Int32[]
	 */
	public  function get_Eras(){}
	/**
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public  function GetMonth($time){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	public  function GetMonthsInYear($year, $era){}
	/**
	 * @uses GregorianCalendarHelperMethodsOverride::GetYear_1 ($time)
	 * @uses GregorianCalendarHelperMethodsOverride::GetYear_2 ($year, $time)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetYear(mixed ...$args){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @param \System\Int32|int $era
	 * @return \System\Boolean
	 */
	public  function IsLeapDay($year, $month, $day, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Void|void
	 */
	public  function ValidateYearInEra($year, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	public  function GetLeapMonth($year, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $era
	 * @return \System\Boolean
	 */
	public  function IsLeapMonth($year, $month, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Boolean
	 */
	public  function IsLeapYear($year, $era){}
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
	public  function ToDateTime($year, $month, $day, $hour, $minute, $second, $millisecond, $era){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Globalization\CalendarWeekRule $rule
	 * @param \System\DayOfWeek $firstDayOfWeek
	 * @return \System\Int32|int
	 */
	public  function GetWeekOfYear($time, $rule, $firstDayOfWeek){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $twoDigitYearMax
	 * @return \System\Int32|int
	 */
	public  function ToFourDigitYear($year, $twoDigitYearMax){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
