<?php
namespace Avalonia\Rendering\Composition\Drawing\Nodes;
/**
 */
class RenderDataRectangleNode extends \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataBrushAndPenNode implements 
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItemWithServerResources,
	\Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem
{
	/**
	 * @var \Avalonia\RoundedRect
	 * @property
	 */
	public $Rect;
	/**
	 * @var \Avalonia\Media\BoxShadows
	 * @property
	 */
	public $BoxShadows;
	/**
	 * @var \System\Nullable_1[Avalonia\Rect]
	 * @property
	 */
	public readonly $Bounds;
	/**
	 * @var \Avalonia\Media\IBrush
	 * @property
	 */
	public $ServerBrush;
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
	 * @return \Avalonia\RoundedRect
	 */
	public  function get_Rect(){}
	/**
	 * @param \Avalonia\RoundedRect $value
	 * @return \System\Void|void
	 */
	public  function set_Rect($value){}
	/**
	 * @return \Avalonia\Media\BoxShadows
	 */
	public  function get_BoxShadows(){}
	/**
	 * @param \Avalonia\Media\BoxShadows $value
	 * @return \System\Void|void
	 */
	public  function set_BoxShadows($value){}
}
