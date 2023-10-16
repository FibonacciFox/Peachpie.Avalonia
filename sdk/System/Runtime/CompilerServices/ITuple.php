<?php
namespace System\Runtime\CompilerServices;
/**
 */
interface ITuple
{
	/**
	 */
	public function get_Length();
	/**
	 * @param \System\Int32|int $index
	 */
	public function get_Item($index);
}
