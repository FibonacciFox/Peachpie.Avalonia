<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
class RenderDataGeometryNode extends \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataBrushAndPenNode implements 
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItemWithServerResources,
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem
{
	/**
	 * @var \Avalonia\Platform\IGeometryImpl
	 * @property
	 */
	public $Geometry;
	/**
	 * @var \System\Nullable_1[Avalonia\Rect]
	 * @property
	 */
	public readonly $Bounds;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $ServerBrush;
	/**
	 * @var \Avalonia\Media\IPen
	 * @property
	 */
	public $ServerPen;
	/**
	 * @var \Avalonia\Media\IPen
	 * @property
	 */
	public $ClientPen;
	/**
	 * @return \Avalonia\Platform\IGeometryImpl
	 */
	public  function get_Geometry(){}
	/**
	 * @param \Avalonia\Platform\IGeometryImpl $value
	 * @return \System\Void|void
	 */
	public  function set_Geometry($value){}
}
