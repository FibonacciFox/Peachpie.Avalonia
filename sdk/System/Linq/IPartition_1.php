<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IPartition_1
{
	/**
	 * @param \System\Int32|int $count
	 */
	public function Skip($count);
	/**
	 * @param \System\Int32|int $count
	 */
	public function Take($count);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Boolean& $found
	 */
	public function TryGetElementAt($index, $found);
	/**
	 * @param \System\Boolean& $found
	 */
	public function TryGetFirst($found);
	/**
	 * @param \System\Boolean& $found
	 */
	public function TryGetLast($found);
}
