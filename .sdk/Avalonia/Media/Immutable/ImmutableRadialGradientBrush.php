<?php
namespace Avalonia\Media\Immutable;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ImmutablePenOverride {
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $gradientStops [generic: Avalonia\Media\Immutable\ImmutableGradientStop]
	 * @param \System\Double|double $opacity
	 * @param \Avalonia\Media\Immutable\ImmutableTransform $transform
	 * @param \System\Nullable_1 $transformOrigin [generic: Avalonia\RelativePoint]
	 * @param \Avalonia\Media\GradientSpreadMethod $spreadMethod
	 * @param \System\Nullable_1 $center [generic: Avalonia\RelativePoint]
	 * @param \System\Nullable_1 $gradientOrigin [generic: Avalonia\RelativePoint]
	 * @param \System\Double|double $radius
	 */
	#[MethodOverride]public function __construct_1 ($gradientStops, $opacity, $transform, $transformOrigin, $spreadMethod, $center, $gradientOrigin, $radius){}
	/**
	 * @param \Avalonia\Media\RadialGradientBrush $source
	 */
	#[MethodOverride]public function __construct_2 ($source){}
}
class ImmutableRadialGradientBrush extends \Avalonia\Media\Immutable\ImmutableGradientBrush implements
	\Avalonia\Media\IGradientBrush,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IImmutableBrush,
	\Avalonia\Media\IRadialGradientBrush
{
	use ImmutablePenOverride;

	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 * @since readonly
	 */
	public $Center;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 * @since readonly
	 */
	public $GradientOrigin;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Radius;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Media\IGradientStop]
	 * @since readonly
	 */
	public $GradientStops;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Opacity;
	/**
	 * @property
	 * @var \Avalonia\Media\ITransform
	 * @since readonly
	 */
	public $Transform;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 * @since readonly
	 */
	public $TransformOrigin;
	/**
	 * @property
	 * @var \Avalonia\Media\GradientSpreadMethod
	 * @since readonly
	 */
	public $SpreadMethod;
	/**
	 * @uses ImmutableRadialGradientBrushOverride::__construct_1 <br>public , args: ($gradientStops, $opacity, $transform, $transformOrigin, $spreadMethod, $center, $gradientOrigin, $radius)<br>
	 * @uses ImmutableRadialGradientBrushOverride::__construct_2 <br>public , args: ($source)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}