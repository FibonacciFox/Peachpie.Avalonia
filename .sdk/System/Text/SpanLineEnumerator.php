<?php
namespace System\Text;
final class SpanLineEnumerator extends \System\ValueType
{
	/**
	 * @property
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @since readonly
	 */
	public $Current;
	/**
	 * @return \System\Text\SpanLineEnumerator
	 */
	public function GetEnumerator(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
}