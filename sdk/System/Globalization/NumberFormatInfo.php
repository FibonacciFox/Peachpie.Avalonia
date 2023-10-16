<?php
namespace System\Globalization;
/**
 */
class NumberFormatInfo extends \System\Object implements 
	\System\IFormatProvider,
	\System\ICloneable
{
	/**
	 * @var \System\Int32[]
	 * @field
	 */
	protected $_numberGroupSizes;
	/**
	 * @var \System\Int32[]
	 * @field
	 */
	protected $_currencyGroupSizes;
	/**
	 * @var \System\Int32[]
	 * @field
	 */
	protected $_percentGroupSizes;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_positiveSign;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_negativeSign;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_numberDecimalSeparator;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_numberGroupSeparator;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_currencyGroupSeparator;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_currencyDecimalSeparator;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_currencySymbol;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_nanSymbol;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_positiveInfinitySymbol;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_negativeInfinitySymbol;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_percentDecimalSeparator;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_percentGroupSeparator;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_percentSymbol;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_perMilleSymbol;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected $_nativeDigits;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_numberDecimalDigits;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_currencyDecimalDigits;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_currencyPositivePattern;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_currencyNegativePattern;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_numberNegativePattern;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_percentPositivePattern;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_percentNegativePattern;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_percentDecimalDigits;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_digitSubstitution;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $_isReadOnly;
	/**
	 * @var \System\String[]
	 * @field
	 */
	protected readonly $s_asciiDigits;
	/**
	 * @var \System\Globalization\NumberFormatInfo
	 * @property
	 */
	public readonly $InvariantInfo;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $CurrencyDecimalDigits;
	/**
	 * @var \System\String
	 * @property
	 */
	public $CurrencyDecimalSeparator;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @var \System\Int32[]
	 * @property
	 */
	public $CurrencyGroupSizes;
	/**
	 * @var \System\Int32[]
	 * @property
	 */
	public $NumberGroupSizes;
	/**
	 * @var \System\Int32[]
	 * @property
	 */
	public $PercentGroupSizes;
	/**
	 * @var \System\String
	 * @property
	 */
	public $CurrencyGroupSeparator;
	/**
	 * @var \System\String
	 * @property
	 */
	public $CurrencySymbol;
	/**
	 * @var \System\Globalization\NumberFormatInfo
	 * @property
	 */
	public readonly $CurrentInfo;
	/**
	 * @var \System\String
	 * @property
	 */
	public $NaNSymbol;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $CurrencyNegativePattern;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $NumberNegativePattern;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $PercentPositivePattern;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $PercentNegativePattern;
	/**
	 * @var \System\String
	 * @property
	 */
	public $NegativeInfinitySymbol;
	/**
	 * @var \System\String
	 * @property
	 */
	public $NegativeSign;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $NumberDecimalDigits;
	/**
	 * @var \System\String
	 * @property
	 */
	public $NumberDecimalSeparator;
	/**
	 * @var \System\String
	 * @property
	 */
	public $NumberGroupSeparator;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $CurrencyPositivePattern;
	/**
	 * @var \System\String
	 * @property
	 */
	public $PositiveInfinitySymbol;
	/**
	 * @var \System\String
	 * @property
	 */
	public $PositiveSign;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $PercentDecimalDigits;
	/**
	 * @var \System\String
	 * @property
	 */
	public $PercentDecimalSeparator;
	/**
	 * @var \System\String
	 * @property
	 */
	public $PercentGroupSeparator;
	/**
	 * @var \System\String
	 * @property
	 */
	public $PercentSymbol;
	/**
	 * @var \System\String
	 * @property
	 */
	public $PerMilleSymbol;
	/**
	 * @var \System\String[]
	 * @property
	 */
	public $NativeDigits;
	/**
	 * @var \System\Globalization\DigitShapes
	 * @property
	 */
	public $DigitSubstitution;
	/**
	 * @param \System\String[] $nativeDig
	 * @param \System\String|string $propertyName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function VerifyNativeDigits($nativeDig, $propertyName){}
	/**
	 * @param \System\Globalization\DigitShapes $digitSub
	 * @param \System\String|string $propertyName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function VerifyDigitSubstitution($digitSub, $propertyName){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasInvariantNumberSigns(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_AllowHyphenDuringParsing(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InitializeInvariantAndNegativeSignFlags(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function VerifyWritable(){}
	/**
	 * @return \System\Globalization\NumberFormatInfo
	 */
	public static function get_InvariantInfo(){}
	/**
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\Globalization\NumberFormatInfo
	 */
	public static function GetInstance($formatProvider){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CurrencyDecimalDigits(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_CurrencyDecimalDigits($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_CurrencyDecimalSeparator(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_CurrencyDecimalSeparator($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @param \System\String|string $propName
	 * @param \System\Int32[] $groupSize
	 * @return \System\Void|void
	 */
	protected static function CheckGroupSize($propName, $groupSize){}
	/**
	 * @return \System\Int32[]
	 */
	public  function get_CurrencyGroupSizes(){}
	/**
	 * @param \System\Int32[] $value
	 * @return \System\Void|void
	 */
	public  function set_CurrencyGroupSizes($value){}
	/**
	 * @return \System\Int32[]
	 */
	public  function get_NumberGroupSizes(){}
	/**
	 * @param \System\Int32[] $value
	 * @return \System\Void|void
	 */
	public  function set_NumberGroupSizes($value){}
	/**
	 * @return \System\Int32[]
	 */
	public  function get_PercentGroupSizes(){}
	/**
	 * @param \System\Int32[] $value
	 * @return \System\Void|void
	 */
	public  function set_PercentGroupSizes($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_CurrencyGroupSeparator(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_CurrencyGroupSeparator($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_CurrencySymbol(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_CurrencySymbol($value){}
	/**
	 * @return \System\Globalization\NumberFormatInfo
	 */
	public static function get_CurrentInfo(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_NaNSymbol(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_NaNSymbol($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CurrencyNegativePattern(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_CurrencyNegativePattern($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_NumberNegativePattern(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_NumberNegativePattern($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_PercentPositivePattern(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_PercentPositivePattern($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_PercentNegativePattern(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_PercentNegativePattern($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_NegativeInfinitySymbol(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_NegativeInfinitySymbol($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_NegativeSign(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_NegativeSign($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_NumberDecimalDigits(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_NumberDecimalDigits($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_NumberDecimalSeparator(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_NumberDecimalSeparator($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_NumberGroupSeparator(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_NumberGroupSeparator($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CurrencyPositivePattern(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_CurrencyPositivePattern($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_PositiveInfinitySymbol(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_PositiveInfinitySymbol($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_PositiveSign(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_PositiveSign($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_PercentDecimalDigits(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_PercentDecimalDigits($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_PercentDecimalSeparator(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_PercentDecimalSeparator($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_PercentGroupSeparator(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_PercentGroupSeparator($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_PercentSymbol(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_PercentSymbol($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_PerMilleSymbol(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_PerMilleSymbol($value){}
	/**
	 * @return \System\String[]
	 */
	public  function get_NativeDigits(){}
	/**
	 * @param \System\String[] $value
	 * @return \System\Void|void
	 */
	public  function set_NativeDigits($value){}
	/**
	 * @return \System\Globalization\DigitShapes
	 */
	public  function get_DigitSubstitution(){}
	/**
	 * @param \System\Globalization\DigitShapes $value
	 * @return \System\Void|void
	 */
	public  function set_DigitSubstitution($value){}
	/**
	 * @param \System\Type $formatType
	 * @return \System\Object|object
	 */
	public  function GetFormat($formatType){}
	/**
	 * @param \System\Globalization\NumberFormatInfo $nfi
	 * @return \System\Globalization\NumberFormatInfo
	 */
	public static function ReadOnly($nfi){}
	/**
	 * @param \System\Globalization\NumberStyles $style
	 * @return \System\Void|void
	 */
	protected static function ValidateParseStyleInteger($style){}
	/**
	 * @param \System\Globalization\NumberStyles $style
	 * @return \System\Void|void
	 */
	protected static function ValidateParseStyleFloatingPoint($style){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
