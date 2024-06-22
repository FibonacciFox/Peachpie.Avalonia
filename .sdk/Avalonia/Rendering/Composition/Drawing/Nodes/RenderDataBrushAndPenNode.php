<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
class RenderDataBrushAndPenNode extends \System\Object implements
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItemWithServerResources,
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem
{

	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $ServerBrush;
	/**
	 * @property
	 * @var \Avalonia\Media\IPen
	 */
	public $ServerPen;
	/**
	 * @property
	 * @var \Avalonia\Media\IPen
	 */
	public $ClientPen;
	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\Rect]
	 * @since readonly
	 */
	public $Bounds;
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataServerResourcesCollector $collector
	 * @return \System\Void|void
	 */
	public function Collect($collector){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataNodeRenderContext& $context
	 * @return \System\Void|void
	 */
	abstract public function Invoke($context);
	/**
	 * @param \Avalonia\Point $p
	 * @return \System\Boolean|bool
	 */
	abstract public function HitTest($p);
}