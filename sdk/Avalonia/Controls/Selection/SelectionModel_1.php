<?php
namespace Avalonia\Controls\Selection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SelectionModel_1MethodsOverride
{
	/**
	 * @return \System\Collections\IEnumerable
	 */
	#[MethodOverride] public  function get_Source_1(){}
	/**
	 * @return \System\Collections\IEnumerable
	 */
	#[MethodOverride] private  function get_Source_2(){}
	/**
	 * @return \System\Collections\IEnumerable
	 */
	#[MethodOverride] protected  function get_Source_3(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Source_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Source_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function set_Source_3($value){}
	/**
	 * @return \Avalonia\Controls\Selection\T
	 */
	#[MethodOverride] public  function get_SelectedItem_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_SelectedItem_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_SelectedItem_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_SelectedItem_2($value){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride] public  function get_SelectedItems_1(){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride] private  function get_SelectedItems_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function add_SelectionChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function add_SelectionChanged_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function remove_SelectionChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function remove_SelectionChanged_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SelectRange_1($start, $end){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SelectRange_2($start, $end, $forceSelectedIndex, $forceAnchorIndex){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class SelectionModel_1 extends \Avalonia\Controls\Selection\SelectionNodeBase_1 implements 
	\Avalonia\Controls\Selection\ISelectionModel,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @var \System\Collections\IEnumerable
	 * @property
	 */
	public $Source;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $SingleSelect;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $SelectedIndex;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Int32]
	 * @property
	 */
	public readonly $SelectedIndexes;
	/**
	 * @var \T
	 * @property
	 */
	public $SelectedItem;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[T]
	 * @property
	 */
	public readonly $SelectedItems;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $AnchorIndex;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	protected $RangesEnabled;
	/**
	 * @uses SelectionModel_1MethodsOverride::get_Source_1 ()
	 * @uses SelectionModel_1MethodsOverride::get_Source_2 ()
	 * @uses SelectionModel_1MethodsOverride::get_Source_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Source(mixed ...$args){}
	/**
	 * @uses SelectionModel_1MethodsOverride::set_Source_1 ($value)
	 * @uses SelectionModel_1MethodsOverride::set_Source_2 ($value)
	 * @uses SelectionModel_1MethodsOverride::set_Source_3 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Source(mixed ...$args){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_SingleSelect(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_SingleSelect($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_SelectedIndex(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_SelectedIndex($value){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_SelectedIndexes(){}
	/**
	 * @uses SelectionModel_1MethodsOverride::get_SelectedItem_1 ()
	 * @uses SelectionModel_1MethodsOverride::get_SelectedItem_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_SelectedItem(mixed ...$args){}
	/**
	 * @uses SelectionModel_1MethodsOverride::set_SelectedItem_1 ($value)
	 * @uses SelectionModel_1MethodsOverride::set_SelectedItem_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_SelectedItem(mixed ...$args){}
	/**
	 * @uses SelectionModel_1MethodsOverride::get_SelectedItems_1 ()
	 * @uses SelectionModel_1MethodsOverride::get_SelectedItems_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_SelectedItems(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_AnchorIndex(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_AnchorIndex($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_IndexesChanged($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_IndexesChanged($value){}
	/**
	 * @uses SelectionModel_1MethodsOverride::add_SelectionChanged_1 ($value)
	 * @uses SelectionModel_1MethodsOverride::add_SelectionChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_SelectionChanged(mixed ...$args){}
	/**
	 * @uses SelectionModel_1MethodsOverride::remove_SelectionChanged_1 ($value)
	 * @uses SelectionModel_1MethodsOverride::remove_SelectionChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_SelectionChanged(mixed ...$args){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_LostSelection($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_LostSelection($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_SourceReset($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_SourceReset($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_PropertyChanged($value){}
	/**
	 * @param \System\ComponentModel\PropertyChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_PropertyChanged($value){}
	/**
	 * @return \Avalonia\Controls\Selection\BatchUpdateOperation
	 */
	public  function BatchUpdate(){}
	/**
	 * @return \System\Void|void
	 */
	public  function BeginBatchUpdate(){}
	/**
	 * @return \System\Void|void
	 */
	public  function EndBatchUpdate(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Boolean
	 */
	public  function IsSelected($index){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function Select($index){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function Deselect($index){}
	/**
	 * @uses SelectionModel_1MethodsOverride::SelectRange_1 ($start, $end)
	 * @uses SelectionModel_1MethodsOverride::SelectRange_2 ($start, $end, $forceSelectedIndex, $forceAnchorIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SelectRange(mixed ...$args){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @return \System\Void|void
	 */
	public  function DeselectRange($start, $end){}
	/**
	 * @return \System\Void|void
	 */
	public  function SelectAll(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\String|string $propertyName
	 * @return \System\Void|void
	 */
	protected  function RaisePropertyChanged($propertyName){}
	/**
	 * @param \System\Collections\IEnumerable $value
	 * @return \System\Void|void
	 */
	protected  function SetSource($value){}
	/**
	 * @param \System\Collections\IList $items
	 * @return \System\Void|void
	 */
	protected  function SetInitSelectedItems($items){}
	/**
	 * @param \System\Collections\Generic\List_1 $except
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetFirstSelectedIndexFromRanges($except){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetItemAt($index){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CoerceIndex($index){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CoerceRange($start, $end){}
	/**
	 * @param \Avalonia\Controls\Selection\Operation $operation
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TrimInvalidSelections($operation){}
	/**
	 * @param \Avalonia\Controls\Selection\Operation $operation
	 * @param \System\Boolean $raisePropertyChanged
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CommitOperation($operation, $raisePropertyChanged){}
}
