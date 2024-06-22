<?php
namespace System\Collections\Generic;
final class ValueListBuilder_1 extends \System\ValueType
{

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \T&
	 * @since readonly
	 */
	public $Item;
	/**
	 * @param \T|object $item
	 * @return \System\Void|void
	 */
	public function Append($item){}
	private function AddWithResize($item){}
	/**
	 * @return \System\ReadOnlySpan_1[T]
	 */
	public function AsSpan(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	private function Grow(){}
	/**
	 * @param \System\Span_1 $initialSpan [generic: T]
	 */
	public function __construct($initialSpan){}
}