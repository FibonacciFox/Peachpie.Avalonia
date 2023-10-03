<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
class RenderDataGeometryNode extends \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataBrushAndPenNode implements 
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItemWithServerResources,
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem
{
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
