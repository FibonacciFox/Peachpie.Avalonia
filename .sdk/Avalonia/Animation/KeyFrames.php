<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait KeyFramesOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items [generic: Avalonia\Animation\KeyFrame]
	 */
	#[MethodOverride]public function __construct_2 ($items){}
}
final class KeyFrames extends \Avalonia\Collections\AvaloniaList_1 implements
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
	\Avalonia\Diagnostics\INotifyCollectionChangedDebug
{
	use KeyFramesOverride;

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
	 * @var \System\Action_1[Avalonia\Animation\KeyFrame]
	 */
	public $Validate;
	/**
	 * @property
	 * @var \Avalonia\Animation\KeyFrame
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Capacity;
	private function get_IsFixedSize(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function GetCollectionChangedSubscribers(){}
	/**
	 * @uses KeyFramesOverride::__construct_1 <br>public , args: ()<br>
	 * @uses KeyFramesOverride::__construct_2 <br>public , args: ($items)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}