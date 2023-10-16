<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FontUnitConverterMethodsOverride
{
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
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetStandardValuesExclusive_1($context){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetStandardValuesExclusive_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetStandardValuesSupported_1($context){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function GetStandardValuesSupported_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsValid_1($context, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsValid_2($value){}
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
}
/**
 */
class FontUnitConverter extends \System\ComponentModel\EnumConverter
{
	/**
	 * @var \System\ComponentModel\TypeConverter+StandardValuesCollection
	 * @property
	 */
	protected $Values;
	/**
	 * @uses FontUnitConverterMethodsOverride::GetStandardValues_1 ($context)
	 * @uses FontUnitConverterMethodsOverride::GetStandardValues_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValues(mixed ...$args){}
	/**
	 * @uses FontUnitConverterMethodsOverride::CanConvertFrom_1 ($context, $sourceType)
	 * @uses FontUnitConverterMethodsOverride::CanConvertFrom_2 ($sourceType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CanConvertFrom(mixed ...$args){}
	/**
	 * @uses FontUnitConverterMethodsOverride::CanConvertTo_1 ($context, $destinationType)
	 * @uses FontUnitConverterMethodsOverride::CanConvertTo_2 ($destinationType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CanConvertTo(mixed ...$args){}
	/**
	 * @uses FontUnitConverterMethodsOverride::ConvertFrom_1 ($context, $culture, $value)
	 * @uses FontUnitConverterMethodsOverride::ConvertFrom_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFrom(mixed ...$args){}
	/**
	 * @uses FontUnitConverterMethodsOverride::ConvertTo_1 ($context, $culture, $value, $destinationType)
	 * @uses FontUnitConverterMethodsOverride::ConvertTo_2 ($value, $destinationType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertTo(mixed ...$args){}
	/**
	 * @uses FontUnitConverterMethodsOverride::GetStandardValuesExclusive_1 ($context)
	 * @uses FontUnitConverterMethodsOverride::GetStandardValuesExclusive_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValuesExclusive(mixed ...$args){}
	/**
	 * @uses FontUnitConverterMethodsOverride::GetStandardValuesSupported_1 ($context)
	 * @uses FontUnitConverterMethodsOverride::GetStandardValuesSupported_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValuesSupported(mixed ...$args){}
	/**
	 * @uses FontUnitConverterMethodsOverride::IsValid_1 ($context, $value)
	 * @uses FontUnitConverterMethodsOverride::IsValid_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsValid(mixed ...$args){}
	/**
	 * @uses FontUnitConverterMethodsOverride::ConvertFromInvariantString_1 ($text)
	 * @uses FontUnitConverterMethodsOverride::ConvertFromInvariantString_2 ($context, $text)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFromInvariantString(mixed ...$args){}
	/**
	 * @uses FontUnitConverterMethodsOverride::ConvertFromString_1 ($text)
	 * @uses FontUnitConverterMethodsOverride::ConvertFromString_2 ($context, $text)
	 * @uses FontUnitConverterMethodsOverride::ConvertFromString_3 ($context, $culture, $text)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFromString(mixed ...$args){}
	/**
	 * @uses FontUnitConverterMethodsOverride::ConvertToInvariantString_1 ($value)
	 * @uses FontUnitConverterMethodsOverride::ConvertToInvariantString_2 ($context, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertToInvariantString(mixed ...$args){}
	/**
	 * @uses FontUnitConverterMethodsOverride::ConvertToString_1 ($value)
	 * @uses FontUnitConverterMethodsOverride::ConvertToString_2 ($context, $value)
	 * @uses FontUnitConverterMethodsOverride::ConvertToString_3 ($context, $culture, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertToString(mixed ...$args){}
	/**
	 * @uses FontUnitConverterMethodsOverride::CreateInstance_1 ($propertyValues)
	 * @uses FontUnitConverterMethodsOverride::CreateInstance_2 ($context, $propertyValues)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateInstance(mixed ...$args){}
	/**
	 * @uses FontUnitConverterMethodsOverride::GetCreateInstanceSupported_1 ()
	 * @uses FontUnitConverterMethodsOverride::GetCreateInstanceSupported_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCreateInstanceSupported(mixed ...$args){}
	/**
	 * @uses FontUnitConverterMethodsOverride::GetProperties_1 ($value)
	 * @uses FontUnitConverterMethodsOverride::GetProperties_2 ($context, $value)
	 * @uses FontUnitConverterMethodsOverride::GetProperties_3 ($context, $value, $attributes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperties(mixed ...$args){}
	/**
	 * @uses FontUnitConverterMethodsOverride::GetPropertiesSupported_1 ()
	 * @uses FontUnitConverterMethodsOverride::GetPropertiesSupported_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetPropertiesSupported(mixed ...$args){}
}
