<?php
namespace Avalonia\Controls\Converters;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PlatformKeyGestureConverterMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function ToString_1($gesture, $meta){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function ToString_2($key){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_3(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function ToOSXString_1($gesture){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] private static function ToOSXString_2($key){}
}
/**
 */
class PlatformKeyGestureConverter extends \System\Object implements 
	\Avalonia\Data\Converters\IValueConverter
{
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public  function Convert($value, $targetType, $parameter, $culture){}
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public  function ConvertBack($value, $targetType, $parameter, $culture){}
	/**
	 * @param \Avalonia\Input\KeyGesture $gesture
	 * @return \System\String|string
	 */
	public static function ToPlatformString($gesture){}
	/**
	 * @uses PlatformKeyGestureConverterMethodsOverride::ToString_1 ($gesture, $meta)
	 * @uses PlatformKeyGestureConverterMethodsOverride::ToString_2 ($key)
	 * @uses PlatformKeyGestureConverterMethodsOverride::ToString_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @uses PlatformKeyGestureConverterMethodsOverride::ToOSXString_1 ($gesture)
	 * @uses PlatformKeyGestureConverterMethodsOverride::ToOSXString_2 ($key)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToOSXString(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
