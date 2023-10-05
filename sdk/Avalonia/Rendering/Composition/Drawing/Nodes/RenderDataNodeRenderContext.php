<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
class RenderDataNodeRenderContext extends \System\ValueType implements 
	\System\IDisposable
{
	/**
	 * @var \Avalonia\Platform\IDrawingContextImpl
	 * @property
	 */
	public readonly $Context;
	/**
	 * @var \System\Collections\Generic\Stack_1[Avalonia\Matrix]
	 * @property
	 */
	public readonly $MatrixStack;
	/**
	 * @return \Avalonia\Platform\IDrawingContextImpl
	 */
	public  function get_Context(){}
	/**
	 * @return \System\Collections\Generic\Stack_1
	 */
	public  function get_MatrixStack(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
}
