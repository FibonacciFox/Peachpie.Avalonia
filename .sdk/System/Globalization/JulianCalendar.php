<?php
namespace System\Globalization;
class JulianCalendar extends \System\Globalization\Calendar implements
	\System\ICloneable
{

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $MaxYear;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	public static $JulianEra;
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
	protected function CheckYearEraRange($year, $era){}
	/**
	 * @param \System\Int32|int $month
	 * @return \System\Void|void
	 */
	protected static function CheckMonthRange($month){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @return \System\Void|void
	 */
	protected static function CheckDayRange($year, $month, $day){}
	/**
	 * @param \System\Int64|int $ticks
	 * @param \System\Int32|int $part
	 * @return \System\Int32|int
	 */
	protected static function GetDatePart($ticks, $part){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @return \System\Int64|int
	 */
	protected static function DateToTicks($year, $month, $day){}
	/**
	 */
	public function __construct(){}
}