<?php
namespace System\Buffers;
interface IPinnable
{

	/**
	 * @param \System\Int32|int $elementIndex
	 * @return \System\Buffers\MemoryHandle
	 */
	public function Pin($elementIndex);
	/**
	 * @return \System\Void|void
	 */
	public function Unpin();
}