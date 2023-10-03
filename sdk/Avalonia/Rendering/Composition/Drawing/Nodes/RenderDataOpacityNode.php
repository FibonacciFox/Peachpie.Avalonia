<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
class RenderDataOpacityNode extends \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataPushNode implements 
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem,
	\System\IDisposable
{
	/**
	 * @return \System\Double|double
	 */
	public  function get_Opacity(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Opacity($value){}
}
