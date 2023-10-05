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
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsLeftButtonPressed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsMiddleButtonPressed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsRightButtonPressed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsXButton1Pressed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsXButton2Pressed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsBarrelButtonPressed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsEraser;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInverted;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $Twist;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $Pressure;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $XTilt;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $YTilt;
	/**
	 * @var \Avalonia\Input\PointerUpdateKind
	 * @property
	 */
	public readonly $PointerUpdateKind;
	/**
	 * @var \Avalonia\Input\PointerPointProperties
	 * @property
	 */
	public readonly $None;
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
