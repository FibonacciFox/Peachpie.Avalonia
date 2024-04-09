<?php
namespace System\Buffers;
class ReadOnlySequence extends \System\Object
{

	/**
	 * @param \System\Int32|int $endIndex
	 * @return \System\Int32|int
	 */
	public static function ArrayToSequenceEnd($endIndex){}
	/**
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	public static function MemoryManagerToSequenceStart($startIndex){}
	/**
	 * @param \System\Int32|int $startIndex
	 * @return \System\Int32|int
	 */
	public static function StringToSequenceStart($startIndex){}
	/**
	 * @param \System\Int32|int $endIndex
	 * @return \System\Int32|int
	 */
	public static function StringToSequenceEnd($endIndex){}
}