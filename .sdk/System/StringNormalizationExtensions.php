<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StringNormalizationExtensionsOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $strInput
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsNormalized_1 ($strInput){}
	/**
	 * @deprecated
	 * @param \System\String|string $strInput
	 * @param \System\Text\NormalizationForm $normalizationForm
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function IsNormalized_2 ($strInput, $normalizationForm){}
	/**
	 * @deprecated
	 * @param \System\String|string $strInput
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Normalize_1 ($strInput){}
	/**
	 * @deprecated
	 * @param \System\String|string $strInput
	 * @param \System\Text\NormalizationForm $normalizationForm
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function Normalize_2 ($strInput, $normalizationForm){}
}
class StringNormalizationExtensions extends \System\Object
{
	use StringNormalizationExtensionsOverride;

	/**
	 * @uses StringNormalizationExtensionsOverride::IsNormalized_1 <br>public , args: ($strInput)<br>
	 * @uses StringNormalizationExtensionsOverride::IsNormalized_2 <br>public , args: ($strInput, $normalizationForm)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function IsNormalized (\override ...$args){}
	/**
	 * @uses StringNormalizationExtensionsOverride::Normalize_1 <br>public , args: ($strInput)<br>
	 * @uses StringNormalizationExtensionsOverride::Normalize_2 <br>public , args: ($strInput, $normalizationForm)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function Normalize (\override ...$args){}
}