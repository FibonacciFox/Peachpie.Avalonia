<?php
namespace Avalonia\Rendering\SceneGraph;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LineBoundsHelperMethodsOverride
{
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] private static function CalculateBounds_1($p1, $p2, $thickness, $angleToCorner){}
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] public static function CalculateBounds_2($p1, $p2, $p){}
}
/**
 */
class LineBoundsHelper extends \System\Object
{
	/**
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CalculateAngle($p1, $p2){}
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
	/**
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 * @param \System\Double|double $angle
	 * @param \System\Double|double $distance
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TranslatePointsAlongTangent($p1, $p2, $angle, $distance){}
	/**
	 * @uses LineBoundsHelperMethodsOverride::CalculateBounds_1 ($p1, $p2, $thickness, $angleToCorner)
	 * @uses LineBoundsHelperMethodsOverride::CalculateBounds_2 ($p1, $p2, $p)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CalculateBounds(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
