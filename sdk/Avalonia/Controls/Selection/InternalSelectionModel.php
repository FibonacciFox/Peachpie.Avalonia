<?php
namespace Avalonia\Controls\Selection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait InternalSelectionModelMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function OnSourceReset_1($sender, $e){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function OnSourceReset_2(){}
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
	 * @return \System\Object|object
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
}
/**
 */
class InternalSelectionModel extends \Avalonia\Controls\Selection\SelectionModel_1 implements 
	\Avalonia\Controls\Selection\ISelectionModel,
	\System\ComponentModel\INotifyPropertyChanged
{
	/**
	 * @var \System\Collections\IList
	 * @property
	 */
	public $WritableSelectedItems;
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
	 * @var \System\Object
	 * @property
	 */
	public $SelectedItem;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[System\Object]
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
	 * @return \System\Collections\IList
	 */
	public  function get_WritableSelectedItems(){}
	/**
	 * @param \System\Collections\IList $value
	 * @return \System\Void|void
	 */
	public  function set_WritableSelectedItems($value){}
	/**
	 * @param \System\Collections\IEnumerable $source
	 * @param \Avalonia\Data\Optional_1 $selectedItems
	 * @return \System\Void|void
	 */
	protected  function Update($source, $selectedItems){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SyncToSelectedItems(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SyncFromSelectedItems(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SubscribeToSelectedItems(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UnsubscribeFromSelectedItems(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \Avalonia\Controls\Selection\SelectionModelSelectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSelectionChanged($sender, $e){}
	/**
	 * @uses InternalSelectionModelMethodsOverride::OnSourceReset_1 ($sender, $e)
	 * @uses InternalSelectionModelMethodsOverride::OnSourceReset_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function OnSourceReset(mixed ...$args){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnSelectedItemsCollectionChanged($sender, $e){}
	/**
	 * @param \System\Collections\IList $newItems
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Add($newItems){}
	/**
	 * @param \System\Object|object $source
	 * @param \System\Object|object $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IndexOf($source, $item){}
	/**
	 * @param \System\Collections\IList $first
	 * @param \System\Collections\Generic\IReadOnlyList_1 $second
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SequenceEqual($first, $second){}
	/**
	 * @uses InternalSelectionModelMethodsOverride::get_Source_1 ()
	 * @uses InternalSelectionModelMethodsOverride::get_Source_2 ()
	 * @uses InternalSelectionModelMethodsOverride::get_Source_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Source(mixed ...$args){}
	/**
	 * @uses InternalSelectionModelMethodsOverride::set_Source_1 ($value)
	 * @uses InternalSelectionModelMethodsOverride::set_Source_2 ($value)
	 * @uses InternalSelectionModelMethodsOverride::set_Source_3 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Source(mixed ...$args){}
	/**
	 * @uses InternalSelectionModelMethodsOverride::get_SelectedItem_1 ()
	 * @uses InternalSelectionModelMethodsOverride::get_SelectedItem_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_SelectedItem(mixed ...$args){}
	/**
	 * @uses InternalSelectionModelMethodsOverride::set_SelectedItem_1 ($value)
	 * @uses InternalSelectionModelMethodsOverride::set_SelectedItem_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_SelectedItem(mixed ...$args){}
	/**
	 * @uses InternalSelectionModelMethodsOverride::get_SelectedItems_1 ()
	 * @uses InternalSelectionModelMethodsOverride::get_SelectedItems_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_SelectedItems(mixed ...$args){}
	/**
	 * @uses InternalSelectionModelMethodsOverride::add_SelectionChanged_1 ($value)
	 * @uses InternalSelectionModelMethodsOverride::add_SelectionChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_SelectionChanged(mixed ...$args){}
	/**
	 * @uses InternalSelectionModelMethodsOverride::remove_SelectionChanged_1 ($value)
	 * @uses InternalSelectionModelMethodsOverride::remove_SelectionChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_SelectionChanged(mixed ...$args){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 * @return \System\Void|void
	 */
	public  function SelectRange($start, $end){}
}
