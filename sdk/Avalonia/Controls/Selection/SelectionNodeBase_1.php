<?php
namespace Avalonia\Controls\Selection;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class SelectionNodeBase_1 extends \System\Object
{
	/**
	 * @var \System\Collections\IEnumerable
	 * @property
	 */
	protected $Source;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	protected $RangesEnabled;
	/**
	 * @return \System\Collections\IEnumerable
	 */
	protected  function get_Source(){}
	/**
	 * @param \System\Collections\IEnumerable $value
	 * @return \System\Void|void
	 */
	protected  function set_Source($value){}
	/**
	 * @return \Avalonia\Controls\ItemsSourceView_1
	 */
	protected  function get_ItemsView(){}
	/**
	 * @param \Avalonia\Controls\ItemsSourceView_1 $value
	 * @return \System\Void|void
	 */
	protected  function set_ItemsView($value){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_RangesEnabled(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_RangesEnabled($value){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	protected  function get_Ranges(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function OnSourceCollectionChangeStarted(){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function OnSourceCollectionChanged($e){}
	/**
	 * @return \System\Void|void
	 */
	protected  function OnSourceCollectionChangeFinished(){}
	/**
	 * @param \System\Int32|int $shiftIndex
	 * @param \System\Int32|int $shiftDelta
	 * @return \System\Void|void
	 */
	protected  function OnIndexesChanged($shiftIndex, $shiftDelta){}
	/**
	 * @return \System\Void|void
	 */
	protected  function OnSourceReset(){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @param \System\Collections\Generic\IReadOnlyList_1 $deselectedItems
	 * @return \System\Void|void
	 */
	protected  function OnSelectionRemoved($index, $count, $deselectedItems){}
	/**
	 * @param \System\Int32|int $begin
	 * @param \System\Int32|int $end
	 * @return \System\Int32|int
	 */
	protected  function CommitSelect($begin, $end){}
	/**
	 * @param \System\Int32|int $begin
	 * @param \System\Int32|int $end
	 * @return \System\Int32|int
	 */
	protected  function CommitDeselect($begin, $end){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\IList $items
	 * @return \Avalonia\Controls\Selection\CollectionChangeState
	 */
	protected  function OnItemsAdded($index, $items){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\IList $items
	 * @return \Avalonia\Controls\Selection\CollectionChangeState
	 */
	protected  function OnItemsRemoved($index, $items){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Boolean
	 */
	protected  function IsValidCollectionChange($e){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
