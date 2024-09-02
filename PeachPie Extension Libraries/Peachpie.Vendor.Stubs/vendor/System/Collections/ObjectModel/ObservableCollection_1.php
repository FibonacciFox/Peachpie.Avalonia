<?php
namespace System\Collections\ObjectModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ObservableCollection_1Override {
	/**
	 * @deprecated
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function add_PropertyChanged_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function add_PropertyChanged_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function remove_PropertyChanged_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function remove_PropertyChanged_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function OnCollectionChanged_1 ($e){}
	/**
	 * @deprecated
	 * @param \System\Collections\Specialized\NotifyCollectionChangedAction $action
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function OnCollectionChanged_2 ($action, $item, $index){}
	/**
	 * @deprecated
	 * @param \System\Collections\Specialized\NotifyCollectionChangedAction $action
	 * @param \System\Object|object $item
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $oldIndex
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function OnCollectionChanged_3 ($action, $item, $index, $oldIndex){}
	/**
	 * @deprecated
	 * @param \System\Collections\Specialized\NotifyCollectionChangedAction $action
	 * @param \System\Object|object $oldItem
	 * @param \System\Object|object $newItem
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function OnCollectionChanged_4 ($action, $oldItem, $newItem, $index){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $collection [generic: T]
	 */
	#[MethodOverride]public function __construct_2 ($collection){}
	/**
	 * @param \System\Collections\Generic\List_1 $list [generic: T]
	 */
	#[MethodOverride]public function __construct_3 ($list){}
}
class ObservableCollection_1 extends \System\Collections\ObjectModel\Collection_1 implements
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Specialized\INotifyCollectionChanged,
	\System\ComponentModel\INotifyPropertyChanged
{
	use ObservableCollection_1Override;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \T|object
	 */
	public $Item;
	/**
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	public function Move($oldIndex, $newIndex){}
	/**
	 * @uses ObservableCollection_1Override::add_PropertyChanged_1 <br>private , args: ($value)<br>
	 * @uses ObservableCollection_1Override::add_PropertyChanged_2 <br>protected , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function add_PropertyChanged (\override ...$args){}
	/**
	 * @uses ObservableCollection_1Override::remove_PropertyChanged_1 <br>private , args: ($value)<br>
	 * @uses ObservableCollection_1Override::remove_PropertyChanged_2 <br>protected , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function remove_PropertyChanged (\override ...$args){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public function add_CollectionChanged($value){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_CollectionChanged($value){}
	/**
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	protected function MoveItem($oldIndex, $newIndex){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected function OnPropertyChanged($e){}
	/**
	 * @uses ObservableCollection_1Override::OnCollectionChanged_1 <br>protected , args: ($e)<br>
	 * @uses ObservableCollection_1Override::OnCollectionChanged_2 <br>private , args: ($action, $item, $index)<br>
	 * @uses ObservableCollection_1Override::OnCollectionChanged_3 <br>private , args: ($action, $item, $index, $oldIndex)<br>
	 * @uses ObservableCollection_1Override::OnCollectionChanged_4 <br>private , args: ($action, $oldItem, $newItem, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function OnCollectionChanged (\override ...$args){}
	/**
	 * @return \System\IDisposable
	 */
	protected function BlockReentrancy(){}
	/**
	 * @return \System\Void|void
	 */
	protected function CheckReentrancy(){}
	private function OnCountPropertyChanged(){}
	private function OnIndexerPropertyChanged(){}
	private function OnCollectionReset(){}
	private function EnsureMonitorInitialized(){}
	private function OnSerializing($context){}
	private function OnDeserialized($context){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function get_IsFixedSize(){}
	/**
	 * @uses ObservableCollection_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses ObservableCollection_1Override::__construct_2 <br>public , args: ($collection)<br>
	 * @uses ObservableCollection_1Override::__construct_3 <br>public , args: ($list)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}