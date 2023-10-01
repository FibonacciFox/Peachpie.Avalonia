<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BoxShadowsMethodsOverride
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
class BoxShadows extends \System\ValueType
{
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Int32|int $c
	 * @return \Avalonia\Media\BoxShadow
	 */
	public  function get_Item($c){}
	/**
	 * @return \Avalonia\Media\BoxShadowsEnumerator
	 */
	public  function GetEnumerator(){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\BoxShadows
	 */
	public static function Parse($s){}
	/**
	 * @param \Avalonia\Rect& $rect
	 * @return \Avalonia\Rect
	 */
	public  function TransformBounds($rect){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasInsetShadows(){}
	/**
	 * @uses BoxShadowsMethodsOverride::Equals_1 ($other)
	 * @uses BoxShadowsMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\BoxShadows $left
	 * @param \Avalonia\Media\BoxShadows $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\BoxShadows $left
	 * @param \Avalonia\Media\BoxShadows $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
}
