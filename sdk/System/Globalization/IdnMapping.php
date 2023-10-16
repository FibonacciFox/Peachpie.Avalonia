<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IdnMappingMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetAscii_1($unicode){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetAscii_2($unicode, $index){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetAscii_3($unicode, $index, $count){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetUnicode_1($ascii){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetUnicode_2($ascii, $index){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetUnicode_3($ascii, $index, $count){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function IcuGetUnicodeCore_1($asciiString, $ascii, $count){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function IcuGetUnicodeCore_2($asciiString, $ascii, $count, $flags, $output, $outputLength, $reattempt){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function NlsGetAsciiCore_1($unicodeString, $unicode, $count){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function NlsGetAsciiCore_2($unicodeString, $unicode, $count, $flags, $output, $outputLength){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private  function NlsGetUnicodeCore_1($asciiString, $ascii, $count){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function NlsGetUnicodeCore_2($asciiString, $ascii, $count, $flags, $output, $outputLength){}
}
/**
 */
class IdnMapping extends \System\Object
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $AllowUnassigned;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $UseStd3AsciiRules;
	/**
	 * @return \System\Boolean
	 */
	public  function get_AllowUnassigned(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_AllowUnassigned($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_UseStd3AsciiRules(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_UseStd3AsciiRules($value){}
	/**
	 * @uses IdnMappingMethodsOverride::GetAscii_1 ($unicode)
	 * @uses IdnMappingMethodsOverride::GetAscii_2 ($unicode, $index)
	 * @uses IdnMappingMethodsOverride::GetAscii_3 ($unicode, $index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetAscii(mixed ...$args){}
	/**
	 * @uses IdnMappingMethodsOverride::GetUnicode_1 ($ascii)
	 * @uses IdnMappingMethodsOverride::GetUnicode_2 ($ascii, $index)
	 * @uses IdnMappingMethodsOverride::GetUnicode_3 ($ascii, $index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetUnicode(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
	/**
	 * @param \System\String|string $originalString
	 * @param \System\Char* $input
	 * @param \System\Int32|int $inputLength
	 * @param \System\Char* $output
	 * @param \System\Int32|int $outputLength
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetStringForOutput($originalString, $input, $inputLength, $output, $outputLength){}
	/**
	 * @param \System\String|string $unicode
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetAsciiInvariant($unicode, $index, $count){}
	/**
	 * @param \System\String|string $unicode
	 * @param \System\Boolean $bUseStd3
	 * @param \System\Boolean $bCheckAscii
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateStd3AndAscii($unicode, $bUseStd3, $bCheckAscii){}
	/**
	 * @param \System\String|string $unicode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PunycodeEncode($unicode){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsDot($c){}
	/**
	 * @param \System\Int32|int $cTest
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsSupplementary($cTest){}
	/**
	 * @param \System\UInt32 $cp
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Basic($cp){}
	/**
	 * @param \System\Char $c
	 * @param \System\Boolean $bNextToDot
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateStd3($c, $bNextToDot){}
	/**
	 * @param \System\String|string $ascii
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetUnicodeInvariant($ascii, $index, $count){}
	/**
	 * @param \System\String|string $ascii
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PunycodeDecode($ascii){}
	/**
	 * @param \System\Char $cp
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function DecodeDigit($cp){}
	/**
	 * @param \System\Int32|int $delta
	 * @param \System\Int32|int $numpoints
	 * @param \System\Boolean $firsttime
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Adapt($delta, $numpoints, $firsttime){}
	/**
	 * @param \System\Char $bcp
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EncodeBasic($bcp){}
	/**
	 * @param \System\Int32|int $d
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function EncodeDigit($d){}
	/**
	 * @param \System\String|string $unicodeString
	 * @param \System\Char* $unicode
	 * @param \System\Int32|int $count
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IcuGetAsciiCore($unicodeString, $unicode, $count){}
	/**
	 * @uses IdnMappingMethodsOverride::IcuGetUnicodeCore_1 ($asciiString, $ascii, $count)
	 * @uses IdnMappingMethodsOverride::IcuGetUnicodeCore_2 ($asciiString, $ascii, $count, $flags, $output, $outputLength, $reattempt)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IcuGetUnicodeCore(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IcuFlags(){}
	/**
	 * @param \System\Char* $s
	 * @param \System\Int32|int $count
	 * @param \System\UInt32 $flags
	 * @param \System\String|string $paramName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckInvalidIdnCharacters($s, $count, $flags, $paramName){}
	/**
	 * @uses IdnMappingMethodsOverride::NlsGetAsciiCore_1 ($unicodeString, $unicode, $count)
	 * @uses IdnMappingMethodsOverride::NlsGetAsciiCore_2 ($unicodeString, $unicode, $count, $flags, $output, $outputLength)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function NlsGetAsciiCore(mixed ...$args){}
	/**
	 * @uses IdnMappingMethodsOverride::NlsGetUnicodeCore_1 ($asciiString, $ascii, $count)
	 * @uses IdnMappingMethodsOverride::NlsGetUnicodeCore_2 ($asciiString, $ascii, $count, $flags, $output, $outputLength)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function NlsGetUnicodeCore(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_NlsFlags(){}
	/**
	 * @param \System\Boolean $unicode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowForZeroLength($unicode){}
}
