<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
class RenderDataRectangleNode extends \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataBrushAndPenNode implements
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItemWithServerResources,
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem
{
	/**
	 * @property
	 * @var \Avalonia\RoundedRect
	 */
	public $Rect;
	/**
	 * @property
	 * @var \Avalonia\Media\BoxShadows
	 */
	public $BoxShadows;
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
	/**
	 */
	public function __construct(){}
}