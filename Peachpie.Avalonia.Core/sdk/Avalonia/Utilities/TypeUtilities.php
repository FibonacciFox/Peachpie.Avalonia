<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TypeUtilitiesMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function AcceptsNull_1($type){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function AcceptsNull_2(){}
}
/**
 */
class TypeUtilities extends \System\Object
{
	/**
	 * @uses TypeUtilitiesMethodsOverride::AcceptsNull_1 ($type)
	 * @uses TypeUtilitiesMethodsOverride::AcceptsNull_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AcceptsNull(mixed ...$args){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Boolean
	 */
	public static function CanCast($value){}
	/**
	 * @param \System\Type $to
	 * @param \System\Object|object $value
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \System\Object& $result
	 * @return \System\Boolean
	 */
	public static function TryConvert($to, $value, $culture, $result){}
	/**
	 * @param \System\Type $to
	 * @param \System\Object|object $value
	 * @param \System\Object& $result
	 * @return \System\Boolean
	 */
	public static function TryConvertImplicit($to, $value, $result){}
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
	 * @return \Avalonia\Utilities\T
	 */
	public static function ConvertImplicit($value){}
	/**
	 * @param \System\Type $type
	 * @return \System\Object|object
	 */
	public static function Default($type){}
	/**
	 * @param \System\Type $type
	 * @return \System\Boolean
	 */
	public static function IsNumeric($type){}
	/**
	 * @param \System\Type $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNullableType($type){}
	/**
	 * @param \System\Type $fromType
	 * @param \System\Type $toType
	 * @param \Avalonia\Utilities\OperatorType $operatorType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FindTypeConversionOperatorMethod($fromType, $toType, $operatorType){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
