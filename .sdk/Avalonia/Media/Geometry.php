<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GeometryOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\AvaloniaPropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function TransformChanged_1 ($e){}
	/**
	 * @deprecated
	 * @param \System\Object|object $sender
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function TransformChanged_2 ($sender, $e){}
}
class Geometry extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged
{
	use GeometryOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Transform]
	 */
	public static $TransformProperty;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $Bounds;
	/**
	 * @property
	 * @var \Avalonia\Media\Transform
	 */
	public $Transform;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $ContourLength;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Changed($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Changed($value){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\Geometry
	 */
	public static function Parse($s){}
	/**
	 * @return \Avalonia\Media\Geometry
	 */
	abstract public function Clone();
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @return \Avalonia\Rect
	 */
	public function GetRenderBounds($pen){}
	/**
	 * @param \Avalonia\Point $point
	 * @return \System\Boolean|bool
	 */
	public function FillContains($point){}
	/**
	 * @param \Avalonia\Media\IPen $pen
	 * @param \Avalonia\Point $point
	 * @return \System\Boolean|bool
	 */
	public function StrokeContains($pen, $point){}
	/**
	 * @param \Avalonia\AvaloniaProperty ...$properties
	 * @return \System\Void|void
	 */
	protected static function AffectsGeometry(...$properties){}
	/**
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	abstract protected function CreateDefiningGeometry();
	/**
	 * @return \System\Void|void
	 */
	protected function InvalidateGeometry(){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses GeometryOverride::TransformChanged_1 <br>private , args: ($e)<br>
	 * @uses GeometryOverride::TransformChanged_2 <br>private , args: ($sender, $e)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePrivate]function TransformChanged (\override ...$args){}
	private static function AffectsGeometryInvalidate($e){}
	/**
	 * @param \Avalonia\Media\Geometry $geometry1
	 * @param \Avalonia\Media\RectangleGeometry $geometry2
	 * @param \Avalonia\Media\GeometryCombineMode $combineMode
	 * @param \Avalonia\Media\Transform $transform
	 * @return \Avalonia\Media\Geometry
	 */
	public static function Combine($geometry1, $geometry2, $combineMode, $transform){}
	/**
	 * @param \System\Double|double $distance
	 * @param \Avalonia\Point& &$point
	 * @return \System\Boolean|bool
	 */
	public function TryGetPointAtDistance($distance, &$point){}
	/**
	 * @param \System\Double|double $distance
	 * @param \Avalonia\Point& &$point
	 * @param \Avalonia\Point& &$tangent
	 * @return \System\Boolean|bool
	 */
	public function TryGetPointAndTangentAtDistance($distance, &$point, &$tangent){}
	/**
	 * @param \System\Double|double $startDistance
	 * @param \System\Double|double $stopDistance
	 * @param \System\Boolean|bool $startOnBeginFigure
	 * @param \Avalonia\Media\Geometry& &$segmentGeometry
	 * @return \System\Boolean|bool
	 */
	public function TryGetSegment($startDistance, $stopDistance, $startOnBeginFigure, &$segmentGeometry){}
	private function GetPropertyChangedSubscribers(){}
}