<?php
namespace System\Linq;
final class ListPartition_1 extends \System\Linq\Iterator_1 implements
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
	 * @var \TSource
	 */
	protected $_current;
	/**
	 * @property
	 * @var \TSource
	 * @since readonly
	 */
	public $Current;
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1[TSource]
	 */
	public function Skip($count){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\IPartition_1[TSource]
	 */
	public function Take($count){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Boolean& &$found
	 * @return \TSource
	 */
	public function TryGetElementAt($index, &$found){}
	/**
	 * @param \System\Boolean& &$found
	 * @return \TSource
	 */
	public function TryGetFirst(&$found){}
	/**
	 * @param \System\Boolean& &$found
	 * @return \TSource
	 */
	public function TryGetLast(&$found){}
	/**
	 * @return \TSource[]
	 */
	public function ToArray(){}
	/**
	 * @return \System\Collections\Generic\List_1[TSource]
	 */
	public function ToList(){}
	/**
	 * @param \System\Boolean|bool $onlyIfCheap
	 * @return \System\Int32|int
	 */
	public function GetCount($onlyIfCheap){}
	private function Reset(){}
	/**
	 * @param \System\Collections\Generic\IList_1 $source [generic: TSource]
	 * @param \System\Int32|int $minIndexInclusive
	 * @param \System\Int32|int $maxIndexInclusive
	 */
	public function __construct($source, $minIndexInclusive, $maxIndexInclusive){}
}