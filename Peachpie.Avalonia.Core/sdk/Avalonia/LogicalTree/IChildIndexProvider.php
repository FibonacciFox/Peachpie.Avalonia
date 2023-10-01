<?php
namespace Avalonia\LogicalTree;
/**
 */
interface IChildIndexProvider
{
	/**
	 * @param \Avalonia\LogicalTree\ILogical $child
	 */
	public function GetChildIndex($child);
	/**
	 * @param \System\Int32& $count
	 */
	public function TryGetTotalCount($count);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function add_ChildIndexChanged($value);
	/**
	 * @param \System\EventHandler_1 $value
	 */
	public function remove_ChildIndexChanged($value);
}
