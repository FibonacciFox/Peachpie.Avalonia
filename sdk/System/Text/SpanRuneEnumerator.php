<?php
namespace System\Text;
/**
 */
class SpanRuneEnumerator extends \System\ValueType
{
	/**
	 * @var \System\Text\Rune
	 * @property
	 */
	public readonly $Current;
	/**
	 * @return \System\Text\Rune
	 */
	public  function get_Current(){}
	/**
	 * @return \System\Text\SpanRuneEnumerator
	 */
	public  function GetEnumerator(){}
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
}
