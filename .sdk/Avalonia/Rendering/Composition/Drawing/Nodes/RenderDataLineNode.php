<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
class RenderDataLineNode extends \System\Object implements
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItemWithServerResources,
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem
{

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
	 * @var \Avalonia\Point
	 */
	public $P1;
	/**
	 * @property
	 * @var \Avalonia\Point
	 */
	public $P2;
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
	 */
	public function __construct(){}
}