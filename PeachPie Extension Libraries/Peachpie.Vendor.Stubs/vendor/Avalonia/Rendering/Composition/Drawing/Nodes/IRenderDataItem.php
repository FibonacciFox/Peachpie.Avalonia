<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
interface IRenderDataItem
{

	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataNodeRenderContext& $context
	 * @return \System\Void|void
	 */
	public function Invoke($context);
	/**
	 * @param \Avalonia\Point $p
	 * @return \System\Boolean|bool
	 */
	public function HitTest($p);
}