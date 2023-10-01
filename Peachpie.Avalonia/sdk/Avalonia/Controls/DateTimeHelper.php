<?php
namespace Avalonia\Controls;
/**
 */
class DateTimeHelper extends \System\Object
{
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $days
	 * @return \System\Nullable_1
	 */
	public static function AddDays($time, $days){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $months
	 * @return \System\Nullable_1
	 */
	public static function AddMonths($time, $months){}
	/**
	 * @param \System\DateTime $time
	 * @param \System\Int32|int $years
	 * @return \System\Nullable_1
	 */
	public static function AddYears($time, $years){}
	/**
	 * @param \System\DateTime $dt1
	 * @param \System\DateTime $dt2
	 * @return \System\Int32|int
	 */
	public static function CompareDays($dt1, $dt2){}
	/**
	 * @param \System\DateTime $dt1
	 * @param \System\DateTime $dt2
	 * @return \System\Int32|int
	 */
	public static function CompareYearMonth($dt1, $dt2){}
	/**
	 * @param \System\DateTime $date
	 * @return \System\Int32|int
	 */
	public static function DecadeOfDate($date){}
	/**
	 * @param \System\DateTime $d
	 * @return \System\DateTime
	 */
	public static function DiscardDayTime($d){}
	/**
	 * @param \System\DateTime $d
	 * @return \System\DateTime
	 */
	public static function DiscardTime($d){}
	/**
	 * @param \System\DateTime $date
	 * @return \System\Int32|int
	 */
	public static function EndOfDecade($date){}
	/**
	 * @return \System\Globalization\DateTimeFormatInfo
	 */
	public static function GetCurrentDateFormat(){}
	/**
	 * @param \System\DateTime $date
	 * @param \Avalonia\Controls\CalendarDateRange $range
	 * @return \System\Boolean
	 */
	public static function InRange($date, $range){}
	/**
	 * @param \System\DateTime $date
	 * @return \System\String|string
	 */
	public static function ToYearMonthPatternString($date){}
	/**
	 * @param \System\DateTime $date
	 * @return \System\String|string
	 */
	public static function ToYearString($date){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
