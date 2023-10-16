<?php
namespace System\Text;
/**
 */
class SpanLineEnumerator extends \System\ValueType
{
	/**
	 * @var \System\ReadOnlySpan_1[System\Char]
	 * @property
	 */
	public readonly $Current;
	/**
	 * @return \System\ReadOnlySpan_1
	 */
	public  function get_Current(){}
	/**
	 * @return \System\Text\SpanLineEnumerator
	 */
	public  function GetEnumerator(){}
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
}
