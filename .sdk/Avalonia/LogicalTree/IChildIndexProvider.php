<?php
namespace Avalonia\LogicalTree;
/**
 * @method \System\Void|void add_ChildIndexChanged($value) [modifier: public]
 * @method \System\Void|void remove_ChildIndexChanged($value) [modifier: public]
*/
interface IChildIndexProvider
{

	/**
	 * @param \Avalonia\LogicalTree\ILogical $child
	 * @return \System\Int32|int
	 */
	public function GetChildIndex($child);
	/**
	 * @param \System\Int32& &$count
	 * @return \System\Boolean|bool
	 */
	public function TryGetTotalCount(&$count);
}