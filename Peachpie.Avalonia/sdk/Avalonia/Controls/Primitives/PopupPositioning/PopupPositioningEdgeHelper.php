<?php
namespace Avalonia\Controls\Primitives\PopupPositioning;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait PopupPositioningEdgeHelperMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor
	 */
	#[MethodOverride] public static function FlipX_1($edge){}
	/**
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity
	 */
	#[MethodOverride] public static function FlipX_2($gravity){}
	/**
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor
	 */
	#[MethodOverride] public static function FlipY_1($edge){}
	/**
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity
	 */
	#[MethodOverride] public static function FlipY_2($gravity){}
}
/**
 */
class PopupPositioningEdgeHelper extends \System\Object
{
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor $edge
	 * @return \System\Void|void
	 */
	public static function ValidateEdge($edge){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity $gravity
	 * @return \System\Void|void
	 */
	public static function ValidateGravity($gravity){}
	/**
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor $edge
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor
	 */
	public static function Flip($edge){}
	/**
	 * @uses PopupPositioningEdgeHelperMethodsOverride::FlipX_1 ($edge)
	 * @uses PopupPositioningEdgeHelperMethodsOverride::FlipX_2 ($gravity)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FlipX(mixed ...$args){}
	/**
	 * @uses PopupPositioningEdgeHelperMethodsOverride::FlipY_1 ($edge)
	 * @uses PopupPositioningEdgeHelperMethodsOverride::FlipY_2 ($gravity)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FlipY(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
