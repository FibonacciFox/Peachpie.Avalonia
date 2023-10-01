<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PixelRectMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_1($p){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_2($r){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] public  function ToRect_1($scale){}
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] public  function ToRect_2($scale){}
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] public  function ToRectWithDpi_1($dpi){}
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] public  function ToRectWithDpi_2($dpi){}
	/**
	 * @return \Avalonia\PixelRect
	 */
	#[MethodOverride] public static function FromRect_1($rect, $scale){}
	/**
	 * @return \Avalonia\PixelRect
	 */
	#[MethodOverride] public static function FromRect_2($rect, $scale){}
	/**
	 * @return \Avalonia\PixelRect
	 */
	#[MethodOverride] public static function FromRectWithDpi_1($rect, $dpi){}
	/**
	 * @return \Avalonia\PixelRect
	 */
	#[MethodOverride] public static function FromRectWithDpi_2($rect, $dpi){}
}
/**
 */
class PixelRect extends \System\ValueType implements 
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
	 * @return \System\Int32|int
	 */
	public  function get_Width(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Height(){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	public  function get_Position(){}
	/**
	 * @return \Avalonia\PixelSize
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Right(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Bottom(){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	public  function get_TopLeft(){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	public  function get_TopRight(){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	public  function get_BottomLeft(){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	public  function get_BottomRight(){}
	/**
	 * @return \Avalonia\PixelPoint
	 */
	public  function get_Center(){}
	/**
	 * @param \Avalonia\PixelRect $left
	 * @param \Avalonia\PixelRect $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\PixelRect $left
	 * @param \Avalonia\PixelRect $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses PixelRectMethodsOverride::Contains_1 ($p)
	 * @uses PixelRectMethodsOverride::Contains_2 ($r)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @param \Avalonia\PixelPoint $p
	 * @return \System\Boolean
	 */
	public  function ContainsExclusive($p){}
	/**
	 * @param \Avalonia\PixelRect $rect
	 * @return \Avalonia\PixelRect
	 */
	public  function CenterRect($rect){}
	/**
	 * @uses PixelRectMethodsOverride::Equals_1 ($other)
	 * @uses PixelRectMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\PixelRect $rect
	 * @return \Avalonia\PixelRect
	 */
	public  function Intersect($rect){}
	/**
	 * @param \Avalonia\PixelRect $rect
	 * @return \System\Boolean
	 */
	public  function Intersects($rect){}
	/**
	 * @param \Avalonia\PixelVector $offset
	 * @return \Avalonia\PixelRect
	 */
	public  function Translate($offset){}
	/**
	 * @param \Avalonia\PixelRect $rect
	 * @return \Avalonia\PixelRect
	 */
	public  function Union($rect){}
	/**
	 * @param \System\Int32|int $x
	 * @return \Avalonia\PixelRect
	 */
	public  function WithX($x){}
	/**
	 * @param \System\Int32|int $y
	 * @return \Avalonia\PixelRect
	 */
	public  function WithY($y){}
	/**
	 * @param \System\Int32|int $width
	 * @return \Avalonia\PixelRect
	 */
	public  function WithWidth($width){}
	/**
	 * @param \System\Int32|int $height
	 * @return \Avalonia\PixelRect
	 */
	public  function WithHeight($height){}
	/**
	 * @uses PixelRectMethodsOverride::ToRect_1 ($scale)
	 * @uses PixelRectMethodsOverride::ToRect_2 ($scale)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToRect(mixed ...$args){}
	/**
	 * @uses PixelRectMethodsOverride::ToRectWithDpi_1 ($dpi)
	 * @uses PixelRectMethodsOverride::ToRectWithDpi_2 ($dpi)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToRectWithDpi(mixed ...$args){}
	/**
	 * @uses PixelRectMethodsOverride::FromRect_1 ($rect, $scale)
	 * @uses PixelRectMethodsOverride::FromRect_2 ($rect, $scale)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromRect(mixed ...$args){}
	/**
	 * @uses PixelRectMethodsOverride::FromRectWithDpi_1 ($rect, $dpi)
	 * @uses PixelRectMethodsOverride::FromRectWithDpi_2 ($rect, $dpi)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromRectWithDpi(mixed ...$args){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\PixelRect
	 */
	public static function Parse($s){}
	/**
	 * @param \Avalonia\Point $point
	 * @param \Avalonia\Vector $scale
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function FromPointCeiling($point, $scale){}
}
