<?php
namespace System\Text;
/**
 */
class ChunkEnumerator extends \System\ValueType
{
	/**
	 * @var \System\ReadOnlyMemory_1[System\Char]
	 * @property
	 */
	public readonly $Current;
	/**
	 * @return \System\Text\ChunkEnumerator
	 */
	public  function GetEnumerator(){}
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @return \System\ReadOnlyMemory_1
	 */
	public  function get_Current(){}
	/**
	 * @param \System\Text\StringBuilder $stringBuilder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ChunkCount($stringBuilder){}
}
