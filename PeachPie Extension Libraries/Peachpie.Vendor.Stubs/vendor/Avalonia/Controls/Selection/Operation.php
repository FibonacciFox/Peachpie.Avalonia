<?php
namespace Avalonia\Controls\Selection;
class Operation extends \System\Object
{
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $UpdateCount;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsSourceUpdate;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $SkipLostSelection;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $AnchorIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $SelectedIndex;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Controls\Selection\IndexRange]
	 */
	public $SelectedRanges;
	/**
	 * @property
	 * @var \System\Collections\Generic\List_1[Avalonia\Controls\Selection\IndexRange]
	 */
	public $DeselectedRanges;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[T]
	 */
	public $DeselectedItems;
	/**
	 * @param \Avalonia\Controls\Selection\SelectionModel_1 $owner [generic: T]
	 */
	public function __construct($owner){}
}