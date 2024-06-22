<?php
namespace Avalonia\Rendering\SceneGraph;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LineBoundsHelperOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 * @param \System\Double|double $thickness
	 * @param \System\Double|double $angleToCorner
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]private static function CalculateBounds_1 ($p1, $p2, $thickness, $angleToCorner){}
	/**
	 * @deprecated
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 * @param \Avalonia\Media\IPen $p
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]public static function CalculateBounds_2 ($p1, $p2, $p){}
}
class LineBoundsHelper extends \System\Object
{
	use LineBoundsHelperOverride;


	private static function CalculateAngle($p1, $p2){}
	/**
	 * @param \System\Double|double $angle
	 * @param \System\Double|double $hyp
	 * @return \System\Double|double
	 */
	protected static function CalculateOppSide($angle, $hyp){}
	/**
	 * @param \System\Double|double $angle
	 * @param \System\Double|double $hyp
	 * @return \System\Double|double
	 */
	protected static function CalculateAdjSide($angle, $hyp){}
	private static function TranslatePointsAlongTangent($p1, $p2, $angle, $distance){}
	/**
	 * @uses LineBoundsHelperOverride::CalculateBounds_1 <br>private , args: ($p1, $p2, $thickness, $angleToCorner)<br>
	 * @uses LineBoundsHelperOverride::CalculateBounds_2 <br>public , args: ($p1, $p2, $p)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Rect|mixed|\override
	 */
	#[MethodOverridePublic]function CalculateBounds (\override ...$args){}
}