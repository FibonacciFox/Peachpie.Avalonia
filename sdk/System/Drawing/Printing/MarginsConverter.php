<?php
namespace System\Drawing\Printing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MarginsConverterMethodsOverride
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
class MarginsConverter extends \System\ComponentModel\ExpandableObjectConverter
{
	/**
	 * @uses MarginsConverterMethodsOverride::CanConvertFrom_1 ($context, $sourceType)
	 * @uses MarginsConverterMethodsOverride::CanConvertFrom_2 ($sourceType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CanConvertFrom(mixed ...$args){}
	/**
	 * @uses MarginsConverterMethodsOverride::CanConvertTo_1 ($context, $destinationType)
	 * @uses MarginsConverterMethodsOverride::CanConvertTo_2 ($destinationType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CanConvertTo(mixed ...$args){}
	/**
	 * @uses MarginsConverterMethodsOverride::ConvertFrom_1 ($context, $culture, $value)
	 * @uses MarginsConverterMethodsOverride::ConvertFrom_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFrom(mixed ...$args){}
	/**
	 * @uses MarginsConverterMethodsOverride::ConvertTo_1 ($context, $culture, $value, $destinationType)
	 * @uses MarginsConverterMethodsOverride::ConvertTo_2 ($value, $destinationType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertTo(mixed ...$args){}
	/**
	 * @uses MarginsConverterMethodsOverride::CreateInstance_1 ($context, $propertyValues)
	 * @uses MarginsConverterMethodsOverride::CreateInstance_2 ($propertyValues)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateInstance(mixed ...$args){}
	/**
	 * @uses MarginsConverterMethodsOverride::GetCreateInstanceSupported_1 ($context)
	 * @uses MarginsConverterMethodsOverride::GetCreateInstanceSupported_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCreateInstanceSupported(mixed ...$args){}
	/**
	 * @uses MarginsConverterMethodsOverride::GetProperties_1 ($context, $value, $attributes)
	 * @uses MarginsConverterMethodsOverride::GetProperties_2 ($value)
	 * @uses MarginsConverterMethodsOverride::GetProperties_3 ($context, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperties(mixed ...$args){}
	/**
	 * @uses MarginsConverterMethodsOverride::GetPropertiesSupported_1 ($context)
	 * @uses MarginsConverterMethodsOverride::GetPropertiesSupported_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetPropertiesSupported(mixed ...$args){}
	/**
	 * @uses MarginsConverterMethodsOverride::ConvertFromInvariantString_1 ($text)
	 * @uses MarginsConverterMethodsOverride::ConvertFromInvariantString_2 ($context, $text)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFromInvariantString(mixed ...$args){}
	/**
	 * @uses MarginsConverterMethodsOverride::ConvertFromString_1 ($text)
	 * @uses MarginsConverterMethodsOverride::ConvertFromString_2 ($context, $text)
	 * @uses MarginsConverterMethodsOverride::ConvertFromString_3 ($context, $culture, $text)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFromString(mixed ...$args){}
	/**
	 * @uses MarginsConverterMethodsOverride::ConvertToInvariantString_1 ($value)
	 * @uses MarginsConverterMethodsOverride::ConvertToInvariantString_2 ($context, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertToInvariantString(mixed ...$args){}
	/**
	 * @uses MarginsConverterMethodsOverride::ConvertToString_1 ($value)
	 * @uses MarginsConverterMethodsOverride::ConvertToString_2 ($context, $value)
	 * @uses MarginsConverterMethodsOverride::ConvertToString_3 ($context, $culture, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertToString(mixed ...$args){}
	/**
	 * @uses MarginsConverterMethodsOverride::GetStandardValues_1 ()
	 * @uses MarginsConverterMethodsOverride::GetStandardValues_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValues(mixed ...$args){}
	/**
	 * @uses MarginsConverterMethodsOverride::GetStandardValuesExclusive_1 ()
	 * @uses MarginsConverterMethodsOverride::GetStandardValuesExclusive_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValuesExclusive(mixed ...$args){}
	/**
	 * @uses MarginsConverterMethodsOverride::GetStandardValuesSupported_1 ()
	 * @uses MarginsConverterMethodsOverride::GetStandardValuesSupported_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValuesSupported(mixed ...$args){}
	/**
	 * @uses MarginsConverterMethodsOverride::IsValid_1 ($value)
	 * @uses MarginsConverterMethodsOverride::IsValid_2 ($context, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsValid(mixed ...$args){}
}
