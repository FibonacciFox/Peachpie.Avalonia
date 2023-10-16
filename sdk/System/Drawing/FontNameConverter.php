<?php
namespace System\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FontNameConverterMethodsOverride
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
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function ConvertFrom_1($context, $culture, $value){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function ConvertFrom_2($value){}
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
	#[MethodOverride] public  function CanConvertTo_1($destinationType){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function CanConvertTo_2($context, $destinationType){}
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
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function ConvertTo_1($value, $destinationType){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function ConvertTo_2($context, $culture, $value, $destinationType){}
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
	#[MethodOverride] public  function IsValid_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsValid_2($context, $value){}
}
/**
 */
class FontNameConverter extends \System\ComponentModel\TypeConverter implements 
	\System\IDisposable
{
	/**
	 * @uses FontNameConverterMethodsOverride::CanConvertFrom_1 ($context, $sourceType)
	 * @uses FontNameConverterMethodsOverride::CanConvertFrom_2 ($sourceType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CanConvertFrom(mixed ...$args){}
	/**
	 * @uses FontNameConverterMethodsOverride::ConvertFrom_1 ($context, $culture, $value)
	 * @uses FontNameConverterMethodsOverride::ConvertFrom_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFrom(mixed ...$args){}
	/**
	 * @uses FontNameConverterMethodsOverride::GetStandardValues_1 ($context)
	 * @uses FontNameConverterMethodsOverride::GetStandardValues_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValues(mixed ...$args){}
	/**
	 * @uses FontNameConverterMethodsOverride::GetStandardValuesExclusive_1 ($context)
	 * @uses FontNameConverterMethodsOverride::GetStandardValuesExclusive_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValuesExclusive(mixed ...$args){}
	/**
	 * @uses FontNameConverterMethodsOverride::GetStandardValuesSupported_1 ($context)
	 * @uses FontNameConverterMethodsOverride::GetStandardValuesSupported_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetStandardValuesSupported(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Dispose(){}
	/**
	 * @uses FontNameConverterMethodsOverride::CanConvertTo_1 ($destinationType)
	 * @uses FontNameConverterMethodsOverride::CanConvertTo_2 ($context, $destinationType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CanConvertTo(mixed ...$args){}
	/**
	 * @uses FontNameConverterMethodsOverride::ConvertFromInvariantString_1 ($text)
	 * @uses FontNameConverterMethodsOverride::ConvertFromInvariantString_2 ($context, $text)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFromInvariantString(mixed ...$args){}
	/**
	 * @uses FontNameConverterMethodsOverride::ConvertFromString_1 ($text)
	 * @uses FontNameConverterMethodsOverride::ConvertFromString_2 ($context, $text)
	 * @uses FontNameConverterMethodsOverride::ConvertFromString_3 ($context, $culture, $text)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertFromString(mixed ...$args){}
	/**
	 * @uses FontNameConverterMethodsOverride::ConvertTo_1 ($value, $destinationType)
	 * @uses FontNameConverterMethodsOverride::ConvertTo_2 ($context, $culture, $value, $destinationType)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertTo(mixed ...$args){}
	/**
	 * @uses FontNameConverterMethodsOverride::ConvertToInvariantString_1 ($value)
	 * @uses FontNameConverterMethodsOverride::ConvertToInvariantString_2 ($context, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertToInvariantString(mixed ...$args){}
	/**
	 * @uses FontNameConverterMethodsOverride::ConvertToString_1 ($value)
	 * @uses FontNameConverterMethodsOverride::ConvertToString_2 ($context, $value)
	 * @uses FontNameConverterMethodsOverride::ConvertToString_3 ($context, $culture, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ConvertToString(mixed ...$args){}
	/**
	 * @uses FontNameConverterMethodsOverride::CreateInstance_1 ($propertyValues)
	 * @uses FontNameConverterMethodsOverride::CreateInstance_2 ($context, $propertyValues)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateInstance(mixed ...$args){}
	/**
	 * @uses FontNameConverterMethodsOverride::GetCreateInstanceSupported_1 ()
	 * @uses FontNameConverterMethodsOverride::GetCreateInstanceSupported_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCreateInstanceSupported(mixed ...$args){}
	/**
	 * @uses FontNameConverterMethodsOverride::GetProperties_1 ($value)
	 * @uses FontNameConverterMethodsOverride::GetProperties_2 ($context, $value)
	 * @uses FontNameConverterMethodsOverride::GetProperties_3 ($context, $value, $attributes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetProperties(mixed ...$args){}
	/**
	 * @uses FontNameConverterMethodsOverride::GetPropertiesSupported_1 ()
	 * @uses FontNameConverterMethodsOverride::GetPropertiesSupported_2 ($context)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetPropertiesSupported(mixed ...$args){}
	/**
	 * @uses FontNameConverterMethodsOverride::IsValid_1 ($value)
	 * @uses FontNameConverterMethodsOverride::IsValid_2 ($context, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsValid(mixed ...$args){}
}
