<?php
namespace System\Globalization;
/**
 */
class ISOWeek extends \System\Object
{
	/**
	 * @param \System\DateTime $date
	 * @return \System\Int32|int
	 */
	public static function GetWeekOfYear($date){}
	/**
	 * @param \System\DateTime $date
	 * @return \System\Int32|int
	 */
	public static function GetYear($date){}
	/**
	 * @param \System\Int32|int $year
	 * @return \System\DateTime
	 */
	public static function GetYearStart($year){}
	/**
	 * @param \System\Int32|int $year
	 * @return \System\DateTime
	 */
	public static function GetYearEnd($year){}
	/**
	 * @param \System\Int32|int $year
	 * @return \System\Int32|int
	 */
	public static function GetWeeksInYear($year){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $week
	 * @param \System\DayOfWeek $dayOfWeek
	 * @return \System\DateTime
	 */
	public static function ToDateTime($year, $week, $dayOfWeek){}
	/**
	 * @param \System\DateTime $date
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetWeekNumber($date){}
	/**
	 * @param \System\DayOfWeek $dayOfWeek
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetWeekday($dayOfWeek){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
