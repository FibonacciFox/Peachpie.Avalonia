<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
class RenderDataBrushAndPenNode extends \System\Object implements 
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItemWithServerResources,
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem
{
	/**
	 * @return \Avalonia\Media\IBrush
	 */
	public  function get_ServerBrush(){}
	/**
	 * @param \Avalonia\Media\IBrush $value
	 * @return \System\Void|void
	 */
	public  function set_ServerBrush($value){}
	/**
	 * @return \Avalonia\Media\IPen
	 */
	public  function get_ServerPen(){}
	/**
	 * @param \Avalonia\Media\IPen $value
	 * @return \System\Void|void
	 */
	public  function set_ServerPen($value){}
	/**
	 * @return \Avalonia\Media\IPen
	 */
	public  function get_ClientPen(){}
	/**
	 * @param \Avalonia\Media\IPen $value
	 * @return \System\Void|void
	 */
	public  function set_ClientPen($value){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataServerResourcesCollector $collector
	 * @return \System\Void|void
	 */
	public  function Collect($collector){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataNodeRenderContext& $context
	 * @return \System\Void|void
	 */
	public  function Invoke($context){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_Bounds(){}
	/**
	 * @param \Avalonia\Point $p
	 * @return \System\Boolean
	 */
	public  function HitTest($p){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
