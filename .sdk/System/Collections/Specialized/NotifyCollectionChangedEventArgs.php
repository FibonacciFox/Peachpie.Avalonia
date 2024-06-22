<?php
namespace System\Collections\Specialized;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ReadOnlyObservableCollection_1Override {
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedAction $action
	 */
	#[MethodOverride]public function __construct_1 ($action){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedAction $action
	 * @param \System\Object|object $changedItem
	 */
	#[MethodOverride]public function __construct_2 ($action, $changedItem){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedAction $action
	 * @param \System\Object|object $changedItem
	 * @param \System\Int32|int $index
	 */
	#[MethodOverride]public function __construct_3 ($action, $changedItem, $index){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedAction $action
	 * @param \System\Collections\IList $changedItems
	 */
	#[MethodOverride]public function __construct_4 ($action, $changedItems){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedAction $action
	 * @param \System\Collections\IList $changedItems
	 * @param \System\Int32|int $startingIndex
	 */
	#[MethodOverride]public function __construct_5 ($action, $changedItems, $startingIndex){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedAction $action
	 * @param \System\Object|object $newItem
	 * @param \System\Object|object $oldItem
	 */
	#[MethodOverride]public function __construct_6 ($action, $newItem, $oldItem){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedAction $action
	 * @param \System\Object|object $newItem
	 * @param \System\Object|object $oldItem
	 * @param \System\Int32|int $index
	 */
	#[MethodOverride]public function __construct_7 ($action, $newItem, $oldItem, $index){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedAction $action
	 * @param \System\Collections\IList $newItems
	 * @param \System\Collections\IList $oldItems
	 */
	#[MethodOverride]public function __construct_8 ($action, $newItems, $oldItems){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedAction $action
	 * @param \System\Collections\IList $newItems
	 * @param \System\Collections\IList $oldItems
	 * @param \System\Int32|int $startingIndex
	 */
	#[MethodOverride]public function __construct_9 ($action, $newItems, $oldItems, $startingIndex){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedAction $action
	 * @param \System\Object|object $changedItem
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $oldIndex
	 */
	#[MethodOverride]public function __construct_10 ($action, $changedItem, $index, $oldIndex){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedAction $action
	 * @param \System\Collections\IList $changedItems
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $oldIndex
	 */
	#[MethodOverride]public function __construct_11 ($action, $changedItems, $index, $oldIndex){}
}
class NotifyCollectionChangedEventArgs extends \System\EventArgs
{
	use ReadOnlyObservableCollection_1Override;

	/**
	 * @property
	 * @var \System\Collections\Specialized\NotifyCollectionChangedAction
	 * @since readonly
	 */
	public $Action;
	/**
	 * @property
	 * @var \System\Collections\IList
	 * @since readonly
	 */
	public $NewItems;
	/**
	 * @property
	 * @var \System\Collections\IList
	 * @since readonly
	 */
	public $OldItems;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $NewStartingIndex;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $OldStartingIndex;
	/**
	 * @uses NotifyCollectionChangedEventArgsOverride::__construct_1 <br>public , args: ($action)<br>
	 * @uses NotifyCollectionChangedEventArgsOverride::__construct_2 <br>public , args: ($action, $changedItem)<br>
	 * @uses NotifyCollectionChangedEventArgsOverride::__construct_3 <br>public , args: ($action, $changedItem, $index)<br>
	 * @uses NotifyCollectionChangedEventArgsOverride::__construct_4 <br>public , args: ($action, $changedItems)<br>
	 * @uses NotifyCollectionChangedEventArgsOverride::__construct_5 <br>public , args: ($action, $changedItems, $startingIndex)<br>
	 * @uses NotifyCollectionChangedEventArgsOverride::__construct_6 <br>public , args: ($action, $newItem, $oldItem)<br>
	 * @uses NotifyCollectionChangedEventArgsOverride::__construct_7 <br>public , args: ($action, $newItem, $oldItem, $index)<br>
	 * @uses NotifyCollectionChangedEventArgsOverride::__construct_8 <br>public , args: ($action, $newItems, $oldItems)<br>
	 * @uses NotifyCollectionChangedEventArgsOverride::__construct_9 <br>public , args: ($action, $newItems, $oldItems, $startingIndex)<br>
	 * @uses NotifyCollectionChangedEventArgsOverride::__construct_10 <br>public , args: ($action, $changedItem, $index, $oldIndex)<br>
	 * @uses NotifyCollectionChangedEventArgsOverride::__construct_11 <br>public , args: ($action, $changedItems, $index, $oldIndex)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}