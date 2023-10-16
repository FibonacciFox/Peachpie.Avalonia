<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImageFormatConverterMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function CanConvertFrom_1($context, $sourceType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function CanConvertFrom_2($sourceType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function CanConvertTo_1($context, $destinationType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function CanConvertTo_2($destinationType){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function ConvertFrom_1($context, $culture, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function ConvertFrom_2($value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function ConvertTo_1($context, $culture, $value, $destinationType){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function ConvertTo_2($value, $destinationType){}
	/**
	 * @return \System\ComponentModel\StandardValuesCollection
	 */
	#[MethodOverride] public  function GetStandardValues_1($context){}
	/**
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride] public  function GetStandardValues_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetStandardValuesSupported_1($context){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetStandardValuesSupported_2(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function ConvertFromInvariantString_1($text){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function ConvertFromInvariantString_2($context, $text){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function ConvertFromString_1($text){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function ConvertFromString_2($context, $text){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function ConvertFromString_3($context, $culture, $text){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ConvertToInvariantString_1($value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ConvertToInvariantString_2($context, $value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ConvertToString_1($value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ConvertToString_2($context, $value){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ConvertToString_3($context, $culture, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function CreateInstance_1($propertyValues){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function CreateInstance_2($context, $propertyValues){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetCreateInstanceSupported_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetCreateInstanceSupported_2($context){}
	/**
	 * @return \System\ComponentModel\PropertyDescriptorCollection
	 */
	#[MethodOverride] public  function GetProperties_1($value){}
	/**
	 * @return \System\ComponentModel\PropertyDescriptorCollection
	 */
	#[MethodOverride] public  function GetProperties_2($context, $value){}
	/**
	 * @return \System\ComponentModel\PropertyDescriptorCollection
	 */
	#[MethodOverride] public  function GetProperties_3($context, $value, $attributes){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetPropertiesSupported_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetPropertiesSupported_2($context){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetStandardValuesExclusive_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetStandardValuesExclusive_2($context){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsValid_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsValid_2($context, $value){}
}
/**
 */
class ImageFormatConverter extends \System\ComponentModel\TypeConverter
{
	/**
	 * @uses ImageFormatConverterMethodsOverride::CanConvertFrom_1 ($context, $sourceType)
	 * @uses ImageFormatConverterMethodsOverride::CanConvertFrom_2 ($sourceType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CanConvertFrom(mixed ...$args){}
	/**
	 * @uses ImageFormatConverterMethodsOverride::CanConvertTo_1 ($context, $destinationType)
	 * @uses ImageFormatConverterMethodsOverride::CanConvertTo_2 ($destinationType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CanConvertTo(mixed ...$args){}
	/**
	 * @uses ImageFormatConverterMethodsOverride::ConvertFrom_1 ($context, $culture, $value)
	 * @uses ImageFormatConverterMethodsOverride::ConvertFrom_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFrom(mixed ...$args){}
	/**
	 * @uses ImageFormatConverterMethodsOverride::ConvertTo_1 ($context, $culture, $value, $destinationType)
	 * @uses ImageFormatConverterMethodsOverride::ConvertTo_2 ($value, $destinationType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertTo(mixed ...$args){}
	/**
	 * @uses ImageFormatConverterMethodsOverride::GetStandardValues_1 ($context)
	 * @uses ImageFormatConverterMethodsOverride::GetStandardValues_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValues(mixed ...$args){}
	/**
	 * @uses ImageFormatConverterMethodsOverride::GetStandardValuesSupported_1 ($context)
	 * @uses ImageFormatConverterMethodsOverride::GetStandardValuesSupported_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValuesSupported(mixed ...$args){}
	/**
	 * @uses ImageFormatConverterMethodsOverride::ConvertFromInvariantString_1 ($text)
	 * @uses ImageFormatConverterMethodsOverride::ConvertFromInvariantString_2 ($context, $text)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFromInvariantString(mixed ...$args){}
	/**
	 * @uses ImageFormatConverterMethodsOverride::ConvertFromString_1 ($text)
	 * @uses ImageFormatConverterMethodsOverride::ConvertFromString_2 ($context, $text)
	 * @uses ImageFormatConverterMethodsOverride::ConvertFromString_3 ($context, $culture, $text)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFromString(mixed ...$args){}
	/**
	 * @uses ImageFormatConverterMethodsOverride::ConvertToInvariantString_1 ($value)
	 * @uses ImageFormatConverterMethodsOverride::ConvertToInvariantString_2 ($context, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertToInvariantString(mixed ...$args){}
	/**
	 * @uses ImageFormatConverterMethodsOverride::ConvertToString_1 ($value)
	 * @uses ImageFormatConverterMethodsOverride::ConvertToString_2 ($context, $value)
	 * @uses ImageFormatConverterMethodsOverride::ConvertToString_3 ($context, $culture, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertToString(mixed ...$args){}
	/**
	 * @uses ImageFormatConverterMethodsOverride::CreateInstance_1 ($propertyValues)
	 * @uses ImageFormatConverterMethodsOverride::CreateInstance_2 ($context, $propertyValues)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateInstance(mixed ...$args){}
	/**
	 * @uses ImageFormatConverterMethodsOverride::GetCreateInstanceSupported_1 ()
	 * @uses ImageFormatConverterMethodsOverride::GetCreateInstanceSupported_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCreateInstanceSupported(mixed ...$args){}
	/**
	 * @uses ImageFormatConverterMethodsOverride::GetProperties_1 ($value)
	 * @uses ImageFormatConverterMethodsOverride::GetProperties_2 ($context, $value)
	 * @uses ImageFormatConverterMethodsOverride::GetProperties_3 ($context, $value, $attributes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperties(mixed ...$args){}
	/**
	 * @uses ImageFormatConverterMethodsOverride::GetPropertiesSupported_1 ()
	 * @uses ImageFormatConverterMethodsOverride::GetPropertiesSupported_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetPropertiesSupported(mixed ...$args){}
	/**
	 * @uses ImageFormatConverterMethodsOverride::GetStandardValuesExclusive_1 ()
	 * @uses ImageFormatConverterMethodsOverride::GetStandardValuesExclusive_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValuesExclusive(mixed ...$args){}
	/**
	 * @uses ImageFormatConverterMethodsOverride::IsValid_1 ($value)
	 * @uses ImageFormatConverterMethodsOverride::IsValid_2 ($context, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsValid(mixed ...$args){}
}
