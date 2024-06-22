<?php
namespace Avalonia\Media\Immutable;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ImmutablePenOverride {
	/**
	 * @param \System\UInt32 $color
	 * @param \System\Double|double $thickness
	 * @param \Avalonia\Media\Immutable\ImmutableDashStyle $dashStyle
	 * @param \Avalonia\Media\PenLineCap $lineCap
	 * @param \Avalonia\Media\PenLineJoin $lineJoin
	 * @param \System\Double|double $miterLimit
	 */
	#[MethodOverride]public function __construct_1 ($color, $thickness, $dashStyle, $lineCap, $lineJoin, $miterLimit){}
	/**
	 * @param \Avalonia\Media\IImmutableBrush $brush
	 * @param \System\Double|double $thickness
	 * @param \Avalonia\Media\Immutable\ImmutableDashStyle $dashStyle
	 * @param \Avalonia\Media\PenLineCap $lineCap
	 * @param \Avalonia\Media\PenLineJoin $lineJoin
	 * @param \System\Double|double $miterLimit
	 */
	#[MethodOverride]public function __construct_2 ($brush, $thickness, $dashStyle, $lineCap, $lineJoin, $miterLimit){}
}
class ImmutablePen extends \System\Object implements
	\Avalonia\Media\IPen,
	\System\IEquatable_1
{
	use ImmutablePenOverride;

	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 * @since readonly
	 */
	public $Brush;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Thickness;
	/**
	 * @property
	 * @var \Avalonia\Media\IDashStyle
	 * @since readonly
	 */
	public $DashStyle;
	/**
	 * @property
	 * @var \Avalonia\Media\PenLineCap
	 * @since readonly
	 */
	public $LineCap;
	/**
	 * @property
	 * @var \Avalonia\Media\PenLineJoin
	 * @since readonly
	 */
	public $LineJoin;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $MiterLimit;
	/**
	 * @uses ImmutablePenOverride::__construct_1 <br>public , args: ($color, $thickness, $dashStyle, $lineCap, $lineJoin, $miterLimit)<br>
	 * @uses ImmutablePenOverride::__construct_2 <br>public , args: ($brush, $thickness, $dashStyle, $lineCap, $lineJoin, $miterLimit)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}