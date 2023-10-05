<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
class RenderDataClipNode extends \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataPushNode implements 
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem,
	\System\IDisposable
{
	/**
	 * @var \Avalonia\Utilities\PooledInlineList_1[Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem]
	 * @field
	 */
	public $Children;
	/**
	 * @var \Avalonia\RoundedRect
	 * @property
	 */
	public $Rect;
	/**
	 * @var \System\Nullable_1[Avalonia\Rect]
	 * @property
	 */
	public readonly $Bounds;
	/**
	 * @return \Avalonia\RoundedRect
	 */
	public  function get_Rect(){}
	/**
	 * @param \Avalonia\RoundedRect $value
	 * @return \System\Void|void
	 */
	public  function set_Rect($value){}
}
