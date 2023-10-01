<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
class RenderDataGeometryClipNode extends \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataPushNode implements 
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem,
	\System\IDisposable
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
	/**
	 * @param \Avalonia\Point $p
	 * @return \System\Boolean
	 */
	public  function Contains($p){}
}
