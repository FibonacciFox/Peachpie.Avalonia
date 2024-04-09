<?php
namespace System\Collections\ObjectModel;
class KeyedCollection_2 extends \System\Collections\ObjectModel\Collection_1 implements
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1
{
	/**
	 * @property
	 * @var \System\Collections\Generic\IEqualityComparer_1[TKey]
	 * @since readonly
	 */
	public $Comparer;
	/**
	 * @property dublicate
	 * @var \TItem
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @param \TKey $key
	 * @param \TItem& &$item
	 * @return \System\Boolean|bool
	 */
	public function TryGetValue($key, &$item){}
	private function ContainsItem($item){}
	/**
	 * @param \TItem $item
	 * @param \TKey $newKey
	 * @return \System\Void|void
	 */
	protected function ChangeItemKey($item, $newKey){}
	/**
	 * @param \TItem $item
	 * @return \TKey
	 */
	abstract protected function GetKeyForItem($item);
	private function AddKey($key, $item){}
	private function CreateDictionary(){}
	private function RemoveKey($key){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function get_IsFixedSize(){}
}