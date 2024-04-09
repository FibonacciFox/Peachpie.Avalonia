<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PersianCalendarOverride {
	/**
	 * @param \System\String|string $name
	 */
	#[MethodOverride]public function __construct_1 ($name){}
	/**
	 * @param \System\Int32|int $culture
	 */
	#[MethodOverride]public function __construct_2 ($culture){}
}
class RegionInfo extends \System\Object
{
	use PersianCalendarOverride;
	/**
	 * @field
	 * @var \System\Globalization\RegionInfo
	 */
	protected static $s_currentRegionInfo;
	/**
	 * @property
	 * @var \System\Globalization\RegionInfo
	 * @since readonly
	 */
	public $CurrentRegion;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $EnglishName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $DisplayName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $NativeName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $TwoLetterISORegionName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ThreeLetterISORegionName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ThreeLetterWindowsRegionName;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsMetric;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $GeoId;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $CurrencyEnglishName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $CurrencyNativeName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $CurrencySymbol;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ISOCurrencySymbol;
	/**
	 * @uses RegionInfoOverride::__construct_1 <br>public , args: ($name)<br>
	 * @uses RegionInfoOverride::__construct_2 <br>public , args: ($culture)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}