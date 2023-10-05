<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EllipticalArcMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_1($x, $y){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_2($x, $y, $w, $h){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_3($p){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_4($r){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function BuildArc_1($path){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function BuildArc_2($path, $degree, $threshold, $openNewFigure){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function BuildArc_3($path, $p1, $p2, $size, $theta, $isLargeArc, $clockwise){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Intersects_1($x, $y, $w, $h){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Intersects_2($r){}
}
/**
 */
class EllipticalArc extends \System\Object
{
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $Cx;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $Cy;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $A;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $B;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $Theta;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $Eta1;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $Eta2;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $X1;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $Y1;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $X2;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $Y2;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $FirstFocusX;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $FirstFocusY;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $SecondFocusX;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $SecondFocusY;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected $IsPieSlice;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $F;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $E2;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $G;
	/**
	 * @var \System\Double
	 * @field
	 */
	protected $G2;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $DrawInOppositeDirection;
	/**
	 * @return \System\Boolean
	 */
	public  function get_DrawInOppositeDirection(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_DrawInOppositeDirection($value){}
	/**
	 * @param \System\Int32|int $maxDegree
	 * @return \System\Void|void
	 */
	public  function SetMaxDegree($maxDegree){}
	/**
	 * @param \System\Double|double $defaultFlatness
	 * @return \System\Void|void
	 */
	public  function SetDefaultFlatness($defaultFlatness){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ComputeFocii(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ComputeEndPoints(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ComputeBounds(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ComputeDerivedFlatnessParameters(){}
	/**
	 * @param \System\Double|double $x
	 * @param \System\Double[] $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function RationalFunction($x, $c){}
	/**
	 * @param \System\Int32|int $degree
	 * @param \System\Double|double $etaA
	 * @param \System\Double|double $etaB
	 * @return \System\Double|double
	 */
	public  function EstimateError($degree, $etaA, $etaB){}
	/**
	 * @param \System\Double|double $lambda
	 * @return \Avalonia\Point
	 */
	public  function PointAt($lambda){}
	/**
	 * @uses EllipticalArcMethodsOverride::Contains_1 ($x, $y)
	 * @uses EllipticalArcMethodsOverride::Contains_2 ($x, $y, $w, $h)
	 * @uses EllipticalArcMethodsOverride::Contains_3 ($p)
	 * @uses EllipticalArcMethodsOverride::Contains_4 ($r)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @param \System\Double|double $xA
	 * @param \System\Double|double $yA
	 * @param \System\Double|double $xB
	 * @param \System\Double|double $yB
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IntersectArc($xA, $yA, $xB, $yB){}
	/**
	 * @param \System\Double|double $x1
	 * @param \System\Double|double $y1
	 * @param \System\Double|double $x2
	 * @param \System\Double|double $y2
	 * @param \System\Double|double $xA
	 * @param \System\Double|double $yA
	 * @param \System\Double|double $xB
	 * @param \System\Double|double $yB
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Intersect($x1, $y1, $x2, $y2, $xA, $yA, $xB, $yB){}
	/**
	 * @param \System\Double|double $xA
	 * @param \System\Double|double $yA
	 * @param \System\Double|double $xB
	 * @param \System\Double|double $yB
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IntersectOutline($xA, $yA, $xB, $yB){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function GetBounds(){}
	/**
	 * @uses EllipticalArcMethodsOverride::BuildArc_1 ($path)
	 * @uses EllipticalArcMethodsOverride::BuildArc_2 ($path, $degree, $threshold, $openNewFigure)
	 * @uses EllipticalArcMethodsOverride::BuildArc_3 ($path, $p1, $p2, $size, $theta, $isLargeArc, $clockwise)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function BuildArc(mixed ...$args){}
	/**
	 * @param \Avalonia\Vector $v1
	 * @param \Avalonia\Vector $v2
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAngle($v1, $v2){}
	/**
	 * @uses EllipticalArcMethodsOverride::Intersects_1 ($x, $y, $w, $h)
	 * @uses EllipticalArcMethodsOverride::Intersects_2 ($r)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Intersects(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
