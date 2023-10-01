<?php
namespace Avalonia\Controls\Primitives\PopupPositioning;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PopupPositionerParametersMethodsOverride
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
class PopupPositionerParameters extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_Size(){}
	/**
	 * @param \Avalonia\Size $value
	 * @return \System\Void|void
	 */
	public  function set_Size($value){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_AnchorRectangle(){}
	/**
	 * @param \Avalonia\Rect $value
	 * @return \System\Void|void
	 */
	public  function set_AnchorRectangle($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor
	 */
	public  function get_Anchor(){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor $value
	 * @return \System\Void|void
	 */
	public  function set_Anchor($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity
	 */
	public  function get_Gravity(){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity $value
	 * @return \System\Void|void
	 */
	public  function set_Gravity($value){}
	/**
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerConstraintAdjustment
	 */
	public  function get_ConstraintAdjustment(){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerConstraintAdjustment $value
	 * @return \System\Void|void
	 */
	public  function set_ConstraintAdjustment($value){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_Offset(){}
	/**
	 * @param \Avalonia\Point $value
	 * @return \System\Void|void
	 */
	public  function set_Offset($value){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerParameters $left
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerParameters $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerParameters $left
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupPositionerParameters $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses PopupPositionerParametersMethodsOverride::Equals_1 ($obj)
	 * @uses PopupPositionerParametersMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
