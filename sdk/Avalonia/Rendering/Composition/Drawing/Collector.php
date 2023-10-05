<?php
namespace Avalonia\Rendering\Composition\Drawing;
/**
 */
class Collector extends \System\Object implements 
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataServerResourcesCollector
{
	/**
	 * @var \System\Collections\Generic\HashSet_1[Avalonia\Rendering\Composition\Server\IServerRenderResource]
	 * @field
	 */
	public readonly $Resources;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	public  function AddRenderDataServerResource($obj){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
