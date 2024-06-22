<?php
namespace Avalonia\Controls\Selection;
class SelectionModelSelectionChangedEventArgs_1 extends \Avalonia\Controls\Selection\SelectionModelSelectionChangedEventArgs
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
	 * @property duplicate
	 * @var \System\Collections\Generic\IReadOnlyList_1[T]|\System\Collections\Generic\IReadOnlyList_1[System\Object]
	 */
	public $DeselectedItems;
	/**
	 * @property duplicate
	 * @var \System\Collections\Generic\IReadOnlyList_1[T]|\System\Collections\Generic\IReadOnlyList_1[System\Object]
	 */
	public $SelectedItems;
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $deselectedIndices [generic: System\Int32]
	 * @param \System\Collections\Generic\IReadOnlyList_1 $selectedIndices [generic: System\Int32]
	 * @param \System\Collections\Generic\IReadOnlyList_1 $deselectedItems [generic: T]
	 * @param \System\Collections\Generic\IReadOnlyList_1 $selectedItems [generic: T]
	 */
	public function __construct($deselectedIndices, $selectedIndices, $deselectedItems, $selectedItems){}
}