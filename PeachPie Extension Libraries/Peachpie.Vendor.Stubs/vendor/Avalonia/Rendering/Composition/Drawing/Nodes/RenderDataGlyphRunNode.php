<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
class RenderDataGlyphRunNode extends \System\Object implements
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItemWithServerResources,
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem,
	\System\IDisposable
{
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $ServerBrush;
	/**
	 * @property
	 * @var \Avalonia\Utilities\IRef_1[Avalonia\Platform\IGlyphRunImpl]
	 */
	public $GlyphRun;
	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\Rect]
	 * @since readonly
	 */
	public $Bounds;
	/**
	 * @param \Avalonia\Point $p
	 * @return \System\Boolean|bool
	 */
	public function HitTest($p){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataNodeRenderContext& $context
	 * @return \System\Void|void
	 */
	public function Invoke($context){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataServerResourcesCollector $collector
	 * @return \System\Void|void
	 */
	public function Collect($collector){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 */
	public function __construct(){}
}