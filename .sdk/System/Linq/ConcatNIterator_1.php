<?php
namespace System\Linq;
final class ConcatNIterator_1 extends \System\Linq\ConcatIterator_1 implements
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
	private function LazyToArray(){}
	private function PreallocatingToArray(){}
	private function Reset(){}
}