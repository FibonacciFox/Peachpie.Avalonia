<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
class RenderDataOpacityMaskNode extends \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataPushNode implements
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem,
	\System\IDisposable,
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItemWithServerResources
{

	/**
	 * @field
	 * @var \Avalonia\Utilities\PooledInlineList_1[Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem]
	 */
	public $Children;
	/**
	 * @property
	 * @var \Avalonia\Media\IBrush
	 */
	public $ServerBrush;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 */
	public $BoundsRect;
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
	 */
	public function __construct(){}
}