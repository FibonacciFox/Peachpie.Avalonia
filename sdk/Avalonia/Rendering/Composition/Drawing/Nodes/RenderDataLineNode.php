<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
class RenderDataLineNode extends \System\Object implements 
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItemWithServerResources,
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem
{
	/**
	 * @var \Avalonia\Media\IPen
	 * @property
	 */
	public $ServerPen;
	/**
	 * @var \Avalonia\Media\IPen
	 * @property
	 */
	public $ClientPen;
	/**
	 * @var \Avalonia\Point
	 * @property
	 */
	public $P1;
	/**
	 * @var \Avalonia\Point
	 * @property
	 */
	public $P2;
	/**
	 * @var \System\Nullable_1[Avalonia\Rect]
	 * @property
	 */
	public readonly $Bounds;
	/**
	 * @return \Avalonia\Media\IPen
	 */
	public  function get_ServerPen(){}
	/**
	 * @param \Avalonia\Media\IPen $value
	 * @return \System\Void|void
	 */
	public  function set_ServerPen($value){}
	/**
	 * @return \Avalonia\Media\IPen
	 */
	public  function get_ClientPen(){}
	/**
	 * @param \Avalonia\Media\IPen $value
	 * @return \System\Void|void
	 */
	public  function set_ClientPen($value){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_P1(){}
	/**
	 * @param \Avalonia\Point $value
	 * @return \System\Void|void
	 */
	public  function set_P1($value){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_P2(){}
	/**
	 * @param \Avalonia\Point $value
	 * @return \System\Void|void
	 */
	public  function set_P2($value){}
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
	 * @param \Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataServerResourcesCollector $collector
	 * @return \System\Void|void
	 */
	public  function Collect($collector){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
