<?php
namespace Avalonia\VisualTree;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TransformedBoundsMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class TransformedBounds extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public readonly $Bounds;
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public readonly $Clip;
	/**
	 * @var \Avalonia\Matrix
	 * @property
	 */
	public readonly $Transform;
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_Bounds(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_Clip(){}
	/**
	 * @return \Avalonia\Matrix
	 */
	public  function get_Transform(){}
	/**
	 * @param \Avalonia\Point $point
	 * @return \System\Boolean
	 */
	public  function Contains($point){}
	/**
	 * @uses TransformedBoundsMethodsOverride::Equals_1 ($other)
	 * @uses TransformedBoundsMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\VisualTree\TransformedBounds $left
	 * @param \Avalonia\VisualTree\TransformedBounds $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\VisualTree\TransformedBounds $left
	 * @param \Avalonia\VisualTree\TransformedBounds $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
}
