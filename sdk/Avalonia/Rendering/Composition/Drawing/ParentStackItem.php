<?php
namespace Avalonia\Rendering\Composition\Drawing;
/**
 */
class ParentStackItem extends \System\ValueType
{
	/**
	 * @var \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataPushNode
	 * @field
	 */
	public $Node;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem]
	 * @field
	 */
	public $Items;
}
