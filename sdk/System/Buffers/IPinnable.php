<?php
namespace System\Buffers;
/**
 */
interface IPinnable
{
	/**
	 * @param \System\Int32|int $elementIndex
	 */
	public function Pin($elementIndex);
	/**
	 */
	public function Unpin();
}
