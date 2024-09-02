<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PenOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\UInt32 $color
	 * @param \System\Double|double $thickness
	 * @param \Avalonia\Media\IDashStyle $dashStyle
	 * @param \Avalonia\Media\PenLineCap $lineCap
	 * @param \Avalonia\Media\PenLineJoin $lineJoin
	 * @param \System\Double|double $miterLimit
	 */
	#[MethodOverride]public function __construct_2 ($color, $thickness, $dashStyle, $lineCap, $lineJoin, $miterLimit){}
	/**
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \System\Double|double $thickness
	 * @param \Avalonia\Media\IDashStyle $dashStyle
	 * @param \Avalonia\Media\PenLineCap $lineCap
	 * @param \Avalonia\Media\PenLineJoin $lineJoin
	 * @param \System\Double|double $miterLimit
	 */
	#[MethodOverride]public function __construct_3 ($brush, $thickness, $dashStyle, $lineCap, $lineJoin, $miterLimit){}
}
final class Pen extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IPen,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	use PenOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IBrush]
	 */
	public static $BrushProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $ThicknessProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IDashStyle]
	 */
	public static $DashStyleProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\PenLineCap]
	 */
	public static $LineCapProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\PenLineJoin]
	 */
	public static $LineJoinProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $MiterLimitProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $Brush;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Thickness;
	/**
	 * @property
	 * @var \Avalonia\Media\IDashStyle
	 */
	public $DashStyle;
	/**
	 * @property
	 * @var \Avalonia\Media\PenLineCap
	 */
	public $LineCap;
	/**
	 * @property
	 * @var \Avalonia\Media\PenLineJoin
	 */
	public $LineJoin;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MiterLimit;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @return \Avalonia\Media\Immutable\ImmutablePen
	 */
	public function ToImmutable(){}
	/**
	 * @param \Avalonia\Media\IPen& $pen
	 * @param \Avalonia\Media\IBrush $brush
	 * @param \System\Double|double $thickness
	 * @param \System\Collections\Generic\IList_1 $strokeDashArray [generic: System\Double]
	 * @param \System\Double|double $strokeDaskOffset
	 * @param \Avalonia\Media\PenLineCap $lineCap
	 * @param \Avalonia\Media\PenLineJoin $lineJoin
	 * @param \System\Double|double $miterLimit
	 * @return \System\Boolean|bool
	 */
	protected static function TryModifyOrCreate($pen, $brush, $thickness, $strokeDashArray, $strokeDaskOffset, $lineCap, $lineJoin, $miterLimit){}
	private function RegisterForSerialization(){}
	private function UpdateDashStyleSubscription(){}
	private function GetForCompositor($c){}
	private function AddRefOnCompositor($c){}
	private function ReleaseOnCompositor($c){}
	private function TryGetServer($c){}
	private function SerializeChanges($c, $writer){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses PenOverride::__construct_1 <br>public , args: ()<br>
	 * @uses PenOverride::__construct_2 <br>public , args: ($color, $thickness, $dashStyle, $lineCap, $lineJoin, $miterLimit)<br>
	 * @uses PenOverride::__construct_3 <br>public , args: ($brush, $thickness, $dashStyle, $lineCap, $lineJoin, $miterLimit)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}