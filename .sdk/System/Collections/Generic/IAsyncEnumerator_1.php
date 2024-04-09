<?php
namespace System\Collections\Generic;
interface IAsyncEnumerator_1
{

	/**
	 * @return \System\Threading\Tasks\ValueTask_1[System\Boolean]
	 */
	public function MoveNextAsync();
}