<?php
namespace System\Text;
final class SpanRuneEnumerator extends \System\ValueType
{

	/**
	 * @property
	 * @var \System\Text\Rune
	 * @since readonly
	 */
	public $Current;
	/**
	 * @return \System\Text\SpanRuneEnumerator
	 */
	public function GetEnumerator(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
}