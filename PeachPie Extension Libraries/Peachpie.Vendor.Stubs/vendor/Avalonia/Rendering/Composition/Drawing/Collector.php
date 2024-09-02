<?php
namespace Avalonia\Rendering\Composition\Drawing;
class Collector extends \System\Object implements
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataServerResourcesCollector
{
	/**
	 * @field
	 * @since readonly
	 * @var \System\Collections\Generic\HashSet_1[Avalonia\Rendering\Composition\Server\IServerRenderResource]
	 */
	public $Resources;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	public function AddRenderDataServerResource($obj){}
	/**
	 */
	public function __construct(){}
}