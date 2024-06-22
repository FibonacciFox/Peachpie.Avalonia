<?php
namespace System\Collections\ObjectModel;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ReadOnlyObservableCollection_1Override {
	/**
	 * @deprecated
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function add_CollectionChanged_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function add_CollectionChanged_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function remove_CollectionChanged_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function remove_CollectionChanged_2 ($value){}
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
}
class ReadOnlyObservableCollection_1 extends \System\Collections\ObjectModel\ReadOnlyCollection_1 implements
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
	use ReadOnlyObservableCollection_1Override;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Item;
	/**
	 * @uses ReadOnlyObservableCollection_1Override::add_CollectionChanged_1 <br>private , args: ($value)<br>
	 * @uses ReadOnlyObservableCollection_1Override::add_CollectionChanged_2 <br>protected , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function add_CollectionChanged (\override ...$args){}
	/**
	 * @uses ReadOnlyObservableCollection_1Override::remove_CollectionChanged_1 <br>private , args: ($value)<br>
	 * @uses ReadOnlyObservableCollection_1Override::remove_CollectionChanged_2 <br>protected , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function remove_CollectionChanged (\override ...$args){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $args
	 * @return \System\Void|void
	 */
	protected function OnCollectionChanged($args){}
	/**
	 * @uses ReadOnlyObservableCollection_1Override::add_PropertyChanged_1 <br>private , args: ($value)<br>
	 * @uses ReadOnlyObservableCollection_1Override::add_PropertyChanged_2 <br>protected , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function add_PropertyChanged (\override ...$args){}
	/**
	 * @uses ReadOnlyObservableCollection_1Override::remove_PropertyChanged_1 <br>private , args: ($value)<br>
	 * @uses ReadOnlyObservableCollection_1Override::remove_PropertyChanged_2 <br>protected , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function remove_PropertyChanged (\override ...$args){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventArgs $args
	 * @return \System\Void|void
	 */
	protected function OnPropertyChanged($args){}
	private function HandleCollectionChanged($sender, $e){}
	private function HandlePropertyChanged($sender, $e){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function get_IsFixedSize(){}
	/**
	 * @param \System\Collections\ObjectModel\ObservableCollection_1 $list [generic: T]
	 */
	public function __construct($list){}
}