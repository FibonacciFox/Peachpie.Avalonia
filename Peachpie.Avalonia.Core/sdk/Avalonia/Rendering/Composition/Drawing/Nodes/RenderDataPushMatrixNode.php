<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
class RenderDataPushMatrixNode extends \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataPushNode implements 
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem,
	\System\IDisposable
{
	/**
	 * @return \Avalonia\Matrix
	 */
	public  function get_Matrix(){}
	/**
	 * @param \Avalonia\Matrix $value
	 * @return \System\Void|void
	 */
	public  function set_Matrix($value){}
}
