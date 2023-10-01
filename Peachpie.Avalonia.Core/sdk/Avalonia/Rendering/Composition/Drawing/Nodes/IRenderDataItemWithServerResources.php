<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
interface IRenderDataItemWithServerResources
{
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataServerResourcesCollector $collector
	 */
	public function Collect($collector);
}
