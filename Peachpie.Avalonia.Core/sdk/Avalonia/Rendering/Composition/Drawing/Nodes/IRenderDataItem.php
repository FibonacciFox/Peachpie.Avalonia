<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
interface IRenderDataItem
{
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataNodeRenderContext& $context
	 */
	public function Invoke($context);
	/**
	 */
	public function get_Bounds();
	/**
	 * @param \Avalonia\Point $p
	 */
	public function HitTest($p);
}
