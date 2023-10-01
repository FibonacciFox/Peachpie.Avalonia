<?php
namespace Avalonia\Platform;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PlatformGraphicsExternalImagePropertiesMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class PlatformGraphicsExternalImageProperties extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Width(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Width($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Height(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Height($value){}
	/**
	 * @return \Avalonia\Platform\PlatformGraphicsExternalImageFormat
	 */
	public  function get_Format(){}
	/**
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageFormat $value
	 * @return \System\Void|void
	 */
	public  function set_Format($value){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_MemorySize(){}
	/**
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	public  function set_MemorySize($value){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_MemoryOffset(){}
	/**
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	public  function set_MemoryOffset($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_TopLeftOrigin(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_TopLeftOrigin($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageProperties $left
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageProperties $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageProperties $left
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageProperties $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses PlatformGraphicsExternalImagePropertiesMethodsOverride::Equals_1 ($obj)
	 * @uses PlatformGraphicsExternalImagePropertiesMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
