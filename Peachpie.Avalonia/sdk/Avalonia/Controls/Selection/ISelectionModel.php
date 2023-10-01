<?php
namespace Avalonia\Controls\Selection;
/**
 */
interface ISelectionModel
{
	/**
	 */
	public function get_Source();
	/**
	 * @param \System\Collections\IEnumerable $value
	 */
	public function set_Source($value);
	/**
	 */
	public function get_SingleSelect();
	/**
	 * @param \System\Boolean $value
	 */
	public function set_SingleSelect($value);
	/**
	 */
	public function get_SelectedIndex();
	/**
	 * @param \System\Int32|int $value
	 */
	public function set_SelectedIndex($value);
	/**
	 */
	public function get_SelectedIndexes();
	/**
	 */
	public function get_SelectedItem();
	/**
	 * @param \System\Object|object $value
	 */
	public function set_SelectedItem($value);
	/**
	 */
	public function get_SelectedItems();
	/**
	 */
	public function get_AnchorIndex();
	/**
	 * @param \System\Int32|int $value
	 */
	public function set_AnchorIndex($value);
	/**
	 */
	public function get_Count();
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_IndexesChanged($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_IndexesChanged($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_SelectionChanged($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_SelectionChanged($value);
	/**
	 * @param \System\EventHandler $value
	 */
	public function add_LostSelection($value);
	/**
	 * @param \System\EventHandler $value
	 */
	public function remove_LostSelection($value);
	/**
	 * @param \System\EventHandler $value
	 */
	public function add_SourceReset($value);
	/**
	 * @param \System\EventHandler $value
	 */
	public function remove_SourceReset($value);
	/**
	 */
	public function BeginBatchUpdate();
	/**
	 */
	public function EndBatchUpdate();
	/**
	 * @param \System\Int32|int $index
	 */
	public function IsSelected($index);
	/**
	 * @param \System\Int32|int $index
	 */
	public function Select($index);
	/**
	 * @param \System\Int32|int $index
	 */
	public function Deselect($index);
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 */
	public function SelectRange($start, $end);
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 */
	public function DeselectRange($start, $end);
	/**
	 */
	public function SelectAll();
	/**
	 */
	public function Clear();
}
