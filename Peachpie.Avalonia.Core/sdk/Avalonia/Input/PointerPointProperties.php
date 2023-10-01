<?php
namespace Avalonia\Input;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PointerPointPropertiesMethodsOverride
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
class PointerPointProperties extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLeftButtonPressed(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsMiddleButtonPressed(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsRightButtonPressed(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsXButton1Pressed(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsXButton2Pressed(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsBarrelButtonPressed(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEraser(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsInverted(){}
	/**
	 * @return \System\Single
	 */
	public  function get_Twist(){}
	/**
	 * @return \System\Single
	 */
	public  function get_Pressure(){}
	/**
	 * @return \System\Single
	 */
	public  function get_XTilt(){}
	/**
	 * @return \System\Single
	 */
	public  function get_YTilt(){}
	/**
	 * @return \Avalonia\Input\PointerUpdateKind
	 */
	public  function get_PointerUpdateKind(){}
	/**
	 * @return \Avalonia\Input\PointerPointProperties
	 */
	public static function get_None(){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Input\PointerPointProperties $left
	 * @param \Avalonia\Input\PointerPointProperties $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Input\PointerPointProperties $left
	 * @param \Avalonia\Input\PointerPointProperties $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses PointerPointPropertiesMethodsOverride::Equals_1 ($obj)
	 * @uses PointerPointPropertiesMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
