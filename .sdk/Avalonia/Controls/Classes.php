<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ClassesOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Add_1 ($name){}
	/**
	 * @deprecated
	 * @param \System\String|string $name
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function Remove_1 ($name){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: System\String]
	 */
	#[MethodOverride]public function __construct_2 ($items){}
	/**
	 * @param \System\String ...$items
	 */
	#[MethodOverride]public function __construct_3 (...$items){}
}
class Classes extends \Avalonia\Collections\AvaloniaList_1 implements
	\Avalonia\Collections\IAvaloniaList_1,
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\Avalonia\Collections\IAvaloniaReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Specialized\INotifyCollectionChanged,
	\System\ComponentModel\INotifyPropertyChanged,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\Avalonia\Diagnostics\INotifyCollectionChangedDebug,
	\Avalonia\Controls\IPseudoClasses
{
	use ClassesOverride;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \Avalonia\Collections\ResetBehavior
	 */
	public $ResetBehavior;
	/**
	 * @property
	 * @var \System\Action_1[System\String]
	 */
	public $Validate;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Capacity;
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Controls\Classes
	 */
	public static function Parse($s){}
	/**
	 * @param \System\Collections\Generic\IList_1 $source [generic: System\String]
	 * @return \System\Void|void
	 */
	public function Replace($source){}
	/**
	 * @param \Avalonia\Controls\IClassesChangedListener $listener
	 * @return \System\Void|void
	 */
	protected function AddListener($listener){}
	/**
	 * @param \Avalonia\Controls\IClassesChangedListener $listener
	 * @return \System\Void|void
	 */
	protected function RemoveListener($listener){}
	private function NotifyChanged(){}
	private static function ThrowIfPseudoclass($name, $operation){}
	/**
	 * @param \System\String|string $name
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public function Set($name, $value){}
	private function get_IsFixedSize(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function GetCollectionChangedSubscribers(){}
	/**
	 * @uses ClassesOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ClassesOverride::__construct_2 <br>public , args: ($items)<br>
	 * @uses ClassesOverride::__construct_3 <br>public , args: (...$items)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}