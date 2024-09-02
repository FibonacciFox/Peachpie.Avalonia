<?php
namespace System\Globalization;
class HijriCalendar extends \System\Globalization\Calendar implements
	\System\ICloneable
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	public static $HijriEra;
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
	 * @var \System\Int32|int
	 */
	public $HijriAdjustment;
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
	private function GetAbsoluteDateHijri($y, $m, $d){}
	private function DaysUpToHijriYear($HijriYear){}
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
	/**
	 * @param \System\Int64|int $ticks
	 * @param \System\Int32|int $part
	 * @return \System\Int32|int
	 */
	protected function GetDatePart($ticks, $part){}
	/**
	 */
	public function __construct(){}
}