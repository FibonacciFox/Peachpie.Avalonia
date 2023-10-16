<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TextInfoMethodsOverride
{
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] public  function ToLower_1($c){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToLower_2($str){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function ChangeCaseCommon_1($source, $destination){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function ChangeCaseCommon_2($source, $destination, $charCount){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function ChangeCaseCommon_3($source){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] protected static function ToLowerAsciiInvariant_1($s){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] private static function ToLowerAsciiInvariant_2($c){}
	/**
	 * @return \System\Char
	 */
	#[MethodOverride] public  function ToUpper_1($c){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToUpper_2($str){}
}
/**
 */
class TextInfo extends \System\Object implements 
	\System\ICloneable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	/**
	 * @var \System\Globalization\TextInfo
	 * @field
	 */
	protected readonly $Invariant;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ANSICodePage;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $OEMCodePage;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MacCodePage;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $EBCDICCodePage;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $LCID;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $CultureName;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @var \System\String
	 * @property
	 */
	public $ListSeparator;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsRightToLeft;
	/**
	 * @param \System\Object|object $sender
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDeserialization($sender){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ANSICodePage(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_OEMCodePage(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MacCodePage(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_EBCDICCodePage(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_LCID(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_CultureName(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @param \System\Globalization\TextInfo $textInfo
	 * @return \System\Globalization\TextInfo
	 */
	public static function ReadOnly($textInfo){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function VerifyWritable(){}
	/**
	 * @param \System\Boolean $readOnly
	 * @return \System\Void|void
	 */
	protected  function SetReadOnlyState($readOnly){}
	/**
	 * @return \System\String|string
	 */
	public  function get_ListSeparator(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_ListSeparator($value){}
	/**
	 * @uses TextInfoMethodsOverride::ToLower_1 ($c)
	 * @uses TextInfoMethodsOverride::ToLower_2 ($str)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToLower(mixed ...$args){}
	/**
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	protected static function ToLowerInvariant($c){}
	/**
	 * @param \System\Char $c
	 * @param \System\Boolean $toUpper
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ChangeCase($c, $toUpper){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Span_1 $destination
	 * @return \System\Void|void
	 */
	protected  function ChangeCaseToLower($source, $destination){}
	/**
	 * @param \System\ReadOnlySpan_1 $source
	 * @param \System\Span_1 $destination
	 * @return \System\Void|void
	 */
	protected  function ChangeCaseToUpper($source, $destination){}
	/**
	 * @uses TextInfoMethodsOverride::ChangeCaseCommon_1 ($source, $destination)
	 * @uses TextInfoMethodsOverride::ChangeCaseCommon_2 ($source, $destination, $charCount)
	 * @uses TextInfoMethodsOverride::ChangeCaseCommon_3 ($source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ChangeCaseCommon(mixed ...$args){}
	/**
	 * @uses TextInfoMethodsOverride::ToLowerAsciiInvariant_1 ($s)
	 * @uses TextInfoMethodsOverride::ToLowerAsciiInvariant_2 ($c)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToLowerAsciiInvariant(mixed ...$args){}
	/**
	 * @uses TextInfoMethodsOverride::ToUpper_1 ($c)
	 * @uses TextInfoMethodsOverride::ToUpper_2 ($str)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToUpper(mixed ...$args){}
	/**
	 * @param \System\Char $c
	 * @return \System\Char
	 */
	protected static function ToUpperInvariant($c){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ToUpperAsciiInvariant($c){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsAsciiCasingSameAsInvariant(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PopulateIsAsciiCasingSameAsInvariant(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsRightToLeft(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
	/**
	 * @param \System\String|string $str
	 * @return \System\String|string
	 */
	public  function ToTitleCase($str){}
	/**
	 * @param \System\Text\StringBuilder& $result
	 * @param \System\String& $input
	 * @param \System\Int32|int $inputIndex
	 * @param \System\Int32|int $charLen
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AddNonLetter($result, $input, $inputIndex, $charLen){}
	/**
	 * @param \System\Text\StringBuilder& $result
	 * @param \System\String& $input
	 * @param \System\Int32|int $inputIndex
	 * @param \System\Int32|int $charLen
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddTitlecaseLetter($result, $input, $inputIndex, $charLen){}
	/**
	 * @param \System\Char* $src
	 * @param \System\Int32|int $srcLen
	 * @param \System\Char* $dstBuffer
	 * @param \System\Int32|int $dstBufferCapacity
	 * @param \System\Boolean $bToUpper
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ChangeCaseCore($src, $srcLen, $dstBuffer, $dstBufferCapacity, $bToUpper){}
	/**
	 * @param \System\Globalization\UnicodeCategory $category
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsWordSeparator($category){}
	/**
	 * @param \System\Globalization\UnicodeCategory $uc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsLetterCategory($uc){}
	/**
	 * @param \System\String|string $localeName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NeedsTurkishCasing($localeName){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsInvariant(){}
	/**
	 * @param \System\Char* $src
	 * @param \System\Int32|int $srcLen
	 * @param \System\Char* $dstBuffer
	 * @param \System\Int32|int $dstBufferCapacity
	 * @param \System\Boolean $bToUpper
	 * @return \System\Void|void
	 */
	protected  function IcuChangeCase($src, $srcLen, $dstBuffer, $dstBufferCapacity, $bToUpper){}
	/**
	 * @param \System\Char* $pSource
	 * @param \System\Int32|int $pSourceLen
	 * @param \System\Char* $pResult
	 * @param \System\Int32|int $pResultLen
	 * @param \System\Boolean $toUpper
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function NlsChangeCase($pSource, $pSourceLen, $pResult, $pResultLen, $toUpper){}
	/**
	 * @param \System\String|string $localeName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsInvariantLocale($localeName){}
}
