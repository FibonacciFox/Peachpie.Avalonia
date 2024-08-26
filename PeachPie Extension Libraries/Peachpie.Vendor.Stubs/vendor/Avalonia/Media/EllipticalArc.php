<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EllipticalArcOverride {
	/**
	 * @deprecated
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Contains_1 ($x, $y){}
	/**
	 * @deprecated
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @param \System\Double|double $w
	 * @param \System\Double|double $h
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Contains_2 ($x, $y, $w, $h){}
	/**
	 * @deprecated
	 * @param \Avalonia\Point $p
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Contains_3 ($p){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rect $r
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Contains_4 ($r){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\StreamGeometryContext $path
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function BuildArc_1 ($path){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\StreamGeometryContext $path
	 * @param \System\Int32|int $degree
	 * @param \System\Double|double $threshold
	 * @param \System\Boolean|bool $openNewFigure
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function BuildArc_2 ($path, $degree, $threshold, $openNewFigure){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\StreamGeometryContext $path
	 * @param \Avalonia\Point $p1
	 * @param \Avalonia\Point $p2
	 * @param \Avalonia\Size $size
	 * @param \System\Double|double $theta
	 * @param \System\Boolean|bool $isLargeArc
	 * @param \System\Boolean|bool $clockwise
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function BuildArc_3 ($path, $p1, $p2, $size, $theta, $isLargeArc, $clockwise){}
	/**
	 * @deprecated
	 * @param \System\Double|double $x
	 * @param \System\Double|double $y
	 * @param \System\Double|double $w
	 * @param \System\Double|double $h
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Intersects_1 ($x, $y, $w, $h){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rect $r
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Intersects_2 ($r){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Point $center
	 * @param \System\Double|double $a
	 * @param \System\Double|double $b
	 * @param \System\Double|double $theta
	 * @param \System\Double|double $lambda1
	 * @param \System\Double|double $lambda2
	 * @param \System\Boolean|bool $isPieSlice
	 */
	#[MethodOverride]public function __construct_2 ($center, $a, $b, $theta, $lambda1, $lambda2, $isPieSlice){}
	/**
	 * @param \System\Double|double $cx
	 * @param \System\Double|double $cy
	 * @param \System\Double|double $a
	 * @param \System\Double|double $b
	 * @param \System\Double|double $theta
	 * @param \System\Double|double $lambda1
	 * @param \System\Double|double $lambda2
	 * @param \System\Boolean|bool $isPieSlice
	 */
	#[MethodOverride]public function __construct_3 ($cx, $cy, $a, $b, $theta, $lambda1, $lambda2, $isPieSlice){}
	/**
	 * @param \Avalonia\Point $center
	 * @param \System\Double|double $a
	 * @param \System\Double|double $b
	 * @param \System\Double|double $theta
	 */
	#[MethodOverride]public function __construct_4 ($center, $a, $b, $theta){}
	/**
	 * @param \System\Double|double $cx
	 * @param \System\Double|double $cy
	 * @param \System\Double|double $a
	 * @param \System\Double|double $b
	 * @param \System\Double|double $theta
	 */
	#[MethodOverride]public function __construct_5 ($cx, $cy, $a, $b, $theta){}
}
final class EllipticalArc extends \System\Object
{
	use EllipticalArcOverride;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $Cx;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $Cy;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $A;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $B;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $Theta;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $Eta1;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $Eta2;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $X1;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $Y1;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $X2;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $Y2;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $FirstFocusX;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $FirstFocusY;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $SecondFocusX;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $SecondFocusY;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $IsPieSlice;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $F;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $E2;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $G;
	/**
	 * @field
	 * @var \System\Double|double
	 */
	protected $G2;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $DrawInOppositeDirection;
	/**
	 * @param \System\Int32|int $maxDegree
	 * @return \System\Void|void
	 */
	public function SetMaxDegree($maxDegree){}
	/**
	 * @param \System\Double|double $defaultFlatness
	 * @return \System\Void|void
	 */
	public function SetDefaultFlatness($defaultFlatness){}
	private function ComputeFocii(){}
	private function ComputeEndPoints(){}
	private function ComputeBounds(){}
	private function ComputeDerivedFlatnessParameters(){}
	private static function RationalFunction($x, $c){}
	/**
	 * @param \System\Int32|int $degree
	 * @param \System\Double|double $etaA
	 * @param \System\Double|double $etaB
	 * @return \System\Double|double
	 */
	public function EstimateError($degree, $etaA, $etaB){}
	/**
	 * @param \System\Double|double $lambda
	 * @return \Avalonia\Point
	 */
	public function PointAt($lambda){}
	/**
	 * @uses EllipticalArcOverride::Contains_1 <br>public , args: ($x, $y)<br>
	 * @uses EllipticalArcOverride::Contains_2 <br>public , args: ($x, $y, $w, $h)<br>
	 * @uses EllipticalArcOverride::Contains_3 <br>public , args: ($p)<br>
	 * @uses EllipticalArcOverride::Contains_4 <br>public , args: ($r)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Contains (\override ...$args){}
	private function IntersectArc($xA, $yA, $xB, $yB){}
	private static function Intersect($x1, $y1, $x2, $y2, $xA, $yA, $xB, $yB){}
	private function IntersectOutline($xA, $yA, $xB, $yB){}
	/**
	 * @return \Avalonia\Rect
	 */
	public function GetBounds(){}
	/**
	 * @uses EllipticalArcOverride::BuildArc_1 <br>public , args: ($path)<br>
	 * @uses EllipticalArcOverride::BuildArc_2 <br>public , args: ($path, $degree, $threshold, $openNewFigure)<br>
	 * @uses EllipticalArcOverride::BuildArc_3 <br>public , args: ($path, $p1, $p2, $size, $theta, $isLargeArc, $clockwise)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function BuildArc (\override ...$args){}
	private static function GetAngle($v1, $v2){}
	/**
	 * @uses EllipticalArcOverride::Intersects_1 <br>public , args: ($x, $y, $w, $h)<br>
	 * @uses EllipticalArcOverride::Intersects_2 <br>public , args: ($r)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function Intersects (\override ...$args){}
	/**
	 * @uses EllipticalArcOverride::__construct_1 <br>public , args: ()<br>
	 * @uses EllipticalArcOverride::__construct_2 <br>public , args: ($center, $a, $b, $theta, $lambda1, $lambda2, $isPieSlice)<br>
	 * @uses EllipticalArcOverride::__construct_3 <br>public , args: ($cx, $cy, $a, $b, $theta, $lambda1, $lambda2, $isPieSlice)<br>
	 * @uses EllipticalArcOverride::__construct_4 <br>public , args: ($center, $a, $b, $theta)<br>
	 * @uses EllipticalArcOverride::__construct_5 <br>public , args: ($cx, $cy, $a, $b, $theta)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}