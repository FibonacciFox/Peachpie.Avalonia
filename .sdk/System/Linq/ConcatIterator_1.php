<?php
namespace System\Linq;
class ConcatIterator_1 extends \System\Linq\Iterator_1 implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator,
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
	 * @param \System\Boolean|bool $onlyIfCheap
	 * @return \System\Int32|int
	 */
	abstract public function GetCount($onlyIfCheap);
	/**
	 * @return \TSource[]
	 */
	abstract public function ToArray();
	/**
	 * @return \System\Collections\Generic\List_1[TSource]
	 */
	public function ToList(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Collections\Generic\IEnumerable_1[TSource]
	 */
	abstract protected function GetEnumerable($index);
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $next [generic: TSource]
	 * @return \System\Linq\Enumerable+ConcatIterator_1[TSource]
	 */
	abstract protected function Concat($next);
	private function Reset(){}
}