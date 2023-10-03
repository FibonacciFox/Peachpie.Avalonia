<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
class RenderDataCustomNode extends \System\Object implements 
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem
{
	/**
	 * @return \Avalonia\Rendering\SceneGraph\ICustomDrawOperation
	 */
	public  function get_Operation(){}
	/**
	 * @param \Avalonia\Rendering\SceneGraph\ICustomDrawOperation $value
	 * @return \System\Void|void
	 */
	public  function set_Operation($value){}
	/**
	 * @param \Avalonia\Point $p
	 * @return \System\Boolean
	 */
	public  function HitTest($p){}
	/**
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataNodeRenderContext& $context
	 * @return \System\Void|void
	 */
	public  function Invoke($context){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_Bounds(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
