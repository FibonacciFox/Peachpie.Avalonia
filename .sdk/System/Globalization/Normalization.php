<?php
namespace System\Globalization;
class Normalization extends \System\Object
{


	/**
	 * @param \System\String|string $strInput
	 * @param \System\Text\NormalizationForm $normalizationForm
	 * @return \System\Boolean|bool
	 */
	protected static function IsNormalized($strInput, $normalizationForm){}
	/**
	 * @param \System\String|string $strInput
	 * @param \System\Text\NormalizationForm $normalizationForm
	 * @return \System\String|string
	 */
	protected static function Normalize($strInput, $normalizationForm){}
	private static function IcuIsNormalized($strInput, $normalizationForm){}
	private static function IcuNormalize($strInput, $normalizationForm){}
	private static function ValidateArguments($strInput, $normalizationForm){}
	private static function HasInvalidUnicodeSequence($s){}
}