<?php
namespace Avalonia\Controls\Converters;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PlatformKeyGestureConverterOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Input\KeyGesture $gesture
	 * @param \System\String|string $meta
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function ToString_1 ($gesture, $meta){}
	/**
	 * @deprecated
	 * @param \Avalonia\Input\Key $key
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function ToString_2 ($key){}
	/**
	 * @deprecated
	 * @param \Avalonia\Input\KeyGesture $gesture
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function ToOSXString_1 ($gesture){}
	/**
	 * @deprecated
	 * @param \Avalonia\Input\Key $key
	 * @return \System\String|string
	 */
	#[MethodOverride]private static function ToOSXString_2 ($key){}
}
class PlatformKeyGestureConverter extends \System\Object implements
	\Avalonia\Data\Converters\IValueConverter
{
	use PlatformKeyGestureConverterOverride;


	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public function Convert($value, $targetType, $parameter, $culture){}
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public function ConvertBack($value, $targetType, $parameter, $culture){}
	/**
	 * @param \Avalonia\Input\KeyGesture $gesture
	 * @return \System\String|string
	 */
	public static function ToPlatformString($gesture){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses PlatformKeyGestureConverterOverride::ToString_1 <br>private , args: ($gesture, $meta)<br>
	 * @uses PlatformKeyGestureConverterOverride::ToString_2 <br>private , args: ($key)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function ToString (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses PlatformKeyGestureConverterOverride::ToOSXString_1 <br>private , args: ($gesture)<br>
	 * @uses PlatformKeyGestureConverterOverride::ToOSXString_2 <br>private , args: ($key)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePrivate]function ToOSXString (\override ...$args){}
	/**
	 */
	public function __construct(){}
}