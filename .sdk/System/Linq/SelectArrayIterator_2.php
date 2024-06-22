<?php
namespace System\Linq;
final class SelectArrayIterator_2 extends \System\Linq\Iterator_1 implements
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
	private function Reset(){}
	/**
	 * @param \TSource $source
	 * @param \System\Func_2 $selector [generic: TSource,TResult]
	 */
	public function __construct($source, $selector){}
}