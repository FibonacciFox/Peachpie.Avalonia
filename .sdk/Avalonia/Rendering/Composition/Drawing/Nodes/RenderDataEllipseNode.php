<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
class RenderDataEllipseNode extends \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataBrushAndPenNode implements
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItemWithServerResources,
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem
{

	/**
	 * @property
	 * @var \Avalonia\Rect
	 */
	public $Rect;
	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\Rect]
	 * @since readonly
	 */
	public $Bounds;
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
	private function Contains($dx, $dy, $radiusX, $radiusY){}
	/**
	 */
	public function __construct(){}
}