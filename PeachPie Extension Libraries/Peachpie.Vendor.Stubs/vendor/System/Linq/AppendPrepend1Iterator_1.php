<?php
namespace System\Linq;
final class AppendPrepend1Iterator_1 extends \System\Linq\AppendPrependIterator_1 implements
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
	 * @param \TSource $item
	 * @param \System\Boolean|bool $appending
	 */
	public function __construct($source, $item, $appending){}
}