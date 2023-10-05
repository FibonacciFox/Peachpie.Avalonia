<?php
namespace Avalonia\Controls\Selection;
/**
 */
class SelectionModelSelectionChangedEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Int32]
	 * @property
	 */
	public readonly $DeselectedIndexes;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Int32]
	 * @property
	 */
	public readonly $SelectedIndexes;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Object]
	 * @property
	 */
	public readonly $DeselectedItems;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Object]
	 * @property
	 */
	public readonly $SelectedItems;
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_DeselectedIndexes(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_SelectedIndexes(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_DeselectedItems(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_SelectedItems(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	protected  function GetUntypedDeselectedItems(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	protected  function GetUntypedSelectedItems(){}
}
