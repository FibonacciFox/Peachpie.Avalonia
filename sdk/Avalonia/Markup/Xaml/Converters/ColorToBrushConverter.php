<?php
namespace Avalonia\Markup\Xaml\Converters;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ColorToBrushConverterMethodsOverride
{
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function Convert_1($value, $targetType, $parameter, $culture){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function Convert_2($value, $targetType){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function ConvertBack_1($value, $targetType, $parameter, $culture){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function ConvertBack_2($value, $targetType){}
}
/**
 */
class ColorToBrushConverter extends \System\Object implements 
	\Avalonia\Data\Converters\IValueConverter
{
	/**
	 * @uses ColorToBrushConverterMethodsOverride::Convert_1 ($value, $targetType, $parameter, $culture)
	 * @uses ColorToBrushConverterMethodsOverride::Convert_2 ($value, $targetType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Convert(mixed ...$args){}
	/**
	 * @uses ColorToBrushConverterMethodsOverride::ConvertBack_1 ($value, $targetType, $parameter, $culture)
	 * @uses ColorToBrushConverterMethodsOverride::ConvertBack_2 ($value, $targetType)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ConvertBack(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
