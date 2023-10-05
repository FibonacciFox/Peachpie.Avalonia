<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RoundedRectMethodsOverride
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
class RoundedRect extends \System\ValueType
{
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public readonly $Rect;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $RadiiTopLeft;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $RadiiTopRight;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $RadiiBottomLeft;
	/**
	 * @var \Avalonia\Vector
	 * @property
	 */
	public readonly $RadiiBottomRight;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsRounded;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsUniform;
	/**
	 * @uses RoundedRectMethodsOverride::Equals_1 ($other)
	 * @uses RoundedRectMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\RoundedRect $left
	 * @param \Avalonia\RoundedRect $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\RoundedRect $left
	 * @param \Avalonia\RoundedRect $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_Rect(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_RadiiTopLeft(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_RadiiTopRight(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_RadiiBottomLeft(){}
	/**
	 * @return \Avalonia\Vector
	 */
	public  function get_RadiiBottomRight(){}
	/**
	 * @param \Avalonia\Rect $r
	 * @return \Avalonia\RoundedRect
	 */
	public static function op_Implicit($r){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsRounded(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsUniform(){}
	/**
	 * @param \System\Double|double $dx
	 * @param \System\Double|double $dy
	 * @return \Avalonia\RoundedRect
	 */
	public  function Inflate($dx, $dy){}
	/**
	 * @param \System\Double|double $dx
	 * @param \System\Double|double $dy
	 * @return \Avalonia\RoundedRect
	 */
	public  function Deflate($dx, $dy){}
	/**
	 * @return \System\Boolean
	 */
	protected  function IsEmpty(){}
}
