<?php
namespace System\Globalization;
class PersianCalendar extends \System\Globalization\Calendar implements
	\System\ICloneable
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	public static $PersianEra;
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
	private static function GetAbsoluteDatePersian($year, $month, $day){}
	/**
	 * @param \System\Int64|int $ticks
	 * @return \System\Void|void
	 */
	protected static function CheckTicksRange($ticks){}
	/**
	 * @param \System\Int32|int $era
	 * @return \System\Void|void
	 */
	protected static function CheckEraRange($era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Void|void
	 */
	protected static function CheckYearRange($year, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $era
	 * @return \System\Void|void
	 */
	protected static function CheckYearMonthRange($year, $month, $era){}
	private static function MonthFromOrdinalDay($ordinalDay){}
	private static function DaysInPreviousMonths($month){}
	/**
	 * @param \System\Int64|int $ticks
	 * @param \System\Int32|int $part
	 * @return \System\Int32|int
	 */
	protected function GetDatePart($ticks, $part){}
	/**
	 * @param \System\Int64|int $ticks
	 * @param \System\Int32& &$year
	 * @param \System\Int32& &$month
	 * @param \System\Int32& &$day
	 * @return \System\Void|void
	 */
	protected function GetDate($ticks, &$year, &$month, &$day){}
	/**
	 */
	public function __construct(){}
}