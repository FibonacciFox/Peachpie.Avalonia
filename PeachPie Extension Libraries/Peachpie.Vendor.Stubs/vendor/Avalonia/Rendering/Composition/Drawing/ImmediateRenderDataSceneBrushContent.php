<?php
namespace Avalonia\Rendering\Composition\Drawing;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ImmediateRenderDataSceneBrushContentOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Render_1 ($context){}
	/**
	 * @deprecated
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 * @param \System\Nullable_1 $transform [generic: Avalonia\Matrix]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Render_2 ($context, $transform){}
}
class ImmediateRenderDataSceneBrushContent extends \System\Object implements
	\Avalonia\Media\ISceneBrushContent,
	\Avalonia\Media\IImmutableBrush,
	\Avalonia\Media\IBrush,
	\System\IDisposable
{
	use ImmediateRenderDataSceneBrushContentOverride;
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
	 * @uses ImmediateRenderDataSceneBrushContentOverride::Render_1 <br>private , args: ($context)<br>
	 * @uses ImmediateRenderDataSceneBrushContentOverride::Render_2 <br>public , args: ($context, $transform)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Render (\override ...$args){}
	/**
	 * @param \Avalonia\Media\ITileBrush $brush
	 * @param \System\Collections\Generic\List_1 $items [generic: Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem]
	 * @param \System\Nullable_1 $rect [generic: Avalonia\Rect]
	 * @param \System\Boolean|bool $useScalableRasterization
	 * @param \Avalonia\Threading\ThreadSafeObjectPool_1 $pool [generic: System\Collections\Generic\List_1[Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem]
	 */
	public function __construct($brush, $items, $rect, $useScalableRasterization, $pool){}
}