<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StylesOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $index
	 * @return \Avalonia\Styling\IStyle
	 */
	#[MethodOverride]private function get_Item_1 ($index){}
	/**
	 * @deprecated
	 * @return \Avalonia\Collections\AvaloniaList_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_3 (){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Controls\IResourceHost $owner
	 */
	#[MethodOverride]public function __construct_2 ($owner){}
}
class Styles extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Collections\IAvaloniaList_1,
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\Avalonia\Collections\IAvaloniaReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Specialized\INotifyCollectionChanged,
	\Avalonia\Styling\IStyle,
	\Avalonia\Controls\IResourceNode,
	\Avalonia\Controls\IResourceProvider
{
	use StylesOverride;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \Avalonia\Controls\IResourceHost
	 */
	public $Owner;
	/**
	 * @property
	 * @var \Avalonia\Controls\IResourceDictionary
	 */
	public $Resources;
	/**
	 * @property dublicate
	 * @var \Avalonia\Styling\IStyle|\System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
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
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_OwnerChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_OwnerChanged($value){}
	private function get_IsReadOnly(){}
	private function get_HasResources(){}
	private function get_Children(){}
	/**
	 * @param \System\Object|object $key
	 * @param \Avalonia\Styling\ThemeVariant $theme
	 * @param \System\Object& &$value
	 * @return \System\Boolean|bool
	 */
	public function TryGetResource($key, $theme, &$value){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: Avalonia\Styling\IStyle]
	 * @return \System\Void|void
	 */
	public function AddRange($items){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: Avalonia\Styling\IStyle]
	 * @return \System\Void|void
	 */
	public function InsertRange($index, $items){}
	/**
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	public function Move($oldIndex, $newIndex){}
	/**
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $count
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	public function MoveRange($oldIndex, $count, $newIndex){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: Avalonia\Styling\IStyle]
	 * @return \System\Void|void
	 */
	public function RemoveAll($items){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public function RemoveRange($index, $count){}
	/**
	 * @param \Avalonia\Styling\IStyle $item
	 * @return \System\Int32|int
	 */
	public function IndexOf($item){}
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Styling\IStyle $item
	 * @return \System\Void|void
	 */
	public function Insert($index, $item){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function RemoveAt($index){}
	/**
	 * @param \Avalonia\Styling\IStyle $item
	 * @return \System\Void|void
	 */
	public function Add($item){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \Avalonia\Styling\IStyle $item
	 * @return \System\Boolean|bool
	 */
	public function Contains($item){}
	/**
	 * @param \Avalonia\Styling\IStyle $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $arrayIndex){}
	/**
	 * @param \Avalonia\Styling\IStyle $item
	 * @return \System\Boolean|bool
	 */
	public function Remove($item){}
	/**
	 * @uses StylesOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses StylesOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses StylesOverride::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Collections\AvaloniaList_1|\System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	private function AddOwner($owner){}
	private function RemoveOwner($owner){}
	/**
	 * @param \Avalonia\StyledElement $target
	 * @param \System\Object|object $host
	 * @return \Avalonia\Styling\SelectorMatchResult
	 */
	protected function TryAttach($target, $host){}
	private static function ToReadOnlyList($list){}
	private static function InternalAdd($items, $owner){}
	private static function InternalRemove($items, $owner){}
	private function OnCollectionChanged($sender, $e){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses StylesOverride::__construct_1 <br>public , args: ()<br>
	 * @uses StylesOverride::__construct_2 <br>public , args: ($owner)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}