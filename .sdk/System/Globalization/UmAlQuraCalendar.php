<?php
namespace System\Globalization;
class UmAlQuraCalendar extends \System\Globalization\Calendar implements
	\System\ICloneable
{
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const UmAlQuraEra = '1';
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
	private static function InitDateMapping(){}
	private static function ConvertHijriToGregorian($HijriYear, $HijriMonth, $HijriDay, &$yg, &$mg, &$dg){}
	private static function GetAbsoluteDateUmAlQura($year, $month, $day){}
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
	private static function ConvertGregorianToHijri($time, &$HijriYear, &$HijriMonth, &$HijriDay){}
	private static function GetDatePart($time, $part){}
	/**
	 * @param \System\Int32|int $year
	 * @return \System\Int32|int
	 */
	protected static function RealGetDaysInYear($year){}
	/**
	 */
	public function __construct(){}
}