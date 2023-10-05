<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
class RenderDataOpacityMaskNode extends \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataPushNode implements 
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem,
	\System\IDisposable,
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItemWithServerResources
{
	/**
	 * @var \Avalonia\Utilities\PooledInlineList_1[Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem]
	 * @field
	 */
	public $Children;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $ServerBrush;
	/**
	 * @var \Avalonia\Rect
	 * @property
	 */
	public $BoundsRect;
	/**
	 * @var \System\Nullable_1[Avalonia\Rect]
	 * @property
	 */
	public readonly $Bounds;
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_ServerBrush(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_ServerBrush($value){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_BoundsRect(){}
	/**
	 * @param \Avalonia\Rect $value
	 * @return \System\Void|void
	 */
	public  function set_BoundsRect($value){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataServerResourcesCollector $collector
	 * @return \System\Void|void
	 */
	public  function Collect($collector){}
}
