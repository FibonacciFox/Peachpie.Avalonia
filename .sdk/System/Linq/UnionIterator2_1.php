<?php
namespace System\Linq;
final class UnionIterator2_1 extends \System\Linq\UnionIterator_1 implements
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
	 * @var \System\Collections\Generic\IEqualityComparer_1[TSource]
	 */
	protected $_comparer;
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
	private function Reset(){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $first [generic: TSource]
	 * @param \System\Collections\Generic\IEnumerable_1 $second [generic: TSource]
	 * @param \System\Collections\Generic\IEqualityComparer_1 $comparer [generic: TSource]
	 */
	public function __construct($first, $second, $comparer){}
}