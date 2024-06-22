<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EastAsianLunisolarCalendarOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $year
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	#[MethodOverride]protected function GetYear_1 ($year, $time){}
}
class EastAsianLunisolarCalendar extends \System\Globalization\Calendar implements
	\System\ICloneable
{
	use EastAsianLunisolarCalendarOverride;

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_twoDigitYearMax;
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
	public $TwoDigitYearMax;
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
	 * @param \System\DateTime $time
	 * @return \System\Int32|int
	 */
	public function GetSexagenaryYear($time){}
	/**
	 * @param \System\Int32|int $sexagenaryYear
	 * @return \System\Int32|int
	 */
	public function GetCelestialStem($sexagenaryYear){}
	/**
	 * @param \System\Int32|int $sexagenaryYear
	 * @return \System\Int32|int
	 */
	public function GetTerrestrialBranch($sexagenaryYear){}
	/**
	 * @param \System\Int32|int $LunarYear
	 * @param \System\Int32|int $Index
	 * @return \System\Int32|int
	 */
	abstract protected function GetYearInfo($LunarYear, $Index);
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	abstract protected function GetGregorianYear($year, $era);
	/**
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	protected function MinEraCalendarYear($era){}
	/**
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	protected function MaxEraCalendarYear($era){}
	/**
	 * @param \System\Int64|int $ticks
	 * @return \System\Void|void
	 */
	protected function CheckTicksRange($ticks){}
	/**
	 * @param \System\Int32|int $era
	 * @return \System\Void|void
	 */
	protected function CheckEraRange($era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	protected function CheckYearRange($year, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $era
	 * @return \System\Int32|int
	 */
	protected function CheckYearMonthRange($year, $month, $era){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @return \System\Int32|int
	 */
	protected function InternalGetDaysInMonth($year, $month){}
	private static function GregorianIsLeapYear($y){}
	private function GregorianToLunar($solarYear, $solarMonth, $solarDate, &$lunarYear, &$lunarMonth, &$lunarDate){}
	private function LunarToGregorian($lunarYear, $lunarMonth, $lunarDate, &$solarYear, &$solarMonth, &$solarDay){}
	private function LunarToTime($time, $year, $month, $day){}
	private function TimeToLunar($time, &$year, &$month, &$day){}
	/**
	 * @param \System\Int32|int $year
	 * @return \System\Boolean|bool
	 */
	protected function InternalIsLeapYear($year){}
}