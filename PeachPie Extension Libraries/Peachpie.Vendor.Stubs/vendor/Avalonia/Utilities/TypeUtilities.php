<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TypeUtilitiesOverride {
	/**
	 * @deprecated
	 * @param \System\Type $type
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function AcceptsNull_1 ($type){}
	/**
	 * @deprecated
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function AcceptsNull_2 (){}
}
class TypeUtilities extends \System\Object
{
	use TypeUtilitiesOverride;

	/**
	 * @uses TypeUtilitiesOverride::AcceptsNull_1 <br>public , args: ($type)<br>
	 * @uses TypeUtilitiesOverride::AcceptsNull_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function AcceptsNull (\override ...$args){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean|bool
	 */
	public static function CanCast($value){}
	/**
	 * @param \System\Type $to
	 * @param \System\Object|object $value
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Object& &$result
	 * @return \System\Boolean|bool
	 */
	public static function TryConvert($to, $value, $culture, &$result){}
	/**
	 * @param \System\Type $to
	 * @param \System\Object|object $value
	 * @param \System\Object& &$result
	 * @return \System\Boolean|bool
	 */
	public static function TryConvertImplicit($to, $value, &$result){}
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $type
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public static function ConvertOrDefault($value, $type, $culture){}
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	public static function ConvertImplicitOrDefault($value, $type){}
	/**
	 * @param \System\Object|object $value
	 * @return \T|object
	 */
	public static function ConvertImplicit($value){}
	/**
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	public static function Default($type){}
	/**
	 * @param \System\Type $type
	 * @return \System\Boolean|bool
	 */
	public static function IsNumeric($type){}
	private static function IsNullableType($type){}
	private static function FindTypeConversionOperatorMethod($fromType, $toType, $operatorType){}
}