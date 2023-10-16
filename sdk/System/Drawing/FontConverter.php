<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FontConverterMethodsOverride
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
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function CreateInstance_1($context, $propertyValues){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function CreateInstance_2($propertyValues){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetCreateInstanceSupported_1($context){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetCreateInstanceSupported_2(){}
	/**
	 * @return \System\ComponentModel\PropertyDescriptorCollection
	 */
	#[MethodOverride] public  function GetProperties_1($context, $value, $attributes){}
	/**
	 * @return \System\ComponentModel\PropertyDescriptorCollection
	 */
	#[MethodOverride] public  function GetProperties_2($value){}
	/**
	 * @return \System\ComponentModel\PropertyDescriptorCollection
	 */
	#[MethodOverride] public  function GetProperties_3($context, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetPropertiesSupported_1($context){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetPropertiesSupported_2(){}
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
	 * @return \System\Collections\ICollection
	 */
	#[MethodOverride] public  function GetStandardValues_1(){}
	/**
	 * @return \System\ComponentModel\StandardValuesCollection
	 */
	#[MethodOverride] public  function GetStandardValues_2($context){}
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
	#[MethodOverride] public  function GetStandardValuesSupported_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetStandardValuesSupported_2($context){}
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
class FontConverter extends \System\ComponentModel\TypeConverter
{
	/**
	 * @uses FontConverterMethodsOverride::CanConvertFrom_1 ($context, $sourceType)
	 * @uses FontConverterMethodsOverride::CanConvertFrom_2 ($sourceType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CanConvertFrom(mixed ...$args){}
	/**
	 * @uses FontConverterMethodsOverride::CanConvertTo_1 ($context, $destinationType)
	 * @uses FontConverterMethodsOverride::CanConvertTo_2 ($destinationType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CanConvertTo(mixed ...$args){}
	/**
	 * @uses FontConverterMethodsOverride::ConvertFrom_1 ($context, $culture, $value)
	 * @uses FontConverterMethodsOverride::ConvertFrom_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFrom(mixed ...$args){}
	/**
	 * @uses FontConverterMethodsOverride::ConvertTo_1 ($context, $culture, $value, $destinationType)
	 * @uses FontConverterMethodsOverride::ConvertTo_2 ($value, $destinationType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertTo(mixed ...$args){}
	/**
	 * @uses FontConverterMethodsOverride::CreateInstance_1 ($context, $propertyValues)
	 * @uses FontConverterMethodsOverride::CreateInstance_2 ($propertyValues)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateInstance(mixed ...$args){}
	/**
	 * @uses FontConverterMethodsOverride::GetCreateInstanceSupported_1 ($context)
	 * @uses FontConverterMethodsOverride::GetCreateInstanceSupported_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCreateInstanceSupported(mixed ...$args){}
	/**
	 * @uses FontConverterMethodsOverride::GetProperties_1 ($context, $value, $attributes)
	 * @uses FontConverterMethodsOverride::GetProperties_2 ($value)
	 * @uses FontConverterMethodsOverride::GetProperties_3 ($context, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperties(mixed ...$args){}
	/**
	 * @uses FontConverterMethodsOverride::GetPropertiesSupported_1 ($context)
	 * @uses FontConverterMethodsOverride::GetPropertiesSupported_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetPropertiesSupported(mixed ...$args){}
	/**
	 * @uses FontConverterMethodsOverride::ConvertFromInvariantString_1 ($text)
	 * @uses FontConverterMethodsOverride::ConvertFromInvariantString_2 ($context, $text)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFromInvariantString(mixed ...$args){}
	/**
	 * @uses FontConverterMethodsOverride::ConvertFromString_1 ($text)
	 * @uses FontConverterMethodsOverride::ConvertFromString_2 ($context, $text)
	 * @uses FontConverterMethodsOverride::ConvertFromString_3 ($context, $culture, $text)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFromString(mixed ...$args){}
	/**
	 * @uses FontConverterMethodsOverride::ConvertToInvariantString_1 ($value)
	 * @uses FontConverterMethodsOverride::ConvertToInvariantString_2 ($context, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertToInvariantString(mixed ...$args){}
	/**
	 * @uses FontConverterMethodsOverride::ConvertToString_1 ($value)
	 * @uses FontConverterMethodsOverride::ConvertToString_2 ($context, $value)
	 * @uses FontConverterMethodsOverride::ConvertToString_3 ($context, $culture, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertToString(mixed ...$args){}
	/**
	 * @uses FontConverterMethodsOverride::GetStandardValues_1 ()
	 * @uses FontConverterMethodsOverride::GetStandardValues_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValues(mixed ...$args){}
	/**
	 * @uses FontConverterMethodsOverride::GetStandardValuesExclusive_1 ()
	 * @uses FontConverterMethodsOverride::GetStandardValuesExclusive_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValuesExclusive(mixed ...$args){}
	/**
	 * @uses FontConverterMethodsOverride::GetStandardValuesSupported_1 ()
	 * @uses FontConverterMethodsOverride::GetStandardValuesSupported_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValuesSupported(mixed ...$args){}
	/**
	 * @uses FontConverterMethodsOverride::IsValid_1 ($value)
	 * @uses FontConverterMethodsOverride::IsValid_2 ($context, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsValid(mixed ...$args){}
}
