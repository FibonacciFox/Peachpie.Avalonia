<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
interface IRenderDataItemWithServerResources
{

	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataServerResourcesCollector $collector
	 * @return \System\Void|void
	 */
	public function Collect($collector);
}