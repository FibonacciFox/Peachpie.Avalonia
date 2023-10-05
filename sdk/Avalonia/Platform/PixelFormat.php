<?php
namespace Avalonia\Platform;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PixelFormatMethodsOverride
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
class PixelFormat extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\Platform\PixelFormatEnum
	 * @field
	 */
	protected $FormatEnum;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $BitsPerPixel;
	/**
	 * @var \Avalonia\Platform\PixelFormat
	 * @property
	 */
	public readonly $Rgb565;
	/**
	 * @var \Avalonia\Platform\PixelFormat
	 * @property
	 */
	public readonly $Rgba8888;
	/**
	 * @var \Avalonia\Platform\PixelFormat
	 * @property
	 */
	public readonly $Bgra8888;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_BitsPerPixel(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_HasAlpha(){}
	/**
	 * @return \Avalonia\Platform\PixelFormat
	 */
	public static function get_Rgb565(){}
	/**
	 * @return \Avalonia\Platform\PixelFormat
	 */
	public static function get_Rgba8888(){}
	/**
	 * @return \Avalonia\Platform\PixelFormat
	 */
	public static function get_Bgra8888(){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Platform\PixelFormat $left
	 * @param \Avalonia\Platform\PixelFormat $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Platform\PixelFormat $left
	 * @param \Avalonia\Platform\PixelFormat $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses PixelFormatMethodsOverride::Equals_1 ($obj)
	 * @uses PixelFormatMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
