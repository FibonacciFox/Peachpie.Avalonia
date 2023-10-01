<?php
namespace Avalonia\Controls\Utils;
/**
 */
interface ISelectionAdapter
{
	/**
	 */
	public function get_SelectedItem();
	/**
	 * @param \System\Object|object $value
	 */
	public function set_SelectedItem($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_SelectionChanged($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_SelectionChanged($value);
	/**
	 */
	public function get_ItemsSource();
	/**
	 * @param \System\Collections\IEnumerable $value
	 */
	public function set_ItemsSource($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_Commit($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_Commit($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_Cancel($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_Cancel($value);
	/**
	 * @param \Avalonia\Input\KeyEventArgs $e
	 */
	public function HandleKeyDown($e);
}
