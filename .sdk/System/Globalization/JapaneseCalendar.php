<?php
namespace System\Globalization;
class JapaneseCalendar extends \System\Globalization\Calendar implements
	\System\ICloneable
{
	/**
	 * @field
	 * @var \System\Globalization\GregorianCalendarHelper
	 */
	protected $_helper;
	/**
	 * @field
	 * @var \System\Globalization\Calendar
	 */
	protected static $s_defaultInstance;
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
	 * @return \System\Globalization\EraInfo[]
	 */
	protected static function GetEraInfo(){}
	/**
	 * @return \System\Globalization\Calendar
	 */
	protected static function GetDefaultInstance(){}
	/**
	 * @return \System\String[]|array
	 */
	protected static function EraNames(){}
	/**
	 * @return \System\String[]|array
	 */
	protected static function AbbrevEraNames(){}
	/**
	 * @return \System\String[]|array
	 */
	protected static function EnglishEraNames(){}
	private static function IcuGetJapaneseEras(){}
	private static function GetAbbreviatedEraName($eraNames, $eraIndex){}
	private static function GetJapaneseEraStartDate($era, &$dateTime){}
	/**
	 */
	public function __construct(){}
}