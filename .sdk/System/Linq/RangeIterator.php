<?php
namespace System\Linq;
final class RangeIterator extends \System\Linq\Iterator_1 implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator,
	\System\Linq\IPartition_1,
	\System\Linq\IIListProvider_1
{

	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_state;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_current;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Current;
	/**
	 * @return \System\Int32[]|array
	 */
	public function ToArray(){}
	/**
	 * @return \System\Collections\Generic\List_1[System\Int32]
	 */
	public function ToList(){}
	/**
	 * @param \System\Boolean|bool $onlyIfCheap
	 * @return \System\Int32|int
	 */
	public function GetCount($onlyIfCheap){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1[System\Int32]
	 */
	public function Skip($count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1[System\Int32]
	 */
	public function Take($count){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Boolean& &$found
	 * @return \System\Int32|int
	 */
	public function TryGetElementAt($index, &$found){}
	/**
	 * @param \System\Boolean& &$found
	 * @return \System\Int32|int
	 */
	public function TryGetFirst(&$found){}
	/**
	 * @param \System\Boolean& &$found
	 * @return \System\Int32|int
	 */
	public function TryGetLast(&$found){}
	private function Reset(){}
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $count
	 */
	public function __construct($start, $count){}
}