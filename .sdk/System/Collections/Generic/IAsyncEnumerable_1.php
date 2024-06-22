<?php
namespace System\Collections\Generic;
interface IAsyncEnumerable_1
{


	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Collections\Generic\IAsyncEnumerator_1[T]
	 */
	public function GetAsyncEnumerator($cancellationToken);
}