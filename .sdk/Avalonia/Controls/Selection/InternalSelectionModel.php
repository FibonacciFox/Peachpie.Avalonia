<?php
namespace Avalonia\Controls\Selection;
class InternalSelectionModel extends \Avalonia\Controls\Selection\SelectionModel_1 implements
	\Avalonia\Controls\Selection\ISelectionModel,
	\System\ComponentModel\INotifyPropertyChanged
{

	/**
	 * @property
	 * @var \System\Collections\IList
	 */
	public $WritableSelectedItems;
	/**
	 * @property
	 * @var \System\Collections\IEnumerable
	 */
	public $Source;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $SingleSelect;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $SelectedIndex;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Int32]
	 * @since readonly
	 */
	public $SelectedIndexes;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $SelectedItem;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Object]
	 * @since readonly
	 */
	public $SelectedItems;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $AnchorIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	protected $RangesEnabled;
	/**
	 * @param \System\Collections\IEnumerable $source
	 * @param \Avalonia\Data\Optional_1 $selectedItems [generic: System\Collections\IList]
	 * @return \System\Void|void
	 */
	protected function Update($source, $selectedItems){}
	private function SyncToSelectedItems(){}
	private function SyncFromSelectedItems(){}
	private function SubscribeToSelectedItems(){}
	private function UnsubscribeFromSelectedItems(){}
	private function OnSelectionChanged($sender, $e){}
	private function OnSelectedItemsCollectionChanged($sender, $e){}
	private function Add($newItems){}
	private static function IndexOf($source, $item){}
	private static function SequenceEqual($first, $second){}
	/**
	 */
	public function __construct(){}
}