<?php
namespace Avalonia\PropertyStore;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LoggingUtilsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Data\BindingNotification $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function LogIfNecessary_1 ($owner, $property, $value){}
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaObject $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Data\BindingValue_1 $value [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function LogIfNecessary_2 ($owner, $property, $value){}
}
class LoggingUtils extends \System\Object
{
	use LoggingUtilsOverride;


	/**
	 * @uses LoggingUtilsOverride::LogIfNecessary_1 <br>public , args: ($owner, $property, $value)<br>
	 * @uses LoggingUtilsOverride::LogIfNecessary_2 <br>public , args: ($owner, $property, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function LogIfNecessary (\override ...$args){}
	/**
	 * @param \Avalonia\AvaloniaObject $owner
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Type $expectedType
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public static function LogInvalidValue($owner, $property, $expectedType, $value){}
	private static function Log($owner, $property, $e){}
}