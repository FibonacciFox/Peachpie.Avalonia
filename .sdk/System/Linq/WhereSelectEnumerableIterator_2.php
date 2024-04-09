<?php
namespace System\Linq;
final class WhereSelectEnumerableIterator_2 extends \System\Linq\Iterator_1 implements
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
	 * @param \System\Boolean|bool $onlyIfCheap
	 * @return \System\Int32|int
	 */
	public function GetCount($onlyIfCheap){}
	/**
	 * @return \TResult[]
	 */
	public function ToArray(){}
	/**
	 * @return \System\Collections\Generic\List_1[TResult]
	 */
	public function ToList(){}
	private function Reset(){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Func_2 $predicate [generic: TSource,System\Boolean]
	 * @param \System\Func_2 $selector [generic: TSource,TResult]
	 */
	public function __construct($source, $predicate, $selector){}
}