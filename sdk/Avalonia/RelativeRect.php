<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RelativeRectMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($p){}
}
/**
 */
class RelativeRect extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\RelativeRect
	 * @field
	 */
	public readonly $Fill;
	/**
	 * @var \Avalonia\RelativeUnit
	 * @property
	 */
	public readonly $Unit;
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public readonly $Rect;
	/**
	 * @return \Avalonia\RelativeUnit
	 */
	public  function get_Unit(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_Rect(){}
	/**
	 * @param \Avalonia\RelativeRect $left
	 * @param \Avalonia\RelativeRect $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\RelativeRect $left
	 * @param \Avalonia\RelativeRect $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses RelativeRectMethodsOverride::Equals_1 ($obj)
	 * @uses RelativeRectMethodsOverride::Equals_2 ($p)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Size $size
	 * @return \Avalonia\Rect
	 */
	public  function ToPixels($size){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\RelativeRect
	 */
	public static function Parse($s){}
}
