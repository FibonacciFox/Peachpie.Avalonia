<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
class RenderDataPushNode extends \System\Object implements
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem,
	\System\IDisposable
{

	/**
	 * @field
	 * @var \Avalonia\Utilities\PooledInlineList_1[Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem]
	 */
	public $Children;
	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\Rect]
	 * @since readonly
	 */
	public $Bounds;
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataNodeRenderContext& $context
	 * @return \System\Void|void
	 */
	abstract public function Push($context);
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataNodeRenderContext& $context
	 * @return \System\Void|void
	 */
	abstract public function Pop($context);
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataNodeRenderContext& $context
	 * @return \System\Void|void
	 */
	public function Invoke($context){}
	/**
	 * @param \Avalonia\Point $p
	 * @return \System\Boolean|bool
	 */
	public function HitTest($p){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
}