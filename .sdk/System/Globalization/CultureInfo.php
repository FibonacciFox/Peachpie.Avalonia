<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CultureInfoOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $cultureName
	 * @param \System\Boolean|bool $throwException
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function VerifyCultureName_1 ($cultureName, $throwException){}
	/**
	 * @deprecated
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Boolean|bool $throwException
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected static function VerifyCultureName_2 ($culture, $throwException){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $culture
	 * @return \System\Globalization\CultureInfo
	 */
	#[MethodOverride]public static function GetCultureInfo_1 ($culture){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Globalization\CultureInfo
	 */
	#[MethodOverride]public static function GetCultureInfo_2 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\String|string $altName
	 * @return \System\Globalization\CultureInfo
	 */
	#[MethodOverride]public static function GetCultureInfo_3 ($name, $altName){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @param \System\Boolean|bool $predefinedOnly
	 * @return \System\Globalization\CultureInfo
	 */
	#[MethodOverride]public static function GetCultureInfo_4 ($name, $predefinedOnly){}
	/**
	 * @param \System\String|string $name
	 */
	#[MethodOverride]public function __construct_1 ($name){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Boolean|bool $useUserOverride
	 */
	#[MethodOverride]public function __construct_2 ($name, $useUserOverride){}
	/**
	 * @param \System\Int32|int $culture
	 */
	#[MethodOverride]public function __construct_3 ($culture){}
	/**
	 * @param \System\Int32|int $culture
	 * @param \System\Boolean|bool $useUserOverride
	 */
	#[MethodOverride]public function __construct_4 ($culture, $useUserOverride){}
}
class CultureInfo extends \System\Object implements
	\System\IFormatProvider,
	\System\ICloneable
{
	use CultureInfoOverride;

	/**
	 * @field
	 * @var \System\Globalization\NumberFormatInfo
	 */
	protected $_numInfo;
	/**
	 * @field
	 * @var \System\Globalization\DateTimeFormatInfo
	 */
	protected $_dateTimeInfo;
	/**
	 * @field
	 * @var \System\Globalization\CultureData
	 */
	protected $_cultureData;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $_isInherited;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_name;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const LOCALE_NEUTRAL = '0';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const LOCALE_CUSTOM_UNSPECIFIED = '4096';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const LOCALE_CUSTOM_DEFAULT = '3072';
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const LOCALE_INVARIANT = '127';
	/**
	 * @property
	 * @var \System\Globalization\CultureInfo
	 */
	public $CurrentCulture;
	/**
	 * @property
	 * @var \System\Globalization\CultureInfo
	 */
	public $CurrentUICulture;
	/**
	 * @property
	 * @var \System\Globalization\CultureInfo
	 * @since readonly
	 */
	public $InstalledUICulture;
	/**
	 * @property
	 * @var \System\Globalization\CultureInfo
	 */
	public $DefaultThreadCurrentCulture;
	/**
	 * @property
	 * @var \System\Globalization\CultureInfo
	 */
	public $DefaultThreadCurrentUICulture;
	/**
	 * @property
	 * @var \System\Globalization\CultureInfo
	 * @since readonly
	 */
	public $InvariantCulture;
	/**
	 * @property
	 * @var \System\Globalization\CultureInfo
	 * @since readonly
	 */
	public $Parent;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $LCID;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $KeyboardLayoutId;
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
	public $IetfLanguageTag;
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
	public $EnglishName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $TwoLetterISOLanguageName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ThreeLetterISOLanguageName;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $ThreeLetterWindowsLanguageName;
	/**
	 * @property
	 * @var \System\Globalization\CompareInfo
	 * @since readonly
	 */
	public $CompareInfo;
	/**
	 * @property
	 * @var \System\Globalization\TextInfo
	 * @since readonly
	 */
	public $TextInfo;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsNeutralCulture;
	/**
	 * @property
	 * @var \System\Globalization\CultureTypes
	 * @since readonly
	 */
	public $CultureTypes;
	/**
	 * @property
	 * @var \System\Globalization\NumberFormatInfo
	 */
	public $NumberFormat;
	/**
	 * @property
	 * @var \System\Globalization\DateTimeFormatInfo
	 */
	public $DateTimeFormat;
	/**
	 * @property
	 * @var \System\Globalization\Calendar
	 * @since readonly
	 */
	public $Calendar;
	/**
	 * @property
	 * @var \System\Globalization\Calendar[]
	 * @since readonly
	 */
	public $OptionalCalendars;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $UseUserOverride;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	private static function AsyncLocalSetCurrentCulture($args){}
	private static function AsyncLocalSetCurrentUICulture($args){}
	private static function InitializeUserDefaultCulture(){}
	private static function InitializeUserDefaultUICulture(){}
	private static function GetCultureNotSupportedExceptionMessage(){}
	private static function CreateCultureInfoNoThrow($name, $useUserOverride){}
	private static function GetCultureByName($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Globalization\CultureInfo
	 */
	public static function CreateSpecificCulture($name){}
	/**
	 * @uses CultureInfoOverride::VerifyCultureName_1 <br>protected , args: ($cultureName, $throwException)<br>
	 * @uses CultureInfoOverride::VerifyCultureName_2 <br>protected , args: ($culture, $throwException)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function VerifyCultureName (\override ...$args){}
	/**
	 * @param \System\Globalization\CultureTypes $types
	 * @return \System\Globalization\CultureInfo[]
	 */
	public static function GetCultures($types){}
	/**
	 * @param \System\Type $formatType
	 * @return \System\Object|object
	 */
	public function GetFormat($formatType){}
	/**
	 * @return \System\Void|void
	 */
	public function ClearCachedData(){}
	/**
	 * @param \System\Globalization\CalendarId $calType
	 * @return \System\Globalization\Calendar
	 */
	protected static function GetCalendarInstance($calType){}
	/**
	 * @param \System\Globalization\CalendarId $calType
	 * @return \System\Globalization\Calendar
	 */
	protected static function GetCalendarInstanceRare($calType){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	public function GetConsoleFallbackUICulture(){}
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	/**
	 * @param \System\Globalization\CultureInfo $ci
	 * @return \System\Globalization\CultureInfo
	 */
	public static function ReadOnly($ci){}
	private function VerifyWritable(){}
	/**
	 * @uses CultureInfoOverride::GetCultureInfo_1 <br>public , args: ($culture)<br>
	 * @uses CultureInfoOverride::GetCultureInfo_2 <br>public , args: ($name)<br>
	 * @uses CultureInfoOverride::GetCultureInfo_3 <br>public , args: ($name, $altName)<br>
	 * @uses CultureInfoOverride::GetCultureInfo_4 <br>public , args: ($name, $predefinedOnly)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Globalization\CultureInfo|mixed|\override
	 */
	#[MethodOverridePublic]function GetCultureInfo (\override ...$args){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Globalization\CultureInfo
	 */
	public static function GetCultureInfoByIetfLanguageTag($name){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	protected static function GetUserDefaultCulture(){}
	private static function GetUserDefaultUICulture(){}
	/**
	 * @uses CultureInfoOverride::__construct_1 <br>public , args: ($name)<br>
	 * @uses CultureInfoOverride::__construct_2 <br>public , args: ($name, $useUserOverride)<br>
	 * @uses CultureInfoOverride::__construct_3 <br>public , args: ($culture)<br>
	 * @uses CultureInfoOverride::__construct_4 <br>public , args: ($culture, $useUserOverride)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}