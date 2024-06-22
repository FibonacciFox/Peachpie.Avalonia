<?php
namespace System\Globalization;
class HebrewCalendar extends \System\Globalization\Calendar implements
	\System\ICloneable
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	public static $HebrewEra;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_twoDigitYearMax;
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
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	private static function CheckHebrewYearValue($y, $era, $varName){}
	private function CheckHebrewMonthValue($year, $month, $era){}
	private function CheckHebrewDayValue($year, $month, $day, $era){}
	private static function CheckEraRange($era){}
	private static function CheckTicksRange($ticks){}
	private static function GetResult($result, $part){}
	/**
	 * @param \System\Int32|int $gregorianYear
	 * @param \System\Globalization\HebrewCalendar+DateBuffer $lunarDate
	 * @return \System\Int32|int
	 */
	protected static function GetLunarMonthDay($gregorianYear, $lunarDate){}
	/**
	 * @param \System\Int64|int $ticks
	 * @param \System\Int32|int $part
	 * @return \System\Int32|int
	 */
	protected function GetDatePart($ticks, $part){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	protected static function GetHebrewYearType($year, $era){}
	private static function GetDayDifference($lunarYearType, $month1, $day1, $month2, $day2){}
	private static function HebrewToGregorian($hebrewYear, $hebrewMonth, $hebrewDay, $hour, $minute, $second, $millisecond){}
	/**
	 */
	public function __construct(){}
}