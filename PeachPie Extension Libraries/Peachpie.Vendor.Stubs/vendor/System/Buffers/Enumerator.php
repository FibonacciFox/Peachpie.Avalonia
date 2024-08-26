<?php
namespace System\Buffers;
final class Enumerator extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\ReadOnlyMemory_1[T]
	 * @since readonly
	 */
	public $Current;
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	/**
	 * @param \System\Buffers\ReadOnlySequence_1 &$sequence [generic: T]
	 */
	public function __construct(&$sequence){}
}