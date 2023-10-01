<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RectMethodsOverride
{
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] public static function op_Multiply_1($rect, $scale){}
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] public static function op_Multiply_2($rect, $scale){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_1($p){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_2($r){}
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] public  function Inflate_1($thickness){}
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] public  function Inflate_2($thickness){}
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] public  function Deflate_1($thickness){}
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] public  function Deflate_2($thickness){}
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
	#[MethodOverride] public  function TransformToAABB_1($matrix){}
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] protected  function TransformToAABB_2($matrix){}
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] public  function Union_1($rect){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] protected static function Union_2($left, $right){}
}
/**
 */
class Rect extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Double|double
	 */
	public  function get_X(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Y(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Width(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Height(){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_Position(){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_Size(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Right(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Bottom(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Left(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Top(){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_TopLeft(){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_TopRight(){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_BottomLeft(){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_BottomRight(){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_Center(){}
	/**
	 * @param \Avalonia\Rect $left
	 * @param \Avalonia\Rect $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Rect $left
	 * @param \Avalonia\Rect $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses RectMethodsOverride::op_Multiply_1 ($rect, $scale)
	 * @uses RectMethodsOverride::op_Multiply_2 ($rect, $scale)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Multiply(mixed ...$args){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @param \Avalonia\Vector $scale
	 * @return \Avalonia\Rect
	 */
	public static function op_Division($rect, $scale){}
	/**
	 * @uses RectMethodsOverride::Contains_1 ($p)
	 * @uses RectMethodsOverride::Contains_2 ($r)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @param \Avalonia\Point $p
	 * @return \System\Boolean
	 */
	public  function ContainsExclusive($p){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \Avalonia\Rect
	 */
	public  function CenterRect($rect){}
	/**
	 * @uses RectMethodsOverride::Inflate_1 ($thickness)
	 * @uses RectMethodsOverride::Inflate_2 ($thickness)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Inflate(mixed ...$args){}
	/**
	 * @uses RectMethodsOverride::Deflate_1 ($thickness)
	 * @uses RectMethodsOverride::Deflate_2 ($thickness)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Deflate(mixed ...$args){}
	/**
	 * @uses RectMethodsOverride::Equals_1 ($other)
	 * @uses RectMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \Avalonia\Rect
	 */
	public  function Intersect($rect){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Boolean
	 */
	public  function Intersects($rect){}
	/**
	 * @uses RectMethodsOverride::TransformToAABB_1 ($matrix)
	 * @uses RectMethodsOverride::TransformToAABB_2 ($matrix)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function TransformToAABB(mixed ...$args){}
	/**
	 * @param \Avalonia\Vector $offset
	 * @return \Avalonia\Rect
	 */
	public  function Translate($offset){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function Normalize(){}
	/**
	 * @uses RectMethodsOverride::Union_1 ($rect)
	 * @uses RectMethodsOverride::Union_2 ($left, $right)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Union(mixed ...$args){}
	/**
	 * @param \System\Double|double $x
	 * @return \Avalonia\Rect
	 */
	public  function WithX($x){}
	/**
	 * @param \System\Double|double $y
	 * @return \Avalonia\Rect
	 */
	public  function WithY($y){}
	/**
	 * @param \System\Double|double $width
	 * @return \Avalonia\Rect
	 */
	public  function WithWidth($width){}
	/**
	 * @param \System\Double|double $height
	 * @return \Avalonia\Rect
	 */
	public  function WithHeight($height){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Rect
	 */
	public static function Parse($s){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsEmpty(){}
}
