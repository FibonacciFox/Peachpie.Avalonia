<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BoxShadowMethodsOverride
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
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function ToString_2($sb){}
}
/**
 */
class BoxShadow extends \System\ValueType
{
	/**
	 * @return \System\Double|double
	 */
	public  function get_OffsetX(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_OffsetX($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_OffsetY(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_OffsetY($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Blur(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Blur($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Spread(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Spread($value){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	public  function get_Color(){}
	/**
	 * @param \Avalonia\Media\Color $value
	 * @return \System\Void|void
	 */
	public  function set_Color($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsInset(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsInset($value){}
	/**
	 * @uses BoxShadowMethodsOverride::Equals_1 ($other)
	 * @uses BoxShadowMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses BoxShadowMethodsOverride::ToString_1 ()
	 * @uses BoxShadowMethodsOverride::ToString_2 ($sb)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\BoxShadow
	 */
	public static function Parse($s){}
	/**
	 * @param \Avalonia\Rect& $rect
	 * @return \Avalonia\Rect
	 */
	public  function TransformBounds($rect){}
	/**
	 * @param \Avalonia\Media\BoxShadow $left
	 * @param \Avalonia\Media\BoxShadow $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\BoxShadow $left
	 * @param \Avalonia\Media\BoxShadow $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
}
