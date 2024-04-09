<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TextDecorationCollectionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $textDecorations [generic: Avalonia\Media\TextDecoration]
	 */
	#[MethodOverride]public function __construct_2 ($textDecorations){}
}
class TextDecorationCollection extends \Avalonia\Collections\AvaloniaList_1 implements
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
	use TextDecorationCollectionOverride;
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
	 * @var \System\Action_1[Avalonia\Media\TextDecoration]
	 */
	public $Validate;
	/**
	 * @property
	 * @var \Avalonia\Media\TextDecoration
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Capacity;
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\TextDecorationCollection
	 */
	public static function Parse($s){}
	private static function GetTextDecorationLocation($s){}
	private function get_IsFixedSize(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function GetCollectionChangedSubscribers(){}
	/**
	 * @uses TextDecorationCollectionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses TextDecorationCollectionOverride::__construct_2 <br>public , args: ($textDecorations)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}