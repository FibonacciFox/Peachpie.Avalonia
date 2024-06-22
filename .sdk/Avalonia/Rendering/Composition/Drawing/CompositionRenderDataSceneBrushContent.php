<?php
namespace Avalonia\Rendering\Composition\Drawing;
class CompositionRenderDataSceneBrushContent extends \System\Object implements
	\Avalonia\Media\ISceneBrushContent,
	\Avalonia\Media\IImmutableBrush,
	\Avalonia\Media\IBrush,
	\System\IDisposable
{

	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Drawing\CompositionRenderData
	 * @since readonly
	 */
	public $RenderData;
	/**
	 * @property
	 * @var \Avalonia\Media\ITileBrush
	 * @since readonly
	 */
	public $Brush;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $Rect;
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
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $UseScalableRasterization;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 * @param \System\Nullable_1 $transform [generic: Avalonia\Matrix]
	 * @return \System\Void|void
	 */
	public function Render($context, $transform){}
	/**
	 * @param \Avalonia\Media\ITileBrush $brush
	 * @param \Avalonia\Rendering\Composition\Drawing\CompositionRenderData $renderData
	 * @param \System\Nullable_1 $rect [generic: Avalonia\Rect]
	 * @param \System\Boolean|bool $useScalableRasterization
	 */
	public function __construct($brush, $renderData, $rect, $useScalableRasterization){}
}