<?php
namespace System\Linq;
interface IPartition_1
{

	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1[TElement]
	 */
	public function Skip($count);
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1[TElement]
	 */
	public function Take($count);
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Boolean& &$found
	 * @return \TElement
	 */
	public function TryGetElementAt($index, &$found);
	/**
	 * @param \System\Boolean& &$found
	 * @return \TElement
	 */
	public function TryGetFirst(&$found);
	/**
	 * @param \System\Boolean& &$found
	 * @return \TElement
	 */
	public function TryGetLast(&$found);
}