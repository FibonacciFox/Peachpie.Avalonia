<?php
namespace Avalonia\Controls\Selection;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SelectionModel_1Override {
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerable
	 */
	#[MethodOverride]public function get_Source_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerable
	 */
	#[MethodOverride]private function get_Source_2 (){}
	/**
	 * @deprecated
	 * @param \System\Collections\IEnumerable $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function set_Source_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Collections\IEnumerable $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_Source_2 ($value){}
	/**
	 * @deprecated
	 * @return \T|object
	 */
	#[MethodOverride]public function get_SelectedItem_1 (){}
	/**
	 * @deprecated
	 * @return \System\Object|object
	 */
	#[MethodOverride]private function get_SelectedItem_2 (){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function set_SelectedItem_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function set_SelectedItem_2 ($value){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride]public function get_SelectedItems_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride]private function get_SelectedItems_2 (){}
	/**
	 * @deprecated
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\Selection\SelectionModelSelectionChangedEventArgs_1[T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function add_SelectionChanged_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\Selection\SelectionModelSelectionChangedEventArgs]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function add_SelectionChanged_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\Selection\SelectionModelSelectionChangedEventArgs_1[T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function remove_SelectionChanged_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\Selection\SelectionModelSelectionChangedEventArgs]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function remove_SelectionChanged_2 ($value){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SelectRange_1 ($start, $end){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @param \System\Boolean|bool $forceSelectedIndex
	 * @param \System\Boolean|bool $forceAnchorIndex
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function SelectRange_2 ($start, $end, $forceSelectedIndex, $forceAnchorIndex){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: T]
	 */
	#[MethodOverride]public function __construct_2 ($source){}
}
class SelectionModel_1 extends \Avalonia\Controls\Selection\SelectionNodeBase_1 implements
	\Avalonia\Controls\Selection\ISelectionModel,
	\System\ComponentModel\INotifyPropertyChanged
{
	use SelectionModel_1Override;

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
	 * @var \T|object
	 */
	public $SelectedItem;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[T]
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
	 * @uses SelectionModel_1Override::get_Source_1 <br>public , args: ()<br>
	 * @uses SelectionModel_1Override::get_Source_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\IEnumerable|mixed|\override
	 */
	#[MethodOverridePublic]function get_Source (){}
	/**
	 * @uses SelectionModel_1Override::set_Source_1 <br>public , args: ($value)<br>
	 * @uses SelectionModel_1Override::set_Source_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function set_Source (\override ...$args){}
	/**
	 * @uses SelectionModel_1Override::get_SelectedItem_1 <br>public , args: ()<br>
	 * @uses SelectionModel_1Override::get_SelectedItem_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\System\Object|object|mixed|\override
	 */
	#[MethodOverridePublic]function get_SelectedItem (){}
	/**
	 * @uses SelectionModel_1Override::set_SelectedItem_1 <br>public , args: ($value)<br>
	 * @uses SelectionModel_1Override::set_SelectedItem_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function set_SelectedItem (\override ...$args){}
	/**
	 * @uses SelectionModel_1Override::get_SelectedItems_1 <br>public , args: ()<br>
	 * @uses SelectionModel_1Override::get_SelectedItems_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IReadOnlyList_1|mixed|\override
	 */
	#[MethodOverridePublic]function get_SelectedItems (){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\Selection\SelectionModelIndexesChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_IndexesChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Controls\Selection\SelectionModelIndexesChangedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_IndexesChanged($value){}
	/**
	 * @uses SelectionModel_1Override::add_SelectionChanged_1 <br>public , args: ($value)<br>
	 * @uses SelectionModel_1Override::add_SelectionChanged_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function add_SelectionChanged (\override ...$args){}
	/**
	 * @uses SelectionModel_1Override::remove_SelectionChanged_1 <br>public , args: ($value)<br>
	 * @uses SelectionModel_1Override::remove_SelectionChanged_2 <br>private , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function remove_SelectionChanged (\override ...$args){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_LostSelection($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_LostSelection($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_SourceReset($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_SourceReset($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public function add_PropertyChanged($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_PropertyChanged($value){}
	/**
	 * @return \Avalonia\Controls\Selection\SelectionModel_1+BatchUpdateOperation[T]
	 */
	public function BatchUpdate(){}
	/**
	 * @return \System\Void|void
	 */
	public function BeginBatchUpdate(){}
	/**
	 * @return \System\Void|void
	 */
	public function EndBatchUpdate(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Boolean|bool
	 */
	public function IsSelected($index){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function Select($index){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function Deselect($index){}
	/**
	 * @uses SelectionModel_1Override::SelectRange_1 <br>public , args: ($start, $end)<br>
	 * @uses SelectionModel_1Override::SelectRange_2 <br>private , args: ($start, $end, $forceSelectedIndex, $forceAnchorIndex)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function SelectRange (\override ...$args){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @return \System\Void|void
	 */
	public function DeselectRange($start, $end){}
	/**
	 * @return \System\Void|void
	 */
	public function SelectAll(){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \System\String|string $propertyName
	 * @return \System\Void|void
	 */
	protected function RaisePropertyChanged($propertyName){}
	/**
	 * @param \System\Collections\IEnumerable $value
	 * @return \System\Void|void
	 */
	protected function SetSource($value){}
	/**
	 * @param \System\Collections\IList $items
	 * @return \System\Void|void
	 */
	protected function SetInitSelectedItems($items){}
	private function GetFirstSelectedIndexFromRanges($except){}
	private function GetItemAt($index){}
	private function CoerceIndex($index){}
	private function CoerceRange($start, $end){}
	private function TrimInvalidSelections($operation){}
	private function CommitOperation($operation, $raisePropertyChanged){}
	/**
	 * @uses SelectionModel_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses SelectionModel_1Override::__construct_2 <br>public , args: ($source)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}