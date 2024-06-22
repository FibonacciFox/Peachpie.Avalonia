<?php
namespace System\Buffers;
interface IBufferWriter_1
{


	/**
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public function Advance($count);
	/**
	 * @param \System\Int32|int $sizeHint
	 * @return \System\Memory_1[T]
	 */
	public function GetMemory($sizeHint);
	/**
	 * @param \System\Int32|int $sizeHint
	 * @return \System\Span_1[T]
	 */
	public function GetSpan($sizeHint);
}