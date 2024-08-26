<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
final class RenderDataNodeRenderContext extends \System\ValueType implements
	\System\IDisposable
{
	/**
	 * @property
	 * @var \Avalonia\Platform\IDrawingContextImpl
	 * @since readonly
	 */
	public $Context;
	/**
	 * @property
	 * @var \System\Collections\Generic\Stack_1[Avalonia\Matrix]
	 * @since readonly
	 */
	public $MatrixStack;
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $context
	 */
	public function __construct($context){}
}