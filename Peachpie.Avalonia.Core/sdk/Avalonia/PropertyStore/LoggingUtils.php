<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LoggingUtilsMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function LogIfNecessary_1($owner, $property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function LogIfNecessary_2($owner, $property, $value){}
}
/**
 */
class LoggingUtils extends \System\Object
{
	/**
	 * @uses LoggingUtilsMethodsOverride::LogIfNecessary_1 ($owner, $property, $value)
	 * @uses LoggingUtilsMethodsOverride::LogIfNecessary_2 ($owner, $property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function LogIfNecessary(mixed ...$args){}
	/**
	 * @param \Avalonia\AvaloniaObject $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Type $expectedType
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public static function LogInvalidValue($owner, $property, $expectedType, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Exception $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Log($owner, $property, $e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
