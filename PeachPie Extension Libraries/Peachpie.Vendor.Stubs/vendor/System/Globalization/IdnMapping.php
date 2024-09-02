<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait IdnMappingOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $unicode
	 * @return \System\String|string
	 */
	#[MethodOverride]public function GetAscii_1 ($unicode){}
	/**
	 * @deprecated
	 * @param \System\String|string $unicode
	 * @param \System\Int32|int $index
	 * @return \System\String|string
	 */
	#[MethodOverride]public function GetAscii_2 ($unicode, $index){}
	/**
	 * @deprecated
	 * @param \System\String|string $unicode
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\String|string
	 */
	#[MethodOverride]public function GetAscii_3 ($unicode, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\String|string $ascii
	 * @return \System\String|string
	 */
	#[MethodOverride]public function GetUnicode_1 ($ascii){}
	/**
	 * @deprecated
	 * @param \System\String|string $ascii
	 * @param \System\Int32|int $index
	 * @return \System\String|string
	 */
	#[MethodOverride]public function GetUnicode_2 ($ascii, $index){}
	/**
	 * @deprecated
	 * @param \System\String|string $ascii
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\String|string
	 */
	#[MethodOverride]public function GetUnicode_3 ($ascii, $index, $count){}
	/**
	 * @deprecated
	 * @param \System\String|string $asciiString
	 * @param \System\Char* $ascii
	 * @param \System\Int32|int $count
	 * @return \System\String|string
	 */
	#[MethodOverride]private function IcuGetUnicodeCore_1 ($asciiString, $ascii, $count){}
	/**
	 * @deprecated
	 * @param \System\String|string $asciiString
	 * @param \System\Char* $ascii
	 * @param \System\Int32|int $count
	 * @param \System\UInt32 $flags
	 * @param \System\Char* $output
	 * @param \System\Int32|int $outputLength
	 * @param \System\Boolean|bool $reattempt
	 * @return \System\String|string
	 */
	#[MethodOverride]private function IcuGetUnicodeCore_2 ($asciiString, $ascii, $count, $flags, $output, $outputLength, $reattempt){}
}
final class IdnMapping extends \System\Object
{
	use IdnMappingOverride;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $AllowUnassigned;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $UseStd3AsciiRules;
	/**
	 * @uses IdnMappingOverride::GetAscii_1 <br>public , args: ($unicode)<br>
	 * @uses IdnMappingOverride::GetAscii_2 <br>public , args: ($unicode, $index)<br>
	 * @uses IdnMappingOverride::GetAscii_3 <br>public , args: ($unicode, $index, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function GetAscii (\override ...$args){}
	/**
	 * @uses IdnMappingOverride::GetUnicode_1 <br>public , args: ($ascii)<br>
	 * @uses IdnMappingOverride::GetUnicode_2 <br>public , args: ($ascii, $index)<br>
	 * @uses IdnMappingOverride::GetUnicode_3 <br>public , args: ($ascii, $index, $count)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function GetUnicode (\override ...$args){}
	private static function GetStringForOutput($originalString, $input, $inputLength, $output, $outputLength){}
	private function GetAsciiInvariant($unicode, $index, $count){}
	private static function ValidateStd3AndAscii($unicode, $bUseStd3, $bCheckAscii){}
	private static function PunycodeEncode($unicode){}
	private static function IsDot($c){}
	private static function IsSupplementary($cTest){}
	private static function Basic($cp){}
	private static function ValidateStd3($c, $bNextToDot){}
	private function GetUnicodeInvariant($ascii, $index, $count){}
	private static function PunycodeDecode($ascii){}
	private static function DecodeDigit($cp){}
	private static function Adapt($delta, $numpoints, $firsttime){}
	private static function EncodeBasic($bcp){}
	private static function EncodeDigit($d){}
	private function IcuGetAsciiCore($unicodeString, $unicode, $count){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses IdnMappingOverride::IcuGetUnicodeCore_1 <br>private , args: ($asciiString, $ascii, $count)<br>
	 * @uses IdnMappingOverride::IcuGetUnicodeCore_2 <br>private , args: ($asciiString, $ascii, $count, $flags, $output, $outputLength, $reattempt)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function IcuGetUnicodeCore (\override ...$args){}
	private static function CheckInvalidIdnCharacters($s, $count, $flags, $paramName){}
	/**
	 */
	public function __construct(){}
}