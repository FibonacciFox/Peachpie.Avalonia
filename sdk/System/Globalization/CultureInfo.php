<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CultureInfoMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function VerifyCultureName_1($cultureName, $throwException){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected static function VerifyCultureName_2($culture, $throwException){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	#[MethodOverride] public static function GetCultureInfo_1($culture){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	#[MethodOverride] public static function GetCultureInfo_2($name){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	#[MethodOverride] public static function GetCultureInfo_3($name, $altName){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	#[MethodOverride] public static function GetCultureInfo_4($name, $predefinedOnly){}
}
/**
 */
class CultureInfo extends \System\Object implements 
	\System\IFormatProvider,
	\System\ICloneable
{
	/**
	 * @var \System\Globalization\NumberFormatInfo
	 * @field
	 */
	protected $_numInfo;
	/**
	 * @var \System\Globalization\DateTimeFormatInfo
	 * @field
	 */
	protected $_dateTimeInfo;
	/**
	 * @var \System\Globalization\CultureData
	 * @field
	 */
	protected $_cultureData;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $_isInherited;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_name;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $LOCALE_NEUTRAL;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $LOCALE_CUSTOM_UNSPECIFIED;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $LOCALE_CUSTOM_DEFAULT;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $LOCALE_INVARIANT;
	/**
	 * @var \System\Globalization\CultureInfo
	 * @property
	 */
	public $CurrentCulture;
	/**
	 * @var \System\Globalization\CultureInfo
	 * @property
	 */
	public $CurrentUICulture;
	/**
	 * @var \System\Globalization\CultureInfo
	 * @property
	 */
	public readonly $InstalledUICulture;
	/**
	 * @var \System\Globalization\CultureInfo
	 * @property
	 */
	public $DefaultThreadCurrentCulture;
	/**
	 * @var \System\Globalization\CultureInfo
	 * @property
	 */
	public $DefaultThreadCurrentUICulture;
	/**
	 * @var \System\Globalization\CultureInfo
	 * @property
	 */
	public readonly $InvariantCulture;
	/**
	 * @var \System\Globalization\CultureInfo
	 * @property
	 */
	public readonly $Parent;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $LCID;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $KeyboardLayoutId;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Name;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $IetfLanguageTag;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $DisplayName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $NativeName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $EnglishName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $TwoLetterISOLanguageName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $ThreeLetterISOLanguageName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $ThreeLetterWindowsLanguageName;
	/**
	 * @var \System\Globalization\CompareInfo
	 * @property
	 */
	public readonly $CompareInfo;
	/**
	 * @var \System\Globalization\TextInfo
	 * @property
	 */
	public readonly $TextInfo;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsNeutralCulture;
	/**
	 * @var \System\Globalization\CultureTypes
	 * @property
	 */
	public readonly $CultureTypes;
	/**
	 * @var \System\Globalization\NumberFormatInfo
	 * @property
	 */
	public $NumberFormat;
	/**
	 * @var \System\Globalization\DateTimeFormatInfo
	 * @property
	 */
	public $DateTimeFormat;
	/**
	 * @var \System\Globalization\Calendar
	 * @property
	 */
	public readonly $Calendar;
	/**
	 * @var \System\Globalization\Calendar[]
	 * @property
	 */
	public readonly $OptionalCalendars;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $UseUserOverride;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @param \System\Threading\AsyncLocalValueChangedArgs_1 $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AsyncLocalSetCurrentCulture($args){}
	/**
	 * @param \System\Threading\AsyncLocalValueChangedArgs_1 $args
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AsyncLocalSetCurrentUICulture($args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitializeUserDefaultCulture(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitializeUserDefaultUICulture(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCultureNotSupportedExceptionMessage(){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Boolean $useUserOverride
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateCultureInfoNoThrow($name, $useUserOverride){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCultureByName($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Globalization\CultureInfo
	 */
	public static function CreateSpecificCulture($name){}
	/**
	 * @uses CultureInfoMethodsOverride::VerifyCultureName_1 ($cultureName, $throwException)
	 * @uses CultureInfoMethodsOverride::VerifyCultureName_2 ($culture, $throwException)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function VerifyCultureName(mixed ...$args){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	public static function get_CurrentCulture(){}
	/**
	 * @param \System\Globalization\CultureInfo $value
	 * @return \System\Void|void
	 */
	public static function set_CurrentCulture($value){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	public static function get_CurrentUICulture(){}
	/**
	 * @param \System\Globalization\CultureInfo $value
	 * @return \System\Void|void
	 */
	public static function set_CurrentUICulture($value){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	protected static function get_UserDefaultUICulture(){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	public static function get_InstalledUICulture(){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	public static function get_DefaultThreadCurrentCulture(){}
	/**
	 * @param \System\Globalization\CultureInfo $value
	 * @return \System\Void|void
	 */
	public static function set_DefaultThreadCurrentCulture($value){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	public static function get_DefaultThreadCurrentUICulture(){}
	/**
	 * @param \System\Globalization\CultureInfo $value
	 * @return \System\Void|void
	 */
	public static function set_DefaultThreadCurrentUICulture($value){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	public static function get_InvariantCulture(){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	public  function get_Parent(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_LCID(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_KeyboardLayoutId(){}
	/**
	 * @param \System\Globalization\CultureTypes $types
	 * @return \System\Globalization\CultureInfo[]
	 */
	public static function GetCultures($types){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_SortName(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_InteropName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_IetfLanguageTag(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DisplayName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_NativeName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_EnglishName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_TwoLetterISOLanguageName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_ThreeLetterISOLanguageName(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_ThreeLetterWindowsLanguageName(){}
	/**
	 * @return \System\Globalization\CompareInfo
	 */
	public  function get_CompareInfo(){}
	/**
	 * @return \System\Globalization\TextInfo
	 */
	public  function get_TextInfo(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean
	 */
	public  function Equals($value){}
	/**
	 * @param \System\Type $formatType
	 * @return \System\Object|object
	 */
	public  function GetFormat($formatType){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsNeutralCulture(){}
	/**
	 * @return \System\Globalization\CultureTypes
	 */
	public  function get_CultureTypes(){}
	/**
	 * @return \System\Globalization\NumberFormatInfo
	 */
	public  function get_NumberFormat(){}
	/**
	 * @param \System\Globalization\NumberFormatInfo $value
	 * @return \System\Void|void
	 */
	public  function set_NumberFormat($value){}
	/**
	 * @return \System\Globalization\DateTimeFormatInfo
	 */
	public  function get_DateTimeFormat(){}
	/**
	 * @param \System\Globalization\DateTimeFormatInfo $value
	 * @return \System\Void|void
	 */
	public  function set_DateTimeFormat($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function ClearCachedData(){}
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
	 * @return \System\Globalization\Calendar
	 */
	public  function get_Calendar(){}
	/**
	 * @return \System\Globalization\Calendar[]
	 */
	public  function get_OptionalCalendars(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_UseUserOverride(){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	public  function GetConsoleFallbackUICulture(){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @param \System\Globalization\CultureInfo $ci
	 * @return \System\Globalization\CultureInfo
	 */
	public static function ReadOnly($ci){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function VerifyWritable(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasInvariantCultureName(){}
	/**
	 * @uses CultureInfoMethodsOverride::GetCultureInfo_1 ($culture)
	 * @uses CultureInfoMethodsOverride::GetCultureInfo_2 ($name)
	 * @uses CultureInfoMethodsOverride::GetCultureInfo_3 ($name, $altName)
	 * @uses CultureInfoMethodsOverride::GetCultureInfo_4 ($name, $predefinedOnly)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetCultureInfo(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_CachedCulturesByName(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_CachedCulturesByLcid(){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Globalization\CultureInfo
	 */
	public static function GetCultureInfoByIetfLanguageTag($name){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	protected static function GetUserDefaultCulture(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUserDefaultUICulture(){}
	/**
	 * @return \System\String|string
	 */
	protected static function get_UserDefaultLocaleName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	protected static function set_UserDefaultLocaleName($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUserDefaultLocaleName(){}
}
