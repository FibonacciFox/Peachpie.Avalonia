<?php
namespace Avalonia\Controls\Primitives\PopupPositioning;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PopupPositioningEdgeHelperOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor $edge
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor
	 */
	#[MethodOverride]public static function FlipX_1 ($edge){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity $gravity
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity
	 */
	#[MethodOverride]public static function FlipX_2 ($gravity){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor $edge
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor
	 */
	#[MethodOverride]public static function FlipY_1 ($edge){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity $gravity
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupGravity
	 */
	#[MethodOverride]public static function FlipY_2 ($gravity){}
}
class PopupPositioningEdgeHelper extends \System\Object
{
	use PopupPositioningEdgeHelperOverride;

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
	 * @uses PopupPositioningEdgeHelperOverride::FlipX_1 <br>public , args: ($edge)<br>
	 * @uses PopupPositioningEdgeHelperOverride::FlipX_2 <br>public , args: ($gravity)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor|\Avalonia\Controls\Primitives\PopupPositioning\PopupGravity|mixed|\override
	 */
	#[MethodOverridePublic]function FlipX (\override ...$args){}
	/**
	 * @uses PopupPositioningEdgeHelperOverride::FlipY_1 <br>public , args: ($edge)<br>
	 * @uses PopupPositioningEdgeHelperOverride::FlipY_2 <br>public , args: ($gravity)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Controls\Primitives\PopupPositioning\PopupAnchor|\Avalonia\Controls\Primitives\PopupPositioning\PopupGravity|mixed|\override
	 */
	#[MethodOverridePublic]function FlipY (\override ...$args){}
}