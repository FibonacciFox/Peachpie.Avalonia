<?php
namespace Avalonia\Controls\Selection;
class SelectionModelSelectionChangedEventArgs extends \System\EventArgs
{

	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Int32]
	 * @since readonly
	 */
	public $DeselectedIndexes;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Int32]
	 * @since readonly
	 */
	public $SelectedIndexes;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Object]
	 * @since readonly
	 */
	public $DeselectedItems;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Object]
	 * @since readonly
	 */
	public $SelectedItems;
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1[System\Object]
	 */
	abstract protected function GetUntypedDeselectedItems();
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1[System\Object]
	 */
	abstract protected function GetUntypedSelectedItems();
}