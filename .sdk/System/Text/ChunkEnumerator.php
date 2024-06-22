<?php
namespace System\Text;
final class ChunkEnumerator extends \System\ValueType
{

	/**
	 * @property
	 * @var \System\ReadOnlyMemory_1[System\Char]
	 * @since readonly
	 */
	public $Current;
	/**
	 * @return \System\Text\StringBuilder+ChunkEnumerator
	 */
	public function GetEnumerator(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public function MoveNext(){}
	private static function ChunkCount($stringBuilder){}
}