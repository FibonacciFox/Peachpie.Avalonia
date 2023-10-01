<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
class RenderDataEllipseNode extends \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataBrushAndPenNode implements 
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItemWithServerResources,
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem
{
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_Rect(){}
	/**
	 * @param \Avalonia\Rect $value
	 * @return \System\Void|void
	 */
	public  function set_Rect($value){}
	/**
	 * @param \System\Double|double $dx
	 * @param \System\Double|double $dy
	 * @param \System\Double|double $radiusX
	 * @param \System\Double|double $radiusY
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Contains($dx, $dy, $radiusX, $radiusY){}
}
