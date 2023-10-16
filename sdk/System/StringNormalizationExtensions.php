<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StringNormalizationExtensionsMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsNormalized_1($strInput){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function IsNormalized_2($strInput, $normalizationForm){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Normalize_1($strInput){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function Normalize_2($strInput, $normalizationForm){}
}
/**
 */
class StringNormalizationExtensions extends \System\Object
{
	/**
	 * @uses StringNormalizationExtensionsMethodsOverride::IsNormalized_1 ($strInput)
	 * @uses StringNormalizationExtensionsMethodsOverride::IsNormalized_2 ($strInput, $normalizationForm)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function IsNormalized(mixed ...$args){}
	/**
	 * @uses StringNormalizationExtensionsMethodsOverride::Normalize_1 ($strInput)
	 * @uses StringNormalizationExtensionsMethodsOverride::Normalize_2 ($strInput, $normalizationForm)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Normalize(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
