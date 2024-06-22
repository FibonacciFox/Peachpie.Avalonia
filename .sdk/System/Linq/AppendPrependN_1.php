<?php
namespace System\Linq;
final class AppendPrependN_1 extends \System\Linq\AppendPrependIterator_1 implements
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
	private function LazyToArray(){}
	private function Reset(){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $source [generic: TSource]
	 * @param \System\Linq\SingleLinkedNode_1 $prepended [generic: TSource]
	 * @param \System\Linq\SingleLinkedNode_1 $appended [generic: TSource]
	 * @param \System\Int32|int $prependCount
	 * @param \System\Int32|int $appendCount
	 */
	public function __construct($source, $prepended, $appended, $prependCount, $appendCount){}
}