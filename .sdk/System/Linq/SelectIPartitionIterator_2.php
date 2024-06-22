<?php
namespace System\Linq;
final class SelectIPartitionIterator_2 extends \System\Linq\Iterator_1 implements
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
	 * @var \TResult
	 */
	protected $_current;
	/**
	 * @property
	 * @var \TResult
	 * @since readonly
	 */
	public $Current;
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1[TResult]
	 */
	public function Skip($count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1[TResult]
	 */
	public function Take($count){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Boolean& &$found
	 * @return \TResult
	 */
	public function TryGetElementAt($index, &$found){}
	/**
	 * @param \System\Boolean& &$found
	 * @return \TResult
	 */
	public function TryGetFirst(&$found){}
	/**
	 * @param \System\Boolean& &$found
	 * @return \TResult
	 */
	public function TryGetLast(&$found){}
	private function LazyToArray(){}
	private function PreallocatingToArray($count){}
	/**
	 * @return \TResult[]
	 */
	public function ToArray(){}
	/**
	 * @return \System\Collections\Generic\List_1[TResult]
	 */
	public function ToList(){}
	/**
	 * @param \System\Boolean|bool $onlyIfCheap
	 * @return \System\Int32|int
	 */
	public function GetCount($onlyIfCheap){}
	private function Reset(){}
	/**
	 * @param \System\Linq\IPartition_1 $source [generic: TSource]
	 * @param \System\Func_2 $selector [generic: TSource,TResult]
	 */
	public function __construct($source, $selector){}
}