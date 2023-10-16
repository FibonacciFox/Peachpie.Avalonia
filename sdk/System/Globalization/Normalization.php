<?php
namespace System\Globalization;
/**
 */
class Normalization extends \System\Object
{
	/**
	 * @param \System\String|string $strInput
	 * @param \System\Text\NormalizationForm $normalizationForm
	 * @return \System\Boolean
	 */
	protected static function IsNormalized($strInput, $normalizationForm){}
	/**
	 * @param \System\String|string $strInput
	 * @param \System\Text\NormalizationForm $normalizationForm
	 * @return \System\String|string
	 */
	protected static function Normalize($strInput, $normalizationForm){}
	/**
	 * @param \System\String|string $strInput
	 * @param \System\Text\NormalizationForm $normalizationForm
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IcuIsNormalized($strInput, $normalizationForm){}
	/**
	 * @param \System\String|string $strInput
	 * @param \System\Text\NormalizationForm $normalizationForm
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IcuNormalize($strInput, $normalizationForm){}
	/**
	 * @param \System\String|string $strInput
	 * @param \System\Text\NormalizationForm $normalizationForm
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ValidateArguments($strInput, $normalizationForm){}
	/**
	 * @param \System\String|string $s
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function HasInvalidUnicodeSequence($s){}
	/**
	 * @param \System\String|string $strInput
	 * @param \System\Text\NormalizationForm $normalizationForm
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NlsIsNormalized($strInput, $normalizationForm){}
	/**
	 * @param \System\String|string $strInput
	 * @param \System\Text\NormalizationForm $normalizationForm
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NlsNormalize($strInput, $normalizationForm){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
