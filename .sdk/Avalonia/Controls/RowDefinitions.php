<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait RowDefinitionsOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $s
	 */
	#[MethodOverride]public function __construct_2 ($s){}
}
class RowDefinitions extends \Avalonia\Controls\DefinitionList_1 implements
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
	use RowDefinitionsOverride;

	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	protected $IsDirty;
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
	 * @var \System\Action_1[Avalonia\Controls\RowDefinition]
	 */
	public $Validate;
	/**
	 * @property
	 * @var \Avalonia\Controls\RowDefinition
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Capacity;
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Controls\RowDefinitions
	 */
	public static function Parse($s){}
	private function get_IsFixedSize(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function GetCollectionChangedSubscribers(){}
	/**
	 * @uses RowDefinitionsOverride::__construct_1 <br>public , args: ()<br>
	 * @uses RowDefinitionsOverride::__construct_2 <br>public , args: ($s)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}