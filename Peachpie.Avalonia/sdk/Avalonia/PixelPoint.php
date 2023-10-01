<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PixelPointMethodsOverride
{
	/**
	 * @return \Avalonia\PixelPoint
	 */
	#[MethodOverride] public static function op_Addition_1($a, $b){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	#[MethodOverride] public static function op_Addition_2($a, $b){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	#[MethodOverride] public static function op_Subtraction_1($a, $b){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	#[MethodOverride] public static function op_Subtraction_2($a, $b){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \Avalonia\Point
	 */
	#[MethodOverride] public  function ToPoint_1($scale){}
	/**
	 * @return \Avalonia\Point
	 */
	#[MethodOverride] public  function ToPoint_2($scale){}
	/**
	 * @return \Avalonia\Point
	 */
	#[MethodOverride] public  function ToPointWithDpi_1($dpi){}
	/**
	 * @return \Avalonia\Point
	 */
	#[MethodOverride] public  function ToPointWithDpi_2($dpi){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	#[MethodOverride] public static function FromPoint_1($point, $scale){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	#[MethodOverride] public static function FromPoint_2($point, $scale){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	#[MethodOverride] public static function FromPointWithDpi_1($point, $dpi){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	#[MethodOverride] public static function FromPointWithDpi_2($point, $dpi){}
}
/**
 */
class PixelPoint extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Int32|int
	 */
	public  function get_X(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Y(){}
	/**
	 * @param \Avalonia\PixelPoint $left
	 * @param \Avalonia\PixelPoint $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\PixelPoint $left
	 * @param \Avalonia\PixelPoint $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\PixelPoint $p
	 * @return \Avalonia\PixelVector
	 */
	public static function op_Implicit($p){}
	/**
	 * @uses PixelPointMethodsOverride::op_Addition_1 ($a, $b)
	 * @uses PixelPointMethodsOverride::op_Addition_2 ($a, $b)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Addition(mixed ...$args){}
	/**
	 * @uses PixelPointMethodsOverride::op_Subtraction_1 ($a, $b)
	 * @uses PixelPointMethodsOverride::op_Subtraction_2 ($a, $b)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Subtraction(mixed ...$args){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\PixelPoint
	 */
	public static function Parse($s){}
	/**
	 * @uses PixelPointMethodsOverride::Equals_1 ($other)
	 * @uses PixelPointMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Int32|int $x
	 * @return \Avalonia\PixelPoint
	 */
	public  function WithX($x){}
	/**
	 * @param \System\Int32|int $y
	 * @return \Avalonia\PixelPoint
	 */
	public  function WithY($y){}
	/**
	 * @uses PixelPointMethodsOverride::ToPoint_1 ($scale)
	 * @uses PixelPointMethodsOverride::ToPoint_2 ($scale)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToPoint(mixed ...$args){}
	/**
	 * @uses PixelPointMethodsOverride::ToPointWithDpi_1 ($dpi)
	 * @uses PixelPointMethodsOverride::ToPointWithDpi_2 ($dpi)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToPointWithDpi(mixed ...$args){}
	/**
	 * @uses PixelPointMethodsOverride::FromPoint_1 ($point, $scale)
	 * @uses PixelPointMethodsOverride::FromPoint_2 ($point, $scale)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromPoint(mixed ...$args){}
	/**
	 * @uses PixelPointMethodsOverride::FromPointWithDpi_1 ($point, $dpi)
	 * @uses PixelPointMethodsOverride::FromPointWithDpi_2 ($point, $dpi)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromPointWithDpi(mixed ...$args){}
}
