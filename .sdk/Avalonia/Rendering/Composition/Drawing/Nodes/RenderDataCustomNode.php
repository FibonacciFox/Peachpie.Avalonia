<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
class RenderDataCustomNode extends \System\Object implements
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem
{

	/**
	 * @property
	 * @var \Avalonia\Rendering\SceneGraph\ICustomDrawOperation
	 */
	public $Operation;
	/**
	 * @property
	 * @var \System\Nullable_1[Avalonia\Rect]
	 * @since readonly
	 */
	public $Bounds;
	/**
	 * @param \Avalonia\Point $p
	 * @return \System\Boolean|bool
	 */
	public function HitTest($p){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataNodeRenderContext& $context
	 * @return \System\Void|void
	 */
	public function Invoke($context){}
	/**
	 */
	public function __construct(){}
}