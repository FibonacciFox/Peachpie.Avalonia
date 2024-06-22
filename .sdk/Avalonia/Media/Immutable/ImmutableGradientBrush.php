<?php
namespace Avalonia\Media\Immutable;
class ImmutableGradientBrush extends \System\Object implements
	\Avalonia\Media\IGradientBrush,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IImmutableBrush
{

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

}