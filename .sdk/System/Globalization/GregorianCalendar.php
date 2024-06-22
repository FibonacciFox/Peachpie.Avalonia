<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GregorianCalendarOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Globalization\GregorianCalendarTypes $type
	 */
	#[MethodOverride]public function __construct_2 ($type){}
}
class GregorianCalendar extends \System\Globalization\Calendar implements
	\System\ICloneable
{
	use GregorianCalendarOverride;

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const ADEra = '1';
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
	 * @var \System\Globalization\GregorianCalendarTypes
	 */
	public $CalendarType;
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
	 * @return \System\Globalization\Calendar
	 */
	protected static function GetDefaultInstance(){}
	/**
	 * @param \System\Int32|int $year
	 * @param \System\Int32|int $month
	 * @param \System\Int32|int $day
	 * @return \System\Int64|int
	 */
	protected static function GetAbsoluteDate($year, $month, $day){}
	private static function DateToTicks($year, $month, $day){}
	/**
	 * @uses GregorianCalendarOverride::__construct_1 <br>public , args: ()<br>
	 * @uses GregorianCalendarOverride::__construct_2 <br>public , args: ($type)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}