<?php
namespace System\Globalization;
class JapaneseLunisolarCalendar extends \System\Globalization\EastAsianLunisolarCalendar implements
	\System\ICloneable
{

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const JapaneseEra = '1';
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
	 * @var \System\Int32[]|array
	 * @since readonly
	 */
	public $Eras;
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
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	private static function TrimEras($baseEras){}
	/**
	 */
	public function __construct(){}
}