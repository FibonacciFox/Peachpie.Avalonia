<?php
namespace System\Globalization;
final class NumberFormatInfo extends \System\Object implements
	\System\IFormatProvider,
	\System\ICloneable
{

	/**
	 * @field
	 * @var \System\Int32[]|array
	 */
	protected $_numberGroupSizes;
	/**
	 * @field
	 * @var \System\Int32[]|array
	 */
	protected $_currencyGroupSizes;
	/**
	 * @field
	 * @var \System\Int32[]|array
	 */
	protected $_percentGroupSizes;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_positiveSign;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_negativeSign;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_numberDecimalSeparator;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_numberGroupSeparator;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_currencyGroupSeparator;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_currencyDecimalSeparator;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_currencySymbol;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_nanSymbol;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_positiveInfinitySymbol;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_negativeInfinitySymbol;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_percentDecimalSeparator;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_percentGroupSeparator;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_percentSymbol;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_perMilleSymbol;
	/**
	 * @field
	 * @var \System\String[]|array
	 */
	protected $_nativeDigits;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_numberDecimalDigits;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_currencyDecimalDigits;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_currencyPositivePattern;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_currencyNegativePattern;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_numberNegativePattern;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_percentPositivePattern;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_percentNegativePattern;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_percentDecimalDigits;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_digitSubstitution;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $_isReadOnly;
	/**
	 * @field
	 * @since readonly
	 * @var \System\String[]|array
	 */
	protected static $s_asciiDigits;
	/**
	 * @property
	 * @var \System\Globalization\NumberFormatInfo
	 * @since readonly
	 */
	public $InvariantInfo;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $CurrencyDecimalDigits;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $CurrencyDecimalSeparator;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\Int32[]|array
	 */
	public $CurrencyGroupSizes;
	/**
	 * @property
	 * @var \System\Int32[]|array
	 */
	public $NumberGroupSizes;
	/**
	 * @property
	 * @var \System\Int32[]|array
	 */
	public $PercentGroupSizes;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $CurrencyGroupSeparator;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $CurrencySymbol;
	/**
	 * @property
	 * @var \System\Globalization\NumberFormatInfo
	 * @since readonly
	 */
	public $CurrentInfo;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $NaNSymbol;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $CurrencyNegativePattern;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $NumberNegativePattern;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $PercentPositivePattern;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $PercentNegativePattern;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $NegativeInfinitySymbol;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $NegativeSign;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $NumberDecimalDigits;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $NumberDecimalSeparator;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $NumberGroupSeparator;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $CurrencyPositivePattern;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $PositiveInfinitySymbol;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $PositiveSign;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $PercentDecimalDigits;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $PercentDecimalSeparator;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $PercentGroupSeparator;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $PercentSymbol;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $PerMilleSymbol;
	/**
	 * @property
	 * @var \System\String[]|array
	 */
	public $NativeDigits;
	/**
	 * @property
	 * @var \System\Globalization\DigitShapes
	 */
	public $DigitSubstitution;
	private static function VerifyNativeDigits($nativeDig, $propertyName){}
	private static function VerifyDigitSubstitution($digitSub, $propertyName){}
	private function InitializeInvariantAndNegativeSignFlags(){}
	private function VerifyWritable(){}
	/**
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\Globalization\NumberFormatInfo
	 */
	public static function GetInstance($formatProvider){}
	/**
	 * @return \System\Object|object
	 */
	public function Clone(){}
	/**
	 * @param \System\String|string $propName
	 * @param \System\Int32 $groupSize
	 * @return \System\Void|void
	 */
	protected static function CheckGroupSize($propName, $groupSize){}
	/**
	 * @param \System\Type $formatType
	 * @return \System\Object|object
	 */
	public function GetFormat($formatType){}
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
	 */
	public function __construct(){}
}