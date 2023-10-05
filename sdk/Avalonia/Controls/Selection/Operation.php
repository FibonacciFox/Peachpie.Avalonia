<?php
namespace Avalonia\Controls\Selection;
/**
 */
class Operation extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $UpdateCount;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsSourceUpdate;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $SkipLostSelection;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $AnchorIndex;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $SelectedIndex;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Controls\Selection\IndexRange]
	 * @property
	 */
	public $SelectedRanges;
	/**
	 * @var \System\Collections\Generic\List_1[Avalonia\Controls\Selection\IndexRange]
	 * @property
	 */
	public $DeselectedRanges;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[T]
	 * @property
	 */
	public $DeselectedItems;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_UpdateCount(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_UpdateCount($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSourceUpdate(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsSourceUpdate($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_SkipLostSelection(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_SkipLostSelection($value){}
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
	public  function get_SelectedIndex(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_SelectedIndex($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_SelectedRanges(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_SelectedRanges($value){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function get_DeselectedRanges(){}
	/**
	 * @param \System\Collections\Generic\List_1 $value
	 * @return \System\Void|void
	 */
	public  function set_DeselectedRanges($value){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_DeselectedItems(){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_DeselectedItems($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
