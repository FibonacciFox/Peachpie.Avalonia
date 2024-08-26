<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
class RenderDataGeometryClipNode extends \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataPushNode implements
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem,
	\System\IDisposable
{
	/**
	 * @field
	 * @var \Avalonia\Utilities\PooledInlineList_1[Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem]
	 */
	public $Children;
	/**
	 * @property
	 * @var \Avalonia\Platform\IGeometryImpl
	 */
	public $Geometry;
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
	public function Contains($p){}
	/**
	 */
	public function __construct(){}
}