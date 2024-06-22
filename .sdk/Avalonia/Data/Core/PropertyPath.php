<?php
namespace Avalonia\Data\Core;
class PropertyPath extends \System\Object
{

	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Data\Core\IPropertyPathElement]
	 * @since readonly
	 */
	public $Elements;
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $elements [generic: Avalonia\Data\Core\IPropertyPathElement]
	 */
	public function __construct($elements){}
}