<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PixelSizeMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \Avalonia\Size
	 */
	#[MethodOverride] public  function ToSize_1($scale){}
	/**
	 * @return \Avalonia\Size
	 */
	#[MethodOverride] public  function ToSize_2($scale){}
	/**
	 * @return \Avalonia\Size
	 */
	#[MethodOverride] public  function ToSizeWithDpi_1($dpi){}
	/**
	 * @return \Avalonia\Size
	 */
	#[MethodOverride] public  function ToSizeWithDpi_2($dpi){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	#[MethodOverride] public static function FromSize_1($size, $scale){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	#[MethodOverride] public static function FromSize_2($size, $scale){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	#[MethodOverride] public static function FromSizeWithDpi_1($size, $dpi){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	#[MethodOverride] public static function FromSizeWithDpi_2($size, $dpi){}
}
/**
 */
class PixelSize extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\PixelSize
	 * @field
	 */
	public readonly $Empty;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $AspectRatio;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Width;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Height;
	/**
	 * @return \System\Double|double
	 */
	public  function get_AspectRatio(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Width(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Height(){}
	/**
	 * @param \Avalonia\PixelSize $left
	 * @param \Avalonia\PixelSize $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\PixelSize $left
	 * @param \Avalonia\PixelSize $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\PixelSize
	 */
	public static function Parse($s){}
	/**
	 * @uses PixelSizeMethodsOverride::Equals_1 ($other)
	 * @uses PixelSizeMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Int32|int $width
	 * @return \Avalonia\PixelSize
	 */
	public  function WithWidth($width){}
	/**
	 * @param \System\Int32|int $height
	 * @return \Avalonia\PixelSize
	 */
	public  function WithHeight($height){}
	/**
	 * @uses PixelSizeMethodsOverride::ToSize_1 ($scale)
	 * @uses PixelSizeMethodsOverride::ToSize_2 ($scale)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToSize(mixed ...$args){}
	/**
	 * @uses PixelSizeMethodsOverride::ToSizeWithDpi_1 ($dpi)
	 * @uses PixelSizeMethodsOverride::ToSizeWithDpi_2 ($dpi)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToSizeWithDpi(mixed ...$args){}
	/**
	 * @uses PixelSizeMethodsOverride::FromSize_1 ($size, $scale)
	 * @uses PixelSizeMethodsOverride::FromSize_2 ($size, $scale)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromSize(mixed ...$args){}
	/**
	 * @uses PixelSizeMethodsOverride::FromSizeWithDpi_1 ($size, $dpi)
	 * @uses PixelSizeMethodsOverride::FromSizeWithDpi_2 ($size, $dpi)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromSizeWithDpi(mixed ...$args){}
}
