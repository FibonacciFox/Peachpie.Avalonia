<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait IconConverterMethodsOverride
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
class IconConverter extends \System\ComponentModel\ExpandableObjectConverter
{
	/**
	 * @uses IconConverterMethodsOverride::CanConvertFrom_1 ($context, $sourceType)
	 * @uses IconConverterMethodsOverride::CanConvertFrom_2 ($sourceType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CanConvertFrom(mixed ...$args){}
	/**
	 * @uses IconConverterMethodsOverride::CanConvertTo_1 ($context, $destinationType)
	 * @uses IconConverterMethodsOverride::CanConvertTo_2 ($destinationType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CanConvertTo(mixed ...$args){}
	/**
	 * @uses IconConverterMethodsOverride::ConvertFrom_1 ($context, $culture, $value)
	 * @uses IconConverterMethodsOverride::ConvertFrom_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFrom(mixed ...$args){}
	/**
	 * @uses IconConverterMethodsOverride::ConvertTo_1 ($context, $culture, $value, $destinationType)
	 * @uses IconConverterMethodsOverride::ConvertTo_2 ($value, $destinationType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertTo(mixed ...$args){}
	/**
	 * @uses IconConverterMethodsOverride::GetProperties_1 ($context, $value, $attributes)
	 * @uses IconConverterMethodsOverride::GetProperties_2 ($value)
	 * @uses IconConverterMethodsOverride::GetProperties_3 ($context, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperties(mixed ...$args){}
	/**
	 * @uses IconConverterMethodsOverride::GetPropertiesSupported_1 ($context)
	 * @uses IconConverterMethodsOverride::GetPropertiesSupported_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetPropertiesSupported(mixed ...$args){}
	/**
	 * @uses IconConverterMethodsOverride::ConvertFromInvariantString_1 ($text)
	 * @uses IconConverterMethodsOverride::ConvertFromInvariantString_2 ($context, $text)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFromInvariantString(mixed ...$args){}
	/**
	 * @uses IconConverterMethodsOverride::ConvertFromString_1 ($text)
	 * @uses IconConverterMethodsOverride::ConvertFromString_2 ($context, $text)
	 * @uses IconConverterMethodsOverride::ConvertFromString_3 ($context, $culture, $text)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFromString(mixed ...$args){}
	/**
	 * @uses IconConverterMethodsOverride::ConvertToInvariantString_1 ($value)
	 * @uses IconConverterMethodsOverride::ConvertToInvariantString_2 ($context, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertToInvariantString(mixed ...$args){}
	/**
	 * @uses IconConverterMethodsOverride::ConvertToString_1 ($value)
	 * @uses IconConverterMethodsOverride::ConvertToString_2 ($context, $value)
	 * @uses IconConverterMethodsOverride::ConvertToString_3 ($context, $culture, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertToString(mixed ...$args){}
	/**
	 * @uses IconConverterMethodsOverride::CreateInstance_1 ($propertyValues)
	 * @uses IconConverterMethodsOverride::CreateInstance_2 ($context, $propertyValues)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateInstance(mixed ...$args){}
	/**
	 * @uses IconConverterMethodsOverride::GetCreateInstanceSupported_1 ()
	 * @uses IconConverterMethodsOverride::GetCreateInstanceSupported_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCreateInstanceSupported(mixed ...$args){}
	/**
	 * @uses IconConverterMethodsOverride::GetStandardValues_1 ()
	 * @uses IconConverterMethodsOverride::GetStandardValues_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValues(mixed ...$args){}
	/**
	 * @uses IconConverterMethodsOverride::GetStandardValuesExclusive_1 ()
	 * @uses IconConverterMethodsOverride::GetStandardValuesExclusive_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValuesExclusive(mixed ...$args){}
	/**
	 * @uses IconConverterMethodsOverride::GetStandardValuesSupported_1 ()
	 * @uses IconConverterMethodsOverride::GetStandardValuesSupported_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValuesSupported(mixed ...$args){}
	/**
	 * @uses IconConverterMethodsOverride::IsValid_1 ($value)
	 * @uses IconConverterMethodsOverride::IsValid_2 ($context, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsValid(mixed ...$args){}
}
