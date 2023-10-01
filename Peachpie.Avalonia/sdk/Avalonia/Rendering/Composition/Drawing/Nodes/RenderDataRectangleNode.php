<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
class RenderDataRectangleNode extends \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataBrushAndPenNode implements 
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItemWithServerResources,
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem
{
	/**
	 * @return \Avalonia\RoundedRect
	 */
	public  function get_Rect(){}
	/**
	 * @param \Avalonia\RoundedRect $value
	 * @return \System\Void|void
	 */
	public  function set_Rect($value){}
	/**
	 * @return \Avalonia\Media\BoxShadows
	 */
	public  function get_BoxShadows(){}
	/**
	 * @param \Avalonia\Media\BoxShadows $value
	 * @return \System\Void|void
	 */
	public  function set_BoxShadows($value){}
}
