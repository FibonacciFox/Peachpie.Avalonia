<?php
namespace Avalonia\Rendering\Composition\Drawing;
final class ParentStackItem extends \System\ValueType
{
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Drawing\Nodes\RenderDataPushNode
	 */
	public $Node;
	/**
	 * @field
	 * @var \System\Collections\Generic\List_1[Avalonia\Rendering\Composition\Drawing\Nodes\IRenderDataItem]
	 */
	public $Items;

}