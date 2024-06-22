<?php
namespace System\Linq;
class AppendPrependIterator_1 extends \System\Linq\Iterator_1 implements
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator,
	\System\Linq\IIListProvider_1
{

	/**
	 * @field
	 * @since readonly
	 * @var \System\Collections\Generic\IEnumerable_1[TSource]
	 */
	protected $_source;
	/**
	 * @field
	 * @var \System\Collections\Generic\IEnumerator_1[TSource]
	 */
	protected $_enumerator;
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
	 * @return \TSource[]
	 */
	abstract public function ToArray();
	/**
	 * @return \System\Collections\Generic\List_1[TSource]
	 */
	abstract public function ToList();
	/**
	 * @param \System\Boolean|bool $onlyIfCheap
	 * @return \System\Int32|int
	 */
	abstract public function GetCount($onlyIfCheap);
	/**
	 * @return \System\Void|void
	 */
	protected function GetSourceEnumerator(){}
	/**
	 * @param \TSource $item
	 * @return \System\Linq\Enumerable+AppendPrependIterator_1[TSource]
	 */
	abstract public function Append($item);
	/**
	 * @param \TSource $item
	 * @return \System\Linq\Enumerable+AppendPrependIterator_1[TSource]
	 */
	abstract public function Prepend($item);
	/**
	 * @return \System\Boolean|bool
	 */
	protected function LoadFromEnumerator(){}
	private function Reset(){}
}