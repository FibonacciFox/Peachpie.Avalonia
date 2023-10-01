<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
class RenderDataClipNode extends \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataPushNode implements 
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem,
	\System\IDisposable
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
}
